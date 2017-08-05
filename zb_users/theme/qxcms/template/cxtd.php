{* Template Name:创新团队首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <!--专家介绍-->
    <div style="background-color: #882a25; height: 600px"></div>
</div>
<!-- 焦点文章结束 -->

<!-- cms2开始 -->
{if $zbp->Config('qxcms')->Bcms=='1'}
<div class="cms-content">
    <div class="cms-left-cxtd">
        <div class="cms-left-cxtd-title">
            <h3>主要研究</h3>
        </div>
        <div class="cms-lr-list">
            <ul>
                {foreach GetList(6,$ason1) as $key=>$article}
                <li><strong>·</strong><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>
        <div class="cms-lr-more">
            <a href="{$categorys[1].Url}">更多</a>
        </div>

    </div>
    <div class="cms-right-cxtd">
        <div class="tu-f-cxtd">
            <!--取得该分类下第一个置顶文章-->
            {$topArray = GetList(1, 1, null, null, null, null, array("only_ontop"  => true));}
            {foreach $topArray as $top}
            <a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}">
                <h3>{$top.Title}</h3>
            </a>
            {/foreach}
        </div>
    </div>
</div>
{/if}
<!-- cms2结束 -->

<!-- 友情链接开始 -->
<div class="link">
    <ul>
        <li>友情链接:</li>
        {module:link}
    </ul>
</div>
<!-- 友情链接结束 -->
{template:footer}