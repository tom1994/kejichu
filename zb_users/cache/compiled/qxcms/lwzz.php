<?php  /* Template Name:论文发表页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cbzz">
            <div class="cms-cbzz-title">
                <div class="cbzz-title"><span>出版著作</span></div>
                <span class="cbzz-more"><a href="<?php  echo $categorys[23]->Url;  ?>">更多</a></span>
            </div>

            <div class="cbzz-lunbo">
                <?php  echo ResponsiveSlides_call('');  ?>
            </div>
        </div>


        <div class="cms-lwzz-lwfb">
            <div class="cms-cbzz-title">
                <div class="cbzz-title"><span>论文发表</span></div>
                <span class="cbzz-more"><a href="<?php  echo $categorys[22]->Url;  ?>">更多</a></span>
            </div>
            <div class="cms-lwfb-list">
                <ul>
                    <?php  foreach ( GetList(4,$ason1) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span class="lwfb-date">[出版日期:<?php  echo $article->Time('Y-m-d');  ?>]</span></li>
                    <li><span class="lufb-zz"><strong>·</strong>作者:<?php  echo $article->Author->Name;  ?></span><span class="lufb-cbs"><strong>·</strong>出版社</span></li>
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