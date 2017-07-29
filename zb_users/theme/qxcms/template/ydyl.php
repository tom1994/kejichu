{* Template Name:一带一路首页 *}
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
    <!-- 幻灯片开始 -->
    <script type="text/javascript">
        $(function () {
            $("#KinSlideshow").KinSlideshow({
                moveStyle: "right",
                titleBar: {titleBar_height: 30, titleBar_bgColor: "#646464", titleBar_alpha: 0.5},
                titleFont: {TitleFont_size: 14, TitleFont_color: "#ffffff", TitleFont_weight: "normal"},
                btn: {
                    btn_bgColor: "#FFFFFF",
                    btn_bgHoverColor: "#000000",
                    btn_fontColor: "#000000",
                    btn_fontHoverColor: "#FFFFFF",
                    btn_borderColor: "#cccccc",
                    btn_borderHoverColor: "#000000",
                    btn_borderWidth: 1
                }
            });
        })
    </script>


    <div class="top-img">
        <div id="KinSlideshow" style="visibility:hidden;">
            {php}
            $array = explode(',',$zbp->Config('qxcms')->Slide);
            {/php}
            {foreach $array as $sliderid}
            {$slider=GetPost((int)$sliderid)}
            <a href="{$slider.Url}" target="_blank"><img src="{qxcms_FirstIMG($slider,560,335)}" alt="{$slider.Title}"
                                                         width="560" height="335"/></a>
            {/foreach}
        </div>
    </div>


    <!-- 幻灯片结束 -->
    <div class="top-art">
        <div class="cms-up">
            <h2>{$categorys[$ason1].Name}</h2>
            <ul>
                {foreach GetList(10,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>
    </div>
</div>
<!-- 焦点文章结束 -->

<!-- cms2开始 -->
{if $zbp->Config('qxcms')->Bcms=='1'}
<div class="cms-content">
    <div class="cms-title">
        {php}
        $bcate = $zbp->Config('qxcms')->Bcate;
        $bson1 = $zbp->Config('qxcms')->Bson1;
        $bson2 = $zbp->Config('qxcms')->Bson2;
        $bson3 = $zbp->Config('qxcms')->Bson3;
        {/php}
        <h2><a href="{$categorys[$bcate].Url}">{$categorys[$bcate].Name}</a></h2>
    </div>
    <div class="cms-left">
        <div class="cms-left-title">
            <h2>研究观点</h2>
            <span><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></span>
        </div>
        <div class="tu-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,280,180)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-lr-list">
            <ul>
                {foreach GetList(4,$ason1) as $key=>$article}
                <li><a href="{$article.Url}">{$article.Title}</a></li>
                {/foreach}
            </ul>
        </div>

    </div>
    <div class="cms-right">
        <div class="cms-right-title">
            <h2>科研成果</h2>
            <span><img src="{$host}zb_users/theme/{$theme}/image/focus.png"></span>
        </div>
        <div class="tu-f">
            {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
            <a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,280,180)}" alt="{$btuid.Title}">
                <h3>{$btuid.Title}</h3>
            </a>
        </div>
        <div class="cms-lr-list">
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