{* Template Name:信息咨讯首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">

    <div class="cms-content">
        <div class="cms-wbyj-zxdj">
            <div class="cms-title-wbyj">
                <div class="title-wbyj-left"></div>
                <div class="title-wbyj"><span><h2>最新洞见</h2></span></div>
                <div class="more-wbyj"><a href="{$categorys[73].Url}">更多</a></div>
            </div>
            <!--取得最新洞见分类下4个置顶文章-->
            {$topArray = GetList(4, 1, null, null, null, null, array("only_ontop"  => true));}
            {foreach $topArray as $top}
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    <a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}"></a>
                    <div class="wbyj-tu-font">
                        <h3>{$top.Title}</h3>
                    </div>
                </div>
            </div>
            {/foreach}
        </div>
        <div class="cms-title-wbyj">
            <div class="title-wbyj-left"></div>
            <div class="title-wbyj"><span><h2>热点话题</h2></span></div>
            <div class="more-wbyj"><a href="{$categorys[74].Url}">更多</a></div>
        </div>
        <div class="cms-wbyj-redian">
            <div class="tu-wbyj-f-redian">
                <!--取得热点话题分类下第1个置顶文章-->
                {$topArray = GetList(1, 1, null, null, null, null, array("only_ontop"  => true));}
                {foreach $topArray as $top}
                        <a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}"></a>
                {/foreach}
            </div>
            <div class="cms-redian-list">
                <ul>
                    {foreach GetList(5,$ason1) as $key=>$article}
                    <li><a href="{$article.Url}">{$article.Title}</a></li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>

    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            {module:link}
        </ul>
    </div>
    <!-- 友情链接结束 -->
    {template:footer}