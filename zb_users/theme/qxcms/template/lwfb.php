{* Template Name:论文发表首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="lwfb">
            <div class="cms-title-lwfb">
                <div class="bj-lwfb"></div>
                <div class="title-lwfb"><span>论文发表</span></div>
            </div>
            <div class="line-lwfb"></div>
            <div class="cms-list-lwfb">
                <ul>
                    {foreach GetList(8,$ason1) as $key=>$article}
                    <li><a href="{$article.Url}">{$article.Title}</a><span class="lwfb-date">[出版日期:{$article.Time('Y-m-d')}]</span></li>
                    {/foreach}
                </ul>
            </div>
        </div>


        <div class="cms-zyqk">
            <div class="cms-title-zyqk">
                <div class="zyqk-title"><span>主要期刊</span></div>
            </div>
            <div class="cms-list-zyqk">
                
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