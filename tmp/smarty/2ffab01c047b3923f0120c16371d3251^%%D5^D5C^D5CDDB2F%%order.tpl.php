<?php /* Smarty version 2.6.28, created on 2016-05-12 19:51:18
         compiled from page/checkout/order.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'page/checkout/order.tpl', 5, false),array('function', 'oxmultilang', 'page/checkout/order.tpl', 20, false),array('function', 'oxgetseourl', 'page/checkout/order.tpl', 53, false),array('block', 'oxifcontent', 'page/checkout/order.tpl', 183, false),)), $this); ?>
<?php ob_start(); ?>

    
        <?php if ($this->_tpl_vars['oView']->isConfirmAGBError() == 1): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/error.tpl", 'smarty_include_vars' => array('statusMessage' => ((is_array($_tmp='READ_AND_CONFIRM_TERMS')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <?php $this->assign('iError', $this->_tpl_vars['oView']->getAddressError()); ?>
        <?php if ($this->_tpl_vars['iError'] == 1): ?>
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/error.tpl", 'smarty_include_vars' => array('statusMessage' => ((is_array($_tmp='ERROR_DELIVERY_ADDRESS_WAS_CHANGED_DURING_CHECKOUT')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 4)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php if (! $this->_tpl_vars['oView']->showOrderButtonOnTop()): ?>
            <div class="lineBox clear">
                <span>&nbsp;</span>
                <span class="title"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_SUBMIT_BOTTOM'), $this);?>
</span>
            </div>
        <?php endif; ?>

        
            <?php if (! $this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
                
                    <div class="status corners error"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
                
            <?php else: ?>
                <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>

                
                    <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        
                            <div><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                        
                    <?php else: ?>

                        
                            <?php if ($this->_tpl_vars['oView']->showOrderButtonOnTop()): ?>
                                <div id="orderAgbTop">
                                    <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" id="orderConfirmAgbTop">
                                        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                        <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                                        <input type="hidden" name="cl" value="order">
                                        <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['oView']->getExecuteFnc(); ?>
">
                                        <input type="hidden" name="challenge" value="<?php echo $this->_tpl_vars['challenge']; ?>
">
                                        <input type="hidden" name="sDeliveryAddressMD5" value="<?php echo $this->_tpl_vars['oView']->getDeliveryAddressMD5(); ?>
">

                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/agb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                                        <div class="lineBox clear">
                                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getPaymentLink()), $this);?>
" class="prevStep submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                                            <button type="submit" class="submitButton nextStep largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBMIT_ORDER'), $this);?>
</button>
                                        </div>
                                    </form>
                                </div>
                            <?php endif; ?>
                        
                    <?php endif; ?>
                

                
                    <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['oxcmp_basket']->getVouchers()): ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'USED_COUPONS'), $this);?>

                        <div>
                            <?php $_from = $this->_tpl_vars['Errors']['basket']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
                                <?php if ($this->_tpl_vars['oEr']->getErrorClassType() == 'oxVoucherException'): ?>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'COUPON_NOT_ACCEPTED','args' => $this->_tpl_vars['oEr']->getValue('voucherNr')), $this);?>
<br>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'REASON','suffix' => 'COLON'), $this);?>

                                    <?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
<br>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getVouchers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aVouchers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aVouchers']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sVoucher']):
        $this->_foreach['aVouchers']['iteration']++;
?>
                                <?php echo $this->_tpl_vars['sVoucher']->sVoucherNr; ?>
<br>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                    <?php endif; ?>
                

                
                    <div id="orderAddress">
                        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                            <h3 class="section">
                            <strong><?php echo smarty_function_oxmultilang(array('ident' => 'ADDRESSES'), $this);?>
</strong>
                            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                            <input type="hidden" name="cl" value="user">
                            <input type="hidden" name="fnc" value="">
                            <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
</button>
                            </h3>
                        </form>
                        <dl>
                            <dt><?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>
</dt>
                            <dd>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/billing_address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </dd>
                        </dl>
                        <?php $this->assign('oDelAdress', $this->_tpl_vars['oView']->getDelAddress()); ?>
                        <?php if ($this->_tpl_vars['oDelAdress']): ?>
                        <dl class="shippingAddress">
                            <dt><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS'), $this);?>
</dt>
                            <dd>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/shipping_address.tpl", 'smarty_include_vars' => array('delivadr' => $this->_tpl_vars['oDelAdress'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </dd>
                        </dl>
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['oView']->getOrderRemark()): ?>
                            <dl class="orderRemarks">
                                <dt><?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>
</dt>
                                <dd>
                                    <?php echo $this->_tpl_vars['oView']->getOrderRemark(); ?>

                                </dd>
                            </dl>
                        <?php endif; ?>
                    </div>
                    <div style="clear:both;"></div>
                

                
                    <div id="orderShipping">
                    <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                        <h3 class="section">
                            <strong><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_CARRIER'), $this);?>
</strong>
                            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                            <input type="hidden" name="cl" value="payment">
                            <input type="hidden" name="fnc" value="">
                            <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
</button>
                        </h3>
                    </form>
                    <?php $this->assign('oShipSet', $this->_tpl_vars['oView']->getShipSet()); ?>
                    <?php echo $this->_tpl_vars['oShipSet']->oxdeliveryset__oxtitle->value; ?>

                    </div>

                    <div id="orderPayment">
                        <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                            <h3 class="section">
                                <strong><?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD'), $this);?>
</strong>
                                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                <input type="hidden" name="cl" value="payment">
                                <input type="hidden" name="fnc" value="">
                                <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
</button>
                            </h3>
                        </form>
                        <?php $this->assign('payment', $this->_tpl_vars['oView']->getPayment()); ?>
                        <?php echo $this->_tpl_vars['payment']->oxpayments__oxdesc->value; ?>

                    </div>
                

                <div id="orderEditCart">
                    <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                        <h3 class="section">
                            <strong><?php echo smarty_function_oxmultilang(array('ident' => 'CART'), $this);?>
</strong>
                            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                            <input type="hidden" name="cl" value="basket">
                            <input type="hidden" name="fnc" value="">
                            <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'EDIT'), $this);?>
</button>
                        </h3>
                    </form>
                </div>

                <div id="basketContent" class="lineBox clear">
                
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/basketcontents.tpl", 'smarty_include_vars' => array('editable' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                

                
                    <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        
                            <div><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                        
                    <?php else: ?>
                        
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post" id="orderConfirmAgbBottom">
                                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

                                <input type="hidden" name="cl" value="order">
                                <input type="hidden" name="fnc" value="<?php echo $this->_tpl_vars['oView']->getExecuteFnc(); ?>
">
                                <input type="hidden" name="challenge" value="<?php echo $this->_tpl_vars['challenge']; ?>
">
                                <input type="hidden" name="sDeliveryAddressMD5" value="<?php echo $this->_tpl_vars['oView']->getDeliveryAddressMD5(); ?>
">

                                <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowTSInternationalFeesMessage')): ?>
                                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxtsinternationalfees','object' => 'oTSIFContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                        <hr/>
                                        <div class="clear">
                                            <span class="title"><?php echo $this->_tpl_vars['oTSIFContent']->oxcontents__oxcontent->value; ?>
</span>
                                        </div>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                <?php endif; ?>

                                <?php if ($this->_tpl_vars['payment']->oxpayments__oxid->value == 'oxidcashondel' && $this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowTSCODMessage')): ?>
                                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxtscodmessage','object' => 'oTSCODContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                        <hr/>
                                        <div class="clear">
                                            <span class="title"><?php echo $this->_tpl_vars['oTSCODContent']->oxcontents__oxcontent->value; ?>
</span>
                                        </div>
                                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                                <?php endif; ?>
                                <hr/>

                                <?php if (! $this->_tpl_vars['oView']->showOrderButtonOnTop()): ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/agb.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <hr/>
                                <?php else: ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/agb.tpl", 'smarty_include_vars' => array('hideButtons' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                <?php endif; ?>

                                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getPaymentLink()), $this);?>
" class="prevStep submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                                <button type="submit" class="submitButton nextStep largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBMIT_ORDER'), $this);?>
</button>
                            </form>
                        
                    <?php endif; ?>
                
                </div>
            <?php endif; ?>
        
    
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>