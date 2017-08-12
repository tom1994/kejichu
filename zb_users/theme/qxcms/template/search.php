{template:header}
{php}
$type = $searchresult[0];
$articles = $searchresult[1];
{/php}
{if $type==0}
<div class="list-content">
    <ul>
        <li>
            {foreach $articles as $article}
            {template:post-search}
            {/foreach}
        </li>
    </ul>
    <div class="pagebar">
        {template:pagebar}
    </div>
</div>
{else}
<h1>这是类型1搜索</h1>
{/if}
{template:footer}