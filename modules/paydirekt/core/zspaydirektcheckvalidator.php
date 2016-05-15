<?php

/**
 * Validates changed basket amount. Checks if it is bigger than previous price.
 * Than returns false to recheck new basket amount in Paydirekt.
 */
class zsPaydirektCheckValidator
{
    /**
     * Basket new amount
     *
     * @var double
     */
    protected $_dNewBasketAmount = null;

    /**
     * Basket old amount
     *
     * @var double
     */
    protected $_dOldBasketAmount = null;

    /**
     * Returns if order should be rechecked by Paydirekt
     *
     * @return bool
     */
    public function isPaydirektCheckValid()
    {
        $dNewBasketAmount = $this->getNewBasketAmount();
        $dPrevBasketAmount = $this->getOldBasketAmount();
        // check only if new price is different and bigger than old price
        if ($dNewBasketAmount > $dPrevBasketAmount) {
            return false;
        }

        return true;
    }

    /**
     * Sets new basket amount
     *
     * @param double $dNewBasketAmount changed basket amount
     */
    public function setNewBasketAmount($dNewBasketAmount)
    {
        $this->_dNewBasketAmount = $dNewBasketAmount;
    }

    /**
     * Returns new basket amount
     *
     * @return double
     */
    public function getNewBasketAmount()
    {
        return (float) $this->_dNewBasketAmount;
    }

    /**
     * Sets old basket amount
     *
     * @param double $dOldBasketAmount old basket amount
     */
    public function setOldBasketAmount($dOldBasketAmount)
    {
        $this->_dOldBasketAmount = $dOldBasketAmount;
    }

    /**
     * Returns old basket amount
     *
     * @return double
     */
    public function getOldBasketAmount()
    {
        return (float) $this->_dOldBasketAmount;
    }
}
