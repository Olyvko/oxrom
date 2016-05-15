<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:09
         compiled from widget/sidebar/tags.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/sidebar/tags.tpl', 6, false),array('function', 'oxgetseourl', 'widget/sidebar/tags.tpl', 20, false),array('modifier', 'cat', 'widget/sidebar/tags.tpl', 20, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->getTagCloudManager()): ?>

    <?php if ($this->_tpl_vars['oView']->displayInBox()): ?>
                <div id="tagBox" class="box tagCloud">
            <h3><?php echo smarty_function_oxmultilang(array('ident' => 'TAGS'), $this);?>
</h3>
            <div class="content">
    <?php else: ?>
        <div class="categoryTagsBox">
            <h3><?php echo smarty_function_oxmultilang(array('ident' => 'TAGS'), $this);?>
</h3>
            <div class="categoryTags">
    <?php endif; ?>
    <?php $this->assign('oCloudManager', $this->_tpl_vars['oView']->getTagCloudManager()); ?>
    <?php $this->assign('oTagSet', $this->_tpl_vars['oCloudManager']->getCloudArray()); ?>
    <?php $_from = $this->_tpl_vars['oTagSet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oTag']):
?>
        <a class="tagitem_<?php echo $this->_tpl_vars['oCloudManager']->getTagSize($this->_tpl_vars['oTag']->getTitle()); ?>
" href="<?php echo $this->_tpl_vars['oTag']->getLink(); ?>
"><?php echo $this->_tpl_vars['oTag']->getTitle(); ?>
</a>
    <?php endforeach; endif; unset($_from); ?>
    <?php if ($this->_tpl_vars['oView']->isMoreTagsVisible()): ?>
        <br>
        <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=tags") : smarty_modifier_cat($_tmp, "cl=tags"))), $this);?>
" class="readMore"><?php echo smarty_function_oxmultilang(array('ident' => 'MORE','suffix' => 'ELLIPSIS'), $this);?>
</a>
    <?php endif; ?>
        </div>
    </div>
<?php endif; ?>