<?php /* Smarty version 2.6.28, created on 2016-05-14 19:01:45
         compiled from order_overview.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'order_overview.tpl', 1, false),array('modifier', 'oxmultilangsal', 'order_overview.tpl', 26, false),array('modifier', 'oxtruncate', 'order_overview.tpl', 66, false),array('modifier', 'strip_tags', 'order_overview.tpl', 66, false),array('modifier', 'cat', 'order_overview.tpl', 211, false),array('modifier', 'oxupper', 'order_overview.tpl', 212, false),array('modifier', 'oxformdate', 'order_overview.tpl', 329, false),array('function', 'oxmultilang', 'order_overview.tpl', 22, false),array('function', 'oxinputhelp', 'order_overview.tpl', 256, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="order_overview">
</form>

    <table cellspacing="0" cellpadding="0" border="0" width="98%">
    <tr>
        <td valign="top" class="edittext" width="50%">
        <?php if ($this->_tpl_vars['edit']): ?>
            <table width="200" border="0" cellspacing="0" cellpadding="0" nowrap>
            <tr><td class="edittext" valign="top">
            
                <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_BILLADDRESS'), $this);?>
</b><br>
                <br>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxbillcompany->value): ?><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_COMPANY'), $this);?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxbillcompany->value; ?>
<br><?php endif; ?>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxbilladdinfo->value): ?><?php echo $this->_tpl_vars['edit']->oxorder__oxbilladdinfo->value; ?>
<br><?php endif; ?>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxbillfname->value; ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxbilllname->value; ?>
<br>
                <?php echo $this->_tpl_vars['edit']->oxorder__oxbillstreet->value; ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxbillstreetnr->value; ?>
<br>
                <?php echo $this->_tpl_vars['edit']->oxorder__oxbillstateid->value; ?>

                <?php echo $this->_tpl_vars['edit']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxbillcity->value; ?>
<br>
                <?php echo $this->_tpl_vars['edit']->oxorder__oxbillcountry->value; ?>
<br>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxbillcompany->value && $this->_tpl_vars['edit']->oxorder__oxbillustid->value): ?>
                    <br>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_VATID'), $this);?>

                    <?php echo $this->_tpl_vars['edit']->oxorder__oxbillustid->value; ?>
<br>
                <?php endif; ?>
                <br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_EMAIL'), $this);?>
: <a href="mailto:<?php echo $this->_tpl_vars['edit']->oxorder__oxbillemail->value; ?>
?subject=<?php echo $this->_tpl_vars['actshop']; ?>
 - <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ORDERNUM'), $this);?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxordernr->value; ?>
" class="edittext"><em><?php echo $this->_tpl_vars['edit']->oxorder__oxbillemail->value; ?>
</em></a><br>
                <br>
            
            </td>
            <?php if ($this->_tpl_vars['edit']->oxorder__oxdelstreet->value): ?>
            <td class="edittext" valign="top">
                
                    <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DELIVERYADDRESS'), $this);?>
:</b><br>
                    <br>
                    <?php if ($this->_tpl_vars['edit']->oxorder__oxdelcompany->value): ?>Firma <?php echo $this->_tpl_vars['edit']->oxorder__oxdelcompany->value; ?>
<br><?php endif; ?>
                    <?php if ($this->_tpl_vars['edit']->oxorder__oxdeladdinfo->value): ?><?php echo $this->_tpl_vars['edit']->oxorder__oxdeladdinfo->value; ?>
<br><?php endif; ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxdelsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxdelfname->value; ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxdellname->value; ?>
<br>
                    <?php echo $this->_tpl_vars['edit']->oxorder__oxdelstreet->value; ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxdelstreetnr->value; ?>
<br>
                    <?php echo $this->_tpl_vars['edit']->oxorder__oxdelstateid->value; ?>

                    <?php echo $this->_tpl_vars['edit']->oxorder__oxdelzip->value; ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxdelcity->value; ?>
<br>
                    <?php echo $this->_tpl_vars['edit']->oxorder__oxdelcountry->value; ?>
<br>
                    <br>
                
            </td>
            <?php endif; ?>
            </tr></table>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ITEM'), $this);?>
:</b><br>
            <br>
            <table cellspacing="0" cellpadding="0" border="0">
            
                <?php $_from = $this->_tpl_vars['orderArticles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
                <tr>
                    <td valign="top" class="edittext"><?php echo $this->_tpl_vars['listitem']->oxorderarticles__oxamount->value; ?>
 * </td>
                    <td valign="top" class="edittext">&nbsp;<?php echo $this->_tpl_vars['listitem']->oxorderarticles__oxartnum->value; ?>
</td>
                    <td valign="top" class="edittext">&nbsp;<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['listitem']->oxorderarticles__oxtitle->getRawValue())) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 20, "") : smarty_modifier_oxtruncate($_tmp, 20, "")))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php if ($this->_tpl_vars['listitem']->oxwrapping__oxname->value): ?>&nbsp;(<?php echo $this->_tpl_vars['listitem']->oxwrapping__oxname->value; ?>
)&nbsp;<?php endif; ?></td>
                    <td valign="top" class="edittext">&nbsp;<?php echo $this->_tpl_vars['listitem']->oxorderarticles__oxselvariant->value; ?>
</td>
                    <?php if ($this->_tpl_vars['edit']->isNettoMode()): ?>
                        <td valign="top" class="edittext">&nbsp;&nbsp;<?php echo $this->_tpl_vars['listitem']->getNetPriceFormated(); ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
</td>
                    <?php else: ?>
                        <td valign="top" class="edittext">&nbsp;&nbsp;<?php echo $this->_tpl_vars['listitem']->getTotalBrutPriceFormated(); ?>
 <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
</td>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['listitem']->getPersParams()): ?>
                    <td valign="top" class="edittext">
                        <?php $_from = $this->_tpl_vars['listitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['persparams'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['persparams']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
        $this->_foreach['persparams']['iteration']++;
?>
                            &nbsp;&nbsp;,&nbsp;<em>
                                <?php if (($this->_foreach['persparams']['iteration'] <= 1) && ($this->_foreach['persparams']['iteration'] == $this->_foreach['persparams']['total'])): ?>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LABEL'), $this);?>

                                <?php else: ?>
                                    <?php echo $this->_tpl_vars['sVar']; ?>
 :
                                <?php endif; ?>
                                <?php echo $this->_tpl_vars['aParam']; ?>

                            </em>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                    <?php endif; ?>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            
            </table>
            <br>
            <?php if ($this->_tpl_vars['edit']->oxorder__oxstorno->value): ?>
            <span class="orderstorno"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_STORNO'), $this);?>
</span><br><br>
            <?php endif; ?>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ATALL'), $this);?>
: </b><br><br>
            <table border="0" cellspacing="0" cellpadding="0" id="order.info">
            
            <?php if ($this->_tpl_vars['edit']->isNettoMode()): ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_INETTO'), $this);?>
</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalNetSum(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DISCOUNT'), $this);?>
&nbsp;&nbsp;</td>
                <td class="edittext" align="right"><b>- <?php echo $this->_tpl_vars['edit']->getFormattedDiscount(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php $_from = $this->_tpl_vars['aProductVats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iVat'] => $this->_tpl_vars['dVatPrice']):
?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IVAT'), $this);?>
 (<?php echo $this->_tpl_vars['iVat']; ?>
%)</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['dVatPrice']; ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IBRUTTO'), $this);?>
</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalBrutSum(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
            <?php else: ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IBRUTTO'), $this);?>
</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalBrutSum(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>

                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DISCOUNT'), $this);?>
&nbsp;&nbsp;</td>
                <td class="edittext" align="right"><b>- <?php echo $this->_tpl_vars['edit']->getFormattedDiscount(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_INETTO'), $this);?>
</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalNetSum(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php $_from = $this->_tpl_vars['aProductVats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iVat'] => $this->_tpl_vars['dVatPrice']):
?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_IVAT'), $this);?>
 (<?php echo $this->_tpl_vars['iVat']; ?>
%)</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['dVatPrice']; ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxvoucherdiscount->value): ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_VOUCHERS'), $this);?>
</td>
                <td class="edittext" align="right"><b>- <?php echo $this->_tpl_vars['edit']->getFormattedTotalVouchers(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php endif; ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_DELIVERYCOST'), $this);?>
&nbsp;&nbsp;</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedeliveryCost(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_PAYCOST'), $this);?>
&nbsp;&nbsp;</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedPayCost(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxwrapcost->value): ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_WRAPPING'), $this);?>
&nbsp;<?php if ($this->_tpl_vars['wrapping']): ?>(<?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxname->value; ?>
)<?php endif; ?>&nbsp;</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedWrapCost(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxgiftcardcost->value): ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_CARD'), $this);?>
&nbsp;<?php if ($this->_tpl_vars['giftCard']): ?>(<?php echo $this->_tpl_vars['giftCard']->oxwrapping__oxname->value; ?>
)<?php endif; ?>&nbsp;</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedGiftCardCost(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['edit']->oxorder__oxtsprotectid->value): ?>
                <tr>
                <td class="edittext" height="15"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_PROTECTION'), $this);?>
&nbsp;</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['tsprotectcosts']; ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
                <?php endif; ?>
                <tr>
                <td class="edittext" height="25"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SUMTOTAL'), $this);?>
&nbsp;&nbsp;</td>
                <td class="edittext" align="right"><b><?php echo $this->_tpl_vars['edit']->getFormattedTotalOrderSum(); ?>
</b></td>
                <td class="edittext">&nbsp;<b><?php if ($this->_tpl_vars['edit']->oxorder__oxcurrency->value): ?> <?php echo $this->_tpl_vars['edit']->oxorder__oxcurrency->value; ?>
 <?php else: ?> <?php echo $this->_tpl_vars['currency']->name; ?>
 <?php endif; ?></b></td>
                </tr>
            
            </table>

            <br>
            <table>
            
                <tr>
                    <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_PAYMENTTYPE'), $this);?>
: </td>
                    <td class="edittext"><b><?php echo $this->_tpl_vars['paymentType']->oxpayments__oxdesc->value; ?>
</b></td>
                </tr>
                <tr>
                    <td class="edittext"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_DELTYPE'), $this);?>
: </td>
                    <td class="edittext"><b><?php echo $this->_tpl_vars['deliveryType']->oxdeliveryset__oxtitle->value; ?>
</b><br></td>
                </tr>
            
            </table>

            <br>
            <?php if ($this->_tpl_vars['paymentType']->aDynValues): ?>
                <table cellspacing="0" cellpadding="0" border="0">
                
                    <?php $_from = $this->_tpl_vars['paymentType']->aDynValues; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
                    <?php $this->assign('ident', ((is_array($_tmp='ORDER_OVERVIEW_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['value']->name) : smarty_modifier_cat($_tmp, $this->_tpl_vars['value']->name))); ?>
                    <?php $this->assign('ident', ((is_array($_tmp=$this->_tpl_vars['ident'])) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))); ?>
                    <tr>
                        <td class="edittext">
                        <?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['ident']), $this);?>
:&nbsp;
                        </td>
                        <td class="edittext">
                           <?php echo $this->_tpl_vars['value']->value; ?>

                        </td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                
                </table><br>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['edit']->oxorder__oxremark->value): ?>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_REMARK'), $this);?>
</b>
            <table cellspacing="0" cellpadding="0" border="0">
                <tr>
                    <td class="edittext wrap"><?php echo $this->_tpl_vars['edit']->oxorder__oxremark->value; ?>
</td>
                </tr>
            </table>
            <?php endif; ?>
        <?php endif; ?>
        </td>
        <td>&nbsp;&nbsp;
        </td>
        <td valign="top" class="edittext">
            <?php if ($this->_tpl_vars['edit']): ?>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ORDERNUM'), $this);?>
: </b><?php echo $this->_tpl_vars['edit']->oxorder__oxordernr->value; ?>
<br>
            <?php $this->assign('user', $this->_tpl_vars['edit']->getOrderUser()); ?>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'CUSTOMERNUM'), $this);?>
: </b><?php echo $this->_tpl_vars['user']->oxuser__oxcustnr->value; ?>
<br>
            <br>
                <form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="order_overview">
                <input type="hidden" name="fnc" value="changefolder">
                <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                <input type="hidden" name="folderclass" value="oxorder">
                
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_INFOLDER'), $this);?>
:&nbsp;
                    <select name="setfolder" class="folderselect" onChange="document.myedit.submit();" <?php echo $this->_tpl_vars['readonly']; ?>
>
                    <?php $_from = $this->_tpl_vars['afolder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['color']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']; ?>
" <?php if ($this->_tpl_vars['edit']->oxorder__oxfolder->value == $this->_tpl_vars['field'] || ( ((is_array($_tmp=$this->_tpl_vars['field'])) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)) == $this->_tpl_vars['edit']->oxorder__oxfolder->value )): ?>SELECTED<?php endif; ?> style="color: <?php echo $this->_tpl_vars['color']; ?>
;"><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['field'],'noerror' => true), $this);?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                    </select>
                    <?php echo smarty_function_oxinputhelp(array('ident' => 'HELP_ORDER_OVERVIEW_INFOLDER'), $this);?>

                    &nbsp;&nbsp;
                
                </form>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['edit'] && $this->_tpl_vars['edit']->oxorder__oxtransstatus->value): ?>
                
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_INTSTATUS'), $this);?>
:&nbsp;<b><?php echo $this->_tpl_vars['edit']->oxorder__oxtransstatus->value; ?>
</b><br>
                
            <?php endif; ?>
            <br>
            <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_REVIEW'), $this);?>
: </b>
            <br>
            <table cellspacing="0" cellpadding="0" border="0">
            
                <tr>
                    <td class="edittext" height="20">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_ORDERAMTODAY'), $this);?>
:
                    </td>
                    <td class="edittext">
                    &nbsp;<b><?php echo $this->_tpl_vars['ordercnt']; ?>
</b>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" height="20">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_ORDERSUMTODAY'), $this);?>
:
                    </td>
                    <td class="edittext">
                    &nbsp;<b><?php echo $this->_tpl_vars['ordersum']; ?>
</b> <?php echo $this->_tpl_vars['currency']->name; ?>

                    </td>
                </tr>
                <tr>
                    <td class="edittext" height="20">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_ORDERAMTOTAL'), $this);?>
:
                    </td>
                    <td class="edittext">
                    &nbsp;<b><?php echo $this->_tpl_vars['ordertotalcnt']; ?>
</b>
                    </td>
                </tr>
                <tr>
                    <td class="edittext" height="20">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_ORDERSUMTOTAL'), $this);?>
:
                    </td>
                    <td class="edittext">
                    &nbsp;<b><?php echo $this->_tpl_vars['ordertotalsum']; ?>
</b> <?php echo $this->_tpl_vars['currency']->name; ?>

                    </td>
                </tr>
            
            </table>
        <br>
        <?php if ($this->_tpl_vars['edit']): ?>
        <table cellspacing="0" cellpadding="0" border="0">
        <form name="sendorder" id="sendorder" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="order_overview">
        <input type="hidden" name="fnc" value="sendorder">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="editval[oxorder__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        
            <tr>
                <td class="edittext">
                </td>
                <td class="edittext" style="border : 1px #A9A9A9; border-style : solid solid solid solid; padding-top: 5px; padding-bottom: 5px; padding-right: 5px; padding-left: 5px;">
                    <input type="submit" class="edittext" name="save" value="&nbsp;&nbsp;<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NOWSEND'), $this);?>
&nbsp;&nbsp;" <?php echo $this->_tpl_vars['readonly']; ?>
><br>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SENDEMAIL'), $this);?>
 <input class="edittext" type="checkbox" name="sendmail" value='1' <?php echo $this->_tpl_vars['readonly']; ?>
>
                </td>
            </tr>
            </form>
            <tr>
                <td class="edittext">
                </td>
                <td class="edittext" valign="bottom"><br>
                <?php if ($this->_tpl_vars['oView']->canResetShippingDate()): ?>
                    <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SENDON'), $this);?>
</b><b><?php echo ((is_array($_tmp=$this->_tpl_vars['edit']->oxorder__oxsenddate)) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
</b>
                <?php else: ?>
                    <b><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_NOSENT'), $this);?>
</b>
                <?php endif; ?>
                </td>
            </tr>
        
        <?php if ($this->_tpl_vars['oView']->canResetShippingDate()): ?>
        <form name="resetorder" id="resetorder" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="order_overview">
        <input type="hidden" name="fnc" value="resetorder">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <input type="hidden" name="editval[oxorder__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        
            <tr>
                <td class="edittext">
                </td>
                <td class="edittext"><br>
                    <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SETBACKSENDTIME'), $this);?>
" <?php echo $this->_tpl_vars['readonly']; ?>
>
                </td>
            </tr>
        
        </form>
        <?php endif; ?>
        </table>
        <?php endif; ?>
        </td>

        <td valign="top" class="edittext" align="right">
            
                  <table cellspacing="0" cellpadding="0" style="padding-top: 5px; padding-left: 5px; padding-right: 5px; border : 1px #A9A9A9; border-style : solid solid solid solid;" width="220">
                  <form name="myedit2" id="myedit2" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post" >
                  <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                  <input type="hidden" name="cl" value="order_overview">
                  <input type="hidden" name="fnc" value="exportlex">
                  <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
                  <tr>
                    <td class="edittext">
                      <b><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_XMLEXPORT'), $this);?>
</b>
                    </td>
                    <td valign="top" class="edittext">
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_FROMORDERNUM'), $this);?>
<br>
                      <input type="text" class="editinput" size="15" maxlength="15" name="ordernr" value=""><br>
                      <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_TILLORDERNUM'), $this);?>
<br>
                      <input type="text" class="editinput" size="15" maxlength="15" name="toordernr" value=""><br><br>
                      <input type="submit" class="edittext" name="save" value="<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_EXPORT'), $this);?>
">
                    </td>
                  </tr>
                  </table>
                  </form>
          
<?php if ($this->_tpl_vars['edit'] && $this->_tpl_vars['oView']->canExport()): ?>
    <br>
    <form name="myedit2" id="myedit2" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post" target="expPDF">
        <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

        <input type="hidden" name="cl" value="order_overview">
        <input type="hidden" name="fnc" value="createPDF">
        <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
        <table cellspacing="0" cellpadding="0"
               style="padding-top: 5px; padding-left: 5px; padding-right: 5px; padding-bottom: 5px; border : 1px #A9A9A9; border-style : solid solid solid solid;"
               width="220">

            <tr>
                <td rowspan="3">
                    <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl(); ?>
/pdf_icon.gif" width="41" height="38" alt="" border="0"
                         hspace="0" vspace="0" align="absmiddle">
                </td>
                <td valign="top" class="edittext" align="right">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_PDF_TYPE'), $this);?>
:&nbsp;<select name="pdftype" class="editinput"
                                                                                   style="width:80px;">
                        <option value="standart"
                                SELECTED><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_PDF_STANDART'), $this);?>

                        </option>
                        <option value="dnote"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_PDF_DNOTE'), $this);?>
</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right" class="edittext">
                    <?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_LANGUAGE'), $this);?>
<select name="pdflanguage" class="saveinnewlanginput"
                                                                     style="width:80px;">
                        <?php $_from = $this->_tpl_vars['alangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang'] => $this->_tpl_vars['slang']):
?>
                    <option value="<?php echo $this->_tpl_vars['lang']; ?>
" <?php if ($this->_tpl_vars['lang'] == '0'): ?>SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['slang']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right" class="edittext"><br/>
                    <input type="submit" class="edittext" name="save"
                           value="<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_OVERVIEW_PDF'), $this);?>
">
                    <iframe name="expPDF" width="0" height="0" border="0" style="display:none;"></iframe>
                </td>
            </tr>
        </table>
    </form>
<?php endif; ?>
        </td>
    </tr>
    </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>