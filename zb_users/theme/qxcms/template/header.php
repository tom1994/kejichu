<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="{$host}zb_users/theme/{$theme}/style/style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/plugins/bxslider/jquery.bxslider.min.css"/>
    <script src="{$host}zb_system/script/common.js" type="text/javascript"></script>
    <script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
    <script src="{$host}zb_users/theme/{$theme}/plugins/bxslider/jquery.bxslider.min.js" type="application/javascript" ></script>
    <script type="text/javascript"
            src="{$host}zb_users/theme/{$theme}/script/jquery.KinSlideshow-1.2.1.min.js "></script>
    <script src="{$host}zb_users/theme/{$theme}/script/custom.js" type="text/javascript"></script>

    {if $type=='article'}
    <title>{$title}_{$article.Category.Name}_{$name}</title>
    {php}
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
    {/php}
    <meta name="keywords" content="{$keywords}"/>
    <meta name="description" content="{$description}"/>
    <meta name="author" content="{$article.Author.StaticName}"/>
    {elseif $type=='page'}
    <title>{$title}_{$name}_{$subname}</title>
    <meta name="keywords" content="{$title},{$name}"/>
    {php}
    $description = preg_replace('/[\r\n\s]+/', ' ',
    trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...');
    {/php}
    <meta name="description" content="{$description}"/>
    <meta name="author" content="{$article.Author.StaticName}"/>
    {elseif $type=='index'}
    <!--首页的样式文件-->
    <link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/default.css" type="text/css"
          media="all"/>

    <title>{$name}{if $page>'1'}_第{$pagebar.PageNow}页{/if}_{$subname}</title>
    <meta name="Keywords" content="{$zbp->Config('qxcms')->Webkeywords}"/>
    <meta name="description" content="{$zbp->Config('qxcms')->Webdescription}"/>
    <meta name="author" content="{$zbp.members[1].StaticName}"/>
    {elseif $type=='category'}
    <!--通知页的样式文件-->
    <link rel="stylesheet" rev="stylesheet" href="{$host}zb_users/theme/{$theme}/style/default.css" type="text/css"
                                  media="all"/>
    {else}
    <title>{$title}_{$name}_第{$pagebar.PageNow}页</title>
    <meta name="Keywords" content="{$title},{$name}"/>
    <meta name="description" content="{$title}_{$name}_当前是第{$pagebar.PageNow}页"/>
    <meta name="author" content="{$zbp.members[1].StaticName}"/>
    {/if}

    {$header}
    {if $type=='index'&&$page=='1'}
    <link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}"/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml"/>
    {/if}
    <link rel="shortcut icon" href="{$host}favicon.ico"/>
</head>
<body>
<div class="index-box">
    <!-- 头部开始 -->
    <div class="header">
        <div class="header-top">
<!--            <div class="logo">-->
<!--                <a href="{$host}"><img src="{$host}zb_users/theme/{$theme}/include/logo1.png" alt=""></a>-->
<!--            </div>-->
            <div class="search">
                <form name="search" method="post" action="{$host}zb_system/cmd.php?act=search">
                    <input class="input" name="q" type="text" placeholder="输入关键词..."/>
                    <input class="input" name="type" type="hidden" value="0"/>
                    <input class="submit" name="t" type="submit" value="搜索"/>
                </form>

            </div>

        </div>
        <div class="header-nav">
            <ul>
                {module:navbar}
            </ul>
        </div>
        <!--<div  id="nav"><ul><li><a href="{$host}">首页</a></li>{module:navbar}</ul></div>-->
    </div>
    <!-- 头部结束 -->