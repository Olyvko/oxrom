<?php

/**
 * Paydirekt request class
 */
class zsPaydirektPaydirektRequest
{
    /**
     * Paydirekt response data
     *
     * @var array
     */
    protected $_aData = array();

    /**
     * Sets value to data by given key.
     *
     * @param string $sKey   Key of data value.
     * @param string $sValue Data value.
     */
    public function setParameter($sKey, $sValue)
    {
        $this->_aData[$sKey] = $sValue;
    }

    /**
     * Returns value by given key.
     *
     * @param string $sKey Key of data value.
     *
     * @return string
     */
    public function getParameter($sKey)
    {
        return $this->_aData[$sKey];
    }

    /**
     * Set request data.
     *
     * @param array $aResponseData Response data from Paydirekt.
     */
    public function setData($aResponseData)
    {
        $this->_aData = $aResponseData;
    }

    /**
     * Return request data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->_aData;
    }

    /**
     * Return value from data by given key.
     *
     * @param string $sKey   Key of data value.
     * @param string $sValue Data value.
     */
    protected function _setValue($sKey, $sValue)
    {
        $this->_aData[$sKey] = $sValue;
    }
}
