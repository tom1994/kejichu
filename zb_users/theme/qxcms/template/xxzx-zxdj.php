{* Template Name:信息咨讯下面的最新洞见页面 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cms-wbyj-child">
            <div class="cms-img-wbyj"><img src="{$host}zb_users/theme/{$theme}/include/views_left_banner.png" alt="最新洞见&热门观点"></div>
            <div class="cms-list-wbyj">
                <ul>
                    {foreach GetList(9,73) as $key=>$article}
                    <li><a href="{$article.Url}">{$article.Title}</a><span class="wbyj-date">{$article.Time('Y-m-d')}</span></li>
                    <div class="cms-list-wbyj-line"></div>
                    {/foreach}
                </ul>
            </div>
        </div>


        <div class="cms-wbyj-child-xgjg">
            <div class="cms-wbyj-child-title">
                <div class="wbyj-child-title"><span>相关机构</span></div>
            </div>
        </div>
    </div>
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