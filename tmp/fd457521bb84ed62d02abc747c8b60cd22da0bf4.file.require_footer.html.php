<?php /* Smarty version Smarty-3.0.6, created on 2012-10-04 19:39:56
         compiled from "C:\wamp\www\yunbian/tpl\require_footer.html" */ ?>
<?php /*%%SmartyHeaderCode:8393506d758cd29c70-89739630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd457521bb84ed62d02abc747c8b60cd22da0bf4' => 
    array (
      0 => 'C:\\wamp\\www\\yunbian/tpl\\require_footer.html',
      1 => 1320794744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8393506d758cd29c70-89739630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="clear"></div>
</div>



    <div id="footer">
    <div id="cloud"></div>
     <div id="copy">
     <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'about'),$_smarty_tpl);?>
">关 于</a><span>|</span>
      <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'help'),$_smarty_tpl);?>
">帮 助</a> <span>|</span>
      <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'call'),$_smarty_tpl);?>
">联 系</a> <span>|</span>
      <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'service'),$_smarty_tpl);?>
">条 款</a> <span>|</span>
      <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'site','a'=>'privacy'),$_smarty_tpl);?>
">隐 私</a> <span>|</span>
      <a href="http://www.thinksaas.cn/index.php/group/group/groupid-129" target="_blank">Powered by <?php echo $_smarty_tpl->getVariable('yb')->value['soft'];?>
 <b><?php echo $_smarty_tpl->getVariable('yb')->value['version'];?>
</b> </a>&nbsp;2011-2012 <?php echo $_smarty_tpl->getVariable('yb')->value['site_icp'];?>
 <?php echo $_smarty_tpl->getVariable('yb')->value['site_count'];?>
</div>

      <div class="clear"></div>
    </div>

    <script type="text/javascript">

        function postToWb(t,url){
            var _t = encodeURI(t);
            var _url = encodeURIComponent('http://'+document.domain+url);
            var _assname = encodeURI("anythink");
            var _appkey = encodeURI("c45ec3357f12483ebeeff1c14d5e76b5");//你从腾讯获得的appkey
            var _site = document.location;//你的网站地址
            var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&title='+_t+'&assname='+_assname;
            window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
        }


    </script>



	</div>

 </div>


</body>
</html>