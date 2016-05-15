<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:08
         compiled from widget/trustedshops/info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxscript', 'widget/trustedshops/info.tpl', 1, false),array('function', 'oxmultilang', 'widget/trustedshops/info.tpl', 20, false),array('modifier', 'cat', 'widget/trustedshops/info.tpl', 21, false),)), $this); ?>
<?php echo smarty_function_oxscript(array('add' => "$('a.js-external').attr('target', '_blank');"), $this);?>

<!-- Trusted Shops Siegel -->
<?php if ($this->_tpl_vars['oView']->getTrustedShopId()): ?>
    <?php $this->assign('tsId', $this->_tpl_vars['oView']->getTrustedShopId()); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['oView']->getTSExcellenceId()): ?>
    <?php $this->assign('tsId', $this->_tpl_vars['oView']->getTSExcellenceId()); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['tsId']): ?>
    <?php echo smarty_function_oxscript(array('include' => 'js/widgets/oxtsbadge.js'), $this);?>

    <?php echo smarty_function_oxscript(array('add' => "$( 'body' ).oxTsBadge({trustedShopId:'".($this->_tpl_vars['tsId'])."'});"), $this);?>

    <noscript>
        <a href="https://www.trustedshops.co.uk/shop/certificate.php?shop_id=<?php echo $this->_tpl_vars['tsId']; ?>
">
            <img title="Trusted Shops Seal of Approval - click to verify." src="//widgets.trustedshops.com/images/badge.png" style="position:fixed;bottom:100;right:100;" />
        </a>
    </noscript>
<?php else: ?>
    <a id="tsMembership" class="js-external" href="<?php echo smarty_function_oxmultilang(array('ident' => 'TRUSTED_SHOPS_LINK'), $this);?>
">
        <?php $this->assign('sTrustShopImg', ((is_array($_tmp=((is_array($_tmp='trustedshops_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['oViewConf']->getActLanguageAbbr()) : smarty_modifier_cat($_tmp, $this->_tpl_vars['oViewConf']->getActLanguageAbbr())))) ? $this->_run_mod_handler('cat', true, $_tmp, ".gif") : smarty_modifier_cat($_tmp, ".gif"))); ?>
        <img src="<?php echo $this->_tpl_vars['oViewConf']->getImageUrl($this->_tpl_vars['sTrustShopImg']); ?>
" alt="<?php echo smarty_function_oxmultilang(array('ident' => 'MORE'), $this);?>
">
    </a>
<?php endif; ?>
<!-- / Trusted Shops Siegel -->