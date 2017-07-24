<div class="list-content">
    <div class="list-left">



{foreach $articles as $article}

{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}

          
		  
          <div class="pagebar">	
          {template:pagebar}
          </div>

     </div>

	 {if $zbp->Config('qxcms')->Celist=='1'} 
     <div class="list-right">
     {template:sidebar}
     </div>
	 {else}
     <div class="list-right">
	 {template:right}
     </div>
	 {/if}



</div>