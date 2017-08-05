<?php  /* Template Name:创新团队首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <!--专家介绍-->
    <div style="background-color: #882a25; height: 600px"></div>
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
            <a href="<?php  echo $categorys[1]->Url;  ?>">更多</a>
        </div>

    </div>
    <div class="cms-right-cxtd">
        <div class="tu-f-cxtd">
            <!--取得该分类下第一个置顶文章-->
            <?php  $topArray = GetList(1, 1, null, null, null, null, array("only_ontop"  => true));;  ?>
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