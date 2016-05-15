<?php /* Smarty version 2.6.28, created on 2016-05-14 12:19:56
         compiled from ac_module_internals_state.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'ac_module_internals_state.tpl', 1, false),array('modifier', 'count', 'ac_module_internals_state.tpl', 28, false),array('function', 'oxmultilang', 'ac_module_internals_state.tpl', 30, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('box' => 'box','title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)))));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form name="transfer" id="transfer" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
    <?php echo $this->_tpl_vars['oViewConf']->getHiddenSid(); ?>

    <input type="hidden" name="oxid" value="<?php echo $this->_tpl_vars['oxid']; ?>
">
    <input type="hidden" name="cl" value="ac_module_internals_state">
    <input type="hidden" name="fnc" value="" id="fnc">
    <input type="hidden" name="editlanguage" value="<?php echo $this->_tpl_vars['editlanguage']; ?>
">
</form>

<style>
    span.state.sok {color:green;}
    span.state.swarning {color:orange;}
    span.state.serror {color:red;}
    span.state.sfatalm {color:red;text-decoration:line-through;}
    span.state.sfatals {color:red;text-decoration:underline;}
    button.fix {position: absolute;top:0; right: 0;}
    .actions i {margin-right:20px;display:inline_blocks;}
</style>

<script>
    function module_internals_fix(fnc) {
        document.getElementById('fnc').value = fnc;
        document.getElementById('transfer').submit();
    }
</script>

<?php if (count($this->_tpl_vars['aVersions']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_VERSION'), $this);?>
</h3>
    <?php $this->assign('_ok', 1); ?>
    <?php $_from = $this->_tpl_vars['aVersions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sVersion'] => $this->_tpl_vars['iState']):
?>
        <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['iState']]; ?>
"><?php echo $this->_tpl_vars['sVersion']; ?>
</span>
        <?php if ($this->_tpl_vars['iState'] < 1 && $this->_tpl_vars['iState'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_version')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['aExtended']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_EXTEND'), $this);?>
</h3>
    <table>
        <?php $this->assign('_ok', 1); ?>
        <?php $_from = $this->_tpl_vars['aExtended']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sClass'] => $this->_tpl_vars['aModules']):
?>
        <tr>
            <td style="vertical-align: top;"><b><?php echo $this->_tpl_vars['sClass']; ?>
</b></td>
            <td>
                <?php $_from = $this->_tpl_vars['aModules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sModule'] => $this->_tpl_vars['iState']):
?>
                    <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['iState']]; ?>
"><?php echo $this->_tpl_vars['sModule']; ?>
</span>
                    <?php if ($this->_tpl_vars['iState'] < 1 && $this->_tpl_vars['iState'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_extend')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['aFiles']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FILES'), $this);?>
</h3>
    <table>
        <?php $this->assign('_ok', 1); ?>
        <?php $_from = $this->_tpl_vars['aFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sClass'] => $this->_tpl_vars['aFiles']):
?>
        <tr>
            <td style="vertical-align: top;"><b><?php echo $this->_tpl_vars['sClass']; ?>
</b></td>
            <td>
                <?php $_from = $this->_tpl_vars['aFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sFile'] => $this->_tpl_vars['iState']):
?>
                    <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['iState']]; ?>
"><?php echo $this->_tpl_vars['sFile']; ?>
</span>
                    <?php if ($this->_tpl_vars['iState'] < 1 && $this->_tpl_vars['iState'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_files')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['aBlocks']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_BLOCKS'), $this);?>
</h3>
    <table>
        <?php $this->assign('_ok', 1); ?>
        <?php $_from = $this->_tpl_vars['aBlocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTemplate'] => $this->_tpl_vars['aFiles']):
?>
        <tr>
            <?php $this->assign('_tstate', 1); ?>
            <?php $_from = $this->_tpl_vars['aFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sFile'] => $this->_tpl_vars['aStates']):
?>
                <?php if ($this->_tpl_vars['aStates']['template'] < $this->_tpl_vars['_tstate']): ?>
                    <?php $this->assign('_tstate', $this->_tpl_vars['aStates']['template']); ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <td style="vertical-align: top;"><b><span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['_tstate']]; ?>
"><?php echo $this->_tpl_vars['sTemplate']; ?>
</span></b></td>
            <td>
                <?php $_from = $this->_tpl_vars['aFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sFile'] => $this->_tpl_vars['aStates']):
?>
                <?php $this->assign('_state', $this->_tpl_vars['aStates']['file']); ?>
                <div>
                    <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['_state']]; ?>
"><?php echo $this->_tpl_vars['sFile']; ?>
</span>
                    <?php if ($this->_tpl_vars['_state'] < 1 && $this->_tpl_vars['_state'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
                </div>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_blocks')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['aTemplates']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_TEMPLATES'), $this);?>
</h3>
    <table>
        <?php $this->assign('_ok', 1); ?>
        <?php $_from = $this->_tpl_vars['aTemplates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sTemplate'] => $this->_tpl_vars['aFiles']):
?>
        <tr>
            <td style="vertical-align: top;"><b><?php echo $this->_tpl_vars['sTemplate']; ?>
</b></td>
            <td>
                <?php $_from = $this->_tpl_vars['aFiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sFile'] => $this->_tpl_vars['iState']):
?>
                    <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['iState']]; ?>
"><?php echo $this->_tpl_vars['sFile']; ?>
</span>
                    <?php if ($this->_tpl_vars['iState'] < 1 && $this->_tpl_vars['iState'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_templates')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['aSettings']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_SETTINGS'), $this);?>
</h3>
    <table>
        <?php $this->assign('_ok', 1); ?>
        <?php $_from = $this->_tpl_vars['aSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sName'] => $this->_tpl_vars['iState']):
?>
        <tr>
            <td style="vertical-align: top;"><b><?php echo $this->_tpl_vars['sName']; ?>
</b></td>
            <td>
                <div>
                    <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['iState']]; ?>
"><?php echo $this->_tpl_vars['sName']; ?>
</span>
                    <?php if ($this->_tpl_vars['iState'] < 1 && $this->_tpl_vars['iState'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
                </div>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_settings')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php if (count($this->_tpl_vars['aEvents']) > 0): ?>
<div style="position: relative;">
    <h3><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_EVENTS'), $this);?>
</h3>
    <table>
        <?php $this->assign('_ok', 1); ?>
        <?php $_from = $this->_tpl_vars['aEvents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sEvent'] => $this->_tpl_vars['aCallbacks']):
?>
        <tr>
            <td style="vertical-align: top;"><b><?php echo $this->_tpl_vars['sEvent']; ?>
</b></td>
            <td>
                <?php $_from = $this->_tpl_vars['aCallbacks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sCallback'] => $this->_tpl_vars['iState']):
?>
                    <span class="state <?php echo $this->_tpl_vars['sState'][$this->_tpl_vars['iState']]; ?>
"><?php echo $this->_tpl_vars['sCallback']; ?>
</span>
                    <?php if ($this->_tpl_vars['iState'] < 1 && $this->_tpl_vars['iState'] != -2): ?><?php $this->assign('_ok', 0); ?><?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php if (! $this->_tpl_vars['_ok']): ?>
        <button class="fix" onclick="module_internals_fix('fix_events')"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_MI_FIXBTN'), $this);?>
</button>
    <?php endif; ?>
    <br>
</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottomitem.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

</div>
<div class="actions">
    <b><?php echo smarty_function_oxmultilang(array('ident' => 'AC_LEGEND'), $this);?>
 : </b>
    <span class="state sok"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_OK'), $this);?>
</span> <i><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_OK_LABEL'), $this);?>
</i>
    <span class="state swarning"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_WA'), $this);?>
</span> <i><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_WA_LABEL'), $this);?>
</i>
    <span class="state serror"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_ER'), $this);?>
</span> <i><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_ER_LABEL'), $this);?>
</i>
    <span class="state sfatalm"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_FM'), $this);?>
</span> <i><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_FM_LABEL'), $this);?>
</i>
    <span class="state sfatals"><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_FS'), $this);?>
</span> <i><?php echo smarty_function_oxmultilang(array('ident' => 'AC_STATE_FS_LABEL'), $this);?>
</i>
</div>