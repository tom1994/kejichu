{* Template Name:科研项目首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    {php}
    $acate = $zbp->Config('qxcms')->Acate;
    $ason1 = $zbp->Config('qxcms')->Ason1;
    $ason2 = $zbp->Config('qxcms')->Ason2;
    $ason3 = $zbp->Config('qxcms')->Ason3;
    {/php}

<!-- cms2开始 -->
{if $zbp->Config('qxcms')->Bcms=='1'}
<div class="cms-content">
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h2>时政/人事</h2>
            <span><a href="{$categorys[24].Url}"><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>

    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h2>国际</h2>
            <span><a href="{$categorys[25].Url}"><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h2>财经</h2>
            <span><a href="{$categorys[26].Url}"><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>

    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h2>法制/社会</h2>
            <span><a href="{$categorys[27].Url}"><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>

    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h2>数据新闻</h2>
            <span><a href="{$categorys[28].Url}"><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h2>证券</h2>
            <span><a href="{$categorys[29].Url}"><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>

    </div>
</div>
{/if}
<!-- cms2结束 -->

<!-- 友情链接开始 -->
<div class="link">
    <ul>
        <li>友情链接:</li>
        {module:link}
    </ul>
</div>
<!-- 友情链接结束 -->
{template:footer}