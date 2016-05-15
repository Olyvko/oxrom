<?php /* Smarty version 2.6.28, created on 2016-03-13 19:34:58
         compiled from page/account/register_success.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/account/register_success.tpl', 5, false),)), $this); ?>
<?php ob_start(); ?>
    <h1 id="openAccHeader" class="pageHead"><?php echo $this->_tpl_vars['oView']->getTitle(); ?>
</h1>
    <div class="info">
      <?php if ($this->_tpl_vars['oView']->getRegistrationStatus() == 1): ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_CONFIRMING_REGISTRATION'), $this);?>
<br><br><?php echo smarty_function_oxmultilang(array('ident' => 'THANK_YOU','suffix' => "."), $this);?>

      <?php elseif ($this->_tpl_vars['oView']->getRegistrationStatus() == 2): ?>
        <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_SENT_CONFIRMATION_EMAIL'), $this);?>
<br><br><?php echo smarty_function_oxmultilang(array('ident' => 'THANK_YOU','suffix' => "."), $this);?>

      <?php endif; ?>
      <?php if ($this->_tpl_vars['oView']->getRegistrationError() == 4): ?>
        <div>
          <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NOT_ABLE_TO_SEND_EMAIL'), $this);?>
<br><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_VERIFY_YOUR_EMAIL'), $this);?>

        </div>
      <?php endif; ?>
    </div>
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