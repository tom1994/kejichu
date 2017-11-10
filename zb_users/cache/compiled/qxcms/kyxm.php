<?php  /* Template Name:科研项目首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">

<div class="cms-content">
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>时政/人事</h3>
            <span><a href="<?php  echo $categorys[24]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 24, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,24) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>

    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>国际</h3>
            <span><a href="<?php  echo $categorys[25]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 25, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,25) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>
    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>财经</h3>
            <span><a href="<?php  echo $categorys[26]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 26, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,26) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>

    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>法制/社会</h3>
            <span><a href="<?php  echo $categorys[27]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 27, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,27) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>

    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>数据新闻</h3>
            <span><a href="<?php  echo $categorys[28]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 28, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,28) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>
    </div>
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>证券</h3>
            <span><a href="<?php  echo $categorys[29]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 29, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>">
                <h3><?php  echo $top->Title;  ?></h3>
            </a>
            <?php }   ?>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,29) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>

    </div>
</div>
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