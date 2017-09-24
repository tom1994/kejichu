{* Template Name:论文著作下面论文发表的期刊页面 *}
<div class="cms-zyqk">
    <div class="cms-title-zyqk">
        <div class="zyqk-title"><span>主要期刊</span></div>
    </div>
    <div class="cms-list-zyqk">
        <!--取得该分类下第一个置顶文章-->
        {$topArray = GetList(4, 42, null, null, null, null, array("only_ontop"  => true));}
        {foreach $topArray as $top}
        <div class="zyqk">
            <div class="zyqk-img"><a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}"></a></div>
            <div class="zyqk-imgwords">
                <span>{$top.Content}</span>
            </div>
        </div>
        {/foreach}
    </div>
</div>