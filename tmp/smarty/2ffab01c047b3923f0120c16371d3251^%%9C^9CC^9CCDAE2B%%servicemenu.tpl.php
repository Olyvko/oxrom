<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/header/servicemenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxgetseourl', 'widget/header/servicemenu.tpl', 7, false),array('function', 'oxmultilang', 'widget/header/servicemenu.tpl', 7, false),array('function', 'oxscript', 'widget/header/servicemenu.tpl', 10, false),array('modifier', 'cat', 'widget/header/servicemenu.tpl', 7, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/servicebox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<ul id="topMenu">
<li class="login flyout<?php if ($this->_tpl_vars['oxcmp_user']->oxuser__oxpassword->value): ?> logged<?php endif; ?>">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/loginbox.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</li>
<?php if (! $this->_tpl_vars['oxcmp_user']): ?>
    <li><a id="registerLink" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSslSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=register") : smarty_modifier_cat($_tmp, "cl=register"))), $this);?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'REGISTER'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'REGISTER'), $this);?>
</a></li>
<?php endif; ?>
</ul>
<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>