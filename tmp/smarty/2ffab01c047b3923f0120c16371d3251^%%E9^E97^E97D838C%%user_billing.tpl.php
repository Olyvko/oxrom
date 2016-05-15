<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:46
         compiled from form/fieldset/user_billing.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'regex_replace', 'form/fieldset/user_billing.tpl', 6, false),array('modifier', 'oxmultilangassign', 'form/fieldset/user_billing.tpl', 59, false),array('modifier', 'cat', 'form/fieldset/user_billing.tpl', 183, false),array('function', 'oxmultilang', 'form/fieldset/user_billing.tpl', 25, false),array('function', 'oxscript', 'form/fieldset/user_billing.tpl', 189, false),)), $this); ?>
<?php $this->assign('invadr', $this->_tpl_vars['oView']->getInvoiceAddress()); ?>
<?php $this->assign('blBirthdayRequired', $this->_tpl_vars['oView']->isFieldRequired('oxuser__oxbirthdate')); ?>
<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxbirthdate']['month'] )): ?>
    <?php $this->assign('iBirthdayMonth', $this->_tpl_vars['invadr']['oxuser__oxbirthdate']['month']); ?>
<?php elseif ($this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value && $this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value != "0000-00-00"): ?>
    <?php $this->assign('iBirthdayMonth', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value)) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/^([0-9]{4})[-]/", "") : smarty_modifier_regex_replace($_tmp, "/^([0-9]{4})[-]/", "")))) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[-]([0-9]{1,2})$/", "") : smarty_modifier_regex_replace($_tmp, "/[-]([0-9]{1,2})$/", ""))); ?>
<?php else: ?>
    <?php $this->assign('iBirthdayMonth', 0); ?>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxbirthdate']['day'] )): ?>
    <?php $this->assign('iBirthdayDay', $this->_tpl_vars['invadr']['oxuser__oxbirthdate']['day']); ?>
