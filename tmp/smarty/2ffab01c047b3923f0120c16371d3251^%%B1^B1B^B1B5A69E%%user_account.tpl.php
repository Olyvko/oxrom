<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:46
         compiled from form/fieldset/user_account.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'form/fieldset/user_account.tpl', 3, false),)), $this); ?>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxusername']): ?>class="oxInValid"<?php endif; ?>>
        
        <label class="req"><?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS','suffix' => 'COLON'), $this);?>
</label>
        <input id="userLoginName" class="js-oxValidate js-oxValidate_notEmpty js-oxValidate_email" type="text" name="lgn_usr" value="<?php echo $this->_tpl_vars['oView']->getActiveUsername(); ?>
" size="37" >
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <span class="js-oxError_email"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOVALIDEMAIL'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxusername'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
        
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?>class="oxInValid"<?php endif; ?>>
        
        <label class="req"><?php echo smarty_function_oxmultilang(array('ident' => 'PASSWORD','suffix' => 'COLON'), $this);?>
</label>
        <input type="hidden" id="passwordLength" value="<?php echo $this->_tpl_vars['oViewConf']->getPasswordLength(); ?>
">
        <input id="userPassword" class="textbox js-oxValidate js-oxValidate_notEmpty js-oxValidate_length js-oxValidate_match" type="password" name="lgn_pwd" value="<?php echo $this->_tpl_vars['lgn_pwd']; ?>
" size="37">
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <span class="js-oxError_length"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_PASSWORD_TOO_SHORT'), $this);?>
</span>
            <span class="js-oxError_match"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_PASSWORD_DO_NOT_MATCH'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxpassword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
        
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxpassword']): ?>class="oxInValid"<?php endif; ?>>
        
        <label class="req"><?php echo smarty_function_oxmultilang(array('ident' => 'CONFIRM_PASSWORD','suffix' => 'COLON'), $this);?>
</label>
        <input id="userPasswordConfirm" class="textbox js-oxValidate js-oxValidate_notEmpty js-oxValidate_length js-oxValidate_match" type="password" name="lgn_pwd2" value="<?php echo $this->_tpl_vars['lgn_pwd2']; ?>
" size="37">
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <span class="js-oxError_length"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_PASSWORD_TOO_SHORT'), $this);?>
</span>
            <span class="js-oxError_match"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_PASSWORD_DO_NOT_MATCH'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxpassword'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
        
    </li>
    <li>
        
        <label for="newsSubscribed"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER_SUBSCRIPTION'), $this);?>
</label>
        <input type="hidden" name="blnewssubscribed" value="0">
        <input id="newsSubscribed" type="checkbox" class="checkbox"  name="blnewssubscribed" value="1" <?php if ($this->_tpl_vars['oView']->isNewsSubscribed()): ?>checked<?php endif; ?>>
        <span class="inputNote"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER_SUBSCRIPTION'), $this);?>
</span>
        
    </li>