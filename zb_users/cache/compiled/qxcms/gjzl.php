<?php  /* Template Name:国家战略首页 */  ?>
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
                    <?php  foreach ( GetList(null,66) as $key=>$article) { ?>
                    <?php if ($article->Metas->lunbo==1) { ?>
                    <a href="<?php  echo $article->Url;  ?>" target="_blank"><img src="<?php  echo $article->Metas->pic;  ?>" alt="<?php  echo $article->Title;  ?>" width="750" height="360"/></a>
                    <?php } ?>
                    <?php }   ?>
                </div>
            </div>
            <!-- 幻灯片结束 -->
            <div class="cms-yw-mtbd">
                <div class="cms-yw-title-mtbd-more"></div>
                <div class="cms-yw-title-mtbd"><span>精选文章</span></div>
                <div class="cms-yw-title-mtbd-more"><a href="<?php  echo $categorys[66]->Url;  ?>"><span>更多</span></a></div>
                <div class="cms-yw-mtbd-list">
                    <ul>
                        <?php  foreach ( GetList(11,66) as $key=>$article) { ?>
                        <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                        <?php }   ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="qm">
            <div class="gjzl">
                <div class="zl-title"><span>全面建设小康社会</span></div>
                <div class="zl-more"><a href="<?php  echo $categorys[52]->Url;  ?>"><span>更多》</span></a></div>
            </div>
            <div class="cms-gjzl-list">
                <ul>
                    <?php  foreach ( GetList(5,52) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                    <?php }   ?>
                </ul>
            </div>
        </div>
        <div class="qm">
            <div class="gjzl">
                <div class="zl-title"><span>全面深化改革</span></div>
                <div class="zl-more"><a href="<?php  echo $categorys[64]->Url;  ?>"><span>更多》</span></a></div>
            </div>
            <div class="cms-gjzl-list">
                <ul>
                    <?php  foreach ( GetList(5,64) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                    <?php }   ?>
                </ul>
            </div>
        </div>
        <div class="qm">
            <div class="gjzl">
                <div class="zl-title"><span>全面依法治国</span></div>
                <div class="zl-more"><a href="<?php  echo $categorys[7]->Url;  ?>"><span>更多》</span></a></div>
            </div>
            <div class="cms-gjzl-list">
                <ul>
                    <?php  foreach ( GetList(5,7) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                    <?php }   ?>
                </ul>
            </div>
        </div>
        <div class="qm">
            <div class="gjzl">
                <div class="zl-title"><span>全面从严治党</span></div>
                <div class="zl-more"><a href="<?php  echo $categorys[10]->Url;  ?>"><span>更多》</span></a></div>
            </div>
            <div class="cms-gjzl-list">
                <ul>
                    <?php  foreach ( GetList(5,10) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                    <?php }   ?>
                </ul>
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