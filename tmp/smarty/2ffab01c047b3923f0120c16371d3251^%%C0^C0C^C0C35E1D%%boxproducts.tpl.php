<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/product/boxproducts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/product/boxproducts.tpl', 1, false),array('function', 'oxmultilang', 'widget/product/boxproducts.tpl', 8, false),array('function', 'oxid_include_widget', 'widget/product/boxproducts.tpl', 18, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('add' => "$('a.js-external').attr('target', '_blank');"), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxarticlebox.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$( 'ul.js-articleBox' ).oxArticleBox();"), $this);?>

<?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
<div class="box" <?php if ($this->_tpl_vars['_boxId']): ?>id="<?php echo $this->_tpl_vars['_boxId']; ?>
"<?php endif; ?>>
    <?php if ($this->_tpl_vars['_sHeaderIdent']): ?>
        <h3 class="clear <?php if ($this->_tpl_vars['_sHeaderCssClass']): ?> <?php echo $this->_tpl_vars['_sHeaderCssClass']; ?>
<?php endif; ?>">
            <?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['_sHeaderIdent']), $this);?>

            <?php $this->assign('rsslinks', $this->_tpl_vars['oView']->getRssLinks()); ?>
            <?php if ($this->_tpl_vars['rsslinks']['topArticles']): ?>
                <a class="rss js-external" id="rssTopProducts" href="<?php echo $this->_tpl_vars['rsslinks']['topArticles']['link']; ?>
" title="<?php echo $this->_tpl_vars['rsslinks']['topArticles']['title']; ?>
"><img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('rss.png'); ?>
" alt="<?php echo $this->_tpl_vars['rsslinks']['topArticles']['title']; ?>
"><span class="FXgradOrange corners glowShadow"><?php echo $this->_tpl_vars['rsslinks']['topArticles']['title']; ?>
</span></a>
            <?php endif; ?>
        </h3>
    <?php endif; ?>
    <ul class="js-articleBox featuredList">
        <?php $_from = $this->_tpl_vars['_oBoxProducts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['_sProdList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['_sProdList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_oBoxProduct']):
        $this->_foreach['_sProdList']['iteration']++;
?>
            <?php $this->assign('iProdCount', ($this->_foreach['_sProdList']['iteration'] <= 1)); ?>
            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','_parent' => $this->_tpl_vars['oView']->getClassName(),'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_oBoxProduct']->getLinkType(),'_object' => $this->_tpl_vars['_oBoxProduct'],'anid' => $this->_tpl_vars['_oBoxProduct']->getId(),'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'iProdCount' => $this->_tpl_vars['iProdCount'],'nocookie' => 1,'sWidgetType' => 'product','sListType' => 'boxproduct','inlist' => $this->_tpl_vars['_oBoxProduct']->isInList(),'skipESIforUser' => 1), $this);?>

        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>