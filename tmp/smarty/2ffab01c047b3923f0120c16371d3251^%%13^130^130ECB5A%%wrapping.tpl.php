<?php /* Smarty version 2.6.28, created on 2016-03-16 21:55:12
         compiled from page/checkout/inc/wrapping.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/checkout/inc/wrapping.tpl', 1, false),array('function', 'oxmultilang', 'page/checkout/inc/wrapping.tpl', 9, false),array('function', 'oxprice', 'page/checkout/inc/wrapping.tpl', 53, false),array('function', 'counter', 'page/checkout/inc/wrapping.tpl', 90, false),array('modifier', 'strip_tags', 'page/checkout/inc/wrapping.tpl', 43, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxmodalpopup.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('.wrappingTrigger').oxModalPopup({target: '.wrapping'});"), $this);?>


<div class="wrapping popupBox corners FXgradGreyLight glowShadow">
    <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('x.png'); ?>
" alt="" class="closePop">
    <?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
    
        <div class="wrappingIntro clear">
            <h3><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_OPTION'), $this);?>
</h3>
            <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('gift-wrapping.jpg'); ?>
" alt="<?php echo smarty_function_oxmultilang(array('ident' => 'ADD_WRAPPING'), $this);?>
">
            <div class="introtext">
                <?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING_DESCRIPTION'), $this);?>

            </div>
        </div>
    

    
        <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD_WRAPPING'), $this);?>
</h3>
        <?php if (! $this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
            <div><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_EMPTY'), $this);?>
</div>
        <?php else: ?>
            <form name="basket" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post">
                <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

                <input type="hidden" name="cl" value="basket">
                <input type="hidden" name="fnc" value="changewrapping">
                <?php $this->assign('oWrapList', $this->_tpl_vars['oView']->getWrappingList()); ?>
                <?php if ($this->_tpl_vars['oWrapList']->count()): ?>
                                        <?php $this->assign('icounter', '0'); ?>
                    <table class="wrappingData">
                        <colgroup>
                            <col class="thumbCol">
                            <col class="articleCol">
                            <col class="priceCol">
                        </colgroup>
                        <?php $this->assign('basketitemlist', $this->_tpl_vars['oView']->getBasketArticles()); ?>
                        <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['wrappArt'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wrappArt']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['basketindex'] => $this->_tpl_vars['basketitem']):
        $this->_foreach['wrappArt']['iteration']++;
?>
                            
                                <?php $this->assign('basketproduct', $this->_tpl_vars['basketitemlist'][$this->_tpl_vars['basketindex']]); ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo $this->_tpl_vars['basketitem']->getLink(); ?>
">
                                            <img src="<?php echo $this->_tpl_vars['basketproduct']->getThumbnailUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['basketitem']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                                        </a>
                                    </td>
                                    <td>
                                        <a rel="nofollow" href="<?php echo $this->_tpl_vars['basketitem']->getLink(); ?>
"><?php echo $this->_tpl_vars['basketitem']->getTitle(); ?>
</a>
                                    </td>
                                    <td>
                                        <ul id="wrapp_<?php echo $this->_foreach['wrappArt']['iteration']; ?>
">
                                            <li>
                                                <input class="radiobox" type="radio" name="wrapping[<?php echo $this->_tpl_vars['basketindex']; ?>
]" id="wrapping_<?php echo $this->_tpl_vars['basketindex']; ?>
" value="0" <?php if (! $this->_tpl_vars['basketitem']->getWrappingId()): ?>CHECKED<?php endif; ?>>
                                                <label for="wrapping_<?php echo $this->_tpl_vars['basketindex']; ?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'NONE'), $this);?>
</label><strong><?php echo smarty_function_oxprice(array('price' => 0,'currency' => $this->_tpl_vars['currency']), $this);?>
</strong>
                                            </li>
                                            <?php $this->assign('ictr', '1'); ?>
                                            <?php $_from = $this->_tpl_vars['oView']->getWrappingList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Wraps'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Wraps']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['wrapping']):
        $this->_foreach['Wraps']['iteration']++;
?>
                                                <li>
                                                    <input class="radiobox" type="radio" name="wrapping[<?php echo $this->_tpl_vars['basketindex']; ?>
]" id="wrapping_<?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxid->value; ?>
" value="<?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxid->value; ?>
" <?php if ($this->_tpl_vars['basketitem']->getWrappingId() == $this->_tpl_vars['wrapping']->oxwrapping__oxid->value): ?>CHECKED<?php endif; ?>>
                                                    <?php if ($this->_tpl_vars['wrapping']->oxwrapping__oxpic->value): ?>
                                                    <span><img src="<?php echo $this->_tpl_vars['wrapping']->getPictureUrl(); ?>
" alt="<?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxname->value; ?>
"></span>
                                                    <?php endif; ?>
                                                    <label for="wrapping_<?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxid->value; ?>
"><?php echo $this->_tpl_vars['wrapping']->oxwrapping__oxname->value; ?>
</label>
                                                    <strong><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrapping']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</strong>
                                                </li>
                                                <?php $this->assign('ictr', ($this->_tpl_vars['ictr']+1)); ?>
                                            <?php endforeach; endif; unset($_from); ?>
                                            <?php echo smarty_function_oxscript(array('add' => "$('#wrapp_".($this->_foreach['wrappArt']['iteration'])." img' ).click(function(){ $(this).parent().parent().find('input').click();});"), $this);?>

                                        </ul>

                                    </td>
                                </tr>
                                <?php $this->assign('icounter', ($this->_tpl_vars['icounter']+1)); ?>
                            
                        <?php endforeach; endif; unset($_from); ?>
                    </table>
                <?php endif; ?>

                <?php $this->assign('oCardList', $this->_tpl_vars['oView']->getCardList()); ?>
                <?php if ($this->_tpl_vars['oCardList']->count()): ?>
                    
                        <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_CARD'), $this);?>
</h3>
                        <ul class="wrappingCard clear" id="wrappCard">
                            <li>
                                <p class="clear">
                                    <input type="radio" class="radiobox" name="chosencard" id="chosencard" value="0" <?php if (! $this->_tpl_vars['oxcmp_basket']->getCardId()): ?>CHECKED<?php endif; ?>>
                                    <label for="chosencard"><?php echo smarty_function_oxmultilang(array('ident' => 'NO_GREETING_CARD'), $this);?>
</label>
                                </p>
                            </li>
                        <?php $this->assign('icounter', '0'); ?>
                        <?php echo smarty_function_counter(array('start' => 0,'print' => false), $this);?>

                        <?php $this->assign('icounter', '0'); ?>
                        <?php $_from = $this->_tpl_vars['oCardList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['GreetCards'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['GreetCards']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['card']):
        $this->_foreach['GreetCards']['iteration']++;
?>
                            <li>
                                <p class="clear">
                                    <input class="radiobox" type="radio" name="chosencard" id="chosen_<?php echo $this->_tpl_vars['card']->oxwrapping__oxid->value; ?>
" value="<?php echo $this->_tpl_vars['card']->oxwrapping__oxid->value; ?>
" <?php if ($this->_tpl_vars['oxcmp_basket']->getCardId() == $this->_tpl_vars['card']->oxwrapping__oxid->value): ?>CHECKED<?php endif; ?>>
                                    <label for="chosen_<?php echo $this->_tpl_vars['card']->oxwrapping__oxid->value; ?>
"><?php echo $this->_tpl_vars['card']->oxwrapping__oxname->value; ?>
 <strong><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['card']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</strong></label>
                                </p>
                                <?php if ($this->_tpl_vars['card']->oxwrapping__oxpic->value): ?>
                                <img src="<?php echo $this->_tpl_vars['card']->getPictureUrl(); ?>
" alt="<?php echo $this->_tpl_vars['card']->oxwrapping__oxname->value; ?>
">
                                <?php endif; ?>
                            </li>
                        <?php $this->assign('icounter', ($this->_tpl_vars['icounter']+1)); ?>
                        <?php endforeach; endif; unset($_from); ?>
                        <?php echo smarty_function_oxscript(array('add' => "$('#wrappCard img').click(function(){ $(this).parent().find('input').click(); });"), $this);?>

                        </ul>

                    
                    
                        <div class="wrappingComment">
                            <label><?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_MESSAGE'), $this);?>
</label>
                            <textarea cols="102" rows="5" name="giftmessage" class="areabox"><?php echo $this->_tpl_vars['oxcmp_basket']->getCardMessage(); ?>
</textarea>
                        </div>
                    
                <?php endif; ?>
                
                    <div class="submitForm clear">
                        <button type="submit" class="submitButton largeButton"><?php echo smarty_function_oxmultilang(array('ident' => 'APPLY'), $this);?>
</button>
                        <button class="textButton largeButton closePop"><?php echo smarty_function_oxmultilang(array('ident' => 'CANCEL'), $this);?>
</button>
                    </div>
                
            </form>
        <?php endif; ?>
    
</div>