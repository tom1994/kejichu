<?php  /* Template Name:科研项目首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <?php 
    $acate = $zbp->Config('qxcms')->Acate;
    $ason1 = $zbp->Config('qxcms')->Ason1;
    $ason2 = $zbp->Config('qxcms')->Ason2;
    $ason3 = $zbp->Config('qxcms')->Ason3;
     ?>

<!-- cms2开始 -->
<?php if ($zbp->Config('qxcms')->Bcms=='1') { ?>
<div class="cms-content">
    <div class="cms-kyxm">
        <!--分割线-->
        <div class="cms-kyxm-halving-line"></div>
        <div class="cms-kyxm-title">
            <h3>时政/人事</h3>
            <span><a href="<?php  echo $categorys[24]->Url;  ?>"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/focus.png"></a></span>
        </div>
        <div class="tu-kyxm-f">
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
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
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
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
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
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
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
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
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
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
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
        </div>
        <div class="cms-kyxm-lr-list">
            <ul>
                <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
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