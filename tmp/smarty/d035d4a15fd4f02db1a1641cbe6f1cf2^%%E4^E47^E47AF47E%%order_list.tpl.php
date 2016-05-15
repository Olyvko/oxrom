<?php /* Smarty version 2.6.28, created on 2016-05-14 19:01:44
         compiled from order_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'oxmultilangassign', 'order_list.tpl', 1, false),array('modifier', 'oxformdate', 'order_list.tpl', 67, false),array('modifier', 'oxupper', 'order_list.tpl', 76, false),array('modifier', 'oxtruncate', 'order_list.tpl', 77, false),array('modifier', 'oxaddslashes', 'order_list.tpl', 158, false),array('function', 'oxmultilang', 'order_list.tpl', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "headitem.tpl", 'smarty_include_vars' => array('title' => ((is_array($_tmp='GENERAL_ADMIN_TITLE')) ? $this->_run_mod_handler('oxmultilangassign', true, $_tmp) : smarty_modifier_oxmultilangassign($_tmp)),'box' => 'list')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->assign('where', $this->_tpl_vars['oView']->getListFilter()); ?>

<?php if ($this->_tpl_vars['readonly']): ?>
    <?php $this->assign('readonly', 'readonly disabled'); ?>
<?php else: ?>
    <?php $this->assign('readonly', ""); ?>
<?php endif; ?>

<script type="text/javascript">
<!--
function StornoThisArticle( sID)
{
    blCheck = confirm("<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_YOUWANTTOSTORNO'), $this);?>
");
    if( blCheck == true)
    {
        var oSearch = document.getElementById("search");
        oSearch.oxid.value=sID;
        oSearch.fnc.value='storno';

        var oTransfer = parent.edit.document.getElementById("transfer");
        oTransfer.oxid.value=sID;
        oTransfer.cl.value='<?php echo $this->_tpl_vars['default_edit']; ?>
';

       //forcing edit frame to reload after submit
       top.forceReloadingEditFrame();

       oSearch.submit();
    }
}
window.onload = function ()
{
    top.reloadEditFrame();
    <?php if ($this->_tpl_vars['updatelist'] == 1): ?>
        top.oxid.admin.updateList('<?php echo $this->_tpl_vars['oxid']; ?>
');
    <?php endif; ?>
}
//-->
</script>

<div id="liste">


<form name="search" id="search" action="<?php echo $this->_tpl_vars['oViewConf']->getSelfLink(); ?>
" method="post">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_formparams.tpl", 'smarty_include_vars' => array('cl' => 'order_list','lstrt' => $this->_tpl_vars['lstrt'],'actedit' => $this->_tpl_vars['actedit'],'oxid' => $this->_tpl_vars['oxid'],'fnc' => "",'language' => $this->_tpl_vars['actlang'],'editlanguage' => $this->_tpl_vars['actlang'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<table cellspacing="0" cellpadding="0" border="0" width="100%">
    <colgroup>
        
            <col width="25%">
            <col width="25%">
            <col width="10%">
            <col width="17%">
            <col width="17%">
            <col width="2%">
        
    </colgroup>
    <tr class="listitem">
        
            <td valign="top" class="listfilter first" height="20">
                <div class="r1"><div class="b1">
                <select name="folder" class="folderselect" onChange="document.search.submit();">
                    <option value="-1" style="color: #000000;"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_FOLDER_ALL'), $this);?>
</option>
                    <?php $_from = $this->_tpl_vars['afolder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['color']):
?>
                    <option value="<?php echo $this->_tpl_vars['field']; ?>
" <?php if ($this->_tpl_vars['folder'] == $this->_tpl_vars['field']): ?>SELECTED<?php endif; ?> style="color: <?php echo $this->_tpl_vars['color']; ?>
;"><?php echo smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['field'],'noerror' => true), $this);?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                <input class="listedit" type="text" size="15" maxlength="128" name="where[oxorder][oxorderdate]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['where']['oxorder']['oxorderdate'])) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'order_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>>
                </div></div>
            </td>
            <td valign="top" class="listfilter" height="20">
                <div class="r1"><div class="b1">
                <select name="addsearchfld" class="folderselect" >
                    <option value="-1" style="color: #000000;"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_PAID'), $this);?>
</option>
                    <?php $_from = $this->_tpl_vars['asearch']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['table'] => $this->_tpl_vars['desc']):
?>
                    <?php $this->assign('ident', "ORDER_SEARCH_FIELD_".($this->_tpl_vars['desc'])); ?>
                    <?php $this->assign('ident', ((is_array($_tmp=$this->_tpl_vars['ident'])) ? $this->_run_mod_handler('oxupper', true, $_tmp) : smarty_modifier_oxupper($_tmp))); ?>
                    <option value="<?php echo $this->_tpl_vars['table']; ?>
" <?php if ($this->_tpl_vars['addsearchfld'] == $this->_tpl_vars['table']): ?>SELECTED<?php endif; ?>><?php echo ((is_array($_tmp=smarty_function_oxmultilang(array('ident' => $this->_tpl_vars['ident']), $this))) ? $this->_run_mod_handler('oxtruncate', true, $_tmp, 20, "..", true) : smarty_modifier_oxtruncate($_tmp, 20, "..", true));?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                <input class="listedit" type="text" size="15" maxlength="128" name="addsearch" value="<?php echo $this->_tpl_vars['addsearch']; ?>
">
                </div></div>
            </td>
            <td valign="top" class="listfilter" height="20">
                <div class="r1"><div class="b1">
                <input class="listedit" type="text" size="7" maxlength="128" name="where[oxorder][oxordernr]" value="<?php echo $this->_tpl_vars['where']['oxorder']['oxordernr']; ?>
">
                </div></div>
            </td>
            <td valign="top" class="listfilter" height="20">
                <div class="r1"><div class="b1">
                <input class="listedit" type="text" size="50" maxlength="128" name="where[oxorder][oxbillfname]" value="<?php echo $this->_tpl_vars['where']['oxorder']['oxbillfname']; ?>
">
                </div></div>
            </td>
            <td valign="top" class="listfilter" height="20" colspan="2" nowrap>
                <div class="r1"><div class="b1">
                <div class="find"><input class="listedit" type="submit" name="submitit" value="<?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_SEARCH'), $this);?>
"></div>
                <input class="listedit" type="text" size="50" maxlength="128" name="where[oxorder][oxbilllname]" value="<?php echo $this->_tpl_vars['where']['oxorder']['oxbilllname']; ?>
">
                </div></div>
            </td>
        
    </tr>
    <tr>
        
            <td class="listheader first" height="15">&nbsp;<a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxorderdate', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_ORDERTIME'), $this);?>
</a></td>
            <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxpaid', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_PAID'), $this);?>
</a></td>
            <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxordernr', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'GENERAL_ORDERNUM'), $this);?>
</a></td>
            <td class="listheader" height="15"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxbillfname', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_CUSTOMERFNAME'), $this);?>
</a></td>
            <td class="listheader" height="15" colspan="2"><a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxorder', 'oxbilllname', 'asc');document.search.submit();" class="listheader"><?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_CUSTOMERLNAME'), $this);?>
</a></td>
        
    </tr>

<?php $this->assign('blWhite', ""); ?>
<?php $this->assign('_cnt', 0); ?>
<?php $_from = $this->_tpl_vars['mylist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['listitem']):
?>
    <?php $this->assign('_cnt', $this->_tpl_vars['_cnt']+1); ?>
    <tr id="row.<?php echo $this->_tpl_vars['_cnt']; ?>
">

        
            <?php if ($this->_tpl_vars['listitem']->oxorder__oxstorno->value == 1): ?>
                <?php $this->assign('listclass', 'listitem3'); ?>
            <?php else: ?>
                <?php if ($this->_tpl_vars['listitem']->blacklist == 1): ?>
                    <?php $this->assign('listclass', 'listitem3'); ?>
                <?php else: ?>
                    <?php $this->assign('listclass', "listitem".($this->_tpl_vars['blWhite'])); ?>
                <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['listitem']->getId() == $this->_tpl_vars['oxid']): ?>
                <?php $this->assign('listclass', 'listitem4'); ?>
            <?php endif; ?>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating">&nbsp;<a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['listitem']->oxorder__oxorderdate)) ? $this->_run_mod_handler('oxformdate', true, $_tmp, 'datetime', true) : smarty_modifier_oxformdate($_tmp, 'datetime', true)); ?>
</a></div></td>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['listitem']->oxorder__oxpaid)) ? $this->_run_mod_handler('oxformdate', true, $_tmp) : smarty_modifier_oxformdate($_tmp)); ?>
</a></div></td>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo $this->_tpl_vars['listitem']->oxorder__oxordernr->value; ?>
</a></div></td>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo $this->_tpl_vars['listitem']->oxorder__oxbillfname->value; ?>
</a></div></td>
            <td valign="top" class="<?php echo $this->_tpl_vars['listclass']; ?>
" height="15"><div class="listitemfloating"><a href="Javascript:top.oxid.admin.editThis('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="<?php echo $this->_tpl_vars['listclass']; ?>
"><?php echo $this->_tpl_vars['listitem']->oxorder__oxbilllname->value; ?>
</a></div></td>
            <td class="<?php echo $this->_tpl_vars['listclass']; ?>
">
                <?php if (! $this->_tpl_vars['readonly']): ?>
                    <a href="Javascript:top.oxid.admin.deleteThis('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="delete" id="del.<?php echo $this->_tpl_vars['_cnt']; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_delete')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
                    <a href="Javascript:StornoThisArticle('<?php echo $this->_tpl_vars['listitem']->oxorder__oxid->value; ?>
');" class="pause" id="pau.<?php echo $this->_tpl_vars['_cnt']; ?>
" <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "help.tpl", 'smarty_include_vars' => array('helpid' => 'item_storno')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>></a>
                <?php endif; ?></td>
            </td>
        
    </tr>
<?php if ($this->_tpl_vars['blWhite'] == '2'): ?>
<?php $this->assign('blWhite', ""); ?>
<?php else: ?>
<?php $this->assign('blWhite', '2'); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagenavisnippet.tpl", 'smarty_include_vars' => array('colspan' => '6')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
</form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pagetabsnippet.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
if (parent.parent)
{   parent.parent.sShopTitle   = "<?php echo ((is_array($_tmp=$this->_tpl_vars['actshopobj']->oxshops__oxname->getRawValue())) ? $this->_run_mod_handler('oxaddslashes', true, $_tmp) : smarty_modifier_oxaddslashes($_tmp)); ?>
";
    parent.parent.sMenuItem    = "<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_MENUITEM'), $this);?>
";
    parent.parent.sMenuSubItem = "<?php echo smarty_function_oxmultilang(array('ident' => 'ORDER_LIST_MENUSUBITEM'), $this);?>
";
    parent.parent.sWorkArea    = "<?php echo $this->_tpl_vars['_act']; ?>
";
    parent.parent.setTitle();
}
</script>
</body>
</html>
