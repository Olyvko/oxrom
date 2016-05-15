<?php

class zsPaydirektCheckoutAddress
{
    public $addresseeGivenName;
    public $addresseeLastName;
    public $street;
    public $streetNr;
    public $additionalAddressInformation;
    public $zip;
    public $city;
    public $countryCode;

    /**
     * PaydirektCheckoutAddress .
     *
     * @param $addresseeGivenName
     * @param $addresseeLastName
     * @param null $company
     * @param null $additionalAddressInformation
     * @param null $street
     * @param null $streetNr
     * @param $zip
     * @param $city
     * @param $countryCode
     */
    public function setAllParams($addresseeGivenName, $addresseeLastName, $street = null, $streetNr = null, $additionalAddressInformation = null, $zip, $city, $countryCode)
    {
        $this->addresseeGivenName = $addresseeGivenName;
        $this->addresseeLastName = $addresseeLastName;
        $this->street = $street;
        $this->streetNr = $streetNr;
        $this->additionalAddressInformation = $additionalAddressInformation;
        $this->zip = $zip;
        $this->city = $city;
        $this->countryCode = $countryCode;
    }

    /**
     * Convert object to assoc array
     *
     * @param bool $removeNullValues
     * @return array
     */
    public function toArray($removeNullValues = true)
    {
        $array = (array) $this;
        if ($removeNullValues) {
            foreach ($array as $key => $value) {
                if (is_null($array[$key])) {
                    unset($array[$key]);
                }
            }
        }
        return $array;
    }
}