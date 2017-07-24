{template:header}
<div class="list-content">
   <div class="art-left">
    {if $article.Type==ZC_POST_TYPE_ARTICLE}
    {template:post-single}
    {else}
    {template:post-page}
    {/if}
   </div>
    <!--  侧栏 --> 
      
    
    {if $zbp->Config('qxcms')->Ceart=='1'} 
     <div class="list-right">
     {template:sidebar}
     </div>
	 {else}
     <div class="list-right">
	 {template:right}
     </div>
	 {/if}
    
</div>
 <!-- 页脚 -->
{template:footer}
