<?php

RegisterPlugin("qxcms","ActivePlugin_qxcms");

function ActivePlugin_qxcms(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','qxcms_AddMenu');
}

function qxcms_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/qxcms/main.php?act=qx1","","topmenu_qxcms"));
}

function qxcms_SubMenu($id){
	$arySubMenu = array(		
		0 => array('主题说明', 'qx1', 'left', false),
	    1 => array('基本信息', 'qx2', 'left', false),
		2 => array('首页配置', 'qx3', 'left', false),
        3 => array('侧栏配置', 'qx4', 'left', false),
		4 => array('广告设置', 'qx5', 'left', false),
		
	);
	foreach($arySubMenu as $k => $v){
		echo '<a href="?act='.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$v[1]?'m-now':'').'">'.$v[0].'</span></a>';
	}
}

function qxcms_jj($as,$type,$long,$other) {
    global $zbp;
    $str = '';
    if ($type=='0') {
    $str .= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($as->Intro,'[nohtml]'),$long)).$other);
    } else {
    $str .= preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($as->Content,'[nohtml]'),$long)).$other);
    }
    return $str;
}

function qxcms_Thumbs($src,$width,$height) {
    global $zbp;
    if (!$zbp->CheckPlugin('sf_img1')) {
        $thumbs_src=$src;
    } else {
        $thumbs_src=SF_img1::getPicUrlBy($src,$width,$height,4);
    }
    return $thumbs_src;
}

function qxcms_FirstIMG($as,$width,$height) {
    global $zbp;   
    $temp=mt_rand(1,4);
    $pattern = "/<img.*src\s*=\s*[\"|\']?\s*([^>\"\'\s]*)/i";   
    $content = $as->Content;
    preg_match_all($pattern,$content,$matchContent);
    if(isset($matchContent[1][0])){
        $temp=$matchContent[1][0];
    } else {
        $temp=$zbp->host . "zb_users/theme/" .$zbp->theme. "/include/random/" .$temp. ".jpg";
    }
    $src = qxcms_Thumbs($temp,$width,$height);
    return $src;
}




function InstallPlugin_qxcms(){
	global $zbp;
	if(!$zbp->Config('qxcms')->HasKey('Version')){
		$zbp->Config('qxcms')->Version = '1.0';
		/*基本信息*/
        $zbp->Config('qxcms')->Webkeywords = '';        /*关键字*/
		$zbp->Config('qxcms')->Webdescription = '';     /*描述*/
		$zbp->config('qxcms')->Footnav = '';            /*底部导航*/
		$zbp->config('qxcms')->Tongji ='';               /*统计代码*/
		$zbp->config('qxcms')->Icp ='';                 /*备案号*/
		/*首页*/
        $zbp->config('qxcms')->Slide ='1,1,1';           /*幻灯片ID*/
        $zbp->config('qxcms')->Tui ='1,1,1,1,1';        /*焦点文章ID*/
		/*A*/
        $zbp->config('qxcms')->Acms ='1';                /*A区CMS开关*/
        $zbp->config('qxcms')->Acate ='1';               /*A区分类ID*/
		$zbp->config('qxcms')->Ason1 ='1';               /*A区子分类*/
		$zbp->config('qxcms')->Ason2 ='1';               /*A区子分类*/
		$zbp->config('qxcms')->Ason3 ='1';               /*A区子分类*/
        $zbp->config('qxcms')->Atuiw ='1,1';             /*A区文字推广*/
		$zbp->config('qxcms')->Atuit ='1,1';             /*A区图片推广*/
        /*B*/
		$zbp->config('qxcms')->Bcms ='1';                /*B区CMS开关*/
        $zbp->config('qxcms')->Bcate ='1';               /*B区分类ID*/
		$zbp->config('qxcms')->Bson1 ='1';               /*B区子分类*/
		$zbp->config('qxcms')->Bson2 ='1';               /*B区子分类*/
		$zbp->config('qxcms')->Bson3 ='1';               /*B区子分类*/
        $zbp->config('qxcms')->Btuid ='1';               /*B区大图推广*/
		$zbp->config('qxcms')->Btuix ='1,1';             /*B区小图推广*/
		/*C*/
        $zbp->config('qxcms')->Ccms ='1';                /*C区CMS开关*/
        $zbp->config('qxcms')->Ccate ='1';               /*C区分类ID*/
		$zbp->config('qxcms')->Cson1 ='1';               /*C区子分类*/
		$zbp->config('qxcms')->Cson2 ='1';               /*C区子分类*/
		$zbp->config('qxcms')->Cson3 ='1';               /*C区子分类*/
        $zbp->config('qxcms')->Ctui ='1,1,1';            /*C区大图推广*/
		/*D*/
		$zbp->config('qxcms')->Dcms ='1';                /*D区CMS开关*/
        $zbp->config('qxcms')->Dcate ='1';               /*D区分类ID*/
        $zbp->config('qxcms')->Dtui ='1,1,1,1,1';        /*D区大图推广*/
        /*广告*/
        $zbp->config('qxcms')->Ad1 ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/qxcms/include/tu1.png" alt="" /></a>';    /*焦点区下广告*/
        $zbp->config('qxcms')->Ad2 ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/qxcms/include/tu1.png" alt="" /></a>';    /*A区下广告*/
		$zbp->config('qxcms')->Ad3 ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/qxcms/include/tu1.png" alt="" /></a>';    /*B区下广告*/
		$zbp->config('qxcms')->Ad4 ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/qxcms/include/tu1.png" alt="" /></a>';    /*C区下广告*/
		$zbp->config('qxcms')->Ad5 ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/qxcms/include/tu2.png" alt="" /></a>';    /*列表页侧栏广告*/
		$zbp->config('qxcms')->Ad6 ='<a href="#"><img src="'.$zbp->host.'zb_users/theme/qxcms/include/tu3.png" alt="" /></a>';    /*文章下广告*/
		$zbp->config('qxcms')->Adon1 ='0';                /*焦点区下广告*/
        $zbp->config('qxcms')->Adon2 ='0';               /*A区下广告*/
		$zbp->config('qxcms')->Adon3 ='0';               /*B区下广告*/
		$zbp->config('qxcms')->Adon4 ='0';               /*C区下广告*/
		$zbp->config('qxcms')->Adon5 ='0';               /*列表页侧栏广告*/
		$zbp->config('qxcms')->Adon6 ='0';               /*文章下广告*/
		/*侧栏*/
        $zbp->config('qxcms')->Celist ='0';               /*列表页侧栏选择*/
		$zbp->config('qxcms')->Ceart ='0';               /*文章页侧栏选择*/
        $zbp->config('qxcms')->Cetui ='1,1,1,1';               /*侧栏推荐文章ID*/   
		$zbp->SaveConfig('qxcms');
	}
}


//卸载主题
function UninstallPlugin_qxcms(){
	global $zbp;
	//$zbp->DelConfig('qxcms');
}


?>