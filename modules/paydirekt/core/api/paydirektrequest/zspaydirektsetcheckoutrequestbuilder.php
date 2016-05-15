<?php

/**
 * Paydirekt request builder class for set express checkout
 */
class zsPaydirektSetCheckoutRequestBuilder
{
    /**
     * Paydirekt Request.
     *
     * @var zsPaydirektPaydirektRequest
     */
    protected $_oPaydirektRequest = null;

    /**
     * Basket object.
     *
     * @var zsPaydirektOxBasket
     */
    protected $_oBasket = null;

    /**
     * User object.
     *
     * @var zsPaydirektOxUser
     */
    protected $_oUser = null;

    /**
     * Url to return to after Paydirekt payment is done.
     *
     * @var string
     */
    protected $_sReturnUrl = null;

    /**
     * Url to return to if Paydirekt payment was canceled.
     *
     * @var string
     */
    protected $_sCancelUrl = null;

    /**
     * Sets Paydirekt request object.
     *
     * @param zsPaydirektPaydirektRequest $oRequest
     */
    public function setPaydirektRequest($oRequest)
    {
        $this->_oPaydirektRequest = $oRequest;
    }

    /**
     * Returns Paydirekt request object; initiates if not set.
     *
     * @return zsPaydirektPaydirektRequest
     */
    public function getPaydirektRequest()
    {
        if ($this->_oPaydirektRequest === null) {
            $this->_oPaydirektRequest = oxNew('zsPaydirektPaydirektRequest');
        }

        return $this->_oPaydirektRequest;
    }

    /**
     * Sets Basket object.
     *
     * @param oxBasket $oBasket
     */
    public function setBasket($oBasket)
    {
        $this->_oBasket = $oBasket;
    }

    /**
     * Returns basket object.
     *
     * @return oxBasket
     *
     * @throws zsPaydirektMissingParameterException
     */
    public function getBasket()
    {
        if (is_null($this->_oBasket)) {
            /** @var zsPaydirektMissingParameterException $oException */
            $oException = oxNew('zsPaydirektMissingParameterException');
            throw $oException;
        }

        return $this->_oBasket;
    }

    /**
     * Sets User object
     *
     * @param zsPaydirektOxUser $oUser
     */
    public function setUser($oUser)
    {
        $this->_oUser = $oUser;
    }

    /**
     * Returns User object
     *
     * @return oePaydirektOxUser
     */
    public function getUser()
    {
        return $this->_oUser;
    }

    /**
     * Sets Cancel Url.
     *
     * @param string $sCancelUrl
     */
    public function setCancelUrl($sCancelUrl)
    {
        $this->_sCancelUrl = $sCancelUrl;
    }

    /**
     * Returns Cancel Url.
     *
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->_sCancelUrl;
    }

    /**
     * Sets Return Url.
     *
     * @param string $sReturnUrl
     */
    public function setReturnUrl($sReturnUrl)
    {
        $this->_sReturnUrl = $sReturnUrl;
    }

    /**
     * Returns Return Url.
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->_sReturnUrl;
    }

    /**
     * Builds Paydirekt request for standard checkout.
     *
     * @return zsPaydirektPaydirektRequest
     */
    public function buildStandardCheckoutRequest()
    {
        $this->addBaseParams();
        $this->addBasketParams();
        $this->addBasketItemParams();
        $this->addUserParams();
        $this->addAddressParams();

        return $this->getPaydirektRequest();
    }

    /**
     * Sets base parameters to request.
     */
    public function addBaseParams()
    {
        $oRequest = $this->getPaydirektRequest();

        $oRequest->setParameter("type", "DIRECT_SALE");//DIRECT_SELL or ORDER
        $oRequest->setParameter("redirectUrlAfterSuccess", $this->getReturnUrl());
        $oRequest->setParameter("redirectUrlAfterCancellation", $this->getCancelUrl());
        $oRequest->setParameter("redirectUrlAfterAgeVerificationFailure", $this->getCancelUrl());
        $oRequest->setParameter("redirectUrlAfterRejection", $this->getCancelUrl());
        $oRequest->setParameter("note", '');
    }

