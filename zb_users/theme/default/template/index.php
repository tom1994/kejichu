{* Template Name:首页及列表页 *}
{template:header}
<body class="multi {$type}">
<div id="divAll">
    <div id="divPage">
        <div id="divNavBarContainer">
            <div id="divNavBar">
                <ul>
                    {module:navbar}
                </ul>
            </div>
        </div>

        <div id="divMiddle">
            <div id="divTop" class="slider">
                <ul class="bxslider">
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_1.jpg"/></li>
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_2.jpg"/></li>
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_3.jpg"/></li>
                    <li><img src="{$host}zb_users/theme/{$theme}/image/slider_image_4.jpg"/></li>
                </ul>
            </div>
            <div id="divMain">
                <div id="divMainLeft">
{if $article.IsTop}
{template:post-istop}
{else}
{template:post-multi}
{/if}

{/foreach}
<div class="pagebar">{template:pagebar}</div>
		</div>
		<div id="divSidebar">
{template:sidebar}
		</div>
{template:footer}