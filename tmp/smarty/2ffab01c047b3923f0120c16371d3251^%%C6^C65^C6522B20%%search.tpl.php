<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/header/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/header/search.tpl', 3, false),array('function', 'oxmultilang', 'widget/header/search.tpl', 14, false),)), $this); ?>

<?php if ($this->_tpl_vars['oView']->showSearch()): ?>
    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxinnerlabel.js",'priority' => 10), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$( '#searchParam' ).oxInnerLabel();"), $this);?>

    <form class="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="get" name="search">
        <div class="searchBox">
            <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

            <input type="hidden" name="cl" value="search">
            <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
            <?php if ($this->_tpl_vars['currency']->id): ?>
                <input type="hidden" name="cur" value="<?php echo $this->_tpl_vars['currency']->id; ?>
">
            <?php endif; ?>
            
                <label for="searchParam" class="innerLabel"><?php echo smarty_function_oxmultilang(array('ident' => 'SEARCH'), $this);?>
</label>
                <input class="textbox" type="text" id="searchParam" name="searchparam" value="<?php echo $this->_tpl_vars['oView']->getSearchParamForHtml(); ?>
">
            
            <input class="searchSubmit" type="submit" value="">
        </div>
    </form>
<?php endif; ?>