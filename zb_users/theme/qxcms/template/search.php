{template:header}
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
{template:footer}