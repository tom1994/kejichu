{* Template Name:论文著作下的论文发表页面 *}
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
                    {foreach GetList(8,22) as $key=>$article}
                    <li><a href="{$article.Url}">{$article.Title}</a><span class="lwfb-date">[出版日期:{$article.Time('Y-m-d')}]</span></li>
                    {/foreach}
                </ul>
                <div class="pagebar">{template:pagebar}</div>
            </div>
        </div>

        <!--期刊展示-->
        {template:lwzz-lwfb-qk}
    </div>
    <!-- cms2结束 -->
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