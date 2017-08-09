{template:header}
<div class="list-content">
    {foreach $articles as $article}
    {template:post-search}
    {/foreach}


    <div class="pagebar">
        {template:pagebar}
    </div>
</div>
{template:footer}