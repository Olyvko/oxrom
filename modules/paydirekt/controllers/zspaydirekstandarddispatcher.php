<?php

/**
 * Paydirekt Standard Checkout dispatcher class
 */
class zsPaydirektStandardDispatcher extends zsPaydirektDispatcher
{
    /**
     * Executes "SetExpressCheckout" and on SUCCESS response - redirects to Paydirekt
     * login/registration page, on error - returns "basket", which means - redirect
     * to basket view and display error message
     *
     * @return string
     */
    public function setExpressCheckout()
    {

        $oSession = $this->getSession();
        $oSession->setVariable("zspaydirekt", "1");
        $oZsPaydirektConfig = oxNew('zsPaydirektConfig');

        try {

            $oZsPaydirektCheckoutApi = oxNew('zsPaydirektCheckoutApi');
            $oZsPaydirektCheckoutApi->setKeys($oZsPaydirektConfig->getPaydirektApiKey(), $oZsPaydirektConfig->getPaydirektApiSecret());

            $sAccessToken = $oZsPaydirektCheckoutApi->getAccesToken();

            // saving Paydirekt token into session
            $this->getSession()->setVariable("zspaydirekt-token",  $sAccessToken);

            $oBuilder = oxNew('zsPaydirektSetCheckoutRequestBuilder');

            $oBasket = $oSession->getBasket();

            $oBasket->setPayment("oxidpaydirekt");
            $oBasket->onUpdate();
            $oBasket->calculateBasket(true);

            $oBuilder->setBasket($oBasket);
            $oBuilder->setUser($this->getUser());
            $oBuilder->setReturnUrl($this->_getReturnUrl());
            $oBuilder->setCancelUrl($this->_getCancelUrl());

            $oRequest = $oBuilder->buildStandardCheckoutRequest();
            $sUrl = $oZsPaydirektCheckoutApi->createCheckout($oRequest->getData());

            // redirecting to Paydirekt's login/registration page
            $this->_getUtils()->redirect($sUrl, false);
            
        } catch (oxException $oExcp) {

            // error - unable to set order info - display error message
            $this->_getUtilsView()->addErrorToDisplay($oExcp);

            // return to basket view
            return "basket";
        }

    }

    /**
     * Executes "GetExpressCheckoutDetails" and on SUCCESS response - saves
     * user information and redirects to order page, on failure - sets error
     * message and redirects to basket page
     *
     * @return string
     */
    public function getExpressCheckoutDetails()
    {
        /*
        try {

            $oPaydirektService = $this->getPaydirektCheckoutService();
            $oBuilder = oxNew('zsPaydirektGetExpressCheckoutDetailsRequestBuilder');
            $oBuilder->setSession($this->getSession());

            $oRequest = $oBuilder->buildRequest();

            $oDetails = $oPaydirektService->getExpressCheckoutDetails($oRequest);
        } catch (oxException $oExcp) {
            // display error message
            $this->_getUtilsView()->addErrorToDisplay($oExcp);

            // problems fetching user info - redirect to payment selection
            return "payment";
        }

        $this->getSession()->setVariable("zspaydirekt-payerId", $oDetails->getPayerId());
        $this->getSession()->setVariable("zspaydirekt-basketAmount", $oDetails->getAmount());
*/
        // next step - order page
        $sNext = "order";

        // everything is fine - redirect to order
        return $sNext;
    }

    /**
     * Returns RETURN URL
     *
     * @return string
     */
    protected function _getReturnUrl()
    {
        return $this->getSession()->processUrl($this->_getBaseUrl() . "&cl=" . get_class() . "&fnc=getExpressCheckoutDetails");
    }

    /**
     * Returns CANCEL URL
     *
     * @return string
     */
    protected function _getCancelUrl()
    {
        return $this->getSession()->processUrl($this->_getBaseUrl() . "&cl=payment");
    }
}
