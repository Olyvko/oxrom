<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from layout/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxid_include_widget', 'layout/header.tpl', 2, false),array('modifier', 'count', 'layout/header.tpl', 43, false),)), $this); ?>
<?php if ($this->_tpl_vars['oView']->showBetaNote()): ?>
    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwBetaNote','noscript' => 1,'nocookie' => 1), $this);?>

<?php endif; ?>
<?php if ($this->_tpl_vars['oViewConf']->getTopActionClassName() != 'clearcookies' && $this->_tpl_vars['oViewConf']->getTopActionClassName() != 'mallstart'): ?>
    <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCookieNote','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>

<?php endif; ?>
<div id="header" class="clear">
    
        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwLanguageList','lang' => $this->_tpl_vars['oViewConf']->getActLanguageId(),'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCurrencyList','cur' => $this->_tpl_vars['oViewConf']->getActCurrency(),'_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1,'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>


        <?php if ($this->_tpl_vars['oxcmp_user'] || $this->_tpl_vars['oView']->getCompareItemCount() || $this->_tpl_vars['Errors']['loginBoxErrors']): ?>
            <?php $this->assign('blAnon', 0); ?>
            <?php $this->assign('force_sid', $this->_tpl_vars['oView']->getSidForWidget()); ?>
        <?php else: ?>
            <?php $this->assign('blAnon', 1); ?>
        <?php endif; ?>

        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwServiceMenu','_parent' => $this->_tpl_vars['oView']->getClassName(),'force_sid' => $this->_tpl_vars['force_sid'],'nocookie' => $this->_tpl_vars['blAnon'],'_navurlparams' => $this->_tpl_vars['oViewConf']->getNavUrlParams(),'anid' => $this->_tpl_vars['oViewConf']->getActArticleId()), $this);?>

    

    
        <?php $this->assign('sLogoImg', $this->_tpl_vars['oViewConf']->getShopLogo()); ?>
        <a id="logo" href="<?php echo $this->_tpl_vars['oViewConf']->getHomeLink(); ?>
" title="<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtitleprefix->value; ?>
"><img
                    src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['sLogoImg']); ?>
"
                    alt="<?php echo $this->_tpl_vars['oxcmp_shop']->oxshops__oxtitleprefix->value; ?>
"></a>
    
    
        <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwCategoryTree','cnid' => $this->_tpl_vars['oView']->getCategoryId(),'sWidgetType' => 'header','_parent' => $this->_tpl_vars['oView']->getClassName(),'nocookie' => 1), $this);?>


        <?php if ($this->_tpl_vars['oxcmp_basket']->getProductsCount()): ?>
            <?php $this->assign('blAnon', 0); ?>
            <?php $this->assign('force_sid', $this->_tpl_vars['oView']->getSidForWidget()); ?>
        <?php else: ?>
            <?php $this->assign('blAnon', 1); ?>
        <?php endif; ?>
        <div id="minibasket_container">
            <?php echo smarty_function_oxid_include_widget(array('cl' => 'oxwMiniBasket','nocookie' => $this->_tpl_vars['blAnon'],'force_sid' => $this->_tpl_vars['force_sid']), $this);?>

        </div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/header/search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
</div>
<?php if ($this->_tpl_vars['oView']->getClassName() == 'start' && count($this->_tpl_vars['oView']->getBanners()) > 0): ?>
    <div class="oxSlider">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "widget/promoslider.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>