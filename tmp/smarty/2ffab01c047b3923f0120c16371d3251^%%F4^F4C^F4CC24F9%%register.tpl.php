<?php /* Smarty version 2.6.28, created on 2016-03-13 19:34:58
         compiled from email/html/register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxcontent', 'email/html/register.tpl', 7, false),array('modifier', 'default', 'email/html/register.tpl', 7, false),)), $this); ?>
<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>
<?php $this->assign('user', $this->_tpl_vars['oEmailView']->getUser()); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/header.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['shop']->oxshops__oxname->value)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php echo smarty_function_oxcontent(array('ident' => ((is_array($_tmp=@$this->_tpl_vars['contentident'])) ? $this->_run_mod_handler('default', true, $_tmp, 'oxregisteremail') : smarty_modifier_default($_tmp, 'oxregisteremail'))), $this);?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>