<?php elseif ($this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value && $this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value != "0000-00-00"): ?>
    <?php $this->assign('iBirthdayDay', ((is_array($_tmp=$this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value)) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/^([0-9]{4})[-]([0-9]{1,2})[-]/", "") : smarty_modifier_regex_replace($_tmp, "/^([0-9]{4})[-]([0-9]{1,2})[-]/", ""))); ?>
<?php else: ?>
    <?php $this->assign('iBirthdayDay', 0); ?>
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxbirthdate']['year'] )): ?>
    <?php $this->assign('iBirthdayYear', $this->_tpl_vars['invadr']['oxuser__oxbirthdate']['year']); ?>
<?php elseif ($this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value && $this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value != "0000-00-00"): ?>
    <?php $this->assign('iBirthdayYear', ((is_array($_tmp=$this->_tpl_vars['oxcmp_user']->oxuser__oxbirthdate->value)) ? $this->_run_mod_handler('regex_replace', true, $_tmp, "/[-]([0-9]{1,2})[-]([0-9]{1,2})$/", "") : smarty_modifier_regex_replace($_tmp, "/[-]([0-9]{1,2})[-]([0-9]{1,2})$/", ""))); ?>
<?php else: ?>
    <?php $this->assign('iBirthdayYear', 0); ?>
<?php endif; ?>
    <li>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxsal')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'TITLE','suffix' => 'COLON'), $this);?>
</label>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/salutation.tpl", 'smarty_include_vars' => array('name' => "invadr[oxuser__oxsal]",'value' => $this->_tpl_vars['oxcmp_user']->oxuser__oxsal->value,'value2' => $this->_tpl_vars['invadr']['oxuser__oxsal'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxfname']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfname')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'FIRST_NAME','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfname')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="255" name="invadr[oxuser__oxfname]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxfname'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxfname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxfname->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfname')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxfname'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxlname']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxlname')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'LAST_NAME','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxlname')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="255" name="invadr[oxuser__oxlname]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxlname'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxlname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxlname->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxlname')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxlname'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxcompany']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcompany')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'COMPANY','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcompany')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="255" name="invadr[oxuser__oxcompany]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxcompany'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxcompany']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxcompany->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcompany')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxcompany'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxaddinfo']): ?>class="oxInValid"<?php endif; ?>>
        <?php $this->assign('_address_addinfo_tooltip', ((is_array($_tmp='FORM_FIELDSET_USER_BILLING_ADDITIONALINFO_TOOLTIP')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
        <label <?php if ($this->_tpl_vars['_address_addinfo_tooltip']): ?>title="<?php echo $this->_tpl_vars['_address_addinfo_tooltip']; ?>
" class="tooltip"<?php endif; ?> <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxaddinfo')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ADDITIONAL_INFO','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxaddinfo')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="255" name="invadr[oxuser__oxaddinfo]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxaddinfo'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxaddinfo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxaddinfo->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxaddinfo')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxaddinfo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxstreet']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxstreet') || $this->_tpl_vars['oView']->isFieldRequired('oxuser__oxstreetnr')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'STREET_AND_STREETNO','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxstreet')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" data-fieldsize="pair-xsmall" maxlength="255" name="invadr[oxuser__oxstreet]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxstreet'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxstreet']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxstreet->value; ?>
<?php endif; ?>">
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxstreetnr')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" data-fieldsize="xsmall" maxlength="16" name="invadr[oxuser__oxstreetnr]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxstreetnr'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxstreetnr']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxstreetnr->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxstreet') || $this->_tpl_vars['oView']->isFieldRequired('oxuser__oxstreetnr')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxstreet'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxzip']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxzip') || $this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcity')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'POSTAL_CODE_AND_CITY','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxzip')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" data-fieldsize="small" maxlength="16" name="invadr[oxuser__oxzip]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxzip'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxzip']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxzip->value; ?>
<?php endif; ?>">
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcity')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" data-fieldsize="pair-small" maxlength="255" name="invadr[oxuser__oxcity]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxcity'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxcity']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxcity->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxzip') || $this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcity')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxzip'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxustid']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxustid')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_ID_NUMBER','suffix' => 'COLON'), $this);?>
</label>
         <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxustid')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="255" name="invadr[oxuser__oxustid]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxustid'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxustid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxustid->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxustid')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxustid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxcountryid']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcountryid')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'COUNTRY','suffix' => 'COLON'), $this);?>
</label>
          <select <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcountryid')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> id="invCountrySelect" name="invadr[oxuser__oxcountryid]" data-fieldsize="normal">
              <option value="">-</option>
              <?php $this->assign('blCountrySelected', false); ?>
              <?php $_from = $this->_tpl_vars['oViewConf']->getCountryList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country_id'] => $this->_tpl_vars['country']):
?>
                  <?php $this->assign('sCountrySelect', ""); ?>
                  <?php if (! $this->_tpl_vars['blCountrySelected']): ?>
                      <?php if (( isset ( $this->_tpl_vars['invadr']['oxuser__oxcountryid'] ) && $this->_tpl_vars['invadr']['oxuser__oxcountryid'] == $this->_tpl_vars['country']->oxcountry__oxid->value ) || ( ! isset ( $this->_tpl_vars['invadr']['oxuser__oxcountryid'] ) && $this->_tpl_vars['oxcmp_user']->oxuser__oxcountryid->value == $this->_tpl_vars['country']->oxcountry__oxid->value )): ?>
                          <?php $this->assign('blCountrySelected', true); ?>
                          <?php $this->assign('sCountrySelect', 'selected'); ?>
                      <?php endif; ?>
                  <?php endif; ?>
                <option value="<?php echo $this->_tpl_vars['country']->oxcountry__oxid->value; ?>
