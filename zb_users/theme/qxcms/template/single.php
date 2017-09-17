{* Template Name:文章页单页（无侧边） *}
{template:header}
<div class="list-content">
    <div class="art-full">
        <!--		   <div class="mb-nav">			  -->
        <!--			  <a href="{$host}">首页</a> - <a href="{$article.Category.Url}"class="cata">{$article.Category.Name}</a> - {$article.Title}-->
        <!--		   </div>-->
        <!--面包屑导航-->
        {template:breadcrumb}
        <div class="tiao"></div>
        <div class="art-t-full">
            {$article.Title}
        </div>
        <div class="art-msg-container">
            <div class="art-msg-full">
                <!--			   <span><a href="{$article.Author.Url}"><img src="{$article.Author.Avatar}" alt="{$article.Author.Name}">-->
                <!--			   {$article.Author.Name}</a>-->
                <!--			   </span>-->
                <!--                <span>{$article.Time('Y年m月d日')}</span>-->
                <span>{$article.Intro}</span>
                <span>{$article.ViewNums}次浏览</span>
            </div>
        </div>
        <div class="art-content-full">
            {$article.Content}
        </div>
    </div>

</div>
<!-- 页脚 -->
{template:footer}
