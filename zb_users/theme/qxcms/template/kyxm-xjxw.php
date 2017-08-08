{* Template Name:科研项目下的数据新闻页面 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item ">
        <a href="{$categorys[24].Url}">时政/人事</a>
    </div>
    <div class="navbar-left-item ">
        <a href="{$categorys[25].Url}">国际</a>
    </div>
    <div class="navbar-left-item ">
        <a href="{$categorys[26].Url}">财经</a>
    </div>
    <div class="navbar-left-item ">
        <a href="{$categorys[27].Url}">法制/社会</a>
    </div>
    <div class="navbar-left-item navbar-left-active">
        <a href="{$categorys[28].Url}">数据新闻</a>
    </div>
    <div class="navbar-left-item">
        <a href="{$categorys[29].Url}">证券</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <div class="cms-list-kyxm">
        <ul>
            {foreach $articles as $article}
            <li><a href="{$article.Url}">{$article.Title}</a><span class="lwfb-date">[出版日期:{$article.Time('Y-m-d')}]</span></li>
            {/foreach}
            <div class="pagebar">{template:pagebar}</div>
        </ul>
    </div>
</div>
<!-- 右侧页面内容结束 -->

{template:footer}