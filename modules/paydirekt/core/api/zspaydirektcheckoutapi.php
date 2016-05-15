<?php

/**
 *
 * Paydirekt Api class for work with order ckeckout.
 * Generate and get access token, create checkout for sandbox.
 *
 * Class zsPaydirektCheckoutApi
 */
class zsPaydirektCheckoutApi
{
    /**
     * Information about the last transfer
     *
     * @var mixed
     */
    protected $_lastResponseInfo;

    /**
     * Information about the last response
     *
     * @var mixed
     */
    protected $_lastResponse;

    /**
     * Status codes of response
     *
     * @var String
     */
    protected $_sLastHttpCode;

    /**
     * API Key
     *
     * @var String
     */
    protected $_sApiKey;

    /**
     * API Secret
     *
     * @var String
     */
    protected $_sApiSecret;

    /**
     * Access Token
     *
     * @var String
     */
    protected $_sAccessToken;

    /**
     * Expired Access Token
     *
     * @var String
     */
    protected $_sAccessTokenExpire;

    /**
     * Paydirekt sandbox API url.
     *
     * @var string
     */
    protected $_sPaydirektSandboxApiUrl = 'https://api.sandbox.paydirekt.de';

    const REQUEST_FAILED = 'REQUEST_FAILED';

    /**
     * Set paydirekt keys for next authentication
     * @param $sApiKey
     * @param $sApiSecret
     */
    public function setKeys($sApiKey, $sApiSecret)
    {
        $this->_sApiKey = $sApiKey;
        $this->_sApiSecret = $sApiSecret;
    }

    /**
     * Returns existing access token or requests new one
     *
     * @return null|string
     * @throws Exception
     */
    public function getAccesToken()
    {
        try {
            if (!isset($this->_sAcessToken) || !isset($this->_sAccessTokenExpire) || $this->_sAccessTokenExpire > time()) {
                $currentTime = time();
                $requestId = $this->createRequestId();
                $randomNonce = $this->createRandomNonce();
                $authCode = $this->createAuthCode($requestId, $currentTime, $randomNonce);

                $headers = array(
                    'X-Auth-Key: ' . $this->_sApiKey,
                    'X-Auth-Code: ' . $authCode,
                    'X-Request-ID: ' . $requestId,
                    'X-Date: ' . gmdate('D, d M Y H:i:s', $currentTime) . ' GMT',
                    'Content-Type: application/hal+json;charset=utf-8',
                    'Accept: application/hal+json'
                );

                $body = array(
                    'grantType' => 'api_key',
                    'randomNonce' => $randomNonce
                );

                $this->sendRequest('post', $this->_sPaydirektSandboxApiUrl . '/api/merchantintegration/v1/token/obtain', $headers, json_encode($body));

                if ($this->_sLastHttpCode == 200) {
                    $parsedResponse = json_decode($this->_lastResponse, true);
                    $this->_sAccessToken = $parsedResponse['access_token'];
                    $this->_sAccessTokenExpire = $currentTime + $parsedResponse['expires_in'];
                } else {
                    $parsedResponse = @json_decode($this->_lastResponse, true);
                    $exceptionMessage = isset($parsedResponse['messages'][0]['code']) ? $parsedResponse['messages'][0]['code'] : self::REQUEST_FAILED;
                    throw new Exception($exceptionMessage);
                }
            }

            return $this->_sAccessToken;

        } catch (Exception $e) {
            $this->_sAccessToken = null;
            $this->_sAccessTokenExpire = null;
            throw $e;
        }
    }

