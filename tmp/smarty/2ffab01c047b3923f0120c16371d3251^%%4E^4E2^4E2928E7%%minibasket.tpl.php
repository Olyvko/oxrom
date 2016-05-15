<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/minibasket/minibasket.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/minibasket/minibasket.tpl', 1, false),array('function', 'oxstyle', 'widget/minibasket/minibasket.tpl', 10, false),array('function', 'oxmultilang', 'widget/minibasket/minibasket.tpl', 47, false),array('function', 'oxprice', 'widget/minibasket/minibasket.tpl', 82, false),array('function', 'oxgetseourl', 'widget/minibasket/minibasket.tpl', 109, false),array('insert', 'oxid_newbasketitem', 'widget/minibasket/minibasket.tpl', 28, false),array('block', 'oxhasrights', 'widget/minibasket/minibasket.tpl', 39, false),array('modifier', 'strip_tags', 'widget/minibasket/minibasket.tpl', 75, false),array('modifier', 'cat', 'widget/minibasket/minibasket.tpl', 109, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxajax.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxcountdown.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxminibasket.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxmodalpopup.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$( '#miniBasket' ).oxMiniBasket();"), $this);?>

<?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount() >= 8): ?>
    <?php echo smarty_function_oxscript(array('include' => "js/libs/scrollpane/jscrollpane.min.js"), $this);?>

    <?php echo smarty_function_oxscript(array('include' => "js/libs/scrollpane/mousewheel.js"), $this);?>

    <?php echo smarty_function_oxscript(array('include' => "js/libs/scrollpane/mwheelIntent.js"), $this);?>

    <?php echo smarty_function_oxstyle(array('include' => "css/libs/jscrollpane.css"), $this);?>

<?php endif; ?>


    <form class="js-oxWidgetReload-miniBasket" action="<?php echo $this->_tpl_vars['oView']->getWidgetLink(); ?>
" method="get">
        <div>
            <input type="hidden" name="cl" value="<?php echo $this->_tpl_vars['oView']->getClassName(); ?>
"/>
            <input type="hidden" name="nocookie" value="0"/>
            <input type="hidden" name="force_sid" value="<?php echo $this->_tpl_vars['oView']->getSidForWidget(); ?>
"/>
        </div>
    </form>

    <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
miniBasket" class="basketBox">


        <?php if ($this->_tpl_vars['_prefix'] != 'modal'): ?>
            <?php if ($this->_tpl_vars['oxcmp_basket']->getItemsCount() > 0): ?>
                <span class="counter FXgradOrange">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_newbasketitem', 'tpl' => "widget/minibasket/newbasketitemmsg.tpl", 'type' => 'message')), $this); ?>

                    <span id="<?php echo $this->_tpl_vars['_prefix']; ?>
countValue">
                        <?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>

                    </span>
                </span>
            <?php endif; ?>
            <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('basket.png'); ?>
" id="<?php echo $this->_tpl_vars['_prefix']; ?>
minibasketIcon" alt="Basket" class="basket">
        <?php endif; ?>
    </div>

    <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
            <?php $this->_tag_stack[] = array('oxhasrights', array('ident' => 'TOBASKET')); $_block_repeat=true;smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount() >= 8): ?>
                <?php $this->assign('scrollableBasket', true); ?>
            <?php endif; ?>
                <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
                <div id="<?php echo $this->_tpl_vars['_prefix']; ?>
basketFlyout" class="basketFlyout corners<?php if ($this->_tpl_vars['scrollableBasket']): ?> scrollable<?php endif; ?>">
                    <p class="title">
                        <?php if ($this->_tpl_vars['_prefix'] != 'modal'): ?>
                            <strong><?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>
 <?php echo smarty_function_oxmultilang(array('ident' => 'ITEMS_IN_BASKET','suffix' => 'COLON'), $this);?>
</strong>
                        <?php else: ?>
                            <strong class="note"><?php echo smarty_function_oxmultilang(array('ident' => 'NEW_BASKET_ITEM_MSG'), $this);?>
</strong>
                        <?php endif; ?>
                        <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('x.png'); ?>
" alt="" class="closePop">
                    </p>
                    <?php if ($this->_tpl_vars['_prefix'] != 'modal'): ?>
                        <?php if ($this->_tpl_vars['oxcmp_basket']->getItemsCount() > 0): ?>
                            <span class="counter FXgradOrange">
                                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'oxid_newbasketitem', 'tpl' => "widget/minibasket/newbasketitemmsg.tpl", 'type' => 'message')), $this); ?>

                                <span id="<?php echo $this->_tpl_vars['_prefix']; ?>
countValue">
                                    <?php echo $this->_tpl_vars['oxcmp_basket']->getItemsCount(); ?>

                                </span>
                            </span>
                        <?php endif; ?>
                        <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('basket.png'); ?>
" id="<?php echo $this->_tpl_vars['_prefix']; ?>
minibasketIcon" alt="Basket" class="basket">
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['scrollableBasket']): ?>
                        <div class="scrollbarBox">
                        <div class="basketItems">
                        <hr>
                    <?php endif; ?>
                    <ul>
                    <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['miniBasketList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['miniBasketList']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['_product']):
        $this->_foreach['miniBasketList']['iteration']++;
?>
                        
                            <?php $this->assign('minibasketItemTitle', $this->_tpl_vars['_product']->getTitle()); ?>
                            <li>
                                <a href="<?php echo $this->_tpl_vars['_product']->getLink(); ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                    <span class="item">
                                        <?php if ($this->_tpl_vars['_product']->getAmount() > 1): ?>
                                            <?php echo $this->_tpl_vars['_product']->getAmount(); ?>
 x
                                        <?php endif; ?>
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['minibasketItemTitle'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>

                                    </span>
                                    <strong class="price"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['_product']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</strong>
                                </a>
                            </li>
                        
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                    <?php if ($this->_tpl_vars['scrollableBasket']): ?>
                        </div>
                        </div>
                        <hr>
                    <?php endif; ?>
                    
                        <p class="totals">
                           <span class="item"><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</span>
                           <strong class="price">
                           <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                           <?php echo $this->_tpl_vars['oxcmp_basket']->getProductsNetPrice(); ?>

                           <?php else: ?>
                           <?php echo $this->_tpl_vars['oxcmp_basket']->getFProductsPrice(); ?>

                           <?php endif; ?>
                           <?php echo $this->_tpl_vars['currency']->sign; ?>
</strong>
                        </p>
                    
                    <hr>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/minibasket/countdown.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <p class="functions clear">
                       <?php if ($this->_tpl_vars['oxcmp_user']): ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=payment") : smarty_modifier_cat($_tmp, "cl=payment"))), $this);?>
" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                       <?php else: ?>
                            <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=user") : smarty_modifier_cat($_tmp, "cl=user"))), $this);?>
" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECKOUT'), $this);?>
</a>
                       <?php endif; ?>
                       <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=basket") : smarty_modifier_cat($_tmp, "cl=basket"))), $this);?>
" class="textButton"><?php echo smarty_function_oxmultilang(array('ident' => 'DISPLAY_BASKET'), $this);?>
</a>
                    </p>
                </div>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxhasrights($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>

<?php echo smarty_function_oxstyle(array('widget' => $this->_tpl_vars['oView']->getClassName()), $this);?>