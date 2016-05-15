<?php /* Smarty version 2.6.28, created on 2016-03-16 21:55:12
         compiled from page/checkout/inc/basketcontents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'page/checkout/inc/basketcontents.tpl', 2, false),array('function', 'oxmultilang', 'page/checkout/inc/basketcontents.tpl', 26, false),array('function', 'oxprice', 'page/checkout/inc/basketcontents.tpl', 198, false),array('modifier', 'strip_tags', 'page/checkout/inc/basketcontents.tpl', 61, false),array('modifier', 'trim', 'page/checkout/inc/basketcontents.tpl', 88, false),array('modifier', 'nl2br', 'page/checkout/inc/basketcontents.tpl', 270, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('include' => "js/widgets/oxbasketchecks.js",'priority' => 10), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('#checkAll, #basketRemoveAll').oxBasketChecks();"), $this);?>

<?php $this->assign('currency', $this->_tpl_vars['oView']->getActCurrency()); ?>
<form name="basket<?php echo $this->_tpl_vars['basketindex']; ?>
" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfActionLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="cl" value="basket">
    <input type="hidden" name="fnc" value="changebasket">
    <input type="hidden" name="CustomError" value='basket'>
    <table id="basket" class="basketitems<?php if ($this->_tpl_vars['oViewConf']->getActiveClassName() == 'order'): ?> orderBasketItems<?php endif; ?>">
        <colgroup>
            <?php if ($this->_tpl_vars['editable']): ?><col class="editCol"><?php endif; ?>
            <col class="thumbCol">
            <col>
            <?php if ($this->_tpl_vars['oView']->isWrapping()): ?><col class="wrappingCol"><?php endif; ?>
            <col class="coutCol">
            <col class="priceCol">
            <col class="vatCol">
            <col class="totalCol">
        </colgroup>
                <thead>
            <tr>
                <?php if ($this->_tpl_vars['editable']): ?><th></th><?php endif; ?>
                <th></th>
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT'), $this);?>
</th>
                <?php if ($this->_tpl_vars['oView']->isWrapping()): ?>
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'WRAPPING'), $this);?>
</th>
                <?php endif; ?>
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'QUANTITY'), $this);?>
</th>
                <th class="unitPrice"><?php echo smarty_function_oxmultilang(array('ident' => 'UNIT_PRICE'), $this);?>
</th>
                <th class="vatPercent"><?php echo smarty_function_oxmultilang(array('ident' => 'VAT'), $this);?>
</th>
                <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</th>
            </tr>
        </thead>

                <tbody>
        <?php $this->assign('basketitemlist', $this->_tpl_vars['oView']->getBasketArticles()); ?>
        <?php $this->assign('oMarkGenerator', $this->_tpl_vars['oView']->getBasketContentMarkGenerator()); ?>
        <?php $_from = $this->_tpl_vars['oxcmp_basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['basketContents'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['basketContents']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['basketindex'] => $this->_tpl_vars['basketitem']):
        $this->_foreach['basketContents']['iteration']++;
?>
            
                <?php $this->assign('basketproduct', $this->_tpl_vars['basketitemlist'][$this->_tpl_vars['basketindex']]); ?>
                <?php $this->assign('oArticle', $this->_tpl_vars['basketitem']->getArticle()); ?>
                <?php $this->assign('oAttributes', $this->_tpl_vars['oArticle']->getAttributesDisplayableInBasket()); ?>

                <tr class="basketItem" id="cartItem_<?php echo $this->_foreach['basketContents']['iteration']; ?>
">

                    
                        <?php if ($this->_tpl_vars['editable']): ?>
                            <td class="checkbox">
                                <input type="checkbox" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][remove]" value="1">
                            </td>
                        <?php endif; ?>
                    

                    
                                                <td class="basketImage">
                            <a href="<?php echo $this->_tpl_vars['basketitem']->getLink(); ?>
" rel="nofollow">
                                <img src="<?php echo $this->_tpl_vars['basketitem']->getIconUrl(); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['basketitem']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
">
                            </a>
                        </td>
                    

                    
                                                <td>
                            <div>
                                <a rel="nofollow" href="<?php echo $this->_tpl_vars['basketitem']->getLink(); ?>
"><b><?php echo $this->_tpl_vars['basketitem']->getTitle(); ?>
</b></a>

                                <?php if ($this->_tpl_vars['basketitem']->isSkipDiscount()): ?> <sup><a rel="nofollow" href="#noteWithSkippedDiscount" ><?php echo $this->_tpl_vars['oMarkGenerator']->getMark('skippedDiscount'); ?>
</a></sup><?php endif; ?>
                                <?php if ($this->_tpl_vars['oViewConf']->getActiveClassName() == 'order' && $this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blEnableIntangibleProdAgreement')): ?>
                                    <?php if ($this->_tpl_vars['oArticle']->hasDownloadableAgreement()): ?> <sup><a rel="nofollow" href="#noteForDownloadableArticles" ><?php echo $this->_tpl_vars['oMarkGenerator']->getMark('downloadable'); ?>
</a></sup><?php endif; ?>
                                    <?php if ($this->_tpl_vars['oArticle']->hasIntangibleAgreement()): ?> <sup><a rel="nofollow" href="#noteForIntangibleArticles" ><?php echo $this->_tpl_vars['oMarkGenerator']->getMark('intangible'); ?>
</a></sup><?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <div class="smallFont">
                                <?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT_NO','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxartnum->value; ?>

                            </div>
                            <div class="smallFont">
                                <?php $this->assign('sep', ", "); ?>
                                <?php $this->assign('result', ""); ?>
                                <?php $_from = $this->_tpl_vars['oAttributes']->getArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['attributeContents'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attributeContents']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oArtAttributes'] => $this->_tpl_vars['oAttr']):
        $this->_foreach['attributeContents']['iteration']++;
?>
                                    <?php $this->assign('temp', $this->_tpl_vars['oAttr']->oxattribute__oxvalue->value); ?>
                                    <?php $this->assign('result', ($this->_tpl_vars['result']).($this->_tpl_vars['temp']).($this->_tpl_vars['sep'])); ?>
                                <?php endforeach; endif; unset($_from); ?>
                                <b><?php echo ((is_array($_tmp=$this->_tpl_vars['result'])) ? $this->_run_mod_handler('trim', true, $_tmp, $this->_tpl_vars['sep']) : trim($_tmp, $this->_tpl_vars['sep'])); ?>
</b>
                            </div>

                            <?php if (! $this->_tpl_vars['basketitem']->isBundle() || ! $this->_tpl_vars['basketitem']->isDiscountArticle()): ?>
                                <?php $this->assign('oSelections', $this->_tpl_vars['basketproduct']->getSelections(null,$this->_tpl_vars['basketitem']->getSelList())); ?>
                                <?php if ($this->_tpl_vars['oSelections']): ?>
                                    <div class="selectorsBox clear" id="cartItemSelections_<?php echo $this->_foreach['basketContents']['iteration']; ?>
">
                                    <?php $_from = $this->_tpl_vars['oSelections']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['selections'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['selections']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oList']):
        $this->_foreach['selections']['iteration']++;
?>
                                        <?php if ($this->_tpl_vars['oViewConf']->showSelectListsInList()): ?>
                                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/selectbox.tpl", 'smarty_include_vars' => array('oSelectionList' => $this->_tpl_vars['oList'],'sFieldName' => "aproducts[".($this->_tpl_vars['basketindex'])."][sel]",'iKey' => ($this->_foreach['selections']['iteration']-1),'blHideDefault' => true,'sSelType' => 'seldrop')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                        <?php else: ?>
                                            <?php $this->assign('oActiveSelection', $this->_tpl_vars['oList']->getActiveSelection()); ?>
                                            <?php if ($this->_tpl_vars['oActiveSelection']): ?>
                                                <input type="hidden" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][sel][<?php echo ($this->_foreach['selections']['iteration']-1); ?>
]" value="<?php if ($this->_tpl_vars['oActiveSelection']): ?><?php echo $this->_tpl_vars['oActiveSelection']->getValue(); ?>
<?php endif; ?>">
                                                <div><?php echo $this->_tpl_vars['oList']->getLabel(); ?>
: <?php echo $this->_tpl_vars['oActiveSelection']->getName(); ?>
</div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if (! $this->_tpl_vars['editable']): ?>
                                <p class="persparamBox">
                                    <?php $_from = $this->_tpl_vars['basketitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['persparams'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['persparams']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
        $this->_foreach['persparams']['iteration']++;
?>
                                        <?php if (! ($this->_foreach['persparams']['iteration'] <= 1)): ?><br /><?php endif; ?>
                                        <strong>
                                            <?php if (($this->_foreach['persparams']['iteration'] <= 1) && ($this->_foreach['persparams']['iteration'] == $this->_foreach['persparams']['total'])): ?>
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'LABEL','suffix' => 'COLON'), $this);?>

                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['sVar']; ?>
 :
                                            <?php endif; ?>
                                        </strong> <?php echo $this->_tpl_vars['aParam']; ?>

                                    <?php endforeach; endif; unset($_from); ?>
                                </p>
                            <?php else: ?>
                                <?php if ($this->_tpl_vars['basketproduct']->oxarticles__oxisconfigurable->value): ?>
                                    <?php if ($this->_tpl_vars['basketitem']->getPersParams()): ?>
                                        <br />
                                        <?php $_from = $this->_tpl_vars['basketitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['persparams'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['persparams']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
        $this->_foreach['persparams']['iteration']++;
?>
                                            <p>
                                                <label class="persParamLabel">
                                                    <?php if (($this->_foreach['persparams']['iteration'] <= 1) && ($this->_foreach['persparams']['iteration'] == $this->_foreach['persparams']['total'])): ?>
                                                        <?php echo smarty_function_oxmultilang(array('ident' => 'LABEL','suffix' => 'COLON'), $this);?>

                                                    <?php else: ?>
                                                        <?php echo $this->_tpl_vars['sVar']; ?>
:
                                                    <?php endif; ?>
                                                </label>
                                                <input class="textbox persParam" type="text" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][persparam][<?php echo $this->_tpl_vars['sVar']; ?>
]" value="<?php echo $this->_tpl_vars['aParam']; ?>
">
                                            </p>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php else: ?>
                                         <p><?php echo smarty_function_oxmultilang(array('ident' => 'LABEL','suffix' => 'COLON'), $this);?>
 <input class="textbox persParam" type="text" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][persparam][details]" value=""></p>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>

                        </td>
                    

                    
                                                <?php if ($this->_tpl_vars['oView']->isWrapping()): ?>
                        <td>
                                <?php if (! $this->_tpl_vars['basketitem']->getWrappingId()): ?>
                                    <?php if ($this->_tpl_vars['editable']): ?>
                                        <a class="wrappingTrigger" rel="nofollow" href="#" title="<?php echo smarty_function_oxmultilang(array('ident' => 'ADD'), $this);?>
"><?php echo smarty_function_oxmultilang(array('ident' => 'ADD'), $this);?>
</a>
                                    <?php else: ?>
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'NONE'), $this);?>

                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php $this->assign('oWrap', $this->_tpl_vars['basketitem']->getWrapping()); ?>
                                    <?php if ($this->_tpl_vars['editable']): ?>
                                        <a class="wrappingTrigger" rel="nofollow" href="#" title="<?php echo smarty_function_oxmultilang(array('ident' => 'ADD'), $this);?>
"><?php echo $this->_tpl_vars['oWrap']->oxwrapping__oxname->value; ?>
</a>
                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['oWrap']->oxwrapping__oxname->value; ?>

                                    <?php endif; ?>
                                <?php endif; ?>
                        </td>
                        <?php endif; ?>
                    

                    
                                                <td class="quantity">
                            <?php if ($this->_tpl_vars['editable']): ?>
                                <input type="hidden" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][aid]" value="<?php echo $this->_tpl_vars['basketitem']->getProductId(); ?>
">
                                <input type="hidden" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][basketitemid]" value="<?php echo $this->_tpl_vars['basketindex']; ?>
">
                                <input type="hidden" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][override]" value="1">
                                <?php if ($this->_tpl_vars['basketitem']->isBundle()): ?>
                                    <input type="hidden" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][bundle]" value="1">
                                <?php endif; ?>

                                <?php if (! $this->_tpl_vars['basketitem']->isBundle() || ! $this->_tpl_vars['basketitem']->isDiscountArticle()): ?>
                                    <p>
                                        <input id="am_<?php echo $this->_foreach['basketContents']['iteration']; ?>
" type="text" class="textbox" name="aproducts[<?php echo $this->_tpl_vars['basketindex']; ?>
][am]" value="<?php echo $this->_tpl_vars['basketitem']->getAmount(); ?>
" size="2">
                                    </p>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php echo $this->_tpl_vars['basketitem']->getAmount(); ?>

                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['basketitem']->getdBundledAmount() > 0 && ( $this->_tpl_vars['basketitem']->isBundle() || $this->_tpl_vars['basketitem']->isDiscountArticle() )): ?>
                                +<?php echo $this->_tpl_vars['basketitem']->getdBundledAmount(); ?>

                            <?php endif; ?>
                        </td>
                    

                    
                                                <td class="unitPrice">
                            <?php if ($this->_tpl_vars['basketitem']->getUnitPrice()): ?> <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getUnitPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
 <?php endif; ?>
                            <?php if (! $this->_tpl_vars['basketitem']->isBundle()): ?>
                                <?php $this->assign('dRegUnitPrice', $this->_tpl_vars['basketitem']->getRegularUnitPrice()); ?>
                                <?php $this->assign('dUnitPrice', $this->_tpl_vars['basketitem']->getUnitPrice()); ?>
                                <?php if ($this->_tpl_vars['dRegUnitPrice'] && $this->_tpl_vars['dUnitPrice'] && $this->_tpl_vars['dRegUnitPrice']->getPrice() > $this->_tpl_vars['dUnitPrice']->getPrice()): ?>
                                <br><s><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getRegularUnitPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</s>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    

                    
                                                <td class="vatPercent">
                            <?php echo $this->_tpl_vars['basketitem']->getVatPercent(); ?>
%
                        </td>
                    

                    
                                                <td>
                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                        </td>
                    
                </tr>
            

            
            
                <?php $_from = $this->_tpl_vars['Errors']['basket']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['oEr']):
?>
                    <?php if ($this->_tpl_vars['oEr']->getErrorClassType() == 'oxOutOfStockException'): ?>
                                                <?php if ($this->_tpl_vars['basketindex'] == $this->_tpl_vars['oEr']->getValue('basketIndex')): ?>
                            <tr class="basketError">
                                <?php if ($this->_tpl_vars['editable']): ?><td></td><?php endif; ?>
                                    <td colspan="5">
                                        <span class="inlineError"><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
 <strong><?php echo $this->_tpl_vars['oEr']->getValue('remainingAmount'); ?>
</strong></span>
                                    </td>
                                <?php if ($this->_tpl_vars['oView']->isWrapping()): ?><td></td><?php endif; ?>
                                <td></td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['oEr']->getErrorClassType() == 'oxArticleInputException'): ?>
                        <?php if ($this->_tpl_vars['basketitem']->getProductId() == $this->_tpl_vars['oEr']->getValue('productId')): ?>
                            <tr class="basketError">
                                <?php if ($this->_tpl_vars['editable']): ?><td></td><?php endif; ?>
                                <td colspan="5">
                                    <span class="inlineError"><?php echo $this->_tpl_vars['oEr']->getOxMessage(); ?>
</span>
                                </td>
                                <?php if ($this->_tpl_vars['oView']->isWrapping()): ?><td></td><?php endif; ?>
                                <td></td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            
                <?php endforeach; endif; unset($_from); ?>

         
             <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
                  <?php $this->assign('oCard', $this->_tpl_vars['oxcmp_basket']->getCard()); ?>
                  <?php if ($this->_tpl_vars['oCard']): ?>
                    <tr>
                      <?php if ($this->_tpl_vars['editable']): ?><td></td><?php endif; ?>
                      <td></td>
                      <td id="orderCardTitle" colspan="3"><?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_CARD'), $this);?>
 "<?php echo $this->_tpl_vars['oCard']->oxwrapping__oxname->value; ?>
"
                          <br>
                          <b><?php echo smarty_function_oxmultilang(array('ident' => 'YOUR_MESSAGE','suffix' => 'COLON'), $this);?>
</b>
                          <br>
                          <div id="orderCardText"><?php echo ((is_array($_tmp=$this->_tpl_vars['oxcmp_basket']->getCardMessage())) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
                      </td>
                      <td id="orderCardPrice"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oCard']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                      <td>
                         <?php if ($this->_tpl_vars['oxcmp_basket']->isProportionalCalculationOn()): ?>
                            <?php echo smarty_function_oxmultilang(array('ident' => 'PROPORTIONALLY_CALCULATED'), $this);?>
</th>
                         <?php else: ?>
                              <?php if ($this->_tpl_vars['oxcmp_basket']->getGiftCardCostVat()): ?><?php echo $this->_tpl_vars['oxcmp_basket']->getGiftCardCostVatPercent(); ?>
%<?php endif; ?>
                         <?php endif; ?>
                      </td>
                      <td id="orderCardTotalPrice" align="right"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oCard']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                    </tr>
                  <?php endif; ?>
              <?php endif; ?>
          
        </tbody>
    </table>

    <div class="clear">

        
            <?php if ($this->_tpl_vars['editable']): ?>
                <div id="basketFn" class="basketFunctions">
                                        <input type="checkbox" name="checkAll" id="checkAll" title="<?php echo smarty_function_oxmultilang(array('ident' => 'ALL'), $this);?>
">
                    <button id="basketRemoveAll" name="removeAllBtn"><span><?php echo smarty_function_oxmultilang(array('ident' => 'ALL'), $this);?>
</span></button>
                    <button id="basketRemove" type="submit" name="removeBtn"><span><?php echo smarty_function_oxmultilang(array('ident' => 'REMOVE'), $this);?>
</span></button>
                    <button id="basketUpdate" type="submit" name="updateBtn"><span><?php echo smarty_function_oxmultilang(array('ident' => 'UPDATE'), $this);?>
</span></button>
                </div>
            <?php endif; ?>
        

        
            <div id="basketSummary" class="summary<?php if ($this->_tpl_vars['oViewConf']->getActiveClassName() == 'order'): ?> orderSummary<?php endif; ?>">
                                <table>
                    <?php if (! ( $this->_tpl_vars['oxcmp_basket']->getDiscounts() || ( $this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['oxcmp_basket']->getVoucherDiscValue() ) )): ?>
                        
                            <tr>
                                <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>
</th>
                                <td id="basketTotalProductsNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                            </tr>
                        

                        
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getProductVats(false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['key']), $this);?>
</th>
                                    <td><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['VATitem'],'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        

                        
                            <tr>
                                <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>
</th>
                                <td id="basketTotalProductsGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                            </tr>
                        
                    <?php else: ?>
                        <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                            
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketTotalProductsNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            
                        <?php else: ?>
                             
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketTotalProductsGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            
                        <?php endif; ?>

                        
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getDiscounts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['test_Discounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['test_Discounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oDiscount']):
        $this->_foreach['test_Discounts']['iteration']++;
?>
                                <tr>
                                    <th>
                                        <b><?php if ($this->_tpl_vars['oDiscount']->dDiscount < 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>
<?php endif; ?>&nbsp;</b><?php echo $this->_tpl_vars['oDiscount']->sDiscount; ?>

                                    </th>
                                    <td><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDiscount']->dDiscount*-1,'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        

                        
                            <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['oxcmp_basket']->getVoucherDiscValue()): ?>
                                <?php $_from = $this->_tpl_vars['oxcmp_basket']->getVouchers(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['Voucher'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['Voucher']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sVoucher']):
        $this->_foreach['Voucher']['iteration']++;
?>
                                    <tr class="couponData">
                                        <th><span><strong><?php echo smarty_function_oxmultilang(array('ident' => 'COUPON'), $this);?>
</strong>&nbsp;(<?php echo smarty_function_oxmultilang(array('ident' => 'NUMBER_2'), $this);?>
 <?php echo $this->_tpl_vars['sVoucher']->sVoucherNr; ?>
)</span>
                                            <?php if ($this->_tpl_vars['editable']): ?>
                                                <a href="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
&amp;cl=basket&amp;fnc=removeVoucher&amp;voucherId=<?php echo $this->_tpl_vars['sVoucher']->sVoucherId; ?>
&amp;CustomError=basket" class="removeFn" rel="nofollow"><?php echo smarty_function_oxmultilang(array('ident' => 'REMOVE'), $this);?>
</a>
                                            <?php endif; ?>
                                        </th>
                                        <td><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['sVoucher']->dVoucherdiscount*-1,'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php endforeach; endif; unset($_from); ?>
                            <?php endif; ?>
                        

                        <?php if (! $this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                            
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketTotalNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            
                        <?php endif; ?>

                        
                            <?php $_from = $this->_tpl_vars['oxcmp_basket']->getProductVats(false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['key']), $this);?>
</th>
                                    <td><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['VATitem'],'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        

                        <?php if ($this->_tpl_vars['oxcmp_basket']->isPriceViewModeNetto()): ?>
                            
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketTotalGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            
                        <?php endif; ?>
                    <?php endif; ?>
                    
                        <?php $this->assign('deliveryCost', $this->_tpl_vars['oxcmp_basket']->getDeliveryCost()); ?>
                        <?php if ($this->_tpl_vars['deliveryCost'] && ( $this->_tpl_vars['oxcmp_basket']->getBasketUser() || $this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blCalculateDelCostIfNotLoggedIn') )): ?>
                            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForDelivery')): ?>
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_NET','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketDeliveryNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['deliveryCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                                <?php if ($this->_tpl_vars['deliveryCost']->getVatValue()): ?>
                                    <tr>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isProportionalCalculationOn()): ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>
</th>
                                        <?php else: ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['deliveryCost']->getVat()), $this);?>
</th>
                                        <?php endif; ?>
                                        <td id="basketDeliveryVat"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['deliveryCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php endif; ?>
                            <?php else: ?>
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_COST','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketDeliveryGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['deliveryCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                    

                    
                        <?php $this->assign('paymentCost', $this->_tpl_vars['oxcmp_basket']->getPaymentCost()); ?>
                        <?php if ($this->_tpl_vars['paymentCost'] && $this->_tpl_vars['paymentCost']->getPrice()): ?>
                            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForPayCharge')): ?>
                                <tr>
                                    <th><?php if ($this->_tpl_vars['paymentCost']->getPrice() >= 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DEDUCTION'), $this);?>
<?php endif; ?> <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketPaymentNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['paymentCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                                <?php if ($this->_tpl_vars['paymentCost']->getVatValue()): ?>
                                    <tr>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isProportionalCalculationOn()): ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>
</th>
                                        <?php else: ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['paymentCost']->getVat()), $this);?>
</th>
                                        <?php endif; ?>
                                        <td id="basketPaymentVat"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['paymentCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php endif; ?>
                            <?php else: ?>
                                <tr>
                                    <th><?php if ($this->_tpl_vars['paymentCost']->getPrice() >= 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DEDUCTION'), $this);?>
<?php endif; ?> <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD','suffix' => 'COLON'), $this);?>
</th>
                                    <td id="basketPaymentGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['paymentCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                    

                    
                        <?php $this->assign('trustedShopProtectionCost', $this->_tpl_vars['oxcmp_basket']->getTrustedShopProtectionCost()); ?>
                        <?php if ($this->_tpl_vars['trustedShopProtectionCost'] && $this->_tpl_vars['trustedShopProtectionCost']->getPrice() > 0): ?>
                            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForPayCharge')): ?>
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_BUYER_PROTECTION'), $this);?>
</th>
                                    <td id="basketTSNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['trustedShopProtectionCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                                <?php if ($this->_tpl_vars['trustedShopProtectionCost']->getVatValue()): ?>
                                    <tr>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isProportionalCalculationOn()): ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>
</th>
                                        <?php else: ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['trustedShopProtectionCost']->getVat()), $this);?>
</th>
                                        <?php endif; ?>
                                        <td id="basketTSVat"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['trustedShopProtectionCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php endif; ?>
                            <?php else: ?>
                                <tr>
                                    <th><?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_BUYER_PROTECTION'), $this);?>
</th>
                                    <td id="basketTSGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['trustedShopProtectionCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                    

                    
                        <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>

                            <?php $this->assign('wrappingCost', $this->_tpl_vars['oxcmp_basket']->getWrappingCost()); ?>
                            <?php if ($this->_tpl_vars['wrappingCost'] && $this->_tpl_vars['wrappingCost']->getPrice() > 0): ?>
                                <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForWrapping')): ?>
                                    <tr>
                                        <th><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_WRAPPING_COSTS_NET','suffix' => 'COLON'), $this);?>
</th>
                                        <td id="basketWrappingNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrappingCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                    <?php if ($this->_tpl_vars['oxcmp_basket']->getWrappCostVat()): ?>
                                    <tr>
                                        <th><?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT','suffix' => 'COLON'), $this);?>
</th>
                                        <td id="basketWrappingVat"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrappingCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <tr>
                                        <th><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING','suffix' => 'COLON'), $this);?>
</th>
                                        <td id="basketWrappingGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrappingCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php $this->assign('giftCardCost', $this->_tpl_vars['oxcmp_basket']->getGiftCardCost()); ?>
                            <?php if ($this->_tpl_vars['giftCardCost'] && $this->_tpl_vars['giftCardCost']->getPrice() > 0): ?>
                                <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForWrapping')): ?>
                                    <tr>
                                        <th><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_GIFTCARD_COSTS_NET','suffix' => 'COLON'), $this);?>
</th>
                                        <td id="basketGiftCardNetto"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['giftCardCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                    <tr>
                                        <?php if ($this->_tpl_vars['oxcmp_basket']->isProportionalCalculationOn()): ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>
</th>
                                        <?php else: ?>
                                            <th><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['giftCardCost']->getVat()), $this);?>
 </th>
                                        <?php endif; ?>
                                        <td id="basketGiftCardVat"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['giftCardCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php else: ?>
                                    <tr>
                                        <th><?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_CARD','suffix' => 'COLON'), $this);?>
</th>
                                        <td id="basketGiftCardGross"><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['giftCardCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</td>
                                    </tr>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    

                    
                        <tr>
                            <th><strong><?php echo smarty_function_oxmultilang(array('ident' => 'GRAND_TOTAL','suffix' => 'COLON'), $this);?>
</strong></th>
                            <td id="basketGrandTotal"><strong><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oxcmp_basket']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</strong></td>
                        </tr>
                    

                    <?php if ($this->_tpl_vars['oxcmp_basket']->hasSkipedDiscount()): ?>
                        <tr>
                            <th><span id="noteWithSkippedDiscount" class="note"><?php echo $this->_tpl_vars['oMarkGenerator']->getMark('skippedDiscount'); ?>
</span> <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_COUPON_NOT_APPLIED_FOR_ARTICLES'), $this);?>
</span></th>
                            <td></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>
        
    </div>
 </form>