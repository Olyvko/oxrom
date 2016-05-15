<?php /* Smarty version 2.6.28, created on 2016-03-16 22:41:26
         compiled from widget/locator/itemsperpage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/locator/itemsperpage.tpl', 3, false),array('function', 'oxmultilang', 'widget/locator/itemsperpage.tpl', 7, false),array('modifier', 'oxaddparams', 'widget/locator/itemsperpage.tpl', 18, false),)), $this); ?>
<?php $this->assign('_additionalParams', $this->_tpl_vars['oView']->getAdditionalParams()); ?>
<?php $this->assign('_listType', $this->_tpl_vars['oView']->getListDisplayType()); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxdropdown.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('div.dropDown p').oxDropDown();"), $this);?>

<div class="dropDown js-fnLink" id="itemsPerPage">
    <p>
        <label><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCTS_PER_PAGE','suffix' => 'COLON'), $this);?>
</label>
        <span>
            <?php if ($this->_tpl_vars['oViewConf']->getArtPerPageCount()): ?>
                <?php echo $this->_tpl_vars['oViewConf']->getArtPerPageCount(); ?>

            <?php else: ?>
                <?php echo smarty_function_oxmultilang(array('ident' => 'CHOOSE'), $this);?>

            <?php endif; ?>
        </span>
    </p>
    <ul class="drop FXgradGreyLight shadow">
        <?php $_from = $this->_tpl_vars['oViewConf']->getNrOfCatArticles(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iItemsPerPage']):
?>
            <li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['oView']->getBaseLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "ldtype=".($this->_tpl_vars['_listType'])."&amp;_artperpage=".($this->_tpl_vars['iItemsPerPage'])."&amp;pgNr=0&amp;".($this->_tpl_vars['_additionalParams'])) : smarty_modifier_oxaddparams($_tmp, "ldtype=".($this->_tpl_vars['_listType'])."&amp;_artperpage=".($this->_tpl_vars['iItemsPerPage'])."&amp;pgNr=0&amp;".($this->_tpl_vars['_additionalParams']))); ?>
" rel="nofollow" <?php if ($this->_tpl_vars['oViewConf']->getArtPerPageCount() == $this->_tpl_vars['iItemsPerPage']): ?> class="selected"<?php endif; ?>><?php echo $this->_tpl_vars['iItemsPerPage']; ?>
</a></li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>