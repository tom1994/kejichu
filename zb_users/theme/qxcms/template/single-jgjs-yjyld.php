{* Template Name:机构介绍下的研究院领导单独页面 *}
{template:header}
<div class="top-banner">
    <img alt="" src="{$host}zb_users/theme/{$theme}/image/bn1.jpg">
    <span class="navbar-left-title">机构介绍</span>
</div>
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item">
        <a href="{$categorys[3].Url}">研究院概览</a>
    </div>
    <div class="navbar-left-item navbar-left-active">
        <a href="{$categorys[4].Url}">研究院领导</a>
    </div>
    <div class="navbar-left-item">
        <a href="{$categorys[5].Url}">组织架构</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    {template:breadcrumb}
    <h1 class="main-content-title">
        研究院领导
    </h1>
    <div class="title-yjyld">
        {$article.Title}
    </div>
    <div class="info-yjyld">
        发布单位：{$article.Metas.org} 发布时间：{$article.Time('Y年m月d日')} 点击数：{$article.ViewNums}
    </div>
    <div class="content-yjyld">
        <img src="{$article.Metas.pic}" alt="{$article.Title}">
        {$article.Content}
    </div>
</div>
<!-- 右侧页面内容结束 -->

{template:footer}