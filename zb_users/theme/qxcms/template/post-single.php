           <div class="tiao"></div>
<!--		   <div class="mb-nav">			  -->
<!--			  <a href="{$host}">首页</a> - <a href="{$article.Category.Url}"class="cata">{$article.Category.Name}</a> - {$article.Title}-->
<!--		   </div>-->
           <!--面包屑导航-->
           {template:breadcrumb}
		   <div class="art-t">
			   <h1>{$article.Title}</h1>
		   </div>
		   <div class="art-msg">
			   <span><a href="{$article.Author.Url}"><img src="{$article.Author.Avatar}" alt="{$article.Author.Name}">
			   {$article.Author.Name}</a>
			   </span>
			   <span>{$article.Time('Y年m月d日')}</span>
			   <span><a href="{$article.Category.Url}">{$article.Category.Name}</a></span>
			   <span>{$article.ViewNums}次浏览</span>
               <span>{$article->Metas->org}</span>
		   </div>
		   <div class="art-content">
			   {$article.Content} 
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
		   