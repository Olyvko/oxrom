<?php /* Smarty version 2.6.28, created on 2016-05-12 19:51:18
         compiled from page/checkout/inc/agb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxifcontent', 'page/checkout/inc/agb.tpl', 14, false),array('function', 'oxscript', 'page/checkout/inc/agb.tpl', 57, false),)), $this); ?>
<div class="agb">
    <?php if ($this->_tpl_vars['oView']->isActive('PsLogin') || ! $this->_tpl_vars['oView']->isConfirmAGBActive()): ?>
        <input type="hidden" name="ord_agb" value="1">
    <?php else: ?>
        <input type="hidden" name="ord_agb" value="0">
    <?php endif; ?>
    <input type="hidden" name="oxdownloadableproductsagreement" value="0">
    <input type="hidden" name="oxserviceproductsagreement" value="0">

    <?php if (! $this->_tpl_vars['hideButtons']): ?>

        <?php if (! $this->_tpl_vars['oView']->isActive('PsLogin')): ?>
            <?php if ($this->_tpl_vars['oView']->isConfirmAGBActive()): ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <h3 class="section">
                        <strong><?php echo $this->_tpl_vars['oContent']->oxcontents__oxtitle->value; ?>
</strong>
                    </h3>
                    <p class="agbConfirmation">
                        <input id="checkAgbTop" class="checkbox" type="checkbox" name="ord_agb" value="1">
                        <label for="checkAgbTop"><?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>
</label>
                    </p>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php else: ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrighttocancellegend2','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <h3 class="section">
                        <strong><?php echo $this->_tpl_vars['oContent']->oxcontents__oxtitle->value; ?>
</strong>
                    </h3>
                    <p class="agbConfirmation">
                        <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>

                    </p>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['oViewConf']->isFunctionalityEnabled('blEnableIntangibleProdAgreement')): ?>
            <?php $this->assign('oExplanationMarks', $this->_tpl_vars['oView']->getBasketContentMarkGenerator()); ?>
            <?php if ($this->_tpl_vars['oxcmp_basket']->hasArticlesWithDownloadableAgreement()): ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxdownloadableproductsagreement','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <p id="noteForDownloadableArticles" class="agbConfirmation">
                        <input id="oxdownloadableproductsagreement" class="checkbox" type="checkbox" name="oxdownloadableproductsagreement" value="1">
                        <label for="oxdownloadableproductsagreement"><?php echo $this->_tpl_vars['oExplanationMarks']->getMark('downloadable'); ?>
 <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>
</label>
                    </p>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['oxcmp_basket']->hasArticlesWithIntangibleAgreement()): ?>
                <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxserviceproductsagreement','object' => 'oContent')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                    <p id="noteForIntangibleArticles" class="agbConfirmation">
                        <input id="oxserviceproductsagreement" class="checkbox" type="checkbox" name="oxserviceproductsagreement" value="1">
                        <label for="oxserviceproductsagreement"><?php echo $this->_tpl_vars['oExplanationMarks']->getMark('intangible'); ?>
 <?php echo $this->_tpl_vars['oContent']->oxcontents__oxcontent->value; ?>
</label>
                    </p>
                <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php echo smarty_function_oxscript(array('add' => "$('#checkAgbTop').click(function(){ $('input[name=ord_agb]').val(parseInt($('input[name=ord_agb]').val())^1);});"), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('#oxdownloadableproductsagreement').click(function(){ $('input[name=oxdownloadableproductsagreement]').val(parseInt($('input[name=oxdownloadableproductsagreement]').val())^1);});"), $this);?>

<?php echo smarty_function_oxscript(array('add' => "$('#oxserviceproductsagreement').click(function(){ $('input[name=oxserviceproductsagreement]').val(parseInt($('input[name=oxserviceproductsagreement]').val())^1);});"), $this);?>