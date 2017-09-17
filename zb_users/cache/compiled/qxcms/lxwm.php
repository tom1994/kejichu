<?php  /* Template Name: 联系我们页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div class="list-content">
    <div class="art-full">
        <?php  include $this->GetTemplate('breadcrumb');  ?>
        <?php 
        $id='4606'; //设置联系我们文章ID
        $indexpost=GetPost((int)$id);
         ?>
        <div class="tiao"></div>
        <div class="lxwm-title">
            <?php  echo $indexpost->Title;  ?>
        </div>
        <div class="lxwm-content-full">
            <?php  echo $indexpost->Content;  ?>
        </div>
    </div>

</div>
<!-- 页脚 -->
<?php  include $this->GetTemplate('footer');  ?>
