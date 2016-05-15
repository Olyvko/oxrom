<?php /* Smarty version 2.6.28, created on 2016-03-13 19:33:10
         compiled from widget/footer/info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'oxmultilang', 'widget/footer/info.tpl', 5, false),array('function', 'oxgetseourl', 'widget/footer/info.tpl', 13, false),array('modifier', 'cat', 'widget/footer/info.tpl', 13, false),)), $this); ?>
<?php $this->assign('aServices', $this->_tpl_vars['oView']->getServicesList()); ?>
<?php $this->assign('aServiceItems', $this->_tpl_vars['oView']->getServicesKeys()); ?>

    <dl id="footerInformation">
        <dt><?php echo smarty_function_oxmultilang(array('ident' => 'INFORMATION'), $this);?>
</dt>
        <dd>
            <ul class="list services">
                <?php $_from = $this->_tpl_vars['aServiceItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sItem']):
?>
                    <?php if (isset ( $this->_tpl_vars['aServices'][$this->_tpl_vars['sItem']] )): ?>
                        <li><a href="<?php echo $this->_tpl_vars['aServices'][$this->_tpl_vars['sItem']]->getLink(); ?>
"><?php echo $this->_tpl_vars['aServices'][$this->_tpl_vars['sItem']]->oxcontents__oxtitle->value; ?>
</a></li>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <li><a href="<?php echo smarty_function_oxgetseourl(array('ident' => ((is_array($_tmp=$this->_tpl_vars['oViewConf']->getSelfLink())) ? $this->_run_mod_handler('cat', true, $_tmp, "cl=newsletter") : smarty_modifier_cat($_tmp, "cl=newsletter"))), $this);?>
" rel="nofollow"><?php echo smarty_function_oxmultilang(array('ident' => 'NEWSLETTER'), $this);?>
</a></li>
            </ul>
        </dd>
    </dl>