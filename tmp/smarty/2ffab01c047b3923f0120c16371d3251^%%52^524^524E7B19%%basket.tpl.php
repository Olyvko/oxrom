<?php /* Smarty version 2.6.28, created on 2016-03-16 21:55:12
         compiled from page/checkout/basket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/checkout/basket.tpl', 10, false),array('function', 'oxscript', 'page/checkout/basket.tpl', 49, false),)), $this); ?>
<?php ob_start(); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
        <?php if (! $this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
            
                <div class="status corners error"><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
            
        <?php else: ?>
            
                <div class="lineBox clear">
                    <?php if ($this->_tpl_vars['oView']->showBackToShop()): ?>
                        
                            <div class="backtoshop">
                                <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="backtoshop">
                                    <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>
</button>
                                </form>
                            </div>
                        
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        
                            <div><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                        
                    <?php else: ?>
                        
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                <input type="hidden" name="cl" value="user">
                                <button type="submit" class="submitButton largeButton nextStep"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
</button>
                            </form>
                        
                    <?php endif; ?>
                </div>
            

            <div id="basketContainer" class="lineBox">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/basketcontents.tpl", 'smarty_include_vars' => array('editable' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers()): ?>
                    
                        <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinputvalidator.js",'priority' => 10), $this);?>

                        <?php echo smarty_function_oxscript(array('add' => "$('form.js-oxValidate').oxInputValidator();"), $this);?>

                        <div id="basketVoucher">
                            <form name="voucher" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post" class="js-oxValidate">
                                <div class="couponBox" id="coupon">
                                    <?php $_from = $this->_tpl_vars['Errors']['basket']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
                                        <?php if ($this->_tpl_vars['oEr']->getErrorClassType() == 'oxVoucherException'): ?>
                                            <div class="inlineError">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'COUPON_NOT_ACCEPTED','args' => $this->_tpl_vars['oEr']->getValue('voucherNr')), $this);?>

                                                <strong><?php echo smarty_function_oxmultilang(array('ident' => 'REASON','suffix' => 'COLON'), $this);?>
</strong>
                                                <?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    <label><?php echo smarty_function_oxmultilang(array('ident' => 'ENTER_COUPON_NUMBER','suffix' => 'COLON'), $this);?>
</label>
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="addVoucher">
                                    <input type="text" size="20" name="voucherNr" class="textbox js-oxValidate js-oxValidate_notEmpty">
                                    <button type="submit" class="submitButton"><?php echo smarty_function_oxmultilang(array('ident' => 'SUBMIT_COUPON'), $this);?>
</button>
                                    <p class="oxValidateError">
                                        <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                                    </p>
                                    <input type="hidden" name="CustomError" value='basket'>
                                </div>
                            </form>
                        </div>
                    
                <?php endif; ?>
            </div>

            
                <div class="lineBox clear">
                    <?php if ($this->_tpl_vars['oView']->showBackToShop()): ?>
                        
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <div class="backtoshop">
                                    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                    <input type="hidden" name="cl" value="basket">
                                    <input type="hidden" name="fnc" value="backtoshop">
                                    <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_SHOPPING'), $this);?>
</button>
                                </div>
                            </form>
                        
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['oView']->isLowOrderPrice()): ?>
                        
                            <div><?php echo smarty_function_oxmultilang(array('ident' => 'MIN_ORDER_PRICE'), $this);?>
 <?php echo $this->_tpl_vars['oView']->getMinOrderPrice(); ?>
 <?php echo $this->_tpl_vars['currency']->sign; ?>
</div>
                        
                    <?php else: ?>
                        
                            <form action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" method="post">
                                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                                <input type="hidden" name="cl" value="user">
                                <button type="submit" class="submitButton largeButton nextStep"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
</button>
                            </form>
                        
                    <?php endif; ?>
                </div>
            
        <?php endif; ?>
        <?php if ($this->_tpl_vars['oView']->isWrapping()): ?>
           <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/wrapping.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>