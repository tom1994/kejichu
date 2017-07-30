{* Template Name:外部研究首页 *}
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
        <div><h2>最新洞见</h2></div>
        <div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}

                    <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3>{$btuid.Title}</h3>
                    </div>
                </div>

            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}

                    <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3>{$btuid.Title}</h3>
                    </div>
                </div>

            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}

                    <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3>{$btuid.Title}</h3>
                    </div>
                </div>

            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}

                    <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,200,100)}" alt="{$btuid.Title}">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3>{$btuid.Title}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="cms-wbyj-redian">
            <div><h2>热点话题</h2></div>
            <div class="tu-wbyj-f-redian">
                {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}

                <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,400,250)}" alt="{$btuid.Title}">
                </a>
            </div>
            <div class="cms-redian-list">
                <ul>
                    {foreach GetList(5,$ason1) as $key=>$article}
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