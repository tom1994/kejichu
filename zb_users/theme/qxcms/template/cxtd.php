{* Template Name:创新团队首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <!--专家介绍-->
    <div class="ws_main">
        <div class="section4" style="height: 360px">
            <div class="containers">
                <img id="lefthead" src="" style="float: left">
                <div style="margin-left: 420px">
                    <br>
                    <h4 id="name" style="font-size: 32px"></h4>
                    <br>
                    <p id="title"
                       style="font-size: 24px;width: 500px;display:inline-block;border-top: solid grey 1px;padding-top: 10px"></p>
                </div>
            </div>
        </div>
        <div class="section4" id="section4">
            <div class="containers">
                <h4 class="section_t">创新团队</h4>
                <div class="section_b ws_tabs2">
                    <div class="section_b_b tab_box">
                        <div class="row" style="display: block;">
                            {foreach $articles as $article}
                            <div class="sitem">
                                <img alt="{$article.Title}" src="{$article.Metas.pic}"
                                     class="s_img">
                                <img src="{$host}zb_users/theme/{$theme}/img/yuan.png" class="s_cover">
                                <h4>{$article.Title}</h4>
                                {$article.Content}
                            </div>
                            {/foreach}
                        </div>
                    </div>
                    <div class="section_b_t" style="display: none">
                        <ul class="ws_tab">
                            <li class="current"></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
            <a href="{$categorys[12].Url}">更多</a>
        </div>

    </div>
    <div class="cms-right-cxtd">
        <div class="tu-f-cxtd">
            <!--取得该分类下第一个置顶文章-->
            {$topArray = GetList(1, 1, null, null, null, null, array("only_ontop" => true));}
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
<link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/css/index.css"/>
<link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/css/ws.css"/>
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery-3.2.1.js"></script>
<script>
    $('.s_img').click(function () {
        $('#lefthead').attr('src', $(this).attr('src'));
        $('#name').html($(this).siblings('h4').html());
        $('#title').html($(this).siblings('p').html());
    })
</script>