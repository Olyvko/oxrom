<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:06
         compiled from widget/product/bargainitems.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/product/bargainitems.tpl', 1, false),array('function', 'oxid_include_widget', 'widget/product/bargainitems.tpl', 6, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('add' => "$('a.js-external').attr('target', '_blank');"), $this);?>

<?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
<?php $_from = $this->_tpl_vars['oView']->getBargainArticleList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bargainList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bargainList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['bargainList']['iteration']++;
?>
    <?php if (($this->_foreach['bargainList']['iteration'] <= 1)): ?>
        <?php $this->assign('rsslinks', $this->_tpl_vars['oView']->getRssLinks()); ?>
        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_product']->getLinkType(),'_object' => $this->_tpl_vars['_product'],'anid' => $this->_tpl_vars['_product']->getId(),'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'rsslinks' => $this->_tpl_vars['rsslinks'],'iIteration' => $this->_foreach['bargainList']['iteration'],'sWidgetType' => 'product','sListType' => 'bargainitem','inlist' => $this->_tpl_vars['_product']->isInList(),'skipESIforUser' => 1), $this);?>

    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>