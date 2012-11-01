<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 20:42:37
         compiled from "C:\wamp\www\yunbian/tpl\admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:10525506d843d905e18-21681281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22613736b121ff0f5cdcf7a754f3e6611a2a793a' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\admin/index.html',
      1 => 1320733684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10525506d843d905e18-21681281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template('admin/header.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
  <div id="content">
    <h2>软件信息</h2>
    <table width="100%" class="table">
      <tr>
        <td width="100">系统信息：</td>
        <td><?php echo $_smarty_tpl->getVariable('ybsoft')->value['soft'];?>
</td>
      </tr>
      <tr>
        <td>程序版本：</td>
        <td><?php echo $_smarty_tpl->getVariable('ybsoft')->value['version'];?>
 <span id="encodeversion"><?php echo $_smarty_tpl->getVariable('ybsoftencode')->value;?>
</span> | <span id="checkVersion"><a href="javascript:queryVersion()">[检查更新]</a></span> </td>
      </tr>
      <tr>
        <td>联系方式：</td>
        <td><?php echo $_smarty_tpl->getVariable('ybsoft')->value['email'];?>
</td>
      </tr>
      <tr>
        <td>作者：</td>
        <td><?php echo $_smarty_tpl->getVariable('ybsoft')->value['author'];?>
</td>
      </tr>
      <tr>
        <td>官方网址：</td>
        <td><a href="<?php echo $_smarty_tpl->getVariable('ybsoft')->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->getVariable('ybsoft')->value['url'];?>
</a></td>
      </tr>
    </table>
    <h2>服务器信息</h2>
    <table width="100%" class="table">
     <tr>
        <td  width="100">PHP版本：</td>
        <td><?php echo $_smarty_tpl->getVariable('version')->value;?>
</td>
      </tr>
       <tr>
        <td>MySQL版本：</td>
        <td><?php echo $_smarty_tpl->getVariable('mysql')->value;?>
</td>
      </tr>
      <tr>
        <td>图像处理：</td>
        <td><?php echo $_smarty_tpl->getVariable('gd')->value;?>
</td>
      </tr>
       <tr>
        <td>附件上传限制：</td>
        <td>表单<?php echo $_smarty_tpl->getVariable('postupload')->value;?>
，最大支持<?php echo $_smarty_tpl->getVariable('maxupload')->value;?>
</td>
      </tr>
      <tr>
        <td>服务器IP地址</td>
        <td><?php echo $_smarty_tpl->getVariable('server')->value['HTTP_HOST'];?>
</td>
      </tr>
      
      <tr>
        <td>操作系统</td>
        <td><?php echo $_smarty_tpl->getVariable('os')->value;?>
</td>
      </tr>
      <tr>
        <td>物理路径：</td>
        <td><?php echo $_smarty_tpl->getVariable('server')->value['DOCUMENT_ROOT'];?>
</td>
      </tr>
      <tr>
        <td>gzip压缩：</td>
        <td><?php echo $_smarty_tpl->getVariable('server')->value['HTTP_ACCEPT_ENCODING'];?>
</td>
      </tr>
      <tr>
        <td>系统管理员：</td>
        <td><?php echo $_smarty_tpl->getVariable('server')->value['SERVER_ADMIN'];?>
</td>
      </tr>
    </table>
  </div>
<?php $_template = new Smarty_Internal_Template('admin/footer.html', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
