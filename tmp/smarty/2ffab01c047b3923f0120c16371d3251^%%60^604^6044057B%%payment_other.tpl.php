<?php /* Smarty version 2.6.28, created on 2016-05-12 19:50:54
         compiled from page/checkout/inc/payment_other.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxprice', 'page/checkout/inc/payment_other.tpl', 8, false),array('function', 'oxmultilang', 'page/checkout/inc/payment_other.tpl', 10, false),array('modifier', 'trim', 'page/checkout/inc/payment_other.tpl', 33, false),)), $this); ?>
<dl>
    <dt>
        <input id="payment_<?php echo $this->_tpl_vars['sPaymentID']; ?>
" type="radio" name="paymentid" value="<?php echo $this->_tpl_vars['sPaymentID']; ?>
" <?php if ($this->_tpl_vars['oView']->getCheckedPaymentId() == $this->_tpl_vars['paymentmethod']->oxpayments__oxid->value): ?>checked<?php endif; ?>>
        <label for="payment_<?php echo $this->_tpl_vars['sPaymentID']; ?>
"><b><?php echo $this->_tpl_vars['paymentmethod']->oxpayments__oxdesc->value; ?>

        <?php if ($this->_tpl_vars['paymentmethod']->getPrice()): ?>
            <?php $this->assign('oPaymentPrice', $this->_tpl_vars['paymentmethod']->getPrice()); ?>
            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForPayCharge')): ?>
                ( <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentPrice']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                <?php if ($this->_tpl_vars['oPaymentPrice']->getVatValue() > 0): ?>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT'), $this);?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentPrice']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>

                <?php endif; ?>)
            <?php else: ?>
                (<?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentPrice']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
)
            <?php endif; ?>
        <?php endif; ?>

        </b></label>
    </dt>
    <dd class="<?php if ($this->_tpl_vars['oView']->getCheckedPaymentId() == $this->_tpl_vars['paymentmethod']->oxpayments__oxid->value): ?>activePayment<?php endif; ?>">
        <?php $this->assign('aDynValues', $this->_tpl_vars['paymentmethod']->getDynValues()); ?>
        <?php if ($this->_tpl_vars['aDynValues']): ?>
            <ul>
            <?php $_from = $this->_tpl_vars['aDynValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['PaymentDynValues'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['PaymentDynValues']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['value']):
        $this->_foreach['PaymentDynValues']['iteration']++;
?>
                <li>
                    <label><?php echo $this->_tpl_vars['value']->name; ?>
</label>
                    <input id="<?php echo $this->_tpl_vars['sPaymentID']; ?>
_<?php echo $this->_foreach['PaymentDynValues']['iteration']; ?>
" type="text" class="textbox" size="20" maxlength="64" name="dynvalue[<?php echo $this->_tpl_vars['value']->name; ?>
]" value="<?php echo $this->_tpl_vars['value']->value; ?>
">
                </li>
            <?php endforeach; endif; unset($_from); ?>
            </ul>
        <?php endif; ?>

        
            <?php if (((is_array($_tmp=$this->_tpl_vars['paymentmethod']->oxpayments__oxlongdesc->value)) ? $this->_run_mod_handler('trim', true, $_tmp) : trim($_tmp))): ?>
                <div class="desc">
                    <?php echo $this->_tpl_vars['paymentmethod']->oxpayments__oxlongdesc->getRawValue(); ?>

                </div>
            <?php endif; ?>
        
    </dd>
</dl>