<?php  /* Template Name:机构介绍下的研究院领导页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div class="top-banner">
    <img alt="" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/bn1.jpg">
    <span class="navbar-left-title">机构介绍</span>
</div>
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[3]->Url;  ?>">研究院概览</a>
    </div>
    <div class="navbar-left-item navbar-left-active">
        <a href="<?php  echo $categorys[4]->Url;  ?>">研究院领导</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[5]->Url;  ?>">组织架构</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <?php  include $this->GetTemplate('breadcrumb');  ?>
    <h1 class="main-content-title">
        研究院领导
    </h1>
    <div class="cms-list-yjyld">
        <?php  foreach ( GetList(10,$ason1) as $key=>$article) { ?>
        <div class="cms-list-yjyld-item">
            <a href="<?php  echo $article->Url;  ?>">
                <img src="<?php  echo qxcms_FirstIMG($btuid,120,160);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <span><?php  echo $article->Title;  ?></span>
            </a>
        </div>
        <?php }   ?>
    </div>
</div>
<!-- 右侧页面内容结束 -->

<?php  include $this->GetTemplate('footer');  ?>