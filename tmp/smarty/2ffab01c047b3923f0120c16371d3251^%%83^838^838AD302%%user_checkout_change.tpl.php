<?php /* Smarty version 2.6.28, created on 2016-05-12 19:34:17
         compiled from form/user_checkout_change.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/user_checkout_change.tpl', 1, false),array('function', 'oxgetseourl', 'form/user_checkout_change.tpl', 16, false),array('function', 'oxmultilang', 'form/user_checkout_change.tpl', 16, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinputvalidator.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('form.js-oxValidate').oxInputValidator();"), $this);?>


    <form class="js-oxValidate" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" name="order" method="post">
        
            <?php $this->assign('aErrors', $this->_tpl_vars['oView']->getFieldValidationErrors()); ?>
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

            <input type="hidden" name="cl" value="user">
            <input type="hidden" name="option" value="<?php echo $this->_tpl_vars['oView']->getLoginOption(); ?>
">
            <input type="hidden" name="fnc" value="changeuser">
            <input type="hidden" name="lgn_cook" value="0">
            <input type="hidden" name="blshowshipaddress" value="1">
            
                <div class="lineBox clear">
                    <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getBasketLink()), $this);?>
" class="prevStep submitButton largeButton" id="userBackStepTop"><?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                    <button id="userNextStepTop" class="submitButton largeButton nextStep" name="userform" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
</button>
                </div>
            
            <div class="checkoutCollumns clear">
                <div class="collumn">
                    
                        
                            <h3 class="blockHead">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>

                                <button id="userChangeAddress" class="submitButton largeButton" name="changeBillAddress" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'CHANGE'), $this);?>
</button>
                            </h3>
                            <?php echo smarty_function_oxscript(array('add' => "$('#userChangeAddress').click( function() { $('#addressForm').show();$('#addressText').hide();$('#userChangeAddress').hide();return false;});"), $this);?>

                            <?php if ($this->_tpl_vars['aErrors']): ?>
                                <?php echo smarty_function_oxscript(array('add' => "$(document).ready(function(){ $('#userChangeAddress').trigger('click');});"), $this);?>

                            <?php endif; ?>
                        
                        
                            <ul class="form" style="display: none;" id="addressForm">
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_billing.tpl", 'smarty_include_vars' => array('noFormSubmit' => true,'blSubscribeNews' => true,'blOrderRemark' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </ul>
                        
                        
                            <ul class="form" id="addressText">
                                <li>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/billing_address.tpl", 'smarty_include_vars' => array('noFormSubmit' => true,'blSubscribeNews' => true,'blOrderRemark' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </li>
                            </ul>
                        
                    
                </div>
                <div class="collumn">
                    
                        
                            <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS'), $this);?>

                                <button id="userChangeShippingAddress" class="submitButton largeButton" name="changeShippingAddress" type="submit" <?php if (! $this->_tpl_vars['oView']->showShipAddress() || ! $this->_tpl_vars['oxcmp_user']->getSelectedAddress()): ?> style="display: none;" <?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'CHANGE'), $this);?>
</button>
                            </h3>
                            <?php echo smarty_function_oxscript(array('add' => "$('#showShipAddress').change(function() { $('#userChangeShippingAddress').toggle($(this).is(':not(:checked)') && $('#addressId').val() != -1 ); }); "), $this);?>

                            <?php echo smarty_function_oxscript(array('add' => "$('#addressId').change(function() { $('#userChangeShippingAddress').toggle($('#addressId').val() != -1 ); }); "), $this);?>

                        
                        
                            <p>
                                <input type="checkbox" name="blshowshipaddress" id="showShipAddress" <?php if (! $this->_tpl_vars['oView']->showShipAddress()): ?>checked<?php endif; ?> value="0"><label for="showShipAddress"><?php echo smarty_function_oxmultilang(array('ident' => 'USE_BILLINGADDRESS_FOR_SHIPPINGADDRESS'), $this);?>
</label>
                            </p>
                            <?php echo smarty_function_oxscript(array('add' => "$('#showShipAddress').change( function() { $('#shippingAddress').toggle($(this).is(':not(:checked)'));});"), $this);?>

                        
                        
                            <ul id="shippingAddress" class="form" <?php if (! $this->_tpl_vars['oView']->showShipAddress()): ?>style="display: none;"<?php endif; ?>>
                                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_shipping.tpl", 'smarty_include_vars' => array('noFormSubmit' => true,'onChangeClass' => 'user')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            </ul>
                        
                        
                            <ul class="form">
                                <li>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/order_newsletter.tpl", 'smarty_include_vars' => array('blSubscribeNews' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/order_remark.tpl", 'smarty_include_vars' => array('blOrderRemark' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                </li>
                            </ul>
                        
                    
                </div>
            </div>
            
                <div class="lineBox clear">
                    <a href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getBasketLink()), $this);?>
" class="prevStep submitButton largeButton" id="userBackStepBottom"><?php echo smarty_function_oxmultilang(array('ident' => 'PREVIOUS_STEP'), $this);?>
</a>
                    <button id="userNextStepBottom" class="submitButton largeButton nextStep" name="userform" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'CONTINUE_TO_NEXT_STEP'), $this);?>
</button>
                </div>
            
        
    </form>
