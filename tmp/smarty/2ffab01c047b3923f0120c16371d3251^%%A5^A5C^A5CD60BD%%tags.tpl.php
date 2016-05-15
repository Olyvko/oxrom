<?php /* Smarty version 2.6.28, created on 2016-03-16 21:54:55
         compiled from page/details/inc/tags.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/details/inc/tags.tpl', 3, false),array('function', 'oxmultilang', 'page/details/inc/tags.tpl', 12, false),array('modifier', 'count', 'page/details/inc/tags.tpl', 11, false),)), $this); ?>
<?php $this->assign('oDetailsProduct', $this->_tpl_vars['oView']->getProduct()); ?>
<?php if ($this->_tpl_vars['oView']->showTags() && ( $this->_tpl_vars['oView']->getTagCloudManager() || ( $this->_tpl_vars['oxcmp_user'] && $this->_tpl_vars['oDetailsProduct'] ) )): ?>
    <?php echo smarty_function_oxscript(array('include' => 'js/widgets/oxajax.js'), $this);?>

    <?php echo smarty_function_oxscript(array('include' => 'js/widgets/oxtag.js'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$('p.tagCloud a.tagText').click(oxTag.highTag);"), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$('#saveTag').click(oxTag.saveTag);"), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$('#cancelTag').click(oxTag.cancelTag);"), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$('#editTag').click(oxTag.editTag);"), $this);?>

    <p class="tagCloud">
        <?php $this->assign('oCloudManager', $this->_tpl_vars['oView']->getTagCloudManager()); ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['oCloudManager']->getCloudArray())) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) < 0): ?>
            <?php echo smarty_function_oxmultilang(array('ident' => 'NO_TAGS'), $this);?>

        <?php endif; ?>
        <?php $this->assign('oTagSet', $this->_tpl_vars['oCloudManager']->getCloudArray()); ?>
        <?php $_from = $this->_tpl_vars['oTagSet']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oTag']):
?>
            <a class="tagitem_<?php echo $this->_tpl_vars['oCloudManager']->getTagSize($this->_tpl_vars['oTag']->getTitle()); ?>
" href="<?php echo $this->_tpl_vars['oTag']->getLink(); ?>
"><?php echo $this->_tpl_vars['oTag']->getTitle(); ?>
</a>
        <?php endforeach; endif; unset($_from); ?>
    </p>
    <?php if ($this->_tpl_vars['oDetailsProduct'] && $this->_tpl_vars['oView']->canChangeTags()): ?>
      <form action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
#tags" method="post" id="tagsForm" >
        <div>
          <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

          <?php echo $this->_tpl_vars['oViewConf']->getNavFormParams(); ?>

          <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oViewConf']->getTopActiveClassName(); ?>
">
          <input type="hidden" name="aid" value="<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxid->value; ?>
">
          <input type="hidden" name="anid" value="<?php echo $this->_tpl_vars['oDetailsProduct']->oxarticles__oxnid->value; ?>
">
          <input type="hidden" name="fnc" value="editTags">
          <button class="submitButton" id="editTag" type="submit"><?php echo smarty_function_oxmultilang(array('ident' => 'EDIT_TAGS'), $this);?>
</button>
        </div>
      </form>
    <?php endif; ?>
<?php endif; ?>