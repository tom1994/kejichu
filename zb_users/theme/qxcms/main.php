<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$action='root';
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}
if (!$zbp->CheckPlugin('qxcms')) {$zbp->ShowError(48);die();}
$blogtitle='主题配置';

$act = "";
if ($_GET['act']){
$act = $_GET['act'] == "" ? 'qx1' : $_GET['act'];
}

require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';

?>


<div id="divMain">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu">

	<?php qxcms_SubMenu($act);?>
    </div>
	<div id="divMain2">
	<?php if ($act == 'qx1'){ ?>
    <form id="form1" name="form1" method="post">	
    <table width="80%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
    <tr>
	<td rowspan='3'>
	<p>
    <span style="font-size: 18px;">说明</span>   
    </p>
	</td>
	<td>
    <p>
    <span style="color: rgb(0, 47, 167);">1.主题已基本完善，精力有限，免费版主题停止更新，以后的更新重点放在收费版上；</span>
    </p>
    </td>
	</tr>
    <tr>
	<td>
    <p>
    <span style="color: rgb(0, 47, 167);">2.免费主题不提供售后服务，请尽情的捣鼓吧......</span>
    </p>
	</td>
	</tr>
	<tr>
	<td>
    <p>
    <span style="color: rgb(0, 47, 167);">3.制作不易，请保留版权；</span>
    </p>
	</td>
	</tr>
	<tr>
	<td rowspan='7'>
	<p>
    <span style="font-size: 18px;">广告</span>
    </p>
	</td>
	<td>
	<p>
    <span style="color: red; font-weight: 600;">千寻自适应CMS主题发布了，链接地址:<a href="http://app.zblogcn.com/?id=921" target="_blank">http://app.zblogcn.com/?id=921</a></span>
    </p>
	</td>
	</tr>
	<tr>
	<td>
	<p>
    <span style="color: red;">收费版区别：</span>
    </p>
	</td>
	</tr>
	<tr>
	<td>
	<p>
    <span style="color: red;">1.去除冗余代码，对搜索引擎更加友好；</span>
    </p>
	</td>
	</tr>
	<tr>
	<td>
	<p>
    <span style="color: red;">2.增加主题自适应，手机、pad、PC全搞定；</span>
    </p>
	<tr>
	<td>
	<p>
    <span style="color: red;">3.支持二级下拉导航栏；</span>
    </p>
	</td>
	</tr>
	<tr>
	<td>
	<p>
    <span style="color: red;">4.其他细节部分的升级；</span>
    </p>
	</td>
	</tr>
	<tr>
	<td>
	<p>
    <span style="color: red;">5.持续更新...</span>
    </p>
	</td>
	</tr>
	</table>
    </form>
    <?php
    }
    if(isset($_POST['Webkeywords'])){
    $zbp->Config('qxcms')->Webkeywords = $_POST['Webkeywords']; 
    $zbp->Config('qxcms')->Webdescription = $_POST['Webdescription'];  
	$zbp->Config('qxcms')->Footnav = $_POST['Footnav']; 
	$zbp->Config('qxcms')->Tongji = $_POST['Tongji']; 
	$zbp->Config('qxcms')->Icp = $_POST['Icp']; 
    $zbp->SaveConfig('qxcms');
    $zbp->ShowHint('good');
    }
    if ($act == 'qx2'){ ?>
	<form enctype="multipart/form-data" method="post" action="save.php?type=base">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
    <tr>
    <td width="15%"><label for="logo.png"><p align="center">上传LOGO(高度50PX)</p></label></td>
    <td width="50%"><p align="center"><input name="logo.png" type="file"/></p></td>
    <td width="25%"><p align="center"><input name="" type="Submit" class="button" value="保存"/></p></td>
    </tr>
    </table>
    </form>
    <form id="form2" name="form2" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
    <tr>
    <th width="15%"><p align="center">配置名称</p></th>
    <th width="50%"><p align="center">配置内容</p></th>
    <th width="25%"><p align="center">配置说明</p></th>
    </tr>

    <tr>
    <td><label for="Webkeywords"><p align="center">网站关键词</p></label></td>
    <td><p align="left"><textarea name="Webkeywords" type="text" id="Webkeywords" style="width:98%;"><?php echo $zbp->Config('qxcms')->Webkeywords;?></textarea></p></td>
    <td><p align="left">输入网站关键词，多个词用半角逗号隔开</p></td>
    </tr>

    <tr>
    <td><label for="Webdescription"><p align="center">网站描述</p></label></td>
    <td><p align="left"><textarea name="Webdescription" type="text" id="Webdescription" style="width:98%;"><?php echo $zbp->Config('qxcms')->Webdescription;?></textarea></p></td>
    <td><p align="left">输入网站描述</p></td>
    </tr>

  
    <tr>
    <td><label for="Footnav"><p align="center">页脚导航代码</p></label></td>
    <td><p align="left"><textarea name="Footnav" type="text" id="Footnav" style="width:98%; height:100px"><?php echo $zbp->Config('qxcms')->Footnav;?></textarea></p></td>	
    <td><p align="left">放置页脚导航代码，利于SEO</p></td>
    </tr>

    <tr>
    <td><label for="Tongji"><p align="center">统计代码</p></label></td>
    <td><p align="left"><textarea name="Tongji" type="text" id="Tongji" style="width:98%; height:100px"><?php echo $zbp->Config('qxcms')->Tongji;?></textarea></p></td>	
    <td><p align="left">请输入统计代码，没有可留空</p></td>
    </tr>

    <tr>
    <td><label for="Icp"><p align="center">ICP备案号</p></label></td>
    <td><p align="left"><textarea name="Icp" type="text" id="Icp" style="width:98%;"><?php echo $zbp->Config('qxcms')->Icp;?></textarea></p></td>	
    <td><p align="left">请输入ICP备案号，没有可留空</p></td>
    </tr>
    
    </table>
    <br />
    <input name="" type="Submit" class="button" value="保存"/>
    </form>
    <?php
    }
    if(isset($_POST['Slide'])){
    $zbp->Config('qxcms')->Slide = $_POST['Slide']; 
    $zbp->Config('qxcms')->Tui = $_POST['Tui']; 
	$zbp->Config('qxcms')->Acms = $_POST['Acms']; 
	$zbp->Config('qxcms')->Acate = $_POST['Acate']; 
	$zbp->Config('qxcms')->Ason1 = $_POST['Ason1']; 
	$zbp->Config('qxcms')->Ason2 = $_POST['Ason2']; 
	$zbp->Config('qxcms')->Ason3 = $_POST['Ason3'];
	$zbp->Config('qxcms')->Atuiw = $_POST['Atuiw'];
	$zbp->Config('qxcms')->Atuit = $_POST['Atuit'];
	$zbp->Config('qxcms')->Bcms = $_POST['Bcms'];
	$zbp->Config('qxcms')->Bcate = $_POST['Bcate'];
	$zbp->Config('qxcms')->Bson1 = $_POST['Bson1'];
	$zbp->Config('qxcms')->Bson2 = $_POST['Bson2'];
	$zbp->Config('qxcms')->Bson3 = $_POST['Bson3'];
	$zbp->Config('qxcms')->Btuid = $_POST['Btuid'];
	$zbp->Config('qxcms')->Btuix = $_POST['Btuix'];
    $zbp->Config('qxcms')->Ccms = $_POST['Ccms'];
	$zbp->Config('qxcms')->Ccate = $_POST['Ccate'];
	$zbp->Config('qxcms')->Cson1 = $_POST['Cson1'];
	$zbp->Config('qxcms')->Cson2 = $_POST['Cson2'];
	$zbp->Config('qxcms')->Cson3 = $_POST['Cson3'];
	$zbp->Config('qxcms')->Ctui = $_POST['Ctui'];
	$zbp->Config('qxcms')->Dcms = $_POST['Dcms'];
	$zbp->Config('qxcms')->Dcate = $_POST['Dcate'];
	$zbp->Config('qxcms')->Dtui = $_POST['Dtui'];
    $zbp->SaveConfig('qxcms');
    $zbp->ShowHint('good');
    }
    if ($act == 'qx3'){ ?>
    <form id="form3" name="form3" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <th><p align="center">作用区域</p></th>
    <th><p align="center">配置名称</p></th>
    <th colspan='3'><p align="center">配置内容</p></th>
    <th><p align="center">配置说明</p></th>
  </tr>

  <tr>
		<td rowspan='2'><p align="center">焦点区</p></td>
	    <td><label for="Slide"><p align="center">幻灯片文章ID</p></label></td>
        <td colspan='3'><p align="left"><textarea name="Slide" type="text" id="Slide" style="width:98%;"><?php echo $zbp->Config('qxcms')->Slide;?></textarea></p></td>
        <td><p align="left">输入幻灯片推广文章ID，建议少于5篇</p></td>        
  </tr>
 
  <tr>
        <td><label for="Tui"><p align="center">焦点文章ID</p></label></td>
        <td colspan='3'><p align="left"><textarea name="Tui" type="text" id="Tui" style="width:98%;"><?php echo $zbp->Config('qxcms')->Tui;?></textarea></p></td>
        <td><p align="left">输入推广文章ID，仅限5篇，数字用半角逗号隔开</p></td>
  </tr>
  <!-- A区配置 -->
  <tr>
       <td rowspan='5'><p align="center">首页A区</p></td>
	   <td><label for="Acms"><p align="center">首页A区开关</p></label></td>
       <td colspan='3'><p>启用开关*开启或关闭首页A区<input name="Acms" type="text" value="<?php echo $zbp->Config('qxcms')->Acms; ?>" class="checkbox" style="display:none;" /></p></td>	
       <td><p align="left">首页A区CMS开关</p></td>
  </tr>

  <tr>
       <td><label for="Acate"><p align="center">A区CMS分类ID</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Acate" type="text" id="Acate" style="width:98%;"><?php echo $zbp->Config('qxcms')->Acate;?></textarea></p></td>
        <td><p align="left">输入分类ID</p></td> 
  </tr>
       <td><label for="Ason1"><p align="center">A区CMS子分类ID</p></label></td>
       <td><p align="left"><textarea name="Ason1" type="text" id="Ason1" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ason1;?></textarea></p></td>
	   <td><p align="left"><textarea name="Ason2" type="text" id="Ason2" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ason2;?></textarea></p></td>
	   <td><p align="left"><textarea name="Ason3" type="text" id="Ason3" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ason3;?></textarea></p></td>
       <td><p align="left">输入子分类ID</p></td>
  <tr>
       <td><label for="Atuiw"><p align="center">A区推广文章ID(文字)</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Atuiw" type="text" id="Atuiw" style="width:98%;"><?php echo $zbp->Config('qxcms')->Atuiw;?></textarea></p></td>
        <td><p align="left">输入文章ID*仅限2篇，数字用半角逗号隔开</p></td>
  </tr>
  
  <tr>
       <td><label for="Atuit"><p align="center">A区推广文章ID(图片)</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Atuit" type="text" id="Atuit" style="width:98%;"><?php echo $zbp->Config('qxcms')->Atuit;?></textarea></p></td>
        <td><p align="left">输入文章ID*仅限2篇，数字用半角逗号隔开</p></td>
  </tr>
  <!-- B区配置 -->
    <tr>
       <td rowspan='5'><p align="center">首页B区</p></td>
	   <td><label for="Bcms"><p align="center">首页B区开关</p></label></td>
       <td colspan='3'><p>启用开关*开启或关闭首页B区<input name="Bcms" type="text" value="<?php echo $zbp->Config('qxcms')->Bcms; ?>" class="checkbox" style="display:none;" /></p></td>	
       <td><p align="left">首页B区CMS开关</p></td>
  </tr>

  <tr>
       <td><label for="Bcate"><p align="center">B区CMS分类ID</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Bcate" type="text" id="Bcate" style="width:98%;"><?php echo $zbp->Config('qxcms')->Bcate;?></textarea></p></td>
        <td><p align="left">输入分类ID</p></td> 
  </tr>
  <tr>
       <td><label for="Bson1"><p align="center">B区CMS子分类ID</p></label></td>
       <td><p align="left"><textarea name="Bson1" type="text" id="Bson1" style="width:98%;"><?php echo $zbp->Config('qxcms')->Bson1;?></textarea></p></td>
	   <td><p align="left"><textarea name="Bson2" type="text" id="Bson2" style="width:98%;"><?php echo $zbp->Config('qxcms')->Bson2;?></textarea></p></td>
	   <td><p align="left"><textarea name="Bson3" type="text" id="Bson3" style="width:98%;"><?php echo $zbp->Config('qxcms')->Bson3;?></textarea></p></td>
       <td><p align="left">输入子分类ID</p></td>
  </tr>
  <tr>
       <td><label for="Btuid"><p align="center">B区推广文章ID(大图)</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Btuid" type="text" id="Btuid" style="width:98%;"><?php echo $zbp->Config('qxcms')->Btuid;?></textarea></p></td>
        <td><p align="left">输入文章ID*仅限1篇</p></td>
  </tr>
  
  <tr>
       <td><label for="Btuix"><p align="center">B区推广文章ID(小图)</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Btuix" type="text" id="Btuix" style="width:98%;"><?php echo $zbp->Config('qxcms')->Btuix;?></textarea></p></td>
        <td><p align="left">输入文章ID*仅限2篇，数字用半角逗号隔开</p></td>
  </tr>
  <!-- C区配置  --> 
   <tr>
       <td rowspan='4'><p align="center">首页C区</p></td>
	   <td><label for="Ccms"><p align="center">首页C区开关</p></label></td>
       <td colspan='3'><p>启用开关*开启或关闭首页C区<input name="Ccms" type="text" value="<?php echo $zbp->Config('qxcms')->Ccms; ?>" class="checkbox" style="display:none;" /></p></td>	
       <td><p align="left">首页C区CMS开关</p></td>
  </tr>

  <tr>
       <td><label for="Ccate"><p align="center">C区CMS分类ID</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Ccate" type="text" id="Ccate" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ccate;?></textarea></p></td>
        <td><p align="left">输入分类ID</p></td> 
  </tr>
  <tr>
       <td><label for="Cson1"><p align="center">C区CMS子分类ID</p></label></td>
       <td><p align="left"><textarea name="Cson1" type="text" id="Cson1" style="width:98%;"><?php echo $zbp->Config('qxcms')->Cson1;?></textarea></p></td>
	   <td><p align="left"><textarea name="Cson2" type="text" id="Cson2" style="width:98%;"><?php echo $zbp->Config('qxcms')->Cson2;?></textarea></p></td>
	   <td><p align="left"><textarea name="Cson3" type="text" id="Cson3" style="width:98%;"><?php echo $zbp->Config('qxcms')->Cson3;?></textarea></p></td>
       <td><p align="left">输入子分类ID</p></td>
   </tr>
  
  <tr>
       <td><label for="Ctui"><p align="center">C区推广文章ID(图)</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Ctui" type="text" id="Ctui" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ctui;?></textarea></p></td>
        <td><p align="left">输入文章ID*仅限3篇，数字用半角逗号隔开</p></td>
  </tr>
  <!-- D区配置  -->   
  <tr>
       <td rowspan='4'><p align="center">首页D区</p></td>
	   <td><label for="Dcms"><p align="center">首页D区开关</p></label></td>
       <td colspan='3'><p>启用开关*开启或关闭首页D区<input name="Dcms" type="text" value="<?php echo $zbp->Config('qxcms')->Dcms; ?>" class="checkbox" style="display:none;" /></p></td>	
       <td><p align="left">首页D区CMS开关</p></td>
  </tr>

  <tr>
       <td><label for="Dcate"><p align="center">D区CMS分类ID</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Dcate" type="text" id="Dcate" style="width:98%;"><?php echo $zbp->Config('qxcms')->Dcate;?></textarea></p></td>
        <td><p align="left">输入分类ID</p></td> 
  </tr>
  
  <tr>
       <td><label for="Dtui"><p align="center">D区推广文章ID(图)</p></label></td>
       <td colspan='3'><p align="left"><textarea name="Dtui" type="text" id="Dtui" style="width:98%;"><?php echo $zbp->Config('qxcms')->Dtui;?></textarea></p></td>
        <td><p align="left">输入文章ID*仅限5篇，数字用半角逗号隔开</p></td>
  </tr>
    
</table>
 <br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>
   
    <?php
    }
    if(isset($_POST['Cetui'])){
    $zbp->Config('qxcms')->Celist = $_POST['Celist']; 
    $zbp->Config('qxcms')->Ceart = $_POST['Ceart']; 
	$zbp->Config('qxcms')->Cetui = $_POST['Cetui']; 
    $zbp->SaveConfig('qxcms');
    $zbp->ShowHint('good');
    }
    if ($act == 'qx4'){ ?>

  <form id="form4" name="form4" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <th width="15%"><p align="center">配置名称</p></th>
    <th width="50%"><p align="center">配置内容</p></th>
  <th width="25%"><p align="center">配置说明</p></th>

  </tr>
   <tr>
    <td><label for="Celist"><p align="center">列表页侧栏</p></label></td>
    <td><p>启用开关*开关打开调用系统侧栏，开关关闭则调用主题自带侧栏<input name="Celist" type="text" value="<?php echo $zbp->Config('qxcms')->Celist; ?>" class="checkbox" style="display:none;" /></p></td>	
  <td><p align="left">作用范围：列表页</p></td>
  </tr>

  <tr>
    <td><label for="Ceart"><p align="center">文章页侧栏</p></label></td>
    <td><p>启用开关*开关打开调用系统侧栏，开关关闭则调用主题自带侧栏<input name="Ceart" type="text" value="<?php echo $zbp->Config('qxcms')->Ceart; ?>" class="checkbox" style="display:none;" /></p></td>	
  <td><p align="left">作用范围：文章页</p></td>
  </tr>

    <tr>
    <td><label for="Cetui"><p align="center">侧栏推荐文章ID</p></label></td>
    <td><p align="left"><textarea name="Cetui" type="text" id="Cetui" style="width:98%;"><?php echo $zbp->Config('qxcms')->Cetui;?></textarea></p></td>
  <td><p align="left">输入侧栏推荐文章ID*仅限4个</p></td>
  </tr>
  </table>
 <br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>

  <?php
    }
    if(isset($_POST['Ad1'])){
    $zbp->Config('qxcms')->Ad1 = $_POST['Ad1']; 
    $zbp->Config('qxcms')->Ad2 = $_POST['Ad2'];
	$zbp->Config('qxcms')->Ad3 = $_POST['Ad3'];
	$zbp->Config('qxcms')->Ad4 = $_POST['Ad4'];
	$zbp->Config('qxcms')->Ad5 = $_POST['Ad5'];
	$zbp->Config('qxcms')->Ad6 = $_POST['Ad6'];
	$zbp->Config('qxcms')->Adon1 = $_POST['Adon1'];
	$zbp->Config('qxcms')->Adon2 = $_POST['Adon2'];
	$zbp->Config('qxcms')->Adon3 = $_POST['Adon3'];
	$zbp->Config('qxcms')->Adon4 = $_POST['Adon4'];
	$zbp->Config('qxcms')->Adon5 = $_POST['Adon5'];
	$zbp->Config('qxcms')->Adon6 = $_POST['Adon6'];
    $zbp->SaveConfig('qxcms');
    $zbp->ShowHint('good');
    }
    if ($act == 'qx5'){ ?>

   <form id="form5" name="form5" method="post">  
    <table width="100%" style='padding:0;margin:0;' cellspacing='0' cellpadding='0' class="tableBorder">
  <tr>
    <th width="15%"><p align="center">配置名称</p></th>
    <th width="50%"><p align="center">配置内容</p></th>
  <th width="25%"><p align="center">配置说明</p></th>

  </tr>
    <tr>
    <td><label for="Ad1"><p align="center">焦点区下广告960*60</p></label></td>
    <td><p align="left"><textarea name="Ad1" type="text" id="Ad1" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ad1;?></textarea></p></td>
    <td><p>启用开关<input name="Adon1" type="text" value="<?php echo $zbp->Config('qxcms')->Adon1; ?>" class="checkbox" style="display:none;" /></p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Ad2"><p align="center">首页A区下广告960*60</p></label></td>
    <td><p align="left"><textarea name="Ad2" type="text" id="Ad2" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ad2;?></textarea></p></td>
    <td><p>启用开关<input name="Adon2" type="text" value="<?php echo $zbp->Config('qxcms')->Adon2; ?>" class="checkbox" style="display:none;" /></p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Ad3"><p align="center">首页B区下广告960*60</p></label></td>
    <td><p align="left"><textarea name="Ad3" type="text" id="Ad3" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ad3;?></textarea></p></td>
    <td><p>启用开关<input name="Adon3" type="text" value="<?php echo $zbp->Config('qxcms')->Adon3; ?>" class="checkbox" style="display:none;" /></p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Ad4"><p align="center">首页C区下广告960*60</p></label></td>
    <td><p align="left"><textarea name="Ad4" type="text" id="Ad4" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ad4;?></textarea></p></td>
    <td><p>启用开关<input name="Adon4" type="text" value="<?php echo $zbp->Config('qxcms')->Adon4; ?>" class="checkbox" style="display:none;" /></p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Ad5"><p align="center">侧栏广告位(宽度260px)</p></label></td>
    <td><p align="left"><textarea name="Ad5" type="text" id="Ad5" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ad5;?></textarea></p></td>
    <td><p>启用开关<input name="Adon5" type="text" value="<?php echo $zbp->Config('qxcms')->Adon5; ?>" class="checkbox" style="display:none;" /></p></td>
  </tr>

  </tr>
    <tr>
    <td><label for="Ad6"><p align="center">文章内容下广告位(宽度658px)</p></label></td>
    <td><p align="left"><textarea name="Ad6" type="text" id="Ad6" style="width:98%;"><?php echo $zbp->Config('qxcms')->Ad6;?></textarea></p></td>
    <td><p>启用开关<input name="Adon6" type="text" value="<?php echo $zbp->Config('qxcms')->Adon6; ?>" class="checkbox" style="display:none;" /></p></td>
  </tr>

  </table>
 <br />
   <input name="" type="Submit" class="button" value="保存"/>
    </form>






   <?php
	}
	?>

  </div>
</div>

<script type="text/javascript">ActiveTopMenu("topmenu_qxcms");</script> 
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>