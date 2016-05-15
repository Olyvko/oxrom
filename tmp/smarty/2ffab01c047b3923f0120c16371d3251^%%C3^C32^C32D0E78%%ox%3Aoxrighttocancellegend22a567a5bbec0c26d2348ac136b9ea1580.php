<?php /* Smarty version 2.6.28, created on 2016-05-14 19:00:45
         compiled from ox:oxrighttocancellegend22a567a5bbec0c26d2348ac136b9ea1580 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'oxifcontent', 'ox:oxrighttocancellegend22a567a5bbec0c26d2348ac136b9ea1580', 5, false),array('modifier', 'oxaddparams', 'ox:oxrighttocancellegend22a567a5bbec0c26d2348ac136b9ea1580', 5, false),)), $this); ?>
                    <h3 class="section">
                        <strong>Terms and Conditions and Right to Withdrawal</strong>
                    </h3>
                    <p class="agbConfirmation">
                        <?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxagb','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> Our general <a rel="nofollow" href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
" onclick="window.open('<?php echo ((is_array($_tmp=$this->_tpl_vars['oCont']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "plain=1") : smarty_modifier_oxaddparams($_tmp, "plain=1")); ?>
', 'agb_popup', 'resizable=yes,status=no,scrollbars=yes,menubar=no,width=620,height=400');return false;" class="fontunderline">terms and conditions</a> apply.&nbsp;
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('oxifcontent', array('ident' => 'oxrightofwithdrawal','object' => 'oCont')); $_block_repeat=true;smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    Read details about  <a id="test_OrderOpenWithdrawalBottom" rel="nofollow" href="<?php echo $this->_tpl_vars['oCont']->getLink(); ?>
" onclick="window.open('<?php echo ((is_array($_tmp=$this->_tpl_vars['oCont']->getLink())) ? $this->_run_mod_handler('oxaddparams', true, $_tmp, "plain=1") : smarty_modifier_oxaddparams($_tmp, "plain=1")); ?>
', 'rightofwithdrawal_popup', 'resizable=yes,status=no,scrollbars=yes,menubar=no,width=620,height=400');return false;">right of withdrawal</a>.
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_oxifcontent($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </p>
                