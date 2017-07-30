{* Template Name:论文著作首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cbzz">
            <div class="cms-cbzz-title">
                <div class="cbzz-title"><span>出版著作</span></div>
                <span class="cbzz-more">更多</span>
            </div>

            <div class="cbzz-lunbo">
                {ResponsiveSlides_call('')}
            </div>
        </div>


        <div class="cms-lwzz-lwfb">
            <div class="cms-cbzz-title">
                <div class="cbzz-title"><span>论文发表</span></div>
                <span class="cbzz-more">更多</span>
            </div>
            <div class="cms-lwfb-list">
                <ul>
                    {foreach GetList(4,$ason1) as $key=>$article}
                    <li><a href="{$article.Url}">{$article.Title}</a><span class="lwfb-date">[出版日期:{$article.Time('Y-m-d')}]</span></li>
                    <li><span class="lufb-zz"><strong>·</strong>作者:{$article.Author.Name}</span><span class="lufb-cbs"><strong>·</strong>出版社</span></li>
                    {/foreach}
                </ul>
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