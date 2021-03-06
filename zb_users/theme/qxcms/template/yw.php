{* Template Name:要闻首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cms-yw">
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
            <div class="cms-yw-img">
                <div id="KinSlideshow" style="visibility:hidden;">

                    <!--取得该分类下加入轮播图的文章-->
                    {foreach GetList(null,1) as $key=>$article}
                    {if $article->Metas->lunbo==1}
                    <a href="{$article.Url}" target="_blank"><img src="{$article.Metas.pic}" alt="{$article.Title}"
                                                                  width="750" height="360"/></a>
                    {/if}
                    {/foreach}
                </div>
            </div>
            <!-- 幻灯片结束 -->
            <div class="cms-yw-mtbd">
                <div class="cms-yw-title-mtbd-more"></div>
                <div class="cms-yw-title-mtbd"><span>媒体报道</span></div>
                <div class="cms-yw-title-mtbd-more"><a href="{$categorys[32].Url}"><span>更多</span></a></div>
                <div class="cms-yw-mtbd-list">
                    <ul>
                        {foreach GetList(11,32) as $key=>$article}
                        <li><a href="{$article.Url}">{$article.Title}</a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>
        <div class="cms-zhyw">
            <div class="cms-title-yw">
                <div class="title-yw"><span>综合新闻</span></div>
                <div class="more-yw"><a href="{$categorys[33].Url}">更多》</a></div>
                <div class="title-yw-line"></div>
            </div>
            <div class="cms-yw-zhxw">
                <div class="cms-zhxw-list">
                    <ul>
                        {foreach GetList(10, 33) as $key=>$article}
                        <li><a href="{$article.Url}">{$article.Title}</a></li>
                        {/foreach}
                    </ul>
                </div>
                <div class="tu-yw-f-zhxw">
                    <!--取得该分类下第一个置顶文章-->
                    {$topArray = GetList(1, 33, null, null, null, null, array("only_ontop" => true));}
                    {foreach $topArray as $top}
                    <div class="zhxw-img"><a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}"></a></div>
                    <div class="zhxw-imgwords">
                        <span>{$top.Content}</span>
                    </div>
                    {/foreach}


                </div>
            </div>
        </div>
    </div>

    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            {module:link}
        </ul>
    </div>
    <!-- 友情链接结束 -->
    {template:footer}