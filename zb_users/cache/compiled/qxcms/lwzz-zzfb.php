<?php  /* Template Name:论文著作下面的著作发表页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cms-title-zzfb">
            著作发表
        </div>
        <div class="cms-list-zzfb">
            <?php  foreach ( GetList(10,$ason1) as $key=>$article) { ?>
            <div class="cms-list-item">
                <a href="<?php  echo $article->Url;  ?>">
                    <img src="<?php  echo qxcms_FirstIMG($btuid,120,160);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    <span><?php  echo $article->Title;  ?></span>
                </a>
            </div>
            <!--            <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span-->
            <!--                        class="lwfb-date">[出版日期:<?php  echo $article->Time('Y-m-d');  ?>]</span></li>-->
            <!--            <li><span class="lufb-zz"><strong>·</strong>作者:<?php  echo $article->Author->Name;  ?></span><span-->
            <!--                        class="lufb-cbs"><strong>·</strong>出版社</span></li>-->
            <?php }   ?>
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