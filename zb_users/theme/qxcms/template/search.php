{template:header}
{php}
$type = $searchresult[0];
$articles = $searchresult[1];
{/php}
<div class="top-content">
    {if $type==0}
    <h3>网站搜索结果:</h3>
    {else}
    <h3>智库中心搜索结果:</h3>
    {/if}
    <div class="list-content">
        <ul>
            <li>
                {foreach $articles as $article}
                {template:post-search}
                {/foreach}
            </li>
        </ul>
        {if $type==0}
        <div class="pagebar">
            {template:pagebar}
        </div>
        {/if}
    </div>
</div>
{template:footer}