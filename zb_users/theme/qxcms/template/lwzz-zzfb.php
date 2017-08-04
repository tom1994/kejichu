{* Template Name:论文著作下面的著作发表页面 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cms-title-zzfb">
            著作发表
        </div>
        <div class="cms-list-zzfb">
            {foreach GetList(10,$ason1) as $key=>$article}
            <div class="cms-list-item">
                <a href="{$article.Url}">
                    <img src="{qxcms_FirstIMG($btuid,120,160)}" alt="{$btuid.Title}">
                    <span>{$article.Title}</span>
                </a>
            </div>
            <!--            <li><a href="{$article.Url}">{$article.Title}</a><span-->
            <!--                        class="lwfb-date">[出版日期:{$article.Time('Y-m-d')}]</span></li>-->
            <!--            <li><span class="lufb-zz"><strong>·</strong>作者:{$article.Author.Name}</span><span-->
            <!--                        class="lufb-cbs"><strong>·</strong>出版社</span></li>-->
            {/foreach}
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