<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:46
         compiled from widget/sidebar/categorytree.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'widget/sidebar/categorytree.tpl', 33, false),)), $this); ?>
<?php if ($this->_tpl_vars['oxcmp_categories']): ?>
<?php $this->assign('categories', $this->_tpl_vars['oxcmp_categories']->getClickRoot()); ?>
<?php $this->assign('act', $this->_tpl_vars['oxcmp_categories']->getClickCat()); ?>
<?php if ($this->_tpl_vars['categories']): ?>
<?php $this->assign('deepLevel', $this->_tpl_vars['oView']->getDeepLevel()); ?>
<div class="categoryBox">
    <ul class="tree" id="tree">
    <?php if (!function_exists('smarty_fun_tree')) { function smarty_fun_tree(&$smarty, $params) { $_fun_tpl_vars = $smarty->_tpl_vars; $smarty->assign($params);  ?>
        <?php $smarty->assign('deepLevel', $smarty->_tpl_vars['deepLevel']+1); ?>
        <?php $smarty->assign('oContentCat', $smarty->_tpl_vars['oView']->getContentCategory()); ?>
        <?php $_from = $smarty->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $smarty->_tpl_vars['_cat']):
?>
            <?php if ($smarty->_tpl_vars['_cat']->getIsVisible()): ?>
                                <?php if ($smarty->_tpl_vars['_cat']->getContentCats() && $smarty->_tpl_vars['deepLevel'] > 1): ?>
                    <?php $_from = $smarty->_tpl_vars['_cat']->getContentCats(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $smarty->_tpl_vars['_oCont']):
?>
                    <li class="<?php if ($smarty->_tpl_vars['oContentCat'] && $smarty->_tpl_vars['oContentCat']->getId() == $smarty->_tpl_vars['_oCont']->getId()): ?> active <?php else: ?> end <?php endif; ?>" >
                        <a href="<?php echo $smarty->_tpl_vars['_oCont']->getLink(); ?>
"><i></i><?php echo $smarty->_tpl_vars['_oCont']->oxcontents__oxtitle->value; ?>
</a>
                    </li>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                                <li class="<?php if (! $smarty->_tpl_vars['oContentCat'] && $smarty->_tpl_vars['act'] && $smarty->_tpl_vars['act']->getId() == $smarty->_tpl_vars['_cat']->getId()): ?>active<?php elseif ($smarty->_tpl_vars['_cat']->expanded): ?>exp<?php endif; ?><?php if (! $smarty->_tpl_vars['_cat']->hasVisibleSubCats): ?> end<?php endif; ?>">
                    <a href="<?php echo $smarty->_tpl_vars['_cat']->getLink(); ?>
"><i><span></span></i><?php echo $smarty->_tpl_vars['_cat']->oxcategories__oxtitle->value; ?>
 <?php if ($smarty->_tpl_vars['oView']->showCategoryArticlesCount() && ( $smarty->_tpl_vars['_cat']->getNrOfArticles() > 0 )): ?> (<?php echo $smarty->_tpl_vars['_cat']->getNrOfArticles(); ?>
)<?php endif; ?></a>
                    <?php if ($smarty->_tpl_vars['_cat']->getSubCats() && $smarty->_tpl_vars['_cat']->expanded): ?>
                        <ul><?php smarty_fun_tree($smarty, array('categories'=>$smarty->_tpl_vars['_cat']->getSubCats()));  ?></ul>
                    <?php endif; ?>
                </li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    <?php  $smarty->_tpl_vars = $_fun_tpl_vars; }} smarty_fun_tree($this, array('categories'=>$this->_tpl_vars['categories']));  ?>
    </ul>
    <?php if ($this->_tpl_vars['oView']->showTags()): ?>
         <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwTagCloud','nocookie' => 1,'noscript' => 1), $this);?>

    <?php endif; ?>
</div>
<?php endif; ?>
<?php endif; ?>