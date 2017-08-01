<?php  /* Template Name:外部研究下面的最新洞见页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cms-wbyj-child">
            <div class="cms-img-wbyj"></div>
            <div class="cms-list-wbyj">
                <ul>
                    <?php  foreach ( GetList(9,$ason1) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span class="wbyj-date"><?php  echo $article->Time('Y-m-d');  ?></span></li>
                    <div class="cms-list-wbyj-line"></div>
                    <?php }   ?>
                </ul>
            </div>
        </div>


        <div class="cms-wbyj-child-xgjg">
            <div class="cms-wbyj-child-title">
                <div class="wbyj-child-title"><span>相关机构</span></div>
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