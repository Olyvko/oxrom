<?php

if (!class_exists('zsPaydirektExtensionChecker')) {
    require_once getShopBasePath() . 'modules/zs/paydirekt/core/zspaydirektextensionchecker.php';
}

/**
 * Class defines what module does on Shop events.
 */
class zsPaydirektEvents
{
    /**
     * Add additional fields: payment status, captured amount, refunded amount in oxOrder table
     */
    public static function addOrderTable()
    {
        $sSql = "CREATE TABLE IF NOT EXISTS `zspaydirekt_order` (
              `ZSPAYDIREKT_ORDERID` char(32) character set latin1 collate latin1_general_ci NOT NULL,
              `ZSPAYDIREKT_PAYMENTSTATUS` enum('pending','completed','failed','canceled') NOT NULL DEFAULT 'pending',
              `ZSPAYDIREKT_CAPTUREDAMOUNT` decimal(9,2) NOT NULL,
              `ZSPAYDIREKT_REFUNDEDAMOUNT` decimal(9,2) NOT NULL,
              `ZSPAYDIREKT_VOIDEDAMOUNT`   decimal(9,2) NOT NULL,
              `ZSPAYDIREKT_TOTALORDERSUM`  decimal(9,2) NOT NULL,
              `ZSPAYDIREKT_CURRENCY` varchar(32) NOT NULL,
              `ZSPAYDIREKT_TRANSACTIONMODE` enum('Sale','Authorization') NOT NULL DEFAULT 'Sale',
              `ZSPAYDIREKT_TIMESTAMP` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
              PRIMARY KEY (`ZSPAYDIREKT_ORDERID`),
              KEY `ZSPAYDIREKT_PAYMENTSTATUS` (`ZSPAYDIREKT_PAYMENTSTATUS`)
            ) ENGINE=InnoDB;";