    /**
     * Sets basket parameters to request.
     */
    public function addBasketParams()
    {
        $oRequest = $this->getPaydirektRequest();
        $oBasket = $this->getBasket();

        $oRequest->setParameter("orderAmount", $this->_formatFloat($oBasket->getProductsPrice()->getSum($oBasket->isCalculationModeNetto())));
        $oRequest->setParameter("shippingAmount", $this->_formatFloat($oBasket->getDeliveryCosts()));
        $oRequest->setParameter("totalAmount", $this->_formatFloat($oBasket->getPrice()->getBruttoPrice()));
        $oRequest->setParameter("currency", $oBasket->getBasketCurrency()->name);
        $oRequest->setParameter("merchantOrderReferenceNumber", 'order-A12223412');// we haven't order ids yet
        $oRequest->setParameter("merchantInvoiceReferenceNumber", '20150112334345');
    }

    /**
     * Sets basket items parameters to request.
     */
    public function addBasketItemParams()
    {
        $oBasket = $this->getBasket();
        $oRequest = $this->getPaydirektRequest();
        $PaydirektCheckoutItems = array();

        foreach ($oBasket->getContents() as $oBasketItem) {

            $PaydirektCheckoutItem = oxNew('zsPaydirektCheckoutItem');
            $oBasketProduct = $oBasketItem->getArticle();
            $PaydirektCheckoutItem->setAllParams(
                $oBasketItem->getAmount(),
                $oBasketItem->getTitle(),
                $oBasketProduct->oxarticles__oxean->value,
                $this->_formatFloat($oBasketItem->getUnitPrice()->getPrice())
            );

            $PaydirektCheckoutItems[] = $PaydirektCheckoutItem;
        }

        $oRequest->setParameter("items", $PaydirektCheckoutItems);

    }

    /**
     * Sets User parameters to request.
     *
     * @return null
     */
    public function addUserParams()
    {
        $oUser = $this->getUser();
        if (!$oUser) {
            return;
        }
        $oRequest = $this->getPaydirektRequest();

        $oRequest->setParameter("merchantCustomerNumber", $oUser->oxuser__oxcustnr->value);
        $oRequest->setParameter("sha256hashedEmailAddress", base64_encode(hash('sha256',$oUser->oxuser__oxusername->value)));
        $oRequest->setParameter("minimumAge", 18);


    }

    /**
     * Sets Address parameters to request.
     *
     * @return null
     */
    public function addAddressParams()
    {
        $oUser = $this->getUser();
        if (!$oUser) {
            return;
        }
        $oRequest = $this->getPaydirektRequest();

        $PaydirektCheckoutAddress = oxNew('zsPaydirektCheckoutAddress');
        $sAddressId = $oUser->getSelectedAddressId();
        if ($sAddressId) {
            $oAddress = oxNew("oxAddress");
            $oAddress->load($sAddressId);
            $oCountry = oxNew("oxCountry");
            $oCountry->load($oAddress->oxaddress__oxcountryid->value);

            $PaydirektCheckoutAddress->setAllParams($oAddress->oxaddress__oxfname->value,
                $oAddress->oxaddress__oxlname->value,
                $oAddress->oxaddress__oxstreet->value,
                $oAddress->oxaddress__oxstreetnr->value,
                $oAddress->oxaddress__oxaddinfo->value,
                $oAddress->oxaddress__oxzip->value,
                $oAddress->oxaddress__oxcity->value,
                $oCountry->oxcountry__oxisoalpha2->value
            );

        } else {

            $oCountry = oxNew('oxCountry');
            $oCountry->load($oUser->oxuser__oxcountryid->value);
            $PaydirektCheckoutAddress->setAllParams($oUser->oxuser__oxfname->value,
                $oUser->oxuser__oxlname->value,
                $oUser->oxuser__oxstreet->value,
                $oUser->oxuser__oxstreetnr->value,
                $oUser->oxuser__oxaddinfo->value,
                $oUser->oxuser__oxzip->value,
                $oUser->oxuser__oxcity->value,
                $oCountry->oxcountry__oxisoalpha2->value
            );

        }

        $oRequest->setParameter("shippingAddress", $PaydirektCheckoutAddress->toArray());
    }

    /**
     * Formats given float/int value into Paydirekt friendly form
     *
     * @param float $fIn value to format
     *
     * @return string
     */
    protected function _formatFloat($fIn)
    {
        return sprintf("%.2f", $fIn);
    }
}
