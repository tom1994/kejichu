{* Template Name:首页及列表页 *}
{template:header}
<body class="multi {$type}">
<div id="divAll">
    <div id="divPage">
        <!-- <div id="divNavBarContainer">
            <div id="divNavBar">
                <ul>
                    {module:navbar}
                </ul>
            </div>
        </div> -->
        <div id="divMiddle">
            <!--轮播图首页-->
            <!--z-index:-999;position:relative防止轮播图遮挡-->
            <div id="divTop" class="slider">
                {ResponsiveSlides_call('')}
               <!-- <ul class="bxslider">
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_1.jpg"/></li>
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_2.jpg"/></li>
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_3.jpg"/></li>
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_4.jpg"/></li>
                </ul>-->
            </div>
            <div id="divMain">
                <!--                {foreach $articles as $article}-->
                <!---->
                <!--                {if $article.IsTop}-->
                <!--                {template:post-istop}-->
                <!--                {else}-->
                <!--                {template:post-multi}-->
                <!--                {/if}-->
                <!---->
                <!--                {/foreach}-->
                <!--                <div class="pagebar">{template:pagebar}</div>-->
                <div id="divMainLeft">

                    <div id="divMainLeftContent">
                        <div id="divMainLeftHeader">
                            <div id="divMainLeftLine">
                            </div>
                            <a href="{$categorys[1].Url}">
                                <span id="divMainLeftTitle">{$categorys[1].Name}</span>
                            </a>
                        </div>

                        <ul>
                            {foreach GetList(10,1) as $key=>$article}
                            <li><a href="{$article.Url}">{$article.Title}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
                <div id="divMainRight">
                    <div id="divMainRightContent">
                        <div id="divMainRightHeader">
                            <div id="divMainRightLine">
                            </div>
                            <a href="{$categorys[2].Url}">
                                <span id="divMainRightTitle">{$categorys[2].Name}</span>
                            </a>

                        </div>
                        <ul>
                            {foreach GetList(10,2) as $key=>$article}
                            <li><a href="{$article.Url}">{$article.Title}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
            </div>
            <!--            <div id="divSidebar">-->
            <!--                {template:sidebar}-->
            <!--            </div>-->
            {template:footer}