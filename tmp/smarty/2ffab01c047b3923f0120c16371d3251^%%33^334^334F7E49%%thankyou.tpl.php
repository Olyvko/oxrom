<?php /* Smarty version 2.6.28, created on 2016-05-14 19:01:08
         compiled from page/checkout/thankyou.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'page/checkout/thankyou.tpl', 11, false),array('function', 'oxgetseourl', 'page/checkout/thankyou.tpl', 27, false),array('modifier', 'cat', 'page/checkout/thankyou.tpl', 30, false),)), $this); ?>
<?php ob_start(); ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "page/checkout/inc/steps.tpl", 'smarty_include_vars' => array('active' => 5)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    
        <?php $this->assign('order', $this->_tpl_vars['oView']->getOrder()); ?>
        <?php $this->assign('basket', $this->_tpl_vars['oView']->getBasket()); ?>

        <div id="thankyouPage">
            <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'THANK_YOU'), $this);?>
</h3>

            
                <?php echo smarty_function_oxmultilang(array('ident' => 'THANK_YOU_FOR_ORDER'), $this);?>
 <?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxname->value; ?>
. <br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'REGISTERED_YOUR_ORDER','args' => $this->_tpl_vars['order']->oxorder__oxordernr->value), $this);?>
 <br>
                <?php if (! $this->_tpl_vars['oView']->getMailError()): ?>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_YOU_RECEIVED_ORDER_CONFIRM'), $this);?>
<br>
                <?php else: ?><br>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_CONFIRMATION_NOT_SUCCEED'), $this);?>
<br>
                <?php endif; ?>
                <br>
                <?php echo smarty_function_oxmultilang(array('ident' => 'MESSAGE_WE_WILL_INFORM_YOU'), $this);?>
<br><br>
            

            
                <?php echo smarty_function_oxmultilang(array('ident' => 'YOU_CAN_GO'), $this);?>

                <a id="backToShop" rel="nofollow" href="<?php echo smarty_function_oxgetseourl(array('ident' => $this->_tpl_vars['oViewConf']->getHomeLink()), $this);?>
" class="link"><?php echo smarty_function_oxmultilang(array('ident' => 'BACK_TO_START_PAGE'), $this);?>
</a>
                <?php if ($this->_tpl_vars['oxcmp_user']->oxuser__oxpassword->value): ?>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'OR'), $this);?>

                    <a id="orderHistory" rel="nofollow" href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=account_order") : smarty_modifier_cat($_tmp, "cl=account_order"))), $this);?>
" class="link"><?php echo smarty_function_oxmultilang(array('ident' => 'CHECK_YOUR_ORDER_HISTORY'), $this);?>
</a>.
                <?php endif; ?>
            

            
                <?php if ($this->_tpl_vars['oViewConf']->showTs('THANKYOU') && $this->_tpl_vars['oViewConf']->getTsId()): ?>
                    <?php $this->assign('sTSRatingImg', ((is_array($_tmp=((is_array($_tmp="https://www.trustedshops.com/bewertung/widget/img/bewerten_")) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oView']->getActiveLangAbbr()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oView']->getActiveLangAbbr())))) ? $this->_run_mod_handler('cat', true, $_tmp, ".gif") : smarty_modifier_cat($_tmp, ".gif"))); ?>
                    <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOPS_CUSTOMER_RATINGS'), $this);?>
</h3>
                    <?php echo smarty_function_oxmultilang(array('ident' => 'RATE_OUR_SHOP'), $this);?>

                    <div class="etrustTsRatingButton">
                        <a href="<?php echo $this->_tpl_vars['oViewConf']->getTsRatingUrl(); ?>
" target="_blank" title="<?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOPS_RATINGS'), $this);?>
">
                            <img src="<?php echo $this->_tpl_vars['sTSRatingImg']; ?>
" border="0" alt="<?php echo smarty_function_oxmultilang(array('ident' => 'WRITE_REVIEW_2'), $this);?>
" align="middle">
                        </a>
                    </div>
                <?php endif; ?>
            

            
                <?php if (( $this->_tpl_vars['oView']->getTrustedShopId() )): ?>
                    <h3 class="blockHead"><?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_BUYER_PROTECTION'), $this);?>
</h3>
                    <?php if ($this->_tpl_vars['oView']->getTrustedShopId()): ?>
                        <div class="etrustlogocol">
                            <a href="https://www.trustedshops.com/shop/certificate.php?shop_id=<?php echo $this->_tpl_vars['oView']->getTrustedShopId(); ?>
" target="_blank">
                                <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl('trustedshops_m.gif'); ?>
" title="<?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOPS_IMGTITLE'), $this);?>
">
                            </a>
                        </div>
                        <form id="formTsShops" name="formTShops" method="post" action="https://www.trustedshops.com/shop/protection.php" target="_blank">
                          <div>
                              <input type="hidden" name="_charset_">
                              <input name="shop_id" type=hidden value="<?php echo $this->_tpl_vars['oView']->getTrustedShopId(); ?>
">
                              <input name="email" type="hidden" value="<?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxusername->value; ?>
">
                              <input name="amount" type=hidden value="<?php echo $this->_tpl_vars['order']->getTotalOrderSum(); ?>
">
                              <input name="curr" type=hidden value="<?php echo $this->_tpl_vars['order']->oxorder__oxcurrency->value; ?>
">
                              <input name="payment" type=hidden value="">
                              <input name="KDNR" type="hidden" value="<?php echo $this->_tpl_vars['oxcmp_user']->oxuser__oxcustnr->value; ?>
">
                              <input name="ORDERNR" type="hidden" value="<?php echo $this->_tpl_vars['order']->oxorder__oxordernr->value; ?>
">
                              <?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_REGISTRATION_MESSAGE'), $this);?>
<br><br>
                              <span><input type="submit" id="btnProtect" name="btnProtect" value="<?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOP_REGISTRATION'), $this);?>
"></span>
                          </div>
                        </form>
                        <div class="clear"></div>
                    <?php endif; ?>
                <?php endif; ?>
            

            <?php if ($this->_tpl_vars['oView']->getAlsoBoughtTheseProducts()): ?>
                <br><br>
                <h1 class="pageHead">
                     <?php echo smarty_function_oxmultilang(array('ident' => 'WHO_BOUGHT_ALSO_BOUGHT','suffix' => 'COLON'), $this);?>

                </h1>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/product/list.tpl", 'smarty_include_vars' => array('type' => $this->_tpl_vars['oView']->getListDisplayType(),'listId' => 'alsoBoughtThankyou','products' => $this->_tpl_vars['oView']->getAlsoBoughtTheseProducts(),'blDisableToCart' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        </div>
    
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->append('oxidBlock_content', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "layout/page.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>