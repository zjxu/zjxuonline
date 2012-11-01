<?php /* Smarty version Smarty-3.0.6, created on 2012-10-31 15:47:22
         compiled from "C:\wamp\www\m/tpl\require_lost.html" */ ?>
<?php /*%%SmartyHeaderCode:265055090d78a207894-67678243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88adea5ca822a046ebbbbfb6ba39e99ab5e4d500' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\require_lost.html',
      1 => 1351669636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265055090d78a207894-67678243',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<style>
.td_width_12 {
    width: 12%;
}
.td_width_20{
    width: 20%;
}
.td_width_16 {
    width: 16%;
}
.td_width_28 {
    width: 28%;
}
.td_width_8 {
    width: 8%;
}
</style>
<div class="sort">
						<strong>选择类型查看</strong>
						<select onchange="document.location='index.php?c=outservice&a=lost&type='+(this.options[this.selectedIndex].value)" id="objSel" name="object_style" class="sort_select">
								<option value="all">选择类型</option>
								<option value="all">所有类型</option>
                                <option value="书籍资料">书籍资料</option>
								<option value="衣物饰品">衣物饰品</option>
								<option value="交通工具">交通工具</option>
								<option value="随身物品">随身物品</option>
								<option value="电子数码">电子数码</option>
								<option value="卡类证件">卡类证件</option>
								<option value="其他物品">其他物品</option>
						</select>
					</div>
<table class="table table-striped">
<tbody>
<tr>
<td class="td_width_12">类型</span></td>
<td class="td_width_20">物品名称</span></td>
<td class="td_width_16">地点</span></td>
<td class="td_width_16">发布时间</span></td>
<td class="td_width_28">详情描述</span></td>
<td class="td_width_8"></td>
</tr>
<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
<tr> <td><?php echo $_smarty_tpl->tpl_vars['d']->value['type'];?>
</td><td><a target="_blank" title="点击查看详情" href="index.php?c=outservice&a=dlost&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['path'];?>
</td><td><?php echo ybtime(array('time'=>$_smarty_tpl->tpl_vars['d']->value['pubtime']),$_smarty_tpl);?>
 </td><td><?php echo $_smarty_tpl->tpl_vars['d']->value['context'];?>
</td><td><a target="_blank" title="点击查看详情" href="index.php?c=outservice&a=dlost&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">【详情】</a></td></tr>
<?php }} ?>
</tbody>
</table>
