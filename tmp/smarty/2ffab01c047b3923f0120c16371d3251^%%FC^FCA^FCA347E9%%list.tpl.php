<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:06
         compiled from widget/product/list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/product/list.tpl', 5, false),array('function', 'oxid_include_widget', 'widget/product/list.tpl', 28, false),array('modifier', 'count', 'widget/product/list.tpl', 22, false),array('modifier', 'cat', 'widget/product/list.tpl', 26, false),)), $this); ?>
<?php if (! $this->_tpl_vars['type']): ?>
    <?php $this->assign('type', 'infogrid'); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['type'] == 'line' || $this->_tpl_vars['type'] == 'infogrid'): ?>
    <?php echo smarty_function_oxscript(array('include' => "js/widgets/oxcenterelementonhover.js",'priority' => 10), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$( '.pictureBox' ).oxCenterElementOnHover();"), $this);?>

<?php endif; ?>

<?php echo smarty_function_oxscript(array('add' => "$('a.js-external').attr('target', '_blank');"), $this);?>

<?php if ($this->_tpl_vars['head']): ?>
    <?php if ($this->_tpl_vars['header'] == 'light'): ?>
        <h3 class="lightHead sectionHead"><?php echo $this->_tpl_vars['head']; ?>
</h3>
    <?php else: ?>
        <h2 class="sectionHead clear">
            <span><?php echo $this->_tpl_vars['head']; ?>
</span>
            <?php if ($this->_tpl_vars['rsslink']): ?>
                    <a class="rss js-external" id="<?php echo $this->_tpl_vars['rssId']; ?>
" href="<?php echo $this->_tpl_vars['rsslink']['link']; ?>
" title="<?php echo $this->_tpl_vars['rsslink']['title']; ?>
"><img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('rss.png'); ?>
" alt="<?php echo $this->_tpl_vars['rsslink']['title']; ?>
"><span class="FXgradOrange corners glowShadow"><?php echo $this->_tpl_vars['rsslink']['title']; ?>
</span></a>
            <?php endif; ?>
        </h2>
    <?php endif; ?>
<?php endif; ?>
<?php if (count($this->_tpl_vars['products']) > 0): ?>
    <ul class="<?php echo $this->_tpl_vars['type']; ?>
View clear" id="<?php echo $this->_tpl_vars['listId']; ?>
">
        <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
        <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['productlist'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['productlist']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['productlist']['iteration']++;
?>
            <?php $this->assign('_sTestId', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['listId'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_') : smarty_modifier_cat($_tmp, '_')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_foreach['productlist']['iteration']) : smarty_modifier_cat($_tmp, $this->_foreach['productlist']['iteration']))); ?>
            <li class="productData">
                <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwArticleBox','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'iLinkType' => $this->_tpl_vars['_product']->getLinkType(),'_object' => $this->_tpl_vars['_product'],'anid' => $this->_tpl_vars['_product']->getId(),'sWidgetType' => 'product','sListType' => "listitem_".($this->_tpl_vars['type']),'iIndex' => $this->_tpl_vars['_sTestId'],'blDisableToCart' => $this->_tpl_vars['blDisableToCart'],'isVatIncluded' => $this->_tpl_vars['oView']->isVatIncluded(),'showMainLink' => $this->_tpl_vars['showMainLink'],'recommid' => $this->_tpl_vars['recommid'],'owishid' => $this->_tpl_vars['owishid'],'toBasketFunction' => $this->_tpl_vars['toBasketFunction'],'removeFunction' => $this->_tpl_vars['removeFunction'],'altproduct' => $this->_tpl_vars['altproduct'],'inlist' => $this->_tpl_vars['_product']->isInList(),'skipESIforUser' => 1), $this);?>

            </li>
            <?php if (( $this->_tpl_vars['type'] == 'infogrid' && ( ($this->_foreach['productlist']['iteration'] == $this->_foreach['productlist']['total']) ) && ( $this->_foreach['productlist']['iteration'] % 2 != 0 ) )): ?>
                <li class="productData"></li>
            <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>