        oxDb::getDb()->execute($sSql);
    }

    /**
     * Add Paydirekt payment method set EN and DE long descriptions
     */
    public static function addPaymentMethod()
    {
        $aPaymentDescriptions = array(
            'en' => '<div>When selecting this payment method you are being redirected to Paydirekt where you can login into your account or open a new account. In Paydirekt you are able to authorize the payment. As soon you have authorized the payment, you are again redirected to our shop where you can confirm your order.</div> <div style="margin-top: 5px">Only after confirming the order, transfer of money takes place.</div>',
            'de' => '<div>Bei Auswahl der Zahlungsart Paydirekt werden Sie im n&auml;chsten Schritt zu Paydirekt weitergeleitet. Dort k&ouml;nnen Sie sich in Ihr Paydirekt-Konto einloggen oder ein neues Paydirekt-Konto er&ouml;ffnen und die Zahlung autorisieren. Sobald Sie Ihre Daten f&uuml;r die Zahlung best&auml;tigt haben, werden Sie automatisch wieder zur&uuml;ck in den Shop geleitet, um die Bestellung abzuschlie&szlig;en.</div> <div style="margin-top: 5px">Erst dann wird die Zahlung ausgef&uuml;hrt.</div>'
        );

        $oPayment = oxNew('oxPayment');
        if (!$oPayment->load('oxidpaydirekt')) {
            $oPayment->setId('oxidpaydirekt');
            $oPayment->oxpayments__oxactive = new oxField(1);
            $oPayment->oxpayments__oxdesc = new oxField('Paydirekt');
            $oPayment->oxpayments__oxaddsum = new oxField(0);
            $oPayment->oxpayments__oxaddsumtype = new oxField('abs');
            $oPayment->oxpayments__oxfromboni = new oxField(0);
            $oPayment->oxpayments__oxfromamount = new oxField(0);
            $oPayment->oxpayments__oxtoamount = new oxField(10000);

            $oLanguage = oxRegistry::get('oxLang');
            $aLanguages = $oLanguage->getLanguageIds();
            foreach ($aPaymentDescriptions as $sLanguageAbbreviation => $sDescription) {
                $iLanguageId = array_search($sLanguageAbbreviation, $aLanguages);
                if ($iLanguageId !== false) {
                    $oPayment->setLanguage($iLanguageId);
                    $oPayment->oxpayments__oxlongdesc = new oxField($sDescription);
                    $oPayment->save();
                }
            }
        }
    }

    /**
     * Check if Paydirekt is used for sub-shops.
     *
     * @return bool
     */
    public static function isPaydirektActiveOnSubShops()
    {
        $blActive = false;
        $oConfig = oxRegistry::getConfig();
        $oExtensionChecker = oxNew('zsPaydirektExtensionChecker');
        $aShops = $oConfig->getShopIds();
        $sActiveShopId = $oConfig->getShopId();

        foreach ($aShops as $sShopId) {
            if ($sShopId != $sActiveShopId) {
                $oExtensionChecker->setShopId($sShopId);
                $oExtensionChecker->setExtensionId('zspaydirekt');
                if ($oExtensionChecker->isActive()) {
                    $blActive = true;
                    break;
                }
            }
        }

        return $blActive;
    }

    /**
     * Disables Paydirekt payment method
     */
    public static function disablePaymentMethod()
    {
        $oPayment = oxNew('oxpayment');
        $oPayment->load('oxidpaydirekt');
        $oPayment->oxpayments__oxactive = new oxField(0);
        $oPayment->save();
    }

    /**
     * Activates Paydirekt payment method
     */
    public static function enablePaymentMethod()
    {
        $oPayment = oxNew('oxpayment');
        $oPayment->load('oxidpaydirekt');
        $oPayment->oxpayments__oxactive = new oxField(1);
        $oPayment->save();
    }

    /**
     * Creates Order payments table in to database if not exist
     */
    public static function addOrderPaymentsTable()
    {
        $sSql = "CREATE TABLE IF NOT EXISTS `zspaydirekt_orderpayments` (
              `ZSPAYDIREKT_PAYMENTID` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `ZSPAYDIREKT_ACTION` enum('capture', 'authorization', 're-authorization', 'refund', 'void') NOT NULL DEFAULT 'capture',
              `ZSPAYDIREKT_ORDERID` char(32) NOT NULL,
              `ZSPAYDIREKT_TRANSACTIONID` varchar(32) NOT NULL,
              `ZSPAYDIREKT_CORRELATIONID` varchar(32) NOT NULL,
              `ZSPAYDIREKT_AMOUNT` decimal(9,2) NOT NULL,
              `ZSPAYDIREKT_CURRENCY` varchar(3) NOT NULL,
              `ZSPAYDIREKT_REFUNDEDAMOUNT` decimal(9,2) NOT NULL,
              `ZSPAYDIREKT_DATE` datetime NOT NULL,
              `ZSPAYDIREKT_STATUS` varchar(20) NOT NULL,
              `ZSPAYDIREKT_TIMESTAMP` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
              PRIMARY KEY (`ZSPAYDIREKT_PAYMENTID`),
              KEY `ZSPAYDIREKT_ORDERID` (`ZSPAYDIREKT_ORDERID`),
              KEY `ZSPAYDIREKT_DATE` (`ZSPAYDIREKT_DATE`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

        oxDb::getDb()->execute($sSql);
    }

    /**
     * Creates Order payments Comments table in to database if not exist
     */
    public static function addOrderPaymentsCommentsTable()
    {
        $sSql = "CREATE TABLE IF NOT EXISTS `zspaydirekt_orderpaymentcomments` (
              `ZSPAYDIREKT_COMMENTID` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `ZSPAYDIREKT_PAYMENTID` int(11) unsigned NOT NULL,
              `ZSPAYDIREKT_COMMENT` varchar(256) NOT NULL,
              `ZSPAYDIREKT_DATE` datetime NOT NULL,
              `ZSPAYDIREKT_TIMESTAMP` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
              PRIMARY KEY (`ZSPAYDIREKT_COMMENTID`),
              KEY `ZSPAYDIREKT_ORDERID` (`ZSPAYDIREKT_PAYMENTID`),
              KEY `ZSPAYDIREKT_DATE` (`ZSPAYDIREKT_DATE`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

        oxDb::getDb()->execute($sSql);
    }

    /**
     * Enables Paydirekt RDF
     *
     * @return null
     */
    public static function enablePaydirektRDFA()
    {
        // If Paydirekt activated on other sub shops do not change global RDF setting.
        if ('EE' == oxRegistry::getConfig()->getEdition() && self::isPaydirektActiveOnSubShops()) {
            return;
        }

        $sSql = "INSERT IGNORE INTO `oxobject2payment` (`OXID`, `OXPAYMENTID`, `OXOBJECTID`, `OXTYPE`) VALUES('zspaydirektrdfa', 'oxidpaydirekt', 'Paydirekt', 'rdfapayment')";
        oxDb::getDb()->execute($sSql);
    }

    /**
     * Disable Paydirekt RDF
     */
    public static function disablePaydirektRDFA()
    {
        $sSql = "DELETE FROM `oxobject2payment` WHERE `OXID` = 'zspaydirektrdfa'";

        oxDb::getDb()->execute($sSql);
    }

    /**
     * Add missing field if it activates on old DB
     */
    public static function addMissingFieldsOnUpdate()
    {
        $oDbMetaDataHandler = oxNew('oxDbMetaDataHandler');

        $aTableFields = array(
            'zspaydirekt_order'                => 'ZSPAYDIREKT_TIMESTAMP',
            'zspaydirekt_orderpayments'        => 'ZSPAYDIREKT_TIMESTAMP',
            'zspaydirekt_orderpaymentcomments' => 'ZSPAYDIREKT_TIMESTAMP',
        );

        foreach ($aTableFields as $sTableName => $sFieldName) {
            if (!$oDbMetaDataHandler->fieldExists($sFieldName, $sTableName)) {
                oxDb::getDb()->execute(
                    "ALTER TABLE `" . $sTableName
                    . "` ADD `" . $sFieldName . "` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP;"
                );
            }
        }
    }

    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
        // add additional field to order
        self::addOrderTable();

        // create orders payments table
        self::addOrderPaymentsTable();

        // payment comments
        self::addOrderPaymentsCommentsTable();

        self::addMissingFieldsOnUpdate();

        // adding record to oxPayment table
        self::addPaymentMethod();

        // enabling Paydirekt payment method
        self::enablePaymentMethod();

        // enable Paydirekt RDF
        self::enablePaydirektRDFA();
    }

    /**
     * Execute action on deactivate event
     *
     * @return null
     */
    public static function onDeactivate()
    {
        // If Paydirekt activated on other sub shops do not remove payment method and RDF setting
        if ('EE' == oxRegistry::getConfig()->getEdition() && self::isPaydirektActiveOnSubShops()) {
            return;
        }
        self::disablePaymentMethod();
        self::disablePaydirektRDFA();
    }
}
