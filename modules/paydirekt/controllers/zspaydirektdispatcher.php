<?php

/**
 * Abstract Paydirekt Dispatcher class
 */
abstract class zsPaydirektDispatcher extends oxUBase
{
    /**
     * Paydirekt checkout service
     *
     * @var zsPaydirektCheckoutService
     */
    protected $_oPaydirektCheckoutService;

    /**
     * Sets Paydirekt checkout service.
     *
     * @param zsPaydirektService $oPaydirektCheckoutService
     */
    public function setPaydirektCheckoutService($oPaydirektCheckoutService)
    {
        $this->_oPaydirektCheckoutService = $oPaydirektCheckoutService;
    }

    /**!!! TODO 
     * Returns Paydirekt service
     *
     * @return zsPaydirektService
     */
    public function getPaydirektCheckoutService()
    {
        if ($this->_oPaydirektCheckoutService === null) {
            $this->_oPaydirektCheckoutService = oxNew("zsPaydirektService");
        }

        return $this->_oPaydirektCheckoutService;
    }

    /**
     * Returns oxUtilsView instance
     *
     * @return oxUtilsView
     */
    protected function _getUtilsView()
    {
        return oxRegistry::get("oxUtilsView");
    }

    /**
     * Returns oxUtils instance
     *
     * @return oxUtils
     */
    protected function _getUtils()
    {
        return oxRegistry::getUtils();
    }

    /**
     * Returns base url, which is used to construct Callback, Return and Cancel Urls
     *
     * @return string
     */
    protected function _getBaseUrl()
    {
        $oSession = $this->getSession();
        $sUrl = $this->getConfig()->getSslShopUrl() . "index.php?lang=" . oxRegistry::getLang()->getBaseLanguage() . "&sid=" . $oSession->getId() . "&rtoken=" . $oSession->getRemoteAccessToken();
        $sUrl .= "&shp=" . $this->getConfig()->getShopId();

        return $sUrl;
    }

}
