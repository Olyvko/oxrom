<?php /* Smarty version 2.6.28, created on 2016-05-12 19:36:05
         compiled from deliveryset_users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'deliveryset_users.tpl', 1, false),array('function', 'oxmultilang', 'deliveryset_users.tpl', 27, false),)), $this); ?>
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
    <input type="hidden" name="cl" value="deliveryset_users">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<form name="myedit" id="myedit" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

<input type="hidden" name="cl" value="deliveryset_users">
<input type="hidden" name="fnc" value="">
<input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
<input type="hidden" name="editval[oxdeliveryset__oxid]" value="<?php echo $this->_tpl_vars['oxid']; ?>
">

<table cellspacing="0" cellpadding="0" border="0" width="98%">
<tr>
    <!-- Anfang rechte Seite -->
    <td valign="top" class="edittext" align="left" width="50%">
        <input <?php echo $this->_tpl_vars['readonly']; ?>
 type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ASSIGNGROUPS'), $this);?>
" class="edittext" onclick="JavaScript:showDialog('&cl=deliveryset_users&aoc=1&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
');">
    </td>
    <!-- Anfang rechte Seite -->
    <td valign="top" class="edittext" align="left">
        <input <?php echo $this->_tpl_vars['readonly']; ?>
 type="button" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ASSIGNUSERS'), $this);?>
" class="edittext" onclick="JavaScript:showDialog('&cl=deliveryset_users&aoc=2&oxid=<?php echo $this->_tpl_vars['oxid']; ?>
');">
    </td>
    <!-- Ende rechte Seite -->
  </tr>
</table>

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomnaviitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>