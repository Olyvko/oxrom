<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/header/minibasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_dynamic', 'widget/header/minibasket.tpl', 1, false),array('function', 'oxscript', 'widget/header/minibasket.tpl', 3, false),array('insert', 'oxid_newbasketitem', 'widget/header/minibasket.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_oxid_include_dynamic(array('file' => "widget/minibasket/minibasket.tpl"), $this);?>

<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_newbasketitem', 'tpl' => "widget/minibasket/minibasketmodal.tpl", 'type' => 'popup')), $this); ?>

<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>