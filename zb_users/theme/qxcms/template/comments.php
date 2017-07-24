{if $socialcomment}
{$socialcomment}
{else}

<div class="commentlist" style="overflow:hidden;">
    {if $article.CommNums>0}
	<div class="right-t">
    <span>评论列表</span>
	</div>
    {/if}
    
	<label id="AjaxCommentBegin"></label>
    <!--评论输出-->
    {foreach $comments as $key => $comment}
    {template:comment}
    {/foreach}

    <!--评论翻页条输出-->
    <div class="pagebar commentpagebar">
    {template:pagebar}
    </div>
    <label id="AjaxCommentEnd"></label>


</div>



<div class="pl-form-wrap">
      <!--评论框-->
     {template:commentpost}

     
	
</div>
{/if}
