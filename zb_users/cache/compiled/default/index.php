<?php  /* Template Name:首页及列表页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="multi <?php  echo $type;  ?>">
<div id="divAll">
    <div id="divPage">
        <div id="divNavBarContainer">
            <div id="divNavBar">
                <ul>
                    <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
                </ul>
            </div>
        </div>

        <div id="divMiddle">
            <div id="divTop" class="slider">
                <ul class="bxslider">
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_1.jpg"/></li>
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_2.jpg"/></li>
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_3.jpg"/></li>
                    <li><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/image/slider_image_4.jpg"/></li>
                </ul>
            </div>
            <div id="divMain">
                <div id="divMainLeft">
<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

{/foreach}
<div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
		</div>
		<div id="divSidebar">
<?php  include $this->GetTemplate('sidebar');  ?>
		</div>
<?php  include $this->GetTemplate('footer');  ?>