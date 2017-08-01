<?php  /* Template Name:首页及列表页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="multi <?php  echo $type;  ?>">
<div id="divAll">
    <div id="divPage">
        <!-- <div id="divNavBarContainer">
            <div id="divNavBar">
                <ul>
                    <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
                </ul>
            </div>
        </div> -->
        <div id="divMiddle">
            <!--轮播图首页-->
            <!--z-index:-999;position:relative防止轮播图遮挡-->
            <div id="divTop" class="slider">
                <?php  echo ResponsiveSlides_call('');  ?>
               <!-- <ul class="bxslider">
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_1.jpg"/></li>
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_2.jpg"/></li>
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_3.jpg"/></li>
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_4.jpg"/></li>
                </ul>-->
            </div>
            <div id="divMain">
                <!--                <?php  foreach ( $articles as $article) { ?>-->
                <!---->
                <!--                <?php if ($article->IsTop) { ?>-->
                <!--                <?php  include $this->GetTemplate('post-istop');  ?>-->
                <!--                <?php }else{  ?>-->
                <!--                <?php  include $this->GetTemplate('post-multi');  ?>-->
                <!--                <?php } ?>-->
                <!---->
                <!--                <?php }   ?>-->
                <!--                <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>-->
                <div id="divMainLeft">

                    <div id="divMainLeftContent">
                        <div id="divMainLeftHeader">
                            <div id="divMainLeftLine">
                            </div>
                            <span id="divMainLeftTitle">
                                要闻
                            </span>
                        </div>

                        <ul>
                            <?php  foreach ( GetList(10,1) as $key=>$article) { ?>
                            <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                            <?php }   ?>
                        </ul>
                    </div>
                </div>
                <div id="divMainRight">
                    <div id="divMainRightContent">
                        <div id="divMainRightHeader">
                            <div id="divMainRightLine">
                            </div>
                            <a href="<?php  echo $categorys[2]->Url;  ?>">
                                <span id="divMainRightTitle"><?php  echo $categorys[2]->Name;  ?></span>
                            </a>

                        </div>
                        <ul>
                            <?php  foreach ( GetList(10,2) as $key=>$article) { ?>
                            <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                            <?php }   ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--            <div id="divSidebar">-->
            <!--                <?php  include $this->GetTemplate('sidebar');  ?>-->
            <!--            </div>-->
            <?php  include $this->GetTemplate('footer');  ?>