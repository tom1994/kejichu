<?php  /* Template Name:国家战略下面的全面深化改革内部研究 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item navbar-left-active">
        <a href="<?php  echo $categorys[65]->Url;  ?>">内部研究</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[64]->Url;  ?>">外部观点</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <div class="cms-list-kyxm">
        <ul>
            <?php  foreach ( $articles as $article) { ?>
            <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span class="lwfb-date">时间:<?php  echo $article->Time('Y-m-d');  ?></span></li>
            <?php }   ?>
        </ul>
        <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
    </div>
</div>
<!-- 右侧页面内容结束 -->

<?php  include $this->GetTemplate('footer');  ?>