<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:46
         compiled from form/register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/register.tpl', 1, false),array('function', 'oxmultilang', 'form/register.tpl', 12, false),array('block', 'oxifcontent', 'form/register.tpl', 21, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinputvalidator.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('form.js-oxValidate').oxInputValidator();"), $this);?>

<form class="js-oxValidate" action="<?php echo $this->_tpl_vars['oViewConf']->getSslSelfLink(); ?>
" name="order" method="post">
<?php $this->assign('aErrors', $this->_tpl_vars['oView']->getFieldValidationErrors()); ?>
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

<input type="hidden" name="fnc" value="registeruser">
<input type="hidden" name="cl" value="register">
<input type="hidden" name="lgn_cook" value="0">
<input type="hidden" id="reloadAddress" name="reloadaddress" value="">
<input type="hidden" name="option" value="3">
    <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'ACCOUNT_INFORMATION'), $this);?>
</h3>
    <ul class="form">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_account.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if ($this->_tpl_vars['oView']->isActive('PsLogin')): ?>
            <li>
                <label for="orderConfirmAgbBottom"><?php echo smarty_function_oxmultilang(array('ident' => 'TERMS_AND_CONDITIONS'), $this);?>
</label>
                <input type="hidden" name="ord_agb" value="0">
                <input id="orderConfirmAgbBottom" type="checkbox" class="checkbox" name="ord_agb" value="1">
                <span class="inputNote agb">
                    <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span>
            </li>
        <?php endif; ?>
    </ul>
    <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS'), $this);?>
</h3>
    <ul class="form"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/user_billing.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></ul>
</form>
<?php if ($this->_tpl_vars['oView']->isActive('PsLogin')): ?>
    <div id="popup1" class="popupBox corners FXgradGreyLight glowShadow">
         <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('x.png'); ?>
" alt="" class="closePop">
         <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxagb','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

         <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div id="popup2" class="popupBox corners FXgradGreyLight glowShadow">
         <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('x.png'); ?>
" alt="" class="closePop">
         <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrightofwithdrawal','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

         <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
<?php endif; ?>