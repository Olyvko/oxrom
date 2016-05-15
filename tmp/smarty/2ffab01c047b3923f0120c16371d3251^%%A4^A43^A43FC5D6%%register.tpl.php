<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:46
         compiled from page/account/register.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'page/account/register.tpl', 3, false),)), $this); ?>
<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['oView']->isEnabledPrivateSales()): ?>
        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCookieNote','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

    <?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_pageBody', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['oView']->isActive('PsLogin')): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "message/errors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>
    <h1 id="openAccHeader" class="pageHead"><?php echo $this->_tpl_vars['oView']->getTitle(); ?>
</h1>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "form/register.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php if ($this->_tpl_vars['oView']->isActive('PsLogin')): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/popup.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array('sidebar' => 'Left')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>