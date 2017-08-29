{* Template Name:国家战略下面的全面从严治党内部研究 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item navbar-left-active">
        <a href="{$categorys[24].Url}">内部研究</a>
    </div>
    <div class="navbar-left-item">
        <a href="{$categorys[26].Url}">外部观点</a>
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