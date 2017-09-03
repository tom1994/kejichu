{* Template Name: 联系我们页面 *}
{template:header}
<div class="list-content">
    <div class="art-full">
        {template:breadcrumb}
        {php}
        $id='4606'; //设置联系我们文章ID
        $indexpost=GetPost((int)$id);
        {/php}
        <div class="tiao"></div>
        <div class="lxwm-title">
            {$indexpost.Title}
        </div>
        <div class="lxwm-content-full">
            {$indexpost.Content}
        </div>
    </div>

</div>
<!-- 页脚 -->
{template:footer}
