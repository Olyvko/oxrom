<?php /* Smarty version 2.6.28, created on 2016-05-14 19:01:07
         compiled from email/html/order_cust.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxcontent', 'email/html/order_cust.tpl', 17, false),array('function', 'oxmultilang', 'email/html/order_cust.tpl', 27, false),array('function', 'oxprice', 'email/html/order_cust.tpl', 97, false),array('function', 'oxgetseourl', 'email/html/order_cust.tpl', 687, false),array('modifier', 'strip_tags', 'email/html/order_cust.tpl', 59, false),array('modifier', 'oxescape', 'email/html/order_cust.tpl', 674, false),array('modifier', 'count', 'email/html/order_cust.tpl', 680, false),array('modifier', 'cat', 'email/html/order_cust.tpl', 687, false),array('modifier', 'oxfilesize', 'email/html/order_cust.tpl', 687, false),array('modifier', 'oxmultilangsal', 'email/html/order_cust.tpl', 733, false),)), $this); ?>
<?php $this->assign('shop', $this->_tpl_vars['oEmailView']->getShop()); ?>
<?php $this->assign('oViewConf', $this->_tpl_vars['oEmailView']->getViewConfig()); ?>
<?php $this->assign('oConf', $this->_tpl_vars['oViewConf']->getConfig()); ?>
<?php $this->assign('currency', $this->_tpl_vars['oEmailView']->getCurrency()); ?>
<?php $this->assign('user', $this->_tpl_vars['oEmailView']->getUser()); ?>
<?php $this->assign('oDelSet', $this->_tpl_vars['order']->getDelSet()); ?>
<?php $this->assign('basket', $this->_tpl_vars['order']->getBasket()); ?>
<?php $this->assign('payment', $this->_tpl_vars['order']->getPayment()); ?>
<?php $this->assign('sOrderId', $this->_tpl_vars['order']->getId()); ?>
<?php $this->assign('oOrderFileList', $this->_tpl_vars['oEmailView']->getOrderFileList($this->_tpl_vars['sOrderId'])); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/header.tpl", 'smarty_include_vars' => array('title' => $this->_tpl_vars['shop']->oxshops__oxordersubject->value)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 10px 0;">
            <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value == 'oxempty'): ?>
              <?php echo smarty_function_oxcontent(array('ident' => 'oxuserordernpemail'), $this);?>

            <?php else: ?>
              <?php echo smarty_function_oxcontent(array('ident' => 'oxuserorderemail'), $this);?>

            <?php endif; ?>
        </p>
    

        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td height="15" width="100" style="padding: 5px; border-bottom: 4px solid #ddd;">
                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_NUMBER'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
</b></p>
            </td>
            <td style="padding: 5px; border-bottom: 4px solid #ddd;">
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; color: #555;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT'), $this);?>
</b></p>
            </td>
            <td style="padding: 5px; border-bottom: 4px solid #ddd;">
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; color: #555;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'UNIT_PRICE'), $this);?>
</b></p>
            </td>
            <td style="padding: 5px; border-bottom: 4px solid #ddd;">
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; color: #555;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'QUANTITY'), $this);?>
</b></p>
            </td>
            <td style="padding: 5px; border-bottom: 4px solid #ddd;">
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; color: #555;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'VAT'), $this);?>
</b></p>
            </td>
            <td style="padding: 5px; border-bottom: 4px solid #ddd;">
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; color: #555;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL'), $this);?>
</b></p>
            </td>
            <?php if ($this->_tpl_vars['blShowReviewLink']): ?>
            <td style="padding: 5px; border-bottom: 4px solid #ddd;">
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 0; color: #555;"><b><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT_REVIEW'), $this);?>
</b></p>
            </td>
            <?php endif; ?>
          </tr>

        <?php $this->assign('basketitemlist', $this->_tpl_vars['basket']->getBasketArticles()); ?>

        <?php $_from = $this->_tpl_vars['basket']->getContents(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['basketindex'] => $this->_tpl_vars['basketitem']):
?>
            
                <?php $this->assign('basketproduct', $this->_tpl_vars['basketitemlist'][$this->_tpl_vars['basketindex']]); ?>

                <tr valign="top">
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;">
                        <img src="<?php echo $this->_tpl_vars['basketproduct']->getThumbnailUrl(false); ?>
" border="0" hspace="0" vspace="0" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['basketitem']->getTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" align="texttop">
                        <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
                            <?php $this->assign('oWrapping', $this->_tpl_vars['basketitem']->getWrapping()); ?>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 10px 0;">
                                <b><?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING','suffix' => 'COLON'), $this);?>
&nbsp;</b>
                                <?php if (! $this->_tpl_vars['basketitem']->getWrappingId()): ?>
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'NONE'), $this);?>

                                <?php else: ?>
                                    <?php echo $this->_tpl_vars['oWrapping']->oxwrapping__oxname->value; ?>

                                <?php endif; ?>
                            </p>
                        <?php endif; ?>
                    </td>
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;">
                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 10px 0;">
                            <b><?php echo $this->_tpl_vars['basketitem']->getTitle(); ?>
</b>
                            <?php if ($this->_tpl_vars['basketitem']->getChosenSelList()): ?>
                                <ul style="padding: 0 10px; margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                    <?php $_from = $this->_tpl_vars['basketitem']->getChosenSelList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oList']):
?>
                                        <li style="padding: 3px;"><?php echo $this->_tpl_vars['oList']->name; ?>
 <?php echo $this->_tpl_vars['oList']->value; ?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['basketitem']->getPersParams()): ?>
                                <ul style="padding: 0 10px; margin: 0; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                    <?php $_from = $this->_tpl_vars['basketitem']->getPersParams(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sVar'] => $this->_tpl_vars['aParam']):
?>
                                        <li style="padding: 3px;"><?php echo $this->_tpl_vars['sVar']; ?>
 : <?php echo $this->_tpl_vars['aParam']; ?>
</li>
                                    <?php endforeach; endif; unset($_from); ?>
                                </ul>
                            <?php endif; ?>
                            <br>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 10px 0;">
                                <b><?php echo smarty_function_oxmultilang(array('ident' => 'PRODUCT_NO','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxartnum->value; ?>
</b>
                            </p>
                        </p>
                    </td>
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;" align="right">
                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                            <b><?php if ($this->_tpl_vars['basketitem']->getUnitPrice()): ?><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getUnitPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
<?php endif; ?></b>
                            <?php if (! $this->_tpl_vars['basketitem']->isBundle()): ?>
                                <?php $this->assign('dRegUnitPrice', $this->_tpl_vars['basketitem']->getRegularUnitPrice()); ?>
                                <?php $this->assign('dUnitPrice', $this->_tpl_vars['basketitem']->getUnitPrice()); ?>
                                <?php if ($this->_tpl_vars['dRegUnitPrice']->getPrice() > $this->_tpl_vars['dUnitPrice']->getPrice()): ?>
                                <br><s><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getRegularUnitPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</s>
                                <?php endif; ?>
                            <?php endif; ?>
                        </p>
                        <?php if ($this->_tpl_vars['basketitem']->aDiscounts): ?>
                            <p>
                                <em style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT','suffix' => 'COLON'), $this);?>

                                    <?php $_from = $this->_tpl_vars['basketitem']->aDiscounts; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oDiscount']):
?>
                                      <br><?php echo $this->_tpl_vars['oDiscount']->sDiscount; ?>

                                    <?php endforeach; endif; unset($_from); ?>
                                </em>
                            </p>
                        <?php endif; ?>

                        <?php if ($this->_tpl_vars['basketproduct']->oxarticles__oxorderinfo->value): ?>
                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
                                <?php echo $this->_tpl_vars['basketproduct']->oxarticles__oxorderinfo->value; ?>

                            </p>
                        <?php endif; ?>
                    </td>
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;" align="right">
                      <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                        <b><?php echo $this->_tpl_vars['basketitem']->getAmount(); ?>
</b>
                      </p>
                    </td>
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;" align="right">
                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                            <?php echo $this->_tpl_vars['basketitem']->getVatPercent(); ?>
%
                        </p>
                    </td>
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;" align="right">
                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                            <b><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basketitem']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</b>
                        </p>
                    </td>
                    <?php if ($this->_tpl_vars['blShowReviewLink']): ?>
                    <td style="padding: 5px; border-bottom: 4px solid #ddd;">
                        <a href="<?php echo $this->_tpl_vars['oConf']->getShopURL(); ?>
index.php?shp=<?php echo $this->_tpl_vars['shop']->oxshops__oxid->value; ?>
&amp;anid=<?php echo $this->_tpl_vars['basketitem']->getProductId(); ?>
&amp;cl=review&amp;reviewuserhash=<?php echo $this->_tpl_vars['user']->getReviewUserHash($this->_tpl_vars['user']->getId()); ?>
" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;" target="_blank"><?php echo smarty_function_oxmultilang(array('ident' => 'REVIEW'), $this);?>
</a>
                    </td>
                    <?php endif; ?>
                </tr>
            
        <?php endforeach; endif; unset($_from); ?>
      </table>

      
          <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping() && $this->_tpl_vars['basket']->getCard()): ?>
              <?php $this->assign('oCard', $this->_tpl_vars['basket']->getCard()); ?>
              <br><br>

              <table border="0" cellspacing="0" cellpadding="2" width="100%">
                  <tr>
                      <td colspan="2" style="padding: 5px; border-bottom: 4px solid #ddd;">
                          <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                              <b><?php echo smarty_function_oxmultilang(array('ident' => 'YOUR_GREETING_CARD','suffix' => 'COLON'), $this);?>
</b>
                          </p>
                      </td>
                  </tr>
                  <tr valign="top">
                      <td style="padding: 5px; border-bottom: 4px solid #ddd;" valign="top" width="1%">
                          <img src="<?php echo $this->_tpl_vars['oCard']->getPictureUrl(); ?>
" alt="<?php echo $this->_tpl_vars['oCard']->oxwrapping__oxname->value; ?>
" hspace="0" vspace="0" border="0" align="top">
                      </td>
                      <td style="padding: 5px; padding-left: 15px; border-bottom: 4px solid #ddd;">
                          <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                          <?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>
<br><br>
                          <?php echo $this->_tpl_vars['basket']->getCardMessage(); ?>

                          </p>
                      </td>
                  </tr>
              </table>
          <?php endif; ?>
      

      <br><br>

    <table border="0" cellspacing="0" cellpadding="2" width="100%">
        <tr valign="top">
            <td width="50%" style="padding-right: 40px;">
                
                    <table border="0" cellspacing="0" cellpadding="0">
                        <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['basket']->getVoucherDiscValue()): ?>
                            <tr valign="top">
                                <td style="padding: 5px 20px 5px 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;  color: #555;">
                                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'USED_COUPONS_2'), $this);?>
</b>
                                    </p>
                                </td>
                                <td style="padding: 5px 20px 5px 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;  color: #555;">
                                        <b><?php echo smarty_function_oxmultilang(array('ident' => 'REBATE'), $this);?>
</b>
                                    </p>
                                </td>
                            </tr>
                            <?php $_from = $this->_tpl_vars['order']->getVoucherList(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['voucher']):
?>
                                <?php $this->assign('voucherseries', $this->_tpl_vars['voucher']->getSerie()); ?>
                                <tr valign="top">
                                    <td style="padding: 5px 20px 5px 5px;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo $this->_tpl_vars['voucher']->oxvouchers__oxvouchernr->value; ?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px 20px 5px 5px;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo $this->_tpl_vars['voucherseries']->oxvoucherseries__oxdiscount->value; ?>
 <?php if ($this->_tpl_vars['voucherseries']->oxvoucherseries__oxdiscounttype->value == 'absolute'): ?><?php echo $this->_tpl_vars['currency']->sign; ?>
<?php else: ?>%<?php endif; ?>
                                        </p>
                                    </td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        <?php endif; ?>
                    </table>
                
            </td>
            <td width="50%" valign="top" align="right">
                <table border="0" cellspacing="0" cellpadding="2" width="300">
                    <?php if (! ( $this->_tpl_vars['basket']->getDiscounts() || ( $this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['basket']->getVoucherDiscValue() ) )): ?>
                        
                            <!-- netto price -->
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right" width="60">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                        
                        
                            <!-- VATs -->
                            <?php $_from = $this->_tpl_vars['basket']->getProductVats(false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['key']), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['VATitem'],'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        

                        
                            <!-- brutto price -->
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                        
                        <!-- applied discounts -->
                    <?php else: ?>

                        <?php if ($this->_tpl_vars['order']->isNettoMode()): ?>
                            
                            <!-- netto price -->
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right" width="60">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            
                        <?php else: ?>
                            
                                <!-- brutto price -->
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            
                        <?php endif; ?>

                        
                            <!-- discounts -->
                            <?php $_from = $this->_tpl_vars['basket']->getDiscounts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oDiscount']):
?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 1px solid #ddd;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php if ($this->_tpl_vars['oDiscount']->dDiscount < 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DISCOUNT'), $this);?>
<?php endif; ?> <em><?php echo $this->_tpl_vars['oDiscount']->sDiscount; ?>
</em> :
                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 1px solid #ddd;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDiscount']->dDiscount*-1,'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        

                        
                        <!-- voucher discounts -->
                        <?php if ($this->_tpl_vars['oViewConf']->getShowVouchers() && $this->_tpl_vars['basket']->getVoucherDiscValue()): ?>
                        <tr valign="top">
                            <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                    <?php echo smarty_function_oxmultilang(array('ident' => 'COUPON','suffix' => 'COLON'), $this);?>

                                </p>
                            </td>
                            <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                    <?php $this->assign('oVoucherDiscount', $this->_tpl_vars['basket']->getVoucherDiscount()); ?>
                                    <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oVoucherDiscount']->getBruttoPrice()*-1,'currency' => $this->_tpl_vars['currency']), $this);?>

                                </p>
                            </td>
                        </tr>
                        <?php endif; ?>
                        

                        <?php if (! $this->_tpl_vars['order']->isNettoMode()): ?>
                        
                            <!-- netto price -->
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 1px solid #ddd;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_NET','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 1px solid #ddd;" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getNettoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                        
                        <?php endif; ?>

                        
                            <!-- VATs -->
                            <?php $_from = $this->_tpl_vars['basket']->getProductVats(false); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['VATitem']):
?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['key']), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['VATitem'],'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endforeach; endif; unset($_from); ?>
                        

                        <?php if ($this->_tpl_vars['order']->isNettoMode()): ?>
                        
                            <!-- brutto price -->
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'TOTAL_GROSS','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getBruttoSum(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                        
                        <?php endif; ?>
                    <?php endif; ?>

                    
                        <!-- delivery costs -->
                    <?php $this->assign('oDeliveryCost', $this->_tpl_vars['basket']->getDeliveryCost()); ?>
                    <?php if ($this->_tpl_vars['oDeliveryCost'] && $this->_tpl_vars['oDeliveryCost']->getPrice() > 0): ?>
                        <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForDelivery')): ?>
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 1px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_NET','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 1px solid #ccc;" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDeliveryCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                            <?php if ($this->_tpl_vars['oDeliveryCost']->getVatValue()): ?>
                                <tr valign="top">
                                    <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>

                                            </p>
                                        </td>
                                    <?php else: ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['oDeliveryCost']->getVat()), $this);?>

                                            </p>
                                        </td>
                                    <?php endif; ?>
                                    <td style="padding: 5px; border-bottom: 2px solid #ddd;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDeliveryCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php else: ?>
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_COST','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oDeliveryCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    

                    
                        <!-- payment sum -->
                    <?php $this->assign('oPaymentCost', $this->_tpl_vars['basket']->getPaymentCost()); ?>
                    <?php if ($this->_tpl_vars['oPaymentCost'] && $this->_tpl_vars['oPaymentCost']->getPrice()): ?>
                        <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForPayCharge')): ?>
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc; border-bottom: 1px solid #ddd;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php if ($this->_tpl_vars['oPaymentCost']->getPrice() >= 0): ?><?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE'), $this);?>
<?php else: ?><?php echo smarty_function_oxmultilang(array('ident' => 'DEDUCTION'), $this);?>
<?php endif; ?> <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;<?php if ($this->_tpl_vars['basket']->getDelCostVat()): ?>border-bottom: 1px solid #ddd;<?php endif; ?>" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                            <?php if ($this->_tpl_vars['oPaymentCost']->getVatValue()): ?>
                                <tr valign="top">
                                    <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>

                                            </p>
                                        </td>
                                    <?php else: ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['oPaymentCost']->getVat()), $this);?>

                                            </p>
                                        </td>
                                    <?php endif; ?>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php else: ?>
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'SURCHARGE','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endif; ?>
                    

                    
                        <?php $this->assign('trustedShopProtectionCost', $this->_tpl_vars['basket']->getTrustedShopProtectionCost()); ?>
                        <?php if ($this->_tpl_vars['trustedShopProtectionCost'] && $this->_tpl_vars['trustedShopProtectionCost']->getPrice() > 0): ?>
                            <!-- Trusted Shops -->
                            <tr valign="top">
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;<?php if ($this->_tpl_vars['basket']->getTsProtectionVat()): ?>border-bottom: 1px solid #ddd;<?php endif; ?>">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_BUYER_PROTECTION','suffix' => 'COLON'), $this);?>

                                    </p>
                                </td>
                                <td style="padding: 5px; border-bottom: 2px solid #ccc;<?php if ($this->_tpl_vars['basket']->getTsProtectionVat()): ?>border-bottom: 1px solid #ddd;<?php endif; ?>" align="right">
                                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                        <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['trustedShopProtectionCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                    </p>
                                </td>
                            </tr>
                            <?php if ($this->_tpl_vars['trustedShopProtectionCost']->getVatValue()): ?>
                                <tr valign="top">
                                    <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>

                                            </p>
                                        </td>
                                    <?php else: ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['trustedShopProtectionCost']->getVat()), $this);?>

                                            </p>
                                        </td>
                                    <?php endif; ?>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['trustedShopProtectionCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                    

                    <?php if ($this->_tpl_vars['oViewConf']->getShowGiftWrapping()): ?>
                        
                    <!-- Gift wrapping -->
                        <?php $this->assign('wrappingCost', $this->_tpl_vars['basket']->getWrappingCost()); ?>
                        <?php if ($this->_tpl_vars['wrappingCost'] && $this->_tpl_vars['wrappingCost']->getPrice() > 0): ?>
                            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForWrapping')): ?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 1px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_WRAPPING_COSTS_NET','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 1px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrappingCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'PLUS_VAT','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrappingCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'GIFT_WRAPPING','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['wrappingCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                        
                    <!-- Greeting card -->
                        <?php $this->assign('giftCardCost', $this->_tpl_vars['basket']->getGiftCardCost()); ?>
                        <?php if ($this->_tpl_vars['giftCardCost'] && $this->_tpl_vars['giftCardCost']->getPrice() > 0): ?>
                            <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blShowVATForWrapping')): ?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 1px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_GIFTCARD_COSTS_NET','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 1px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['giftCardCost']->getNettoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <?php if ($this->_tpl_vars['basket']->isProportionalCalculationOn()): ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'BASKET_TOTAL_PLUS_PROPORTIONAL_VAT','suffix' => 'COLON'), $this);?>

                                            </p>
                                        </td>
                                    <?php else: ?>
                                        <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                                <?php echo smarty_function_oxmultilang(array('ident' => 'VAT_PLUS_PERCENT_AMOUNT','suffix' => 'COLON','args' => $this->_tpl_vars['giftCardCost']->getVat()), $this);?>

                                            </p>
                                        </td>
                                    <?php endif; ?>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['giftCardCost']->getVatValue(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php else: ?>
                                <tr valign="top">
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxmultilang(array('ident' => 'GREETING_CARD','suffix' => 'COLON'), $this);?>

                                        </p>
                                    </td>
                                    <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                            <?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['giftCardCost']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>

                                        </p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endif; ?>
                        
                    <?php endif; ?>

                    
                        <!-- grand total price -->
                        <tr valign="top">
                            <td style="padding: 5px; border-bottom: 2px solid #ccc;">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                    <b><?php echo smarty_function_oxmultilang(array('ident' => 'GRAND_TOTAL','suffix' => 'COLON'), $this);?>
</b>
                                </p>
                            </td>
                            <td style="padding: 5px; border-bottom: 2px solid #ccc;" align="right">
                                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0;">
                                    <b><?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['basket']->getPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
</b>
                                </p>
                            </td>
                        </tr>
                    
                </table>
            </td>
        </tr>
    </table>

    
        <?php if ($this->_tpl_vars['order']->oxorder__oxremark->value): ?>
            <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'WHAT_I_WANTED_TO_SAY'), $this);?>

            </h3>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 5px 0 10px;">
                <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxremark->value)) ? $this->_run_mod_handler('oxescape', true, $_tmp) : smarty_modifier_oxescape($_tmp)); ?>

            </p>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['oOrderFileList'] && ((is_array($_tmp=$this->_tpl_vars['oOrderFileList'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp))): ?>
            <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'MY_DOWNLOADS_DESC'), $this);?>

            </h3>
            <?php $_from = $this->_tpl_vars['oOrderFileList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oOrderFile']):
?>
              <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 5px;">
              <?php if ($this->_tpl_vars['order']->oxorder__oxpaid->value || ! $this->_tpl_vars['oOrderFile']->oxorderfiles__oxpurchasedonly->value): ?>
                <a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=download") : smarty_modifier_cat($_tmp, "cl=download")),'params' => ((is_array($_tmp="sorderfileid=")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oOrderFile']->getId()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oOrderFile']->getId()))), $this);?>
" rel="nofollow"><?php echo $this->_tpl_vars['oOrderFile']->oxorderfiles__oxfilename->value; ?>
</a> <?php echo ((is_array($_tmp=$this->_tpl_vars['oOrderFile']->getFileSize())) ? $this->_run_mod_handler('oxfilesize', true, $_tmp) : smarty_modifier_oxfilesize($_tmp)); ?>

              <?php else: ?>
                <span><?php echo $this->_tpl_vars['oOrderFile']->oxorderfiles__oxfilename->value; ?>
</span>
                <strong><?php echo smarty_function_oxmultilang(array('ident' => 'DOWNLOADS_PAYMENT_PENDING'), $this);?>
</strong>
              <?php endif; ?>
              </p>
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value != 'oxempty'): ?>
            <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'PAYMENT_METHOD','suffix' => 'COLON'), $this);?>

            </h3>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 5px 0 10px;">
                <b><?php echo $this->_tpl_vars['payment']->oxpayments__oxdesc->value; ?>

                    <?php $this->assign('oPaymentCostPrice', $this->_tpl_vars['basket']->getPaymentCost()); ?>
                    <?php if ($this->_tpl_vars['oPaymentCostPrice']): ?>(<?php echo smarty_function_oxprice(array('price' => $this->_tpl_vars['oPaymentCostPrice']->getBruttoPrice(),'currency' => $this->_tpl_vars['currency']), $this);?>
)<?php endif; ?></b>
            </p>
        <?php endif; ?>
    

    
        <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
            <?php echo smarty_function_oxmultilang(array('ident' => 'EMAIL_ADDRESS','suffix' => 'COLON'), $this);?>

        </h3>
        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 5px 0 10px;">
             <?php echo $this->_tpl_vars['user']->oxuser__oxusername->value; ?>

        </p>
    

    
        <!-- Address info -->
        <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
            <?php echo smarty_function_oxmultilang(array('ident' => 'ADDRESS','suffix' => 'COLON'), $this);?>

        </h3>

        <table colspan="0" rowspan="0" border="0">
            <tr valign="top">
                <td style="padding-right: 30px">
                    <h4 style="font-weight: bold; margin: 0; padding: 0 0 5px; line-height: 20px; font-size: 11px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase;">
                        <?php echo smarty_function_oxmultilang(array('ident' => 'BILLING_ADDRESS','suffix' => 'COLON'), $this);?>

                    </h4>
                    <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 1px;">
                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillcompany->value; ?>
<br>
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxbillsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbilllname->value; ?>
<br>
                        <?php if ($this->_tpl_vars['order']->oxorder__oxbilladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxbilladdinfo->value; ?>
<br><?php endif; ?>
                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillstreetnr->value; ?>
<br>
                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillstateid->value; ?>

                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillcity->value; ?>
<br>
                        <?php echo $this->_tpl_vars['order']->oxorder__oxbillcountry->value; ?>
<br>
                        <?php if ($this->_tpl_vars['order']->oxorder__oxbillustid->value): ?><?php echo smarty_function_oxmultilang(array('ident' => 'VAT_ID_NUMBER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillustid->value; ?>
<br><?php endif; ?>
                        <?php echo smarty_function_oxmultilang(array('ident' => 'PHONE','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxbillfon->value; ?>
<br><br>
                    </p>
                </td>
                <?php if ($this->_tpl_vars['order']->oxorder__oxdellname->value): ?>
                    <td>
                        <h4 style="font-weight: bold; margin: 0; padding: 0 0 5px; line-height: 20px; font-size: 11px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase;">
                            <?php echo smarty_function_oxmultilang(array('ident' => 'SHIPPING_ADDRESS','suffix' => 'COLON'), $this);?>

                        </h4>
                        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 1px;">
                            <?php echo $this->_tpl_vars['order']->oxorder__oxdelcompany->value; ?>
<br>
                            <?php echo ((is_array($_tmp=$this->_tpl_vars['order']->oxorder__oxdelsal->value)) ? $this->_run_mod_handler('oxmultilangsal', true, $_tmp) : smarty_modifier_oxmultilangsal($_tmp)); ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelfname->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdellname->value; ?>
<br>
                            <?php if ($this->_tpl_vars['order']->oxorder__oxdeladdinfo->value): ?><?php echo $this->_tpl_vars['order']->oxorder__oxdeladdinfo->value; ?>
<br><?php endif; ?>
                            <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreet->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelstreetnr->value; ?>
<br>
                            <?php echo $this->_tpl_vars['order']->oxorder__oxdelstateid->value; ?>

                            <?php echo $this->_tpl_vars['order']->oxorder__oxdelzip->value; ?>
 <?php echo $this->_tpl_vars['order']->oxorder__oxdelcity->value; ?>
<br>
                            <?php echo $this->_tpl_vars['order']->oxorder__oxdelcountry->value; ?>

                        </p>
                    </td>
                <?php endif; ?>
            </tr>
        </table>
    

    
        <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value != 'oxempty'): ?>
            <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'SELECTED_SHIPPING_CARRIER','suffix' => 'COLON'), $this);?>

            </h3>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 5px 0 10px;">
                <b><?php echo $this->_tpl_vars['order']->oDelSet->oxdeliveryset__oxtitle->value; ?>
</b>
            </p>
        <?php endif; ?>
    

    
        <?php if ($this->_tpl_vars['payment']->oxuserpayments__oxpaymentsid->value == 'oxidpayadvance'): ?>
            <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'BANK_DETAILS'), $this);?>

            </h3>
            <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 5px 0 10px;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'BANK','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbankname->value; ?>
<br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'BANK_CODE','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbankcode->value; ?>
<br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'BANK_ACCOUNT_NUMBER','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbanknumber->value; ?>
<br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'BIC','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxbiccode->value; ?>
<br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'IBAN','suffix' => 'COLON'), $this);?>
 <?php echo $this->_tpl_vars['shop']->oxshops__oxibannumber->value; ?>

            </p>
        <?php endif; ?>
    

    
        <p style="font-family: Arial, Helvetica, sans-serif; font-size: 12px; padding-top: 15px;">
            <?php echo smarty_function_oxcontent(array('ident' => 'oxuserorderemailend'), $this);?>

        </p>
    

    
        <?php if ($this->_tpl_vars['oViewConf']->showTs('ORDEREMAIL') && $this->_tpl_vars['oViewConf']->getTsId()): ?>
            <?php $this->assign('sTSRatingImg', ((is_array($_tmp=((is_array($_tmp="https://www.trustedshops.com/bewertung/widget/img/bewerten_")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getActLanguageAbbr()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getActLanguageAbbr())))) ? $this->_run_mod_handler('cat', true, $_tmp, ".gif") : smarty_modifier_cat($_tmp, ".gif"))); ?>
            <h3 style="font-weight: bold; margin: 20px 0 7px; padding: 0; line-height: 35px; font-size: 12px;font-family: Arial, Helvetica, sans-serif; text-transform: uppercase; border-bottom: 4px solid #ddd;">
                <?php echo smarty_function_oxmultilang(array('ident' => 'RATE_OUR_SHOP'), $this);?>

            </h3>

            <a href="<?php echo $this->_tpl_vars['oViewConf']->getTsRatingUrl(); ?>
" target="_blank" title="<?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOPS_RATINGS'), $this);?>
">
                <img src="<?php echo $this->_tpl_vars['sTSRatingImg']; ?>
" border="0" alt="<?php echo smarty_function_oxmultilang(array('ident' => 'WRITE_REVIEW_2'), $this);?>
" align="middle">
            </a>
        <?php endif; ?>
    

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "email/html/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>