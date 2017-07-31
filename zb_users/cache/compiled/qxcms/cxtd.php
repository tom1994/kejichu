<?php  /* Template Name:创新团队首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
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
            <h2>主要研究</h2>
        </div>
        <div class="cms-lr-list">
            <ul>
                <?php  foreach ( GetList(6,$ason1) as $key=>$article) { ?>
                <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                <?php }   ?>
            </ul>
        </div>
        <div class="cms-lr-more">
            <a href="<?php  echo $categorys[1]->Url;  ?>">更多</a>
        </div>

    </div>
    <div class="cms-right-cxtd">
        <div class="tu-f-cxtd">
            <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
            <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,280,180);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                <h3><?php  echo $btuid->Title;  ?></h3>
            </a>
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