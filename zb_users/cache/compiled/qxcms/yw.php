<?php  /* Template Name:要闻首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
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
                    <?php  foreach ( GetList(null,1) as $key=>$article) { ?>
                    <?php if ($article->Metas->lunbo==1) { ?>
                    <a href="<?php  echo $article->Url;  ?>" target="_blank"><img src="<?php  echo $article->Metas->pic;  ?>" alt="<?php  echo $article->Title;  ?>"
                                                                  width="750" height="360"/></a>
                    <?php } ?>
                    <?php }   ?>
                </div>
            </div>
            <!-- 幻灯片结束 -->
            <div class="cms-yw-mtbd">
                <div class="cms-yw-title-mtbd-more"></div>
                <div class="cms-yw-title-mtbd"><span>媒体报道</span></div>
                <div class="cms-yw-title-mtbd-more"><a href="<?php  echo $categorys[32]->Url;  ?>"><span>更多</span></a></div>
                <div class="cms-yw-mtbd-list">
                    <ul>
                        <?php  foreach ( GetList(11,32) as $key=>$article) { ?>
                        <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                        <?php }   ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cms-zhyw">
            <div class="cms-title-yw">
                <div class="title-yw"><span>综合新闻</span></div>
                <div class="more-yw"><a href="<?php  echo $categorys[33]->Url;  ?>">更多》</a></div>
                <div class="title-yw-line"></div>
            </div>
            <div class="cms-yw-zhxw">
                <div class="cms-zhxw-list">
                    <ul>
                        <?php  foreach ( GetList(10, 33) as $key=>$article) { ?>
                        <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                        <?php }   ?>
                    </ul>
                </div>
                <div class="tu-yw-f-zhxw">
                    <!--取得该分类下第一个置顶文章-->
                    <?php  $topArray = GetList(1, 33, null, null, null, null, array("only_ontop" => true));;  ?>
                    <?php  foreach ( $topArray as $top) { ?>
                    <div class="zhxw-img"><a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>"></a></div>
                    <div class="zhxw-imgwords">
                        <span><?php  echo $top->Content;  ?></span>
                    </div>
                    <?php }   ?>


                </div>
            </div>
        </div>
    </div>

    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
        </ul>
    </div>
    <!-- 友情链接结束 -->
    <?php  include $this->GetTemplate('footer');  ?>