" <?php echo $this->_tpl_vars['sCountrySelect']; ?>
><?php echo $this->_tpl_vars['country']->oxcountry__oxtitle->value; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxcountryid')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxcountryid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li class="stateBox">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/state.tpl", 'smarty_include_vars' => array('countrySelectId' => 'invCountrySelect','stateSelectName' => "invadr[oxuser__oxstateid]",'selectedStateIdPrim' => $this->_tpl_vars['invadr']['oxuser__oxstateid'],'selectedStateId' => $this->_tpl_vars['oxcmp_user']->oxuser__oxstateid->value)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </li>
    


    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxfon']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfon')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'PHONE','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfon')): ?>class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="128" name="invadr[oxuser__oxfon]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxfon'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxfon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxfon->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfon')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxfon'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxfax']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfax')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'FAX','suffix' => 'COLON'), $this);?>
</label>
          <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfax')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?>type="text" size="37" maxlength="128" name="invadr[oxuser__oxfax]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxfax'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxfax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxfax->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxfax')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxfax'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxmobfon']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxmobfon')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'CELLUAR_PHONE','suffix' => 'COLON'), $this);?>
</label>
         <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxmobfon')): ?> class="js-oxValidate js-oxValidate_notEmpty"<?php endif; ?>type="text" size="37" maxlength="64" name="invadr[oxuser__oxmobfon]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxmobfon'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxmobfon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxmobfon->value; ?>
<?php endif; ?>">
          <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxmobfon')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxmobfon'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
          <?php endif; ?>
    </li>
    <li <?php if ($this->_tpl_vars['aErrors']['oxuser__oxprivfon']): ?>class="oxInValid"<?php endif; ?>>
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxprivfon')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'PERSONAL_PHONE','suffix' => 'COLON'), $this);?>
</label>
        <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxprivfon')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" size="37" maxlength="64" name="invadr[oxuser__oxprivfon]" value="<?php if (isset ( $this->_tpl_vars['invadr']['oxuser__oxprivfon'] )): ?><?php echo $this->_tpl_vars['invadr']['oxuser__oxprivfon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxprivfon->value; ?>
<?php endif; ?>">
        <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxprivfon')): ?>
        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxprivfon'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
        <?php endif; ?>
    </li>
    <?php if ($this->_tpl_vars['oViewConf']->showBirthdayFields()): ?>
    <li class="oxDate<?php if ($this->_tpl_vars['aErrors']['oxuser__oxbirthdate']): ?> oxInValid<?php endif; ?>">
        <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxbirthdate')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'BIRTHDATE','suffix' => 'COLON'), $this);?>
</label>
        <select class='oxMonth js-oxValidate js-oxValidate_date <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxuser__oxbirthdate')): ?> js-oxValidate_notEmpty <?php endif; ?>' name='invadr[oxuser__oxbirthdate][month]'>
            <option value="" >-</option>
            <?php unset($this->_sections['month']);
$this->_sections['month']['name'] = 'month';
$this->_sections['month']['start'] = (int)1;
$this->_sections['month']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['month']['show'] = true;
$this->_sections['month']['max'] = $this->_sections['month']['loop'];
$this->_sections['month']['step'] = 1;
if ($this->_sections['month']['start'] < 0)
    $this->_sections['month']['start'] = max($this->_sections['month']['step'] > 0 ? 0 : -1, $this->_sections['month']['loop'] + $this->_sections['month']['start']);
else
    $this->_sections['month']['start'] = min($this->_sections['month']['start'], $this->_sections['month']['step'] > 0 ? $this->_sections['month']['loop'] : $this->_sections['month']['loop']-1);
if ($this->_sections['month']['show']) {
    $this->_sections['month']['total'] = min(ceil(($this->_sections['month']['step'] > 0 ? $this->_sections['month']['loop'] - $this->_sections['month']['start'] : $this->_sections['month']['start']+1)/abs($this->_sections['month']['step'])), $this->_sections['month']['max']);
    if ($this->_sections['month']['total'] == 0)
        $this->_sections['month']['show'] = false;
} else
    $this->_sections['month']['total'] = 0;
