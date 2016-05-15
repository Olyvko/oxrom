<?php /* Smarty version 2.6.28, created on 2016-05-14 19:01:07
         compiled from email/plain/order_cust.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxcontent', 'email/plain/order_cust.tpl', 13, false),array('function', 'oxmultilang', 'email/plain/order_cust.tpl', 19, false),array('function', 'oxprice', 'email/plain/order_cust.tpl', 57, false),array('function', 'oxgetseourl', 'email/plain/order_cust.tpl', 206, false),array('modifier', 'strip_tags', 'email/plain/order_cust.tpl', 34, false),array('modifier', 'replace', 'email/plain/order_cust.tpl', 96, false),array('modifier', 'count', 'email/plain/order_cust.tpl', 202, false),array('modifier', 'cat', 'email/plain/order_cust.tpl', 206, false),array('modifier', 'oxmultilangsal', 'email/plain/order_cust.tpl', 227, false),)), $this); ?>
<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>
<?php $this->assign('currency', $this->_tpl_vars['oEmailView']->getCurrency()); ?>
<?php $this->assign('user', $this->_tpl_vars['oEmailView']->getUser()); ?>
<?php $this->assign('oDelSet', $this->_tpl_vars['order']->getDelSet()); ?>
<?php $this->assign('basket', $this->_tpl_vars['order']->getBasket()); ?>
<?php $this->assign('payment', $this->_tpl_vars['order']->getPayment()); ?>
<?php $this->assign('sOrderId', $this->_tpl_vars['order']->getId()); ?>
<?php $this->assign('oOrderFileList', $this->_tpl_vars['oEmailView']->getOrderFileList($this->_tpl_vars['sOrderId'])); ?>


<?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value == 'oxempty'): ?>
<?php echo smarty_function_oxcontent(array('ident' => 'oxuserordernpplainemail'), $this);?>

<?php else: ?>
<?php echo smarty_function_oxcontent(array('ident' => 'oxuserorderplainemail'), $this);?>

<?php endif; ?>


<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_NUMBER'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>



<?php if ($this->_tpl_vars['oViewConf']->getShowVouchers()): ?>
<?php $_from = $this->_tpl_vars['order']->getVoucherList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['voucher']):
?>
<?php $this->assign('voucherseries', $this->_tpl_vars['voucher']->getSerie()); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'USED_COUPONS_2'), $this);?>
 <?php echo $this->_tpl_vars['voucher']->oxvouchers__oxvouchernr->value; ?>
 - <?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>
 <?php echo $this->_tpl_vars['voucherseries']->oxvoucherseries__oxdiscount->value; ?>
 <?php if ($this->_tpl_vars['voucherseries']->oxvoucherseries__oxdiscounttype->value == 'absolute'): ?><?php echo $this->_tpl_vars['currency']->sign; ?>
<?php else: ?>%<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>


<?php $this->assign('basketitemlist', $this->_tpl_vars['basket']->getBasketArticles()); ?>
<?php $_from = $this->_tpl_vars['basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['basketindex'] => $this->_tpl_vars['basketitem']):
?>

<?php $this->assign('basketproduct', $this->_tpl_vars['basketitemlist'][$this->_tpl_vars['basketindex']]); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['basketproduct']->oxarticles__oxtitle->getRawValue())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php if ($this->_tpl_vars['basketproduct']->oxarticles__oxvarselect->value): ?>, <?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxvarselect->value; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['basketitem']->getChosenSelList()): ?><?php $_from = $this->_tpl_vars['basketitem']->getChosenSelList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oList']):
?>

<?php echo $this->_tpl_vars['oList']->name; ?>
 <?php echo $this->_tpl_vars['oList']->value; ?>


<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if ($this->_tpl_vars['basketitem']->getPersParams()): ?>
<?php $_from = $this->_tpl_vars['basketitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
?>

<?php echo $this->_tpl_vars['sVar']; ?>
 : <?php echo $this->_tpl_vars['aParam']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
<?php $this->assign('oWrapping', $this->_tpl_vars['basketitem']->getWrapping()); ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING','suffix' => 'COLON'), $this);?>
 <?php if (! $this->_tpl_vars['basketitem']->getWrappingId()): ?><?php echo smarty_function_oxmultilang(array('ident' => 'NONE'), $this);?>
<?php else: ?><?php echo $this->_tpl_vars['oWrapping']->oxwrapping__oxname->value; ?>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['basketproduct']->oxarticles__oxorderinfo->value): ?>
<?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxorderinfo->getRawValue(); ?>

<?php endif; ?>

<?php $this->assign('dRegUnitPrice', $this->_tpl_vars['basketitem']->getRegularUnitPrice()); ?>
<?php $this->assign('dUnitPrice', $this->_tpl_vars['basketitem']->getUnitPrice()); ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'UNIT_PRICE'), $this);?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getUnitPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
 <?php if (! $this->_tpl_vars['basketitem']->isBundle()): ?><?php if ($this->_tpl_vars['dRegUnitPrice']->getPrice() > $this->_tpl_vars['dUnitPrice']->getPrice()): ?> (<?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getRegularUnitPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
) <?php endif; ?><?php endif; ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'QUANTITY'), $this);?>
 <?php echo $this->_tpl_vars['basketitem']->getAmount(); ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'VAT'), $this);?>
 <?php echo $this->_tpl_vars['basketitem']->getVatPercent(); ?>
%
<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>


<?php endforeach; endif; unset($_from); ?>
------------------------------------------------------------------
<?php if (! $this->_tpl_vars['basket']->getDiscounts()): ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getProductsNetPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>



<?php $_from = $this->_tpl_vars['basket']->getProductVats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
<?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['key']), $this);?>
 <?php echo $this->_tpl_vars['VATitem']; ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>

<?php endforeach; endif; unset($_from); ?>


<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFProductsPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>


<?php endif; ?>
<?php if ($this->_tpl_vars['basket']->getDiscounts()): ?>
<?php if ($this->_tpl_vars['order']->isNettoMode()): ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getProductsNetPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>


<?php else: ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFProductsPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>


<?php endif; ?>

<?php $_from = $this->_tpl_vars['basket']->getDiscounts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oDiscount']):
?>
<?php if ($this->_tpl_vars['oDiscount']->dDiscount < 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>
<?php endif; ?> <?php echo $this->_tpl_vars['oDiscount']->sDiscount; ?>
: <?php if ($this->_tpl_vars['oDiscount']->dDiscount < 0): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['oDiscount']->fDiscount)) ? $this->_run_mod_handler('replace', true, $_tmp, "-", "") : smarty_modifier_replace($_tmp, "-", "")); ?>
<?php else: ?>-<?php echo $this->_tpl_vars['oDiscount']->fDiscount; ?>
<?php endif; ?> <?php echo $this->_tpl_vars['currency']->name; ?>

<?php endforeach; endif; unset($_from); ?>

<?php if (! $this->_tpl_vars['order']->isNettoMode()): ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getProductsNetPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>


<?php endif; ?>

<?php $_from = $this->_tpl_vars['basket']->getProductVats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
<?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['key']), $this);?>
 <?php echo $this->_tpl_vars['VATitem']; ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>

<?php endforeach; endif; unset($_from); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['order']->isNettoMode()): ?>

<?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFProductsPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>


<?php endif; ?>

<?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['basket']->getVoucherDiscValue()): ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'COUPON','suffix' => 'COLON'), $this);?>
 <?php if ($this->_tpl_vars['basket']->getFVoucherDiscountValue() > 0): ?>-<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['basket']->getFVoucherDiscountValue())) ? $this->_run_mod_handler('replace', true, $_tmp, "-", "") : smarty_modifier_replace($_tmp, "-", "")); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['basket']->getDelCostNet()): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_NET','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getDelCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

    <?php if ($this->_tpl_vars['basket']->getDelCostVat()): ?> <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
 <?php else: ?> <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['basket']->getDelCostVatPercent()), $this);?>
<?php endif; ?> <?php echo $this->_tpl_vars['basket']->getDelCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

<?php elseif ($this->_tpl_vars['basket']->getFDeliveryCosts()): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_COST'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFDeliveryCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['basket']->getPayCostNet()): ?>
    <?php if ($this->_tpl_vars['basket']->getPaymentCosts() >= 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DEDUCTION'), $this);?>
<?php endif; ?> <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getPayCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

    <?php if ($this->_tpl_vars['basket']->getPayCostVat()): ?>
        <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?> <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
<?php else: ?> <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['basket']->getPayCostVatPercent()), $this);?>
<?php endif; ?> <?php echo $this->_tpl_vars['basket']->getPayCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

    <?php endif; ?>
<?php elseif ($this->_tpl_vars['basket']->getFPaymentCosts()): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFPaymentCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['basket']->getTsProtectionCosts()): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['basket']->getTsProtectionVatPercent()), $this);?>
 <?php echo $this->_tpl_vars['basket']->getTsProtectionVat(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>

    <?php if ($this->_tpl_vars['basket']->getTsProtectionVat()): ?>
        <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
<?php else: ?> <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['basket']->getTsProtectionVatPercent()), $this);?>
<?php endif; ?>
    <?php endif; ?>
<?php endif; ?>



<?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
    <?php if ($this->_tpl_vars['basket']->getWrappCostNet()): ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_WRAPPING_COSTS_NET'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getWrappCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

        <?php if ($this->_tpl_vars['basket']->getWrappCostVat()): ?>
            <?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getWrappCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

        <?php endif; ?>
    <?php elseif ($this->_tpl_vars['basket']->getFWrappingCosts()): ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFWrappingCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

    <?php endif; ?>
<?php endif; ?>



<?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
    <?php if ($this->_tpl_vars['basket']->getGiftCardCostNet()): ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_GIFTCARD_COSTS_NET'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getGiftCardCostNet(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

        <?php if ($this->_tpl_vars['basket']->getGiftCardCostVat()): ?>
            <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT'), $this);?>
<?php else: ?> <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['basket']->getGiftCardCostVatPercent()), $this);?>
<?php endif; ?> <?php echo $this->_tpl_vars['basket']->getGiftCardCostVat(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

        <?php endif; ?>
    <?php elseif ($this->_tpl_vars['basket']->getFGiftCardCosts()): ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_CARD'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFGiftCardCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>

    <?php endif; ?>
<?php endif; ?>



<?php echo smarty_function_oxmultilang(array('ident' => 'GRAND_TOTAL','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basket']->getFPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->name; ?>


<?php if ($this->_tpl_vars['basket']->getCard()): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'YOUR_GREETING_CARD','suffix' => 'COLON'), $this);?>

    <?php echo $this->_tpl_vars['basket']->getCardMessage(); ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['order']->oxorder__oxremark->value): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxremark->getRawValue(); ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['oOrderFileList'] && ((is_array($_tmp=$this->_tpl_vars['oOrderFileList'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'MY_DOWNLOADS_DESC'), $this);?>

    <?php $_from = $this->_tpl_vars['oOrderFileList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOrderFile']):
?>
      <?php if ($this->_tpl_vars['order']->oxorder__oxpaid->value || ! $this->_tpl_vars['oOrderFile']->oxorderfiles__oxpurchasedonly->value): ?>
        <?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=download") : smarty_modifier_cat($_tmp, "cl=download")),'params' => ((is_array($_tmp="sorderfileid=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oOrderFile']->getId()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oOrderFile']->getId()))), $this);?>

      <?php else: ?>
        <?php echo $this->_tpl_vars['oOrderFile']->oxorderfiles__oxfilename->value; ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'DOWNLOADS_PAYMENT_PENDING'), $this);?>

      <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>



<?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value != 'oxempty'): ?>
    <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['payment']->oxpayments__oxdesc->getRawValue(); ?>
 <?php if ($this->_tpl_vars['basket']->getPaymentCosts()): ?>(<?php echo $this->_tpl_vars['basket']->getFPaymentCosts(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
)<?php endif; ?>
<?php endif; ?>



<?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxusername->value; ?>




<?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>

<?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->getRawValue(); ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->getRawValue(); ?>

<?php if ($this->_tpl_vars['order']->oxorder__oxbilladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxbilladdinfo->getRawValue(); ?>
<?php endif; ?>
<?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>

<?php echo $this->_tpl_vars['order']->oxorder__oxbillstateid->value; ?>

<?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->getRawValue(); ?>

<?php echo $this->_tpl_vars['order']->oxorder__oxbillcountry->getRawValue(); ?>

<?php if ($this->_tpl_vars['order']->oxorder__oxbillustid->value): ?><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_ID_NUMBER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillustid->value; ?>
<?php endif; ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'PHONE','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfon->value; ?>


<?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS','suffix' => 'COLON'), $this);?>

<?php echo $this->_tpl_vars['order']->oxorder__oxdelcompany->getRawValue(); ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxdelsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdellname->getRawValue(); ?>

<?php if ($this->_tpl_vars['order']->oxorder__oxdeladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdeladdinfo->getRawValue(); ?>
<?php endif; ?>
<?php echo $this->_tpl_vars['order']->oxorder__oxdelstreet->getRawValue(); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreetnr->value; ?>

<?php echo $this->_tpl_vars['order']->oxorder__oxdelstateid->getRawValue(); ?>

<?php echo $this->_tpl_vars['order']->oxorder__oxdelzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelcity->getRawValue(); ?>

<?php echo $this->_tpl_vars['order']->oxorder__oxdelcountry->getRawValue(); ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value != 'oxempty'): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_CARRIER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oDelSet->oxdeliveryset__oxtitle->getRawValue(); ?>

<?php endif; ?>



<?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value == 'oxidpayadvance'): ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'BANK','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbankname->getRawValue(); ?>
<br>
<?php echo smarty_function_oxmultilang(array('ident' => 'BANK_CODE','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbankcode->value; ?>
<br>
<?php echo smarty_function_oxmultilang(array('ident' => 'BANK_ACCOUNT_NUMBER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbanknumber->value; ?>
<br>
<?php echo smarty_function_oxmultilang(array('ident' => 'BIC','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbiccode->value; ?>
<br>
<?php echo smarty_function_oxmultilang(array('ident' => 'IBAN','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxibannumber->value; ?>

<?php endif; ?>



<?php echo smarty_function_oxcontent(array('ident' => 'oxuserorderemailendplain'), $this);?>




<?php if ($this->_tpl_vars['oViewConf']->showTs('ORDEREMAIL') && $this->_tpl_vars['oViewConf']->getTsId()): ?>
<?php echo smarty_function_oxmultilang(array('ident' => 'RATE_OUR_SHOP'), $this);?>

<?php echo $this->_tpl_vars['oViewConf']->getTsRatingUrl(); ?>

<?php endif; ?>


<?php echo smarty_function_oxcontent(array('ident' => 'oxemailfooterplain'), $this);?>
