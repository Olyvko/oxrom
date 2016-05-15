<?php /* Smarty version 2.6.28, created on 2016-03-13 19:34:58
         compiled from ox:oxregisterplainemailoxcontent0oxbaseshop */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangsal', 'ox:oxregisterplainemailoxcontent0oxbaseshop', 1, false),)), $this); ?>
<p>Hello, <?php echo ((is_array($_tmp=$this->_tpl_vars['user']->oxuser__oxsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxfname->getRawValue(); ?>
 <?php echo $this->_tpl_vars['user']->oxuser__oxlname->getRawValue(); ?>
,

thank you for your registration at <?php echo $this->_tpl_vars['shop']->oxshops__oxname->getRawValue(); ?>
!
From now on, you can log in with your email <?php echo $this->_tpl_vars['user']->oxuser__oxusername->value; ?>
.

Your <?php echo $this->_tpl_vars['shop']->oxshops__oxname->getRawValue(); ?>
 team</p>