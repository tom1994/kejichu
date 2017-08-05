{* Template Name:获奖情况页面 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item">
        <a href="{$categorys[12].Url}">专家成果</a>
    </div>
    <div class="navbar-left-item">
        <a href="{$categorys[13].Url}">学术活动</a>
    </div>
    <div class="navbar-left-item navbar-left-active">
        <a href="{$categorys[14].Url}">获奖情况</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <!-- 专家观点图片开始 -->
    <div class="top-content-zjcg">
        <!--专家观点图片展示-->
        <!--取得该分类下3个置顶文章-->
        {$topArray = GetList(3, 1, null, null, null, null, array("only_ontop"  => true));}
        {foreach $topArray as $top}
        <!--专家观点图片展示-->
        <div class="top-content-left">
            <div class="top-content-container">
                <a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}">
                    <div class="top-content-img-label">
                        <div class="img-label-time">
                            {$top.Time('Y-m-d')}
                        </div>
                        <div class="img-label-title">
                            {$top.Title}
                        </div>
                    </div>
                </a>
            </div>
        </div>
        {/foreach}
    </div>
    <!-- 专家观点图片结束 -->

    <!-- cms2开始 -->
    {if $zbp->Config('qxcms')->Bcms=='1'}
    <div class="cms-content-zjcg">
        <div class="cms-lr-list">
            <ul>
                {foreach GetList(6,$ason1) as $key=>$article}
                <li>
                    <div class="cms-lr-list-title">
                        <a href="{$article.Url}">{$article.Title}</a>
                    </div>
                    <div class="cms-lr-list-date">
                        {$article.Time('Y-m-d')}
                    </div>
                </li>
                {/foreach}
            </ul>
        </div>
        <div class="cms-lr-more">
            <a href="{$categorys[1].Url}">更多</a>
        </div>
    </div>
    {/if}
    <!-- cms2结束 -->
</div>
<!-- 右侧页面内容结束 -->

{template:footer}