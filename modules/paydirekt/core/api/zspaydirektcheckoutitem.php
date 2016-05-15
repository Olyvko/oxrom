<?php

class zsPaydirektCheckoutItem
{
    public $quantity;
    public $name;
    public $ean;
    public $price;

    /**
     * PaydirektCheckoutItem .
     *
     * @param $quantity
     * @param $name
     * @param null $ean
     * @param $price
     */
    public function setAllParams($quantity, $name, $ean = null, $price)
    {
        $this->quantity = (int) $quantity;
        $this->name = $name;
        $this->ean = $ean;
        $this->price = round((float) $price, 4);
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