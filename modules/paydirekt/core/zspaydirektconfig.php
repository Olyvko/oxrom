<?php

/**
 * Paydirekt config class
 */
class zsPaydirektConfig
{

    /**
     * Returns Paydirekt Api Key
     *
     * @return String
     */
    public function getPaydirektApiKey()
    {
        return $this->getParameter('sZSPaydirektApiKey');
    }
    
    /**
     * Returns Paydirekt Api Key
     *
     * @return String
     */
    public function getPaydirektApiSecret()
    {
        return $this->getParameter('sZSPaydirektApiSecret');
    }

    /**
     * Returns module config parameter value
     *
     * @param string $sParamName parameter name
     *
     * @return mixed
     */
    public function getParameter($sParamName)
    {
        return $this->_getConfig()->getConfigParam($sParamName);
    }

    /**
     * Returns oxConfig instance
     *
     * @return oxConfig
     */
    protected function _getConfig()
    {
        return oxRegistry::getConfig();
    }

}
