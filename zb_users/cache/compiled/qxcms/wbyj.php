<?php  /* Template Name:外部研究首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">

    <div class="cms-content">
        <div class="cms-wbyj-zxdj">
            <div class="cms-title-wbyj">
                <div class="title-wbyj-left"></div>
                <div class="title-wbyj"><span><h2>最新洞见</h2></span></div>
                <div class="more-wbyj"><a href="<?php  echo $categorys[30]->Url;  ?>">更多</a></div>
            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>

                    <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3><?php  echo $btuid->Title;  ?></h3>
                    </div>
                </div>

            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>

                    <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3><?php  echo $btuid->Title;  ?></h3>
                    </div>
                </div>

            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>

                    <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3><?php  echo $btuid->Title;  ?></h3>
                    </div>
                </div>

            </div>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>

                    <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,200,100);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                    </a>
                    <div class="wbyj-tu-font">
                        <h3><?php  echo $btuid->Title;  ?></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="cms-title-wbyj">
            <div class="title-wbyj-left"></div>
            <div class="title-wbyj"><span><h2>热点话题</h2></span></div>
            <div class="more-wbyj"><a href="<?php  echo $categorys[31]->Url;  ?>">更多</a></div>
        </div>
        <div class="cms-wbyj-redian">
            <div class="tu-wbyj-f-redian">
                <?php  $btuid=GetPost((int)$zbp->Config('qxcms')->Btuid);  ?>

                <a href="<?php  echo $btuid->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($btuid,400,250);  ?>" alt="<?php  echo $btuid->Title;  ?>">
                </a>
            </div>
            <div class="cms-redian-list">
                <ul>
                    <?php  foreach ( GetList(5,$ason1) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                    <?php }   ?>
                </ul>
            </div>
        </div>
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