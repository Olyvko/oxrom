<?php /* Smarty version 2.6.28, created on 2016-05-12 19:34:17
         compiled from form/fieldset/order_remark.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'form/fieldset/order_remark.tpl', 2, false),array('function', 'oxmultilang', 'form/fieldset/order_remark.tpl', 5, false),)), $this); ?>
<?php if ($this->_tpl_vars['blOrderRemark']): ?>
    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinnerlabel.js",'priority' => 10), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$( '#orderRemark' ).oxInnerLabel();"), $this);?>

    <li>
        <label><?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>
</label>
        <label for="orderRemark" class="innerLabel textArea"><?php echo smarty_function_oxmultilang(array('ident' => 'HERE_YOU_CAN_ENETER_MESSAGE'), $this);?>
</label>
        <textarea id="orderRemark" cols="60" rows="7" name="order_remark" class="areabox" ><?php echo $this->_tpl_vars['oView']->getOrderRemark(); ?>
</textarea>
    </li>
<?php endif; ?>