    /**
     * Creates new checkout
     *
     * @param $aRequsetData
     * @return mixed
     * @throws Exception
     */
    public function createCheckout($aRequsetData)
    {
        try {
            $headers = array(
                'Authorization: Bearer ' . $this->getAccesToken(),
                'Content-Type: application/hal+json;charset=utf-8',
                'Accept: application/hal+json'
            );
            $this->sendRequest('post', $this->_sPaydirektSandboxApiUrl . '/api/checkout/v1/checkouts', $headers, json_encode($aRequsetData));

            if ($this->_sLastHttpCode == 201) {
                $parsedResponse = json_decode($this->_lastResponse, true);
               // var_dump($this->getCheckout($parsedResponse['checkoutId']));
               // die();
                $approveLink = $parsedResponse['_links']['approve']['href'];
            } else {
                $parsedResponse = @json_decode($this->_lastResponse, true);
                $exceptionMessage = isset($parsedResponse['messages'][0]['code']) ? $parsedResponse['messages'][0]['code'] : self::REQUEST_FAILED;
                throw new Exception($exceptionMessage);
            }

            return $approveLink;

        } catch (Exception $e) {
            throw $e;
        }

    }
    /**
     * Gets information about checkout
     *
     * @param $checkoutId
     * @return mixed
     * @throws Exception
     */
    public function getCheckout($checkoutId) {
        try {
            $headers = array(
                'Authorization: Bearer ' . $this->getAccesToken(),
                'Accept: application/hal+json'
            );

            $this->sendRequest('get', $this->_sPaydirektSandboxApiUrl . '/api/checkout/v1/checkouts/' . $checkoutId, $headers, null);

            if ($this->_sLastHttpCode == 200) {
                $parsedResponse = json_decode($this->_lastResponse, true);
            } else {
                $parsedResponse = @json_decode($this->_lastResponse, true);
                $exceptionMessage = isset($parsedResponse['messages'][0]['code']) ? $parsedResponse['messages'][0]['code'] : self::REQUEST_FAILED;
                throw new Exception($exceptionMessage);
            }

            return $parsedResponse;

        } catch (Exception $e) {
            throw $e;
        }
    }

    /**
     * Returns last response from API
     *
     * @return mixed
     */
    public function getLastResponse()
    {
        return $this->_lastResponse;
    }

    /**
     * Returns information about last response from API
     *
     * @return mixed
     */
    public function getLastResponseInfo()
    {
        return $this->_lastResponseInfo;
    }

    /**
     * Sends request to API
     *
     * @param $type
     * @param $url
     * @param array $headers
     * @param null $body
     */
    private function sendRequest($type, $url, array $headers, $body = null)
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLINFO_HEADER_OUT, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        switch (strtolower($type)) {
            case 'get':
                break;
            case 'post':
                curl_setopt($ch, CURLOPT_POST, 1);
                if ($body) {
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
                }
                break;
        }

        $this->_lastResponse = curl_exec($ch);
        $this->_lastResponseInfo = curl_getinfo($ch);

        curl_close($ch);

        $this->_sLastHttpCode = $this->_lastResponseInfo['http_code'];
    }

    /**
     * Creates Request-ID (header X-Request-ID), UUID Type 4
     *
     * @return string
     */
    private function createRequestId()
    {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
            mt_rand( 0, 0xffff ),
            mt_rand( 0, 0x0fff ) | 0x4000,
            mt_rand( 0, 0x3fff ) | 0x8000,
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

    /**
     * Creates Base64Url Encoding random value, 64 characters
     *
     * @return string
     */
    private function createRandomNonce()
    {
        $length = 64;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    /**
     * Creates signature (header X-Auth-Code)
     *
     * @param $requestId
     * @param $currentTime
     * @param $randomNonce
     * @return string
     */
    private function createAuthCode($requestId, $currentTime, $randomNonce)
    {
        $z = implode(':', array($requestId, gmdate('YmdHis', $currentTime), $this->_sApiKey, $randomNonce));

        return $this->encodeBase64Url(hash_hmac("sha256", $z, $this->decodeBase64Url($this->_sApiSecret), true));
    }


    /**
     * Base64Url encoding function
     *
     * @param string $data
     * @return string
     */
    private function encodeBase64Url($data)
    {
        return str_replace(['+', '/'], ['-', '_'], base64_encode($data));
    }

    /**
     * Base64Url decoding function
     *
     * @param string $data
     * @return string
     */
    private function decodeBase64Url($data)
    {
        return base64_decode(str_replace(['-', '_'], ['+', '/'], $data));
    }

}