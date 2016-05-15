<?php /* Smarty version 2.6.28, created on 2016-05-12 19:34:17
         compiled from form/fieldset/order_newsletter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'form/fieldset/order_newsletter.tpl', 4, false),)), $this); ?>
<?php if ($this->_tpl_vars['blSubscribeNews']): ?>
    <li>
        
        <label for="subscribeNewsletter"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER_SUBSCRIPTION','suffix' => 'COLON'), $this);?>
</label>
        <input type="hidden" name="blnewssubscribed" value="0">
        <input id="subscribeNewsletter" type="checkbox" name="blnewssubscribed" value="1" <?php if ($this->_tpl_vars['oView']->isNewsSubscribed()): ?>checked<?php endif; ?>>
        <br>
        <div class="note"><?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_NEWSLETTER_SUBSCRIPTION'), $this);?>
</div>
        
    </li>
<?php endif; ?>