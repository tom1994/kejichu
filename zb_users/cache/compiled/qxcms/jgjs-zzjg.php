<?php  /* Template Name:机构介绍下的组织架构页面 */  ?>
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
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[4]->Url;  ?>">研究院领导</a>
    </div>
    <div class="navbar-left-item navbar-left-active">
        <a href="<?php  echo $categorys[5]->Url;  ?>">组织架构</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <?php  include $this->GetTemplate('breadcrumb');  ?>
    <h1 class="main-content-title">
        组织架构
    </h1>
    <?php 
    $id='121'; //设置组织架构文章ID
    $indexpost=GetPost((int)$id);
     ?>
    <div class="content-yjygl">
        <?php  echo $indexpost->Content;  ?>
    </div>
</div>
<!-- 右侧页面内容结束 -->

<?php  include $this->GetTemplate('footer');  ?>