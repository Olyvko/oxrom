<?php /* Smarty version 2.6.28, created on 2016-03-16 21:54:55
         compiled from page/details/inc/attributes.tpl */ ?>
<table class="attributes">
    <?php $_from = $this->_tpl_vars['oView']->getAttributes(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['attribute'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attribute']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['oAttr']):
        $this->_foreach['attribute']['iteration']++;
?>
    <tr>
        <th id="attrTitle_<?php echo $this->_foreach['attribute']['iteration']; ?>
"><strong><?php echo $this->_tpl_vars['oAttr']->title; ?>
</strong></th>
        <td id="attrValue_<?php echo $this->_foreach['attribute']['iteration']; ?>
"><?php echo $this->_tpl_vars['oAttr']->value; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>