<?php /* Smarty version Smarty-3.0.6, created on 2012-10-30 22:06:21
         compiled from "C:\wamp\www\m/tpl\waterfall.html" */ ?>
<?php /*%%SmartyHeaderCode:2079508fdedd9ca723-89617738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '467cb25a6fb993d9f2199db6b924cac28bc5ea09' => 
    array (
      0 => 'C:\\wamp\\www\\m/tpl\\waterfall.html',
      1 => 1351605979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2079508fdedd9ca723-89617738',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("require_header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
$_template->assign('waterfall','yes');$_template->assign('gallery','yes'); echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div id="container">
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
?>
	<div class="col">
		<div class="image" onMouseOver="show(<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
)" onMouseOut="none(<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
)">
			<div class="highslide-gallery"  style="height: 250px;">
			
			   <a onclick="return hs.expand(this)" 
           href="<?php echo $_smarty_tpl->tpl_vars['d']->value['bimg'];?>
" class="highslide">
           <img class="feedimg" alt="" src="<?php echo $_smarty_tpl->tpl_vars['d']->value['bimg'];?>
"></a>
           
           			&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
<br>
           <div style="font-size: 12px; padding: 10px;font-style:italic;"><?php echo $_smarty_tpl->tpl_vars['d']->value['sidepath'];?>
</div>			
			</div>
			<div class="user-interaction" id="user-interaction-<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" style="display:none">
				<dl class="user-interaction interaction-good">
					<dt mark="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="interaction-good-container-<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
					<a onClick="sEval(<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
,1)" title="顶">顶</a>
					</dt>
					<dd id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['good'];?>
</dd>
				</dl>
				<dl class="user-interaction interaction-bad">
					<dt mark="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="interaction-bad-container-<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"> 
					<a onClick="sEval(<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
,2)" title="踩">踩</a>                             
					</dt>                             
					<dd id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['bad'];?>
</dd>
				</dl>
				<?php if (islogin()){?>
				<dl class="user-interaction interaction-collect">
					<dt mark="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" uid="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="interaction-collect-container-<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"> 
                        
					
					
					        <?php if ($_smarty_tpl->tpl_vars['d']->value['coll']==1){?> 
					                        					<a href="javascript:void(0)" onclick="collect('<?php echo $_smarty_tpl->getVariable('url')->value;?>
/index.php?c=outservice&a=add&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
)" title="收藏"><span id="mycoll_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">取消</span></a>  
  
                     <?php }elseif($_smarty_tpl->tpl_vars['d']->value['coll']==0){?>
                					<a href="javascript:void(0)" onclick="collect('<?php echo $_smarty_tpl->getVariable('url')->value;?>
/index.php?c=outservice&a=add&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
',<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
)" title="收藏"><span id="mycoll_<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">收藏</span></a>     
                       <?php }?>
					
					</dt>
				</dl>
				<?php }?>
	
			</div>
		</div>
		
		<div class="bottombar">
			<div class="title" style="font-size: 15px">电话:<?php echo $_smarty_tpl->tpl_vars['d']->value['phone'];?>
 </div>
			
			<div class="user_bar">
				<div class="user_avatar">

				
				</div>
			</div>
		</div>
	</div>
	
	<?php }} ?>
	
</div>
<!--<div class="page clear">
	<div class="pages">
		<div class="nav"><?php echo $_smarty_tpl->getVariable('pager')->value;?>
</div>
    </div>
</div>-->
<div id="page_nav">
  <a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['spUrl'][0][0]->__template_spUrl(array('c'=>'outservice','a'=>'side','page'=>$_smarty_tpl->getVariable('page')->value+1),$_smarty_tpl);?>
">下一页</a>
</div>
<div id="ajax-loader" style="width: 120px; height: 20px; margin-top: 0px; margin-right: auto; margin-bottom: 0px; margin-left: auto; display: none; ">加载中···</div>

<script type="text/javascript">
function show(id){
    document.getElementById('user-interaction-'+id).style.display='block';
}
function none(id){
    document.getElementById('user-interaction-'+id).style.display='none';
}
$(document).ready(function(){
	/*$('#container').masonry({
	itemSelector : '.col',
	columnWidth : 245
	});*/
	// #thumbs 为包含所有图片的容器
    var $container = $('#container');
	$container.masonry({
	itemSelector : '.col',
	columnWidth : 245
	});
    // 使用 imagesLoaded() 修复该插件在 chrome 下的问题
    /*$container.imagesLoaded(function(){
      $container.masonry({
        // 每一列数据的宽度，若所有栏目块的宽度相同，可以不填这段
        columnWidth: 245,
        // .imgbox 为各个图片的容器
        itemSelector : '.col',
		isAnimated: !Modernizr.csstransitions
      });
    });*/
	nextHref = $("#page_nav a").attr("href");
	// 给浏览器窗口绑定 scroll 事件
	$(window).bind("scroll",function(){
		// 判断窗口的滚动条是否接近页面底部
		if( $(document).scrollTop() + $(window).height() > $(document).height() - 10 ) {
			// 判断下一页链接是否为空
			if( nextHref != undefined ) {
				// 显示正在加载模块
				$("#ajax-loader").show("slow");
				// Ajax 翻页
				$.ajax( {
					url: $("#page_nav a").attr("href"),
					type: "POST",
					success: function(data) {
						result = $(data).find("#container .col");
						nextHref = $(data).find("#page_nav a").attr("href");
						$("#page_nav a").attr("href", nextHref);
						$("#container").append(result);
						// 把新的内容设置为透明
						$newElems = result.css({ opacity: 0 });
						//$newElems = result;
						$newElems.imagesLoaded(function(){
							$container.masonry( 'appended', $newElems, true);
							// 渐显新的内容
							$newElems.animate({ opacity: 1 });
							// 隐藏正在加载模块
							$("#ajax-loader").hide("slow");
						});
	 
					}
				});
			} else {
				$("#ajax-loader span").text("木有了噢，最后一页了！");
				$("#ajax-loader").show("fast");
				setTimeout("$('#ajax-loader').hide()",1000);
				setTimeout("$('#ajax-loader').remove()",1100);
			}
		}
	});
});

</script>

<?php $_template = new Smarty_Internal_Template("require_footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>