<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:06
         compiled from widget/product/bargainitem.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'widget/product/bargainitem.tpl', 6, false),array('modifier', 'oxmultilangassign', 'widget/product/bargainitem.tpl', 27, false),array('modifier', 'cat', 'widget/product/bargainitem.tpl', 43, false),array('block', 'oxhasrights', 'widget/product/bargainitem.tpl', 15, false),array('function', 'oxmultilang', 'widget/product/bargainitem.tpl', 18, false),array('function', 'oxprice', 'widget/product/bargainitem.tpl', 18, false),array('function', 'oxgetseourl', 'widget/product/bargainitem.tpl', 43, false),array('function', 'oxscript', 'widget/product/bargainitem.tpl', 68, false),)), $this); ?>
<?php $this->assign('_product', $this->_tpl_vars['oView']->getProduct()); ?>
<?php $this->assign('iIteration', $this->_tpl_vars['oView']->getIteration()); ?>

<?php $this->assign('sBargainArtTitle', ($this->_tpl_vars['_product']->oxarticles__oxtitle->value)." ".($this->_tpl_vars['_product']->oxarticles__oxvarselect->value)); ?>
<?php ob_start(); ?>
    <a id="titleBargain_<?php echo $this->_tpl_vars['iIteration']; ?>
" href="<?php echo $this->_tpl_vars['_product']->getMainLink(); ?>
" class="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['sBargainArtTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
</a>
<?php $this->_smarty_vars['capture']['bargainTitle'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
    <a href="<?php echo $this->_tpl_vars['_product']->getMainLink(); ?>
"><img src="<?php echo $this->_tpl_vars['_product']->getThumbnailUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['sBargainArtTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" class="picture"></a>
<?php $this->_smarty_vars['capture']['bargainPic'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
    
        <div class="price <?php if ($this->_tpl_vars['_product']->getUnitPrice()): ?>tight<?php endif; ?>" id="priceBargain_<?php echo $this->_tpl_vars['iIteration']; ?>
">
            <div>
                <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <?php if ($this->_tpl_vars['_product']->getTPrice()): ?>
                        <span class="priceOld">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'REDUCED_FROM_2'), $this);?>
 <del><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getTPrice(),'currency' => $this->_tpl_vars['oView']->getActCurrency()), $this);?>
</del>
                        </span>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['_product']->getPrice()): ?>
                        <?php $this->assign('sFrom', ""); ?>
                        <?php $this->assign('oPrice', $this->_tpl_vars['_product']->getPrice()); ?>
                        <?php if ($this->_tpl_vars['_product']->isParentNotBuyable()): ?>
                            <?php $this->assign('oPrice', $this->_tpl_vars['_product']->getVarMinPrice()); ?>
                            <?php if ($this->_tpl_vars['_product']->isRangePrice()): ?>
                                <?php $this->assign('sFrom', ((is_array($_tmp='PRICE_FROM')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp))); ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <span class="priceValue"><?php echo $this->_tpl_vars['sFrom']; ?>
 <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPrice'],'currency' => $this->_tpl_vars['oView']->getActCurrency()), $this);?>

                        <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                            <?php if (! ( $this->_tpl_vars['_product']->getVariantsCount() || $this->_tpl_vars['_product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['_product']->getSelections(1) ) )): ?>*<?php endif; ?>
                        <?php endif; ?>
                        </span>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['_product']->getUnitPrice()): ?>
                        <span class="pricePerUnit">
                            <?php echo $this->_tpl_vars['_product']->getUnitQuantity(); ?>
 <?php echo $this->_tpl_vars['_product']->getUnitName(); ?>
 | <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getUnitPrice(),'currency' => $this->_tpl_vars['oView']->getActCurrency()), $this);?>
/<?php echo $this->_tpl_vars['_product']->getUnitName(); ?>

                        </span>
                    <?php endif; ?>
                    
                        <?php if (! ( $this->_tpl_vars['_product']->getVariantsCount() || $this->_tpl_vars['_product']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['_product']->getSelections(1) ) )): ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=start") : smarty_modifier_cat($_tmp, "cl=start")),'params' => "fnc=tobasket&amp;aid=".($this->_tpl_vars['_product']->oxarticles__oxid->value)."&amp;am=1"), $this);?>
" class="toCart button" title="<?php echo smarty_function_oxmultilang(array('ident' => 'TO_CART'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'TO_CART'), $this);?>
</a>
                        <?php else: ?>
                            <a href="<?php echo $this->_tpl_vars['_product']->getMainLink(); ?>
" class="toCart button"><?php echo smarty_function_oxmultilang(array('ident' => 'MORE_INFO'), $this);?>
</a>
                        <?php endif; ?>
                    
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
        </div>
    
<?php $this->_smarty_vars['capture']['bargainPrice'] = ob_get_contents(); ob_end_clean(); ?>
<div class="specBoxTitles rightShadow">
    <h3>
        <strong><?php echo smarty_function_oxmultilang(array('ident' => 'WEEK_SPECIAL'), $this);?>
</strong>
        <?php $this->assign('rsslinks', $this->_tpl_vars['oView']->getRSSLinks()); ?>
        <?php if ($this->_tpl_vars['rsslinks']['bargainArticles']): ?>
            <a class="rss js-external" id="rssBargainProducts" href="<?php echo $this->_tpl_vars['rsslinks']['bargainArticles']['link']; ?>
" title="<?php echo $this->_tpl_vars['rsslinks']['bargainArticles']['title']; ?>
"><img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('rss.png'); ?>
" alt="<?php echo $this->_tpl_vars['rsslinks']['bargainArticles']['title']; ?>
"><span class="FXgradOrange corners glowShadow"><?php echo $this->_tpl_vars['rsslinks']['bargainArticles']['title']; ?>
</span></a>
        <?php endif; ?>
    </h3>
    <?php echo $this->_smarty_vars['capture']['bargainTitle']; ?>

</div>
<div class="specBoxInfo">
    <?php echo $this->_smarty_vars['capture']['bargainPrice']; ?>

    <?php echo $this->_smarty_vars['capture']['bargainPic']; ?>

</div>

<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>