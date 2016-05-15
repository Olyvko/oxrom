<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/header/cookienote.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/header/cookienote.tpl', 2, false),array('function', 'oxmultilang', 'widget/header/cookienote.tpl', 6, false),array('function', 'oxgetseourl', 'widget/header/cookienote.tpl', 7, false),array('modifier', 'cat', 'widget/header/cookienote.tpl', 7, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->isEnabled()): ?>
    <?php echo smarty_function_oxscript(array('include' => "js/libs/cookie/jquery.cookie.js"), $this);?>

    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxcookienote.js"), $this);?>

    <div id="cookieNote">
        <div class="notify">
            <?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE'), $this);?>

            <span class="cancelCookie"><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=clearcookies") : smarty_modifier_cat($_tmp, "cl=clearcookies"))), $this);?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE_DISAGREE'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'COOKIE_NOTE_DISAGREE'), $this);?>
</a></span>
            <span class="dismiss"><a href="#" title="<?php echo smarty_function_oxmultilang(array('ident' => 'CLOSE'), $this);?>
">x</a></span>
        </div>
    </div>
    <?php echo smarty_function_oxscript(array('add' => "$('#cookieNote').oxCookieNote();"), $this);?>

<?php endif; ?>
<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>