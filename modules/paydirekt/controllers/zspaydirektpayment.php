<?php

/**
 * Payment class wrapper for Paydirekt module
 */
class zsPaydirektPayment extends zsPaydirektPayment_parent
{
    /**
     * Detects is current payment must be processed by Paydirekt and instead of standard validation
     * redirects to standard Paydirekt dispatcher
     *
     * @return bool
     */
    public function validatePayment()
    {
        $sPaymentId = oxRegistry::getConfig()->getRequestParameter('paymentid');
        $oSession = $this->getSession();
        $oBasket = $oSession->getBasket();
        if ($sPaymentId === 'oxidpaydirekt' && !$this->isConfirmedByPaydirekt($oBasket)) {

            $oSession->setVariable('paymentid', 'oxidpaydirekt');
            if (oxRegistry::getConfig()->getRequestParameter('bltsprotection')) {
                $sTsProductId = oxRegistry::getConfig()->getRequestParameter('stsprotection');
                $oBasket->setTsProductId($sTsProductId);
                $oSession->setVariable('stsprotection', $sTsProductId);
            } else {
                $oSession->deleteVariable('stsprotection');
                $oBasket->setTsProductId(null);
            }
            return 'zsPaydirektStandardDispatcher?fnc=setExpressCheckout'
            . '&displayCartInPaydirekt=' . ((int) oxRegistry::getConfig()->getRequestParameter('displayCartInPaydirekt'));
        }

        return parent::validatePayment();
    }

    /**
     * Detects if current payment was already successfully processed by Paydirekt
     *
     * @param oxBasket $oBasket basket object
     *
     * @return bool
     */
    public function isConfirmedByPaydirekt($oBasket)
    {
        $dOldBasketAmount = $this->getSession()->getVariable("zspaydirekt-basketAmount");
        if (!$dOldBasketAmount) {
            
            return false;
        }

        $oPaydirektCheckValidator = oxNew("zsPaydirektCheckValidator");
        $oPaydirektCheckValidator->setNewBasketAmount($oBasket->getPrice()->getBruttoPrice());
        $oPaydirektCheckValidator->setOldBasketAmount($dOldBasketAmount);

        return $oPaydirektCheckValidator->isPaydirektCheckValid();
    }
}
