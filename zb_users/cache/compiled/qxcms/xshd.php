<?php  /* Template Name:学术活动页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!-- 左侧选项卡开始 -->
<div class="navbar-left">
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[12]->Url;  ?>">专家成果</a>
    </div>
    <div class="navbar-left-item navbar-left-active">
        <a href="<?php  echo $categorys[13]->Url;  ?>">学术活动</a>
    </div>
    <div class="navbar-left-item">
        <a href="<?php  echo $categorys[14]->Url;  ?>">获奖情况</a>
    </div>
</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">
    <!-- 专家观点图片开始 -->
    <div class="top-content-zjcg">
        <!--专家观点图片展示-->
        <div class="top-content-left">
            <div class="top-content-container">
                <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
                <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,260,210);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    <div class="top-content-img-label">
                        <div class="img-label-time">
                            <?php  echo $btuid->Time('Y-m-d');  ?>
                        </div>
                        <div class="img-label-title">
                            <?php  echo $btuid->Title;  ?>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="top-content-middle">
            <div class="top-content-container">
                <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
                <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,260,210);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    <div class="top-content-img-label">
                        <div class="img-label-time">
                            <?php  echo $btuid->Time('Y-m-d');  ?>
                        </div>
                        <div class="img-label-title">
                            <?php  echo $btuid->Title;  ?>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="top-content-right">
            <div class="top-content-container">
                <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>
                <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,260,210);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    <div class="top-content-img-label">
                        <div class="img-label-time">
                            <?php  echo $btuid->Time('Y-m-d');  ?>
                        </div>
                        <div class="img-label-title">
                            <?php  echo $btuid->Title;  ?>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- 专家观点图片结束 -->

    <!-- cms2开始 -->
    <?php if ($zbp->Config('qxcms')->Bcms=='1') { ?>
    <div class="cms-content-zjcg">
        <div class="cms-lr-list">
            <ul>
                <?php  foreach ( GetList(6,$ason1) as $key=>$article) { ?>
                <li>
                    <div class="cms-lr-list-title">
                        <a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a>
                    </div>
                    <div class="cms-lr-list-date">
                        <?php  echo $article->Time('Y-m-d');  ?>
                    </div>
                </li>
                <?php }   ?>
            </ul>
        </div>
        <div class="cms-lr-more">
            <a href="<?php  echo $categorys[1]->Url;  ?>">更多</a>
        </div>
    </div>
    <?php } ?>
    <!-- cms2结束 -->
</div>
<!-- 右侧页面内容结束 -->

<?php  include $this->GetTemplate('footer');  ?>