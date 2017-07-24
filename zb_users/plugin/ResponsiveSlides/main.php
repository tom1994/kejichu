<?php 
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('ResponsiveSlides')) {$zbp->ShowError(48);die();}
$blogtitle=$zbp->theme.'插件配置->基础设置';
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
if(isset($_POST['Forum'])){
	foreach($_POST['Forum'] as $key=>$val){
	   $zbp->Config('ResponsiveSlides')->$key = $val;
	}
	$zbp->SaveConfig('ResponsiveSlides');
	$zbp->ShowHint('good');
}
?>
<style type="text/css">
.uploadimg strong {cursor:pointer; background:#3A6EA5; width:15%; text-align:center; padding:5px 0; color:#fff; display:block; float:right;}
input.color{padding:0}
input.sedit{ width:93%;}
table input{margin:0.25em 0;}
table input.text{padding: 2px 5px;}
table .button{padding: 2px 12px 5px 12px; margin: 0.25em 0;}
.tc{border: solid 2px #E1E1E1;width: 50px;height: 23px;float: left;margin: 0.25em;cursor: pointer}
.tc:hover,.active{border: 2px solid #2694E8;}
.upinfo{position: relative;left: 3px;top: -19px;color: white;background: #5EAAE4;width: 190px;height: 23px;display: inline-block;text-align: center;opacity: 0.8;filter: alpha(opacity=80);}
.imageshow{margin:0.25em 0;}.imageshow img{margin:0 10px;margin-bottom:-10px;}
.divHeader { background-position:0 11px !important; }
</style>
<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">
        <?php ResponsiveSlides_SubMenu(0);?>
    </div>
	<div id="divMain2">		
		<form id="form1" name="form1" method="post">
			<table width="100%" style='padding:0px;margin:0px;' cellspacing='0' cellpadding='0' class="tableBorder">
			<tr>
				<th width='20%'><p align="center">设置项</p></th>
				<th width='30%'><p align="center">内容</p></th>
				<th width='50%'><p align="center">描述</p></th>
			</tr>
			<tr>
				<td><b><label for="auto"><p align="center">自动切换</p></label></b></td>
				<td><p><input id="auto" name="Forum[auto]" type="text" value="<?php echo $zbp->Config('ResponsiveSlides')->auto;?>" class="checkbox"/></p></td>
				<td><p>开启后，幻灯片自动切换，默认开启</p></td>
			</tr>
			<tr>
				<td><b><label for="pager"><p align="center">幻灯页码</p></label></b></td>
				<td><p><input id="pager" name="Forum[pager]" type="text" value="<?php echo $zbp->Config('ResponsiveSlides')->pager;?>" class="checkbox"/></p></td>
				<td><p>开启后，显示幻灯片页码，默认开启</p></td>
			</tr>
			<tr>
				<td><b><label for="nav"><p align="center">前后按钮</p></label></b></td>
				<td><p><input id="nav" name="Forum[nav]" type="text" value="<?php echo $zbp->Config('ResponsiveSlides')->nav;?>" class="checkbox"/></p></td>
				<td><p>开启后，显示前一个、后一个按钮，默认开启</p></td>
			</tr>
			<tr>
				<td><b><label for="speed"><p align="center">过渡速度</p></label></b></td>
				<td><p align="left"><input name="Forum[speed]" type="text" id="speed" style="width: 90%;" value="<?php echo $zbp->Config('ResponsiveSlides')->speed;?>" /></p></td>
				<td><p>幻灯片过渡速度，默认500，单位毫秒，数值越大，速度越慢，反之越快。</p></td>
			</tr>
			<tr>
				<td><b><label for="timeout"><p align="center">切换速度</p></label></b></td>
				<td><p align="left"><input name="Forum[timeout]" type="text" id="timeout" style="width: 90%;" value="<?php echo $zbp->Config('ResponsiveSlides')->timeout;?>" /></p></td>
				<td><p>幻灯片切换速度，默认4000，单位毫秒，数值越大，速度越慢，反之越快，不能低于600。</p></td>
			</tr>
			<tr>
				<td><b><label for="random"><p align="center">随机切换</p></label></b></td>
				<td><p><input id="random" name="Forum[random]" type="text" value="<?php echo $zbp->Config('ResponsiveSlides')->random;?>" class="checkbox"/></p></td>
				<td><p>开启后，随机切换幻灯片图片，默认关闭</p></td>
			</tr>
			<tr>
				<td><b><label for="maxwidth"><p align="center">图片最大宽度</p></label></b></td>
				<td><p align="left"><input name="Forum[maxwidth]" type="text" id="maxwidth" style="width: 90%;" value="<?php echo $zbp->Config('ResponsiveSlides')->maxwidth;?>" /></p></td>
				<td><p>留空继续父区域的宽度</p></td>
			</tr>
			<tr>
				<td><b><label for="clearSetting"><p align="center">恢复初始状态</p></label></b></td>
				<td colspan="2"><p><input id="clearSetting" name="Forum[clearSetting]" type="text" value="<?php echo $zbp->Config('ResponsiveSlides')->clearSetting;?>" class="checkbox"/><span style="color:#f00;"> 开启后，停用插件再开始，该插件的所有设置都将恢复初始状态，请谨慎操作！</span></p></td>
			</tr>
			</table><br/>
			<input name="" type="Submit" class="button" value="保存"/>
		</form>
	</div>
	<table width="100%" style='padding:0;margin:0 0 20px;' cellspacing='0' cellpadding='0' class="tableBorder">
		<p>1、把 {ResponsiveSlides_call('')} 放到要显示位置对应的当前主题template/目录下的模板文件</p>
		<p>2、然后返回后台首页，点击[清空缓存并重新编译模板]即可生效</p>
		<p>3、有问题请到插件发布页面留言：<a href="http://www.boke8.net/zbpResponsiveSlides.html" target="_blank">http://www.boke8.net/zbpResponsiveSlides.html</a></p>
		
	</table>
</div>
<?php
if ($zbp->CheckPlugin('UEditor')) {	
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
	echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
	echo '<script type="text/javascript" src="js/lib.upload.js"></script>';
}
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>