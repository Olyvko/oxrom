<?php /* Smarty version 2.6.28, created on 2016-05-12 19:34:17
         compiled from form/fieldset/user_shipping.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'form/fieldset/user_shipping.tpl', 5, false),array('function', 'oxscript', 'form/fieldset/user_shipping.tpl', 7, false),array('modifier', 'default', 'form/fieldset/user_shipping.tpl', 6, false),array('modifier', 'oxmultilangassign', 'form/fieldset/user_shipping.tpl', 63, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_user']): ?>
    <?php $this->assign('delivadr', $this->_tpl_vars['oxcmp_user']->getSelectedAddress()); ?>
<?php endif; ?>
<li>
    <label><?php echo smarty_function_oxmultilang(array('ident' => 'ADDRESSES'), $this);?>
</label>
    <input type="hidden" name="changeClass" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['onChangeClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'account_user') : smarty_modifier_default($_tmp, 'account_user')); ?>
">
    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxusershipingaddressselect.js",'priority' => 10), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$( '#addressId' ).oxUserShipingAddressSelect();"), $this);?>

    
        <select id="addressId" name="oxaddressid">
            <option value="-1"><?php echo smarty_function_oxmultilang(array('ident' => 'NEW_ADDRESS'), $this);?>
</option>
            <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                <?php $_from = $this->_tpl_vars['oxcmp_user']->getUserAddresses(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['address']):
?>
                    <option value="<?php echo $this->_tpl_vars['address']->oxaddress__oxid->value; ?>
" <?php if ($this->_tpl_vars['address']->isSelected()): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['address']; ?>
</option>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
        </select>
    
</li>
<?php if ($this->_tpl_vars['delivadr']): ?>
    <li class="form" id="shippingAddressText">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/address/shipping_address.tpl", 'smarty_include_vars' => array('delivadr' => $this->_tpl_vars['delivadr'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php echo smarty_function_oxscript(array('add' => "$('#userChangeShippingAddress').click( function() { $('#shippingAddressForm').show();$('#shippingAddressText').hide(); $('#userChangeShippingAddress').hide();return false;});"), $this);?>

    </li>
<?php endif; ?>
<li>
    <ul id="shippingAddressForm" <?php if ($this->_tpl_vars['delivadr']): ?>style="display: none;"<?php endif; ?>>
        <li>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxsal')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'TITLE','suffix' => 'COLON'), $this);?>
</label>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/salutation.tpl", 'smarty_include_vars' => array('name' => "deladr[oxaddress__oxsal]",'value' => $this->_tpl_vars['delivadr']->oxaddress__oxsal->value,'value2' => $this->_tpl_vars['deladr']['oxaddress__oxsal'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxfname']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfname')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'FIRST_NAME','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfname')): ?>class="js-oxValidate js-oxValidate_notEmpty"<?php endif; ?> type="text" maxlength="255" name="deladr[oxaddress__oxfname]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxfname'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxfname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxfname->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfname')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxfname'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxlname']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxlname')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'LAST_NAME','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxlname')): ?>class="js-oxValidate js-oxValidate_notEmpty"<?php endif; ?> type="text" maxlength="255" name="deladr[oxaddress__oxlname]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxlname'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxlname']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxlname->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxlname')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxlname'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxcompany']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcompany')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'COMPANY','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcompany')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" size="37" maxlength="255" name="deladr[oxaddress__oxcompany]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxcompany'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxcompany']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxcompany->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcompany')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxcompany'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxaddinfo']): ?>class="oxInValid"<?php endif; ?>>
            <?php $this->assign('_address_addinfo_tooltip', ((is_array($_tmp='FORM_FIELDSET_USER_SHIPPING_ADDITIONALINFO2_TOOLTIP')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
            <label <?php if ($this->_tpl_vars['_address_addinfo_tooltip']): ?>title="<?php echo $this->_tpl_vars['_address_addinfo_tooltip']; ?>
" class="tooltip"<?php endif; ?> <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxaddinfo')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'ADDITIONAL_INFO','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxaddinfo')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" size="37" maxlength="255" name="deladr[oxaddress__oxaddinfo]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxaddinfo'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxaddinfo']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxaddinfo->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxaddinfo')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxaddinfo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxstreet']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxstreet') || $this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxstreetnr')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'STREET_AND_STREETNO','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxstreet')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" data-fieldsize="pair-xsmall" maxlength="255" name="deladr[oxaddress__oxstreet]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxstreet'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxstreet']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxstreet->value; ?>
<?php endif; ?>">
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxstreetnr')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" data-fieldsize="xsmall" maxlength="16" name="deladr[oxaddress__oxstreetnr]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxstreetnr'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxstreetnr']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxstreetnr->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxstreet') || $this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxstreetnr')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxstreet'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxzip'] || $this->_tpl_vars['aErrors']['oxaddress__oxcity']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxzip') || $this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcity')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'POSTAL_CODE_AND_CITY','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxzip')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" data-fieldsize="small" maxlength="50" name="deladr[oxaddress__oxzip]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxzip'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxzip']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxzip->value; ?>
<?php endif; ?>">
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcity')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" data-fieldsize="pair-small" maxlength="255" name="deladr[oxaddress__oxcity]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxcity'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxcity']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxcity->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxzip') || $this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcity')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxzip'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxcity'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        
            <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxcountryid']): ?>class="oxInValid"<?php endif; ?>>
                <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcountryid')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'COUNTRY','suffix' => 'COLON'), $this);?>
</label>
                <select <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcountryid')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> id="delCountrySelect" name="deladr[oxaddress__oxcountryid]">
                    <option value="">-</option>
                    <?php $this->assign('blCountrySelected', false); ?>
                    <?php $_from = $this->_tpl_vars['oViewConf']->getCountryList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country_id'] => $this->_tpl_vars['country']):
?>
                        <?php $this->assign('sCountrySelect', ""); ?>
                        <?php if (! $this->_tpl_vars['blCountrySelected']): ?>
                            <?php if (( isset ( $this->_tpl_vars['deladr']['oxaddress__oxcountryid'] ) && $this->_tpl_vars['deladr']['oxaddress__oxcountryid'] == $this->_tpl_vars['country']->oxcountry__oxid->value ) || ( ! isset ( $this->_tpl_vars['deladr']['oxaddress__oxcountryid'] ) && ( $this->_tpl_vars['delivadr']->oxaddress__oxcountry->value == $this->_tpl_vars['country']->oxcountry__oxtitle->value || $this->_tpl_vars['delivadr']->oxaddress__oxcountry->value == $this->_tpl_vars['country']->oxcountry__oxid->value || $this->_tpl_vars['delivadr']->oxaddress__oxcountryid->value == $this->_tpl_vars['country']->oxcountry__oxid->value ) )): ?>
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
                <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxcountryid')): ?>
                    <p class="oxValidateError">
                        <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxcountryid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </p>
                <?php endif; ?>
            </li>
            <li class="stateBox">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/fieldset/state.tpl", 'smarty_include_vars' => array('countrySelectId' => 'delCountrySelect','stateSelectName' => "deladr[oxaddress__oxstateid]",'selectedStateIdPrim' => $this->_tpl_vars['deladr']['oxaddress__oxstateid'],'selectedStateId' => $this->_tpl_vars['delivadr']->oxaddress__oxstateid->value)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </li>
        
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxfon']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfon')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'PHONE','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfon')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" size="37" maxlength="128" name="deladr[oxaddress__oxfon]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxfon'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxfon']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxfon->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfon')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxfon'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
        <li <?php if ($this->_tpl_vars['aErrors']['oxaddress__oxfax']): ?>class="oxInValid"<?php endif; ?>>
            <label <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfax')): ?>class="req"<?php endif; ?>><?php echo smarty_function_oxmultilang(array('ident' => 'FAX','suffix' => 'COLON'), $this);?>
</label>
            <input <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfax')): ?> class="js-oxValidate js-oxValidate_notEmpty" <?php endif; ?> type="text" size="37" maxlength="128" name="deladr[oxaddress__oxfax]" value="<?php if (isset ( $this->_tpl_vars['deladr']['oxaddress__oxfax'] )): ?><?php echo $this->_tpl_vars['deladr']['oxaddress__oxfax']; ?>
<?php else: ?><?php echo $this->_tpl_vars['delivadr']->oxaddress__oxfax->value; ?>
<?php endif; ?>">
            <?php if ($this->_tpl_vars['oView']->isFieldRequired('oxaddress__oxfax')): ?>
                <p class="oxValidateError">
                    <span class="js-oxError_notEmpty"><?php echo smarty_function_oxmultilang(array('ident' => 'ERROR_MESSAGE_INPUT_NOTALLFIELDS'), $this);?>
</span>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/inputvalidation.tpl", 'smarty_include_vars' => array('aErrors' => $this->_tpl_vars['aErrors']['oxaddress__oxfax'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </p>
            <?php endif; ?>
        </li>
    </ul>
</li>
<?php if (! $this->_tpl_vars['noFormSubmit']): ?>
    <li class="formNote"><?php echo smarty_function_oxmultilang(array('ident' => 'COMPLETE_MARKED_FIELDS'), $this);?>
</li>
    <li class="formSubmit">
        <button id="accUserSaveBottom" type="submit" class="submitButton" name="save"><?php echo smarty_function_oxmultilang(array('ident' => 'SAVE'), $this);?>
</button>
    </li>
<?php endif; ?>