<?php  /* Template Name:创新团队首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <!--专家介绍-->
    <div class="ws_main">
        <div class="section4" style="height: 360px">
            <div class="containers">
                <img id="lefthead" src="" style="float: left">
                <div style="margin-left: 420px">
                    <br>
                    <h4 id="name" style="font-size: 32px"></h4>
                    <br>
                    <p id="title"
                       style="font-size: 24px;width: 500px;display:inline-block;border-top: solid grey 1px;padding-top: 10px"></p>
                </div>
            </div>
        </div>
        <div class="section4" id="section4">
            <div class="containers">
                <h4 class="section_t">创新团队</h4>
                <div class="section_b ws_tabs2">
                    <div class="section_b_b tab_box">
                        <div class="row" style="display: block;">
                            <?php  foreach ( $articles as $article) { ?>
                            <div class="sitem">
                                <img alt="<?php  echo $article->Title;  ?>" src="<?php  echo $article->Metas->pic;  ?>"
                                     class="s_img">
                                <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/yuan.png" class="s_cover">
                                <h4><?php  echo $article->Title;  ?></h4>
                                <?php  echo $article->Content;  ?>
                            </div>
                            <?php }   ?>
                        </div>
                    </div>
                    <div class="section_b_t" style="display: none">
                        <ul class="ws_tab">
                            <li class="current"></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 焦点文章结束 -->

<!-- cms2开始 -->
<?php if ($zbp->Config('qxcms')->Bcms=='1') { ?>
<div class="cms-content">
    <div class="cms-left-cxtd">
        <div class="cms-left-cxtd-title">
            <h3>主要研究</h3>
        </div>
        <div class="cms-lr-list">
            <ul>
                <?php  foreach ( GetList(6,$ason1) as $key=>$article) { ?>
                <li><strong>·</strong><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>
        <div class="cms-lr-more">
            <a href="<?php  echo $categorys[12]->Url;  ?>">更多</a>
        </div>

    </div>
    <div class="cms-right-cxtd">
        <div class="tu-f-cxtd">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 1, null, null, null, null, array("only_ontop" => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
    </div>
</div>
<?php } ?>
<!-- cms2结束 -->

<!-- 友情链接开始 -->
<div class="link">
    <ul>
        <li>友情链接:</li>
        <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
    </ul>
</div>
<!-- 友情链接结束 -->
<?php  include $this->GetTemplate('footer');  ?>
<link rel="stylesheet" type="text/css" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/css/index.css"/>
<link rel="stylesheet" type="text/css" href="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/css/ws.css"/>
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/jquery-3.2.1.js"></script>
<script>
    $('.s_img').click(function () {
        $('#lefthead').attr('src', $(this).attr('src'));
        $('#name').html($(this).siblings('h4').html());
        $('#title').html($(this).siblings('p').html());
    })
</script>