<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/product/boxproduct.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'widget/product/boxproduct.tpl', 2, false),array('block', 'oxhasrights', 'widget/product/boxproduct.tpl', 15, false),array('function', 'oxmultilang', 'widget/product/boxproduct.tpl', 18, false),array('function', 'oxprice', 'widget/product/boxproduct.tpl', 31, false),array('function', 'oxscript', 'widget/product/boxproduct.tpl', 42, false),)), $this); ?>
<?php $this->assign('_oBoxProduct', $this->_tpl_vars['oView']->getProduct()); ?>
<?php $this->assign('_sTitle', ((is_array($_tmp=($this->_tpl_vars['_oBoxProduct']->oxarticles__oxtitle->value)." ".($this->_tpl_vars['_oBoxProduct']->oxarticles__oxvarselect->value))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp))); ?>

    <li class="articleImage" <?php if (! $this->_tpl_vars['iProdCount']): ?> style="display:none;" <?php endif; ?>>
        <a class="articleBoxImage" href="<?php echo $this->_tpl_vars['_oBoxProduct']->getMainLink(); ?>
">
            <img src="<?php echo $this->_tpl_vars['_oBoxProduct']->getIconUrl(); ?>
" alt="<?php echo $this->_tpl_vars['_sTitle']; ?>
">
        </a>
    </li>



    <li class="articleTitle">
        <a href="<?php echo $this->_tpl_vars['_oBoxProduct']->getMainLink(); ?>
">
            <?php echo $this->_tpl_vars['_sTitle']; ?>
<br>
            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'SHOWARTICLEPRICE')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <?php if ($this->_tpl_vars['_oBoxProduct']->getPrice()): ?>
                    <strong> <?php if ($this->_tpl_vars['_oBoxProduct']->isRangePrice()): ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'PRICE_FROM'), $this);?>

                        <?php if (! $this->_tpl_vars['_oBoxProduct']->isParentNotBuyable()): ?>
                            <?php $this->assign('oPrice', $this->_tpl_vars['_oBoxProduct']->getMinPrice()); ?>
                        <?php else: ?>
                            <?php $this->assign('oPrice', $this->_tpl_vars['_oBoxProduct']->getVarMinPrice()); ?>
                        <?php endif; ?>
                        <?php else: ?>
                        <?php if (! $this->_tpl_vars['_oBoxProduct']->isParentNotBuyable()): ?>
                            <?php $this->assign('oPrice', $this->_tpl_vars['_oBoxProduct']->getPrice()); ?>
                        <?php else: ?>
                            <?php $this->assign('oPrice', $this->_tpl_vars['_oBoxProduct']->getVarMinPrice()); ?>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPrice'],'currency' => $this->_tpl_vars['oView']->getActCurrency()), $this);?>

                        <?php if ($this->_tpl_vars['oView']->isVatIncluded()): ?>
                            <?php if (! ( $this->_tpl_vars['_oBoxProduct']->getVariantsCount() || $this->_tpl_vars['_oBoxProduct']->hasMdVariants() || ( $this->_tpl_vars['oViewConf']->showSelectListsInList() && $this->_tpl_vars['_oBoxProduct']->getSelections(1) ) )): ?>*<?php endif; ?>
                        <?php endif; ?>
                    </strong>
                <?php endif; ?>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </a>
    </li>


<?php echo smarty_function_oxscript(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>