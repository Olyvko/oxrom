<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:46
         compiled from form/fieldset/state.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/fieldset/state.tpl', 13, false),array('function', 'oxmultilang', 'form/fieldset/state.tpl', 41, false),)), $this); ?>
<?php if ($this->_tpl_vars['selectedStateIdPrim']): ?>
  <?php $this->assign('selectedStateId', $this->_tpl_vars['selectedStateIdPrim']); ?>
<?php endif; ?>

<?php $this->assign('divId', "oxStateDiv_".($this->_tpl_vars['stateSelectName'])); ?>
<?php $this->assign('stateSelectId', "oxStateSelect_".($this->_tpl_vars['stateSelectName'])); ?>

<?php if ($this->_tpl_vars['currCountry']): ?>
  <?php $this->assign('showDiv', 'true'); ?>
<?php else: ?>
  <?php $this->assign('showDiv', 'false'); ?>
<?php endif; ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxcountrystateselect.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$( '#".($this->_tpl_vars['countrySelectId'])."' ).oxCountryStateSelect({selectedStateId:'".($this->_tpl_vars['selectedStateId'])."'});"), $this);?>


<script type="text/javascript"><!--
  var allStates = new Array();
  var allStateIds = new Array();
  var allCountryIds = new Object();
  var cCount = 0;
  <?php $_from = $this->_tpl_vars['oViewConf']->getCountryList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['country_id'] => $this->_tpl_vars['country']):
?>

    var states = new Array();
    var ids = new Array();
    var i = 0;

    <?php $this->assign('countryStates', $this->_tpl_vars['country']->getStates()); ?>
    <?php $_from = $this->_tpl_vars['countryStates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['state_id'] => $this->_tpl_vars['state']):
?>
        states[i] = '<?php echo $this->_tpl_vars['state']->oxstates__oxtitle->value; ?>
';
        ids[i] = '<?php echo $this->_tpl_vars['state']->oxstates__oxid->value; ?>
';
        i++;
    <?php endforeach; endif; unset($_from); ?>
    allStates[++cCount] = states;
    allStateIds[cCount]  = ids;
    allCountryIds['<?php echo $this->_tpl_vars['country']->getId(); ?>
']  = cCount;
  <?php endforeach; endif; unset($_from); ?>

--></script>
<span id="<?php echo $this->_tpl_vars['divId']; ?>
" class=stateSelector>
  <select name="<?php echo $this->_tpl_vars['stateSelectName']; ?>
" id="<?php echo $this->_tpl_vars['stateSelectId']; ?>
" data-fieldsize="normal">
      <option value=""><?php echo smarty_function_oxmultilang(array('ident' => 'PLEASE_SELECT_STATE'), $this);?>
</option>
  </select>
</span>