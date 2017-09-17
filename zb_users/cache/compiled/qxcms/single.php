<?php  /* Template Name:文章页单页（无侧边） */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div class="list-content">
    <div class="art-full">
        <!--		   <div class="mb-nav">			  -->
        <!--			  <a href="<?php  echo $host;  ?>">首页</a> - <a href="<?php  echo $article->Category->Url;  ?>"class="cata"><?php  echo $article->Category->Name;  ?></a> - <?php  echo $article->Title;  ?>-->
        <!--		   </div>-->
        <!--面包屑导航-->
        <?php  include $this->GetTemplate('breadcrumb');  ?>
        <div class="tiao"></div>
        <div class="art-t-full">
            <?php  echo $article->Title;  ?>
        </div>
        <div class="art-msg-container">
            <div class="art-msg-full">
                <!--			   <span><a href="<?php  echo $article->Author->Url;  ?>"><img src="<?php  echo $article->Author->Avatar;  ?>" alt="<?php  echo $article->Author->Name;  ?>">-->
                <!--			   <?php  echo $article->Author->Name;  ?></a>-->
                <!--			   </span>-->
                <!--                <span><?php  echo $article->Time('Y年m月d日');  ?></span>-->
                <span><?php  echo $article->Intro;  ?></span>
                <span><?php  echo $article->ViewNums;  ?>次浏览</span>
            </div>
        </div>
        <div class="art-content-full">
            <?php  echo $article->Content;  ?>
        </div>
    </div>

</div>
<!-- 页脚 -->
<?php  include $this->GetTemplate('footer');  ?>
