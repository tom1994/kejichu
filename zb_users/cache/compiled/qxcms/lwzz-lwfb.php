<?php  /* Template Name:论文著作下的论文发表页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="lwfb">
            <div class="cms-title-lwfb">
                <div class="bj-lwfb"></div>
                <div class="title-lwfb"><span>论文发表</span></div>
            </div>
            <div class="line-lwfb"></div>
            <div class="cms-list-lwfb">
                <ul>
                    <?php  foreach ( GetList(8,$ason1) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span class="lwfb-date">[出版日期:<?php  echo $article->Time('Y-m-d');  ?>]</span></li>
                    <?php }   ?>
                </ul>
                <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
            </div>
        </div>

        <!--期刊展示-->
        <?php  include $this->GetTemplate('lwzz-lwfb-qk');  ?>
    </div>
    <!-- cms2结束 -->
</div>
    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
        </ul>
    </div>
    <!-- 友情链接结束 -->
    <?php  include $this->GetTemplate('footer');  ?>