if ($this->_sections['month']['show']):

            for ($this->_sections['month']['index'] = $this->_sections['month']['start'], $this->_sections['month']['iteration'] = 1;
                 $this->_sections['month']['iteration'] <= $this->_sections['month']['total'];
                 $this->_sections['month']['index'] += $this->_sections['month']['step'], $this->_sections['month']['iteration']++):
$this->_sections['month']['rownum'] = $this->_sections['month']['iteration'];
$this->_sections['month']['index_prev'] = $this->_sections['month']['index'] - $this->_sections['month']['step'];
$this->_sections['month']['index_next'] = $this->_sections['month']['index'] + $this->_sections['month']['step'];
$this->_sections['month']['first']      = ($this->_sections['month']['iteration'] == 1);
$this->_sections['month']['last']       = ($this->_sections['month']['iteration'] == $this->_sections['month']['total']);
?>
            <option value="<?php echo $this->_sections['month']['index']; ?>
" <?php if ($this->_tpl_vars['iBirthdayMonth'] == $this->_sections['month']['index']): ?> selected="selected" <?php endif; ?>>
                <?php echo smarty_function_oxmultilang(array('ident' => ((is_array($_tmp='MONTH_NAME_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_sections['month']['index']) : smarty_modifier_cat($_tmp, $this->_sections['month']['index']))), $this);?>

            </option>
            <?php endfor; endif; ?>
        </select>
        <label class="innerLabel" for="oxDay"><?php echo smarty_function_oxmultilang(array('ident' => 'DAY'), $this);?>
</label>
        <input id="oxDay" class='oxDay js-oxValidate' name='invadr[oxuser__oxbirthdate][day]' type="text" data-fieldsize="xsmall" maxlength="2" value="<?php if ($this->_tpl_vars['iBirthdayDay'] > 0): ?><?php echo $this->_tpl_vars['iBirthdayDay']; ?>
<?php endif; ?>" />
        <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinnerlabel.js",'priority' => 10), $this);?>

        <?php echo smarty_function_oxscript(array('add' => "$( '#oxDay' ).oxInnerLabel({sReloadElement:'#userChangeAddress'});"), $this);?>

        <label class="innerLabel" for="oxYear"><?php echo smarty_function_oxmultilang(array('ident' => 'YEAR'), $this);?>
</label>
        <input id="oxYear" class='oxYear js-oxValidate' name='invadr[oxuser__oxbirthdate][year]' type="text" data-fieldsize="small" maxlength="4" value="<?php if ($this->_tpl_vars['iBirthdayYear']): ?><?php echo $this->_tpl_vars['iBirthdayYear']; ?>
<?php endif; ?>" />
        <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinnerlabel.js",'priority' => 10), $this);?>

        <?php echo smarty_function_oxscript(array('add' => "$( '#oxYear' ).oxInnerLabel({sReloadElement:'#userChangeAddress'});"), $this);?>

        <p class="oxValidateError">
            <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
            <span class="js-oxError_incorrectDate"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INCORRECT_DATE'), $this);?>
</span>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxuser__oxbirthdate'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </p>
    </li>
    <?php endif; ?>

    <li class="formNote"><?php echo smarty_function_oxmultilang(array('ident' => 'COMPLETE_MARKED_FIELDS'), $this);?>
</li>
    <?php if (! $this->_tpl_vars['noFormSubmit']): ?>
        <li class="formSubmit">
            <button id="accUserSaveTop" type="submit" name="save" class="submitButton"><?php echo smarty_function_oxmultilang(array('ident' => 'SAVE'), $this);?>
</button>
        </li>
    <?php endif; ?>


<?php echo smarty_function_oxscript(array('add' => "
    $( document ).ready(function() {
        oForm = $('#addressForm');
        $( '.js-oxValidate_notEmpty', oForm).each( function(index) {
            if (this.name != 'user_password' && this.value == '') {
                $('#userChangeAddress').click();
            }
        } );
    });
"), $this);?>