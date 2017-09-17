<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/plugins/bxslider/jquery.bxslider.min.css"/>
    <script src="<?php  echo $host;  ?>zb_system/script/common.js" type="text/javascript"></script>
    <script src="<?php  echo $host;  ?>zb_system/script/c_html_js_add.php" type="text/javascript"></script>
    <script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/plugins/bxslider/jquery.bxslider.min.js"
            type="application/javascript"></script>
    <script type="text/javascript"
            src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery.KinSlideshow-1.2.1.min.js "></script>
    <script src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/custom.js" type="text/javascript"></script>

    <?php if ($type=='article') { ?>
    <title><?php  echo $title;  ?>_<?php  echo $article->Category->Name;  ?>_<?php  echo $name;  ?></title>
    <?php 
    $aryTags = array();
    foreach($article->Tags as $key){
    $aryTags[] = $key->Name;
    }
    if(count($aryTags)>0){
    $keywords = implode(',',$aryTags);
    } else {
    $keywords = $zbp->name;
    }
    $description = preg_replace('/[\r\n\s]+/', ' ',
    trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
     ?>
    <meta name="keywords" content="<?php  echo $keywords;  ?>"/>
    <meta name="description" content="<?php  echo $description;  ?>"/>
    <meta name="author" content="<?php  echo $article->Author->StaticName;  ?>"/>
    <?php }elseif($type=='page') {  ?>
    <title><?php  echo $title;  ?>_<?php  echo $name;  ?>_<?php  echo $subname;  ?></title>
    <meta name="keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
    <?php 
    $description = preg_replace('/[\r\n\s]+/', ' ',
    trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
     ?>
    <meta name="description" content="<?php  echo $description;  ?>"/>
    <meta name="author" content="<?php  echo $article->Author->StaticName;  ?>"/>
    <?php }elseif($type=='index') {  ?>
    <!--首页的样式文件-->
    <link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/default.css" type="text/css"
          media="all"/>

    <title><?php  echo $name;  ?><?php if ($page>'1') { ?>_第<?php  echo $pagebar->PageNow;  ?>页<?php } ?>_<?php  echo $subname;  ?></title>
    <meta name="Keywords" content="<?php  echo $zbp->Config('qxcms')->Webkeywords;  ?>"/>
    <meta name="description" content="<?php  echo $zbp->Config('qxcms')->Webdescription;  ?>"/>
    <meta name="author" content="<?php  echo $zbp->members[1]->StaticName;  ?>"/>
    <?php }elseif($type=='category') {  ?>
    <!--通知页的样式文件-->
    <link rel="stylesheet" rev="stylesheet" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/default.css" type="text/css"
          media="all"/>
    <?php }else{  ?>
    <title><?php  echo $title;  ?>_<?php  echo $name;  ?>_第<?php  echo $pagebar->PageNow;  ?>页</title>
    <meta name="Keywords" content="<?php  echo $title;  ?>,<?php  echo $name;  ?>"/>
    <meta name="description" content="<?php  echo $title;  ?>_<?php  echo $name;  ?>_当前是第<?php  echo $pagebar->PageNow;  ?>页"/>
    <meta name="author" content="<?php  echo $zbp->members[1]->StaticName;  ?>"/>
    <?php } ?>

    <?php  echo $header;  ?>
    <?php if ($type=='index'&&$page=='1') { ?>
    <link rel="alternate" type="application/rss+xml" href="<?php  echo $feedurl;  ?>" title="<?php  echo $name;  ?>"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php  echo $host;  ?>zb_system/xml-rpc/?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php  echo $host;  ?>zb_system/xml-rpc/wlwmanifest.xml"/>
    <?php } ?>
    <link rel="shortcut icon" href="<?php  echo $host;  ?>favicon.ico"/>
</head>
<body>

<!-- 头部开始 -->
<div class="header">
    <div class="header-top">
        <div class="logo">
            <a href="<?php  echo $host;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/logo.png" alt=""></a>
        </div>
        <div class="slogan">
            <a href="<?php  echo $host;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/slogan.png" alt=""></a>
        </div>
        <div class="search">
            <form name="search" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
                <input class="input" name="q" type="text" placeholder="输入关键词..."/>
                <input class="input" name="type" type="hidden" value="0"/>
                <input class="submit" name="t" type="submit" value="搜索"/>
            </form>

        </div>

    </div>
    <div class="header-nav">
        <ul class="nav-ul">
            <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
        </ul>
    </div>
    <!--<div  id="nav"><ul><li><a href="<?php  echo $host;  ?>">首页</a></li><?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?></ul></div>-->
</div>
<!-- 头部结束 -->
<div class="index-box">