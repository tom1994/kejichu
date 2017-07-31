<?php  /* Template Name:科研项目下的时政人事页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item navbar-left-active">
        <a href="<?php  echo $categorys[24]->Url;  ?>">时政/人事</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[25]->Url;  ?>">国际</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[26]->Url;  ?>">财经</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[27]->Url;  ?>">法制/社会</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[28]->Url;  ?>">数据新闻</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[29]->Url;  ?>">证券</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <div class="cms-list-kyxm">
        <ul>
            <?php  foreach ( GetList(11,$ason1) as $key=>$article) { ?>
            <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span class="lwfb-date">[出版日期:<?php  echo $article->Time('Y-m-d');  ?>]</span></li>
            <?php }   ?>
        </ul>
    </div>
</div>
<!-- 右侧页面内容结束 -->

<?php  include $this->GetTemplate('footer');  ?>