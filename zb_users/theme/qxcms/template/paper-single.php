{* Template Name:论文页单页（无侧边） *}
{template:header}
<div class="list-content">
    <div class="art-full">
        <!--		   <div class="mb-nav">			  -->
        <!--			  <a href="{$host}">首页</a> - <a href="{$article.Category.Url}"class="cata">{$article.Category.Name}</a> - {$article.Title}-->
        <!--		   </div>-->
        <!--面包屑导航-->
        {template:breadcrumb}
        <div class="paper-t-full">
            {$article.Title}
        </div>
        <div class="paper-a-full">
            {$article.Metas.author}
        </div>
        <div class="paper-o-full">
            {$article.Metas.org}
        </div>
        <div class="horizon-line bg-lightgray"></div>
        <div class="paper-content-left">
            {$article.Content}
        </div>
<!--        使用{$article.Metas.pic}替换img的源-->
        <div class="paper-img-right">
            <img src="{qxcms_FirstIMG($btuid,120,160)}" alt="{$btuid.Title}">
        </div>
        <!--		   <div class="art-tag">-->
        <!--			    <ul>-->
        <!--				    {foreach $article.Tags as $tag}-->
        <!--					<li><a href="{$tag.Url}" target="_blank">{$tag.Name}</a></li>-->
        <!--					{/foreach}-->
        <!--			    </ul>-->
        <!--		   </div>-->
        <!--           {if $zbp->Config('qxcms')->Adon6=='1'}-->
        <!--		   <div class="art-ad">-->
        <!--			   {$zbp->Config('qxcms')->Ad6}-->
        <!--		   </div>-->
        <!--           {/if}-->
        <!--		   <div class="art-xg">-->
        <!--			    <div class="right-t">-->
        <!--					<span>相关文章</span>	-->
        <!--			    </div>-->
        <!--				<div class="art-xg-c">-->
        <!--                    {foreach GetList(4,null,null,null,null,null,array('is_related'=>$article.ID)) as $related}-->
        <!--					<div class="art-xg-box">-->
        <!--		                <a href="{$related.Url}"><img src="{qxcms_FirstIMG($related,154,125)}"  alt="{$related.Title}">-->
        <!--		                <span>{$related.Title}</span>-->
        <!--		                </a>-->
        <!--	                </div>-->
        <!--                    {/foreach}					-->
        <!--				</div>-->
        <!--		   </div>-->

    </div>

</div>
<!-- 页脚 -->
{template:footer}
