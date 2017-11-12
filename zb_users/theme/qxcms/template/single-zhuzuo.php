{* Template Name:著作页单页（无侧边） *}
{template:header}
<div class="list-content">
    <div class="art-full">
        <!--		   <div class="mb-nav">			  -->
        <!--			  <a href="{$host}">首页</a> - <a href="{$article.Category.Url}"class="cata">{$article.Category.Name}</a> - {$article.Title}-->
        <!--		   </div>-->
        <!--面包屑导航-->
        {template:breadcrumb}
        <div class="zhuzuo-img">
            <img src="{$article.Metas.pic}" alt="{$article.Title}" width="300" height="400">
        </div>
        <div class="zhuzuo-right">
            <div class="zhuzuo-info-container">
                {php}
                    $info_array = preg_split("/;/", $article->Metas->info);
                    $headers = array("主办单位", "主管单位", "出版地", "出版周期", "国内统一刊号", "开版");
                {/php}

                <div class="zhuzuo-info-title">
                    基本信息
                </div>
                <div class="zhuzuo-info">
                    {foreach $info_array as $key=>$item}
                        <p>●{$headers[$key]}：{$item}</p>
                    {/foreach}
                </div>
            </div>
            <div class="zhuzuo-author-container">
                <div class="zhuzuo-author-title">
                    作者介绍
                </div>
                <div class="zhuzuo-author">
                    <p><a href="https://www.baidu.com/s?wd={$article.Metas.author}">{$article.Metas.author}</a></p>
                    <p>{$article.Metas.author_info}</p>
                </div>
            </div>
        </div>
        <div class="zhuzuo-content-container">
            <div class="zhuzuo-content-title">
                主要内容
            </div>
            <div class="zhuzuo-content">
                {$article.Content}
            </div>
        </div>
    </div>
</div>
<!-- 页脚 -->
{template:footer}
