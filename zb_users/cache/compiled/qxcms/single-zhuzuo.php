<?php  /* Template Name:著作页单页（无侧边） */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div class="list-content">
    <div class="art-full">
        <!--		   <div class="mb-nav">			  -->
        <!--			  <a href="<?php  echo $host;  ?>">首页</a> - <a href="<?php  echo $article->Category->Url;  ?>"class="cata"><?php  echo $article->Category->Name;  ?></a> - <?php  echo $article->Title;  ?>-->
        <!--		   </div>-->
        <!--面包屑导航-->
        <?php  include $this->GetTemplate('breadcrumb');  ?>
        <div class="zhuzuo-img">
            <img src="<?php  echo $article->Metas->pic;  ?>" alt="<?php  echo $article->Title;  ?>" width="300" height="400">
            <span><?php  echo $article->Metas->pic;  ?></span>
        </div>
        <div class="zhuzuo-right">
            <div class="zhuzuo-info-container">
                <?php 
                    $info_array = preg_split("/;/", $article->Metas->info);
                    $headers = array("主办单位", "主管单位", "出版地", "出版周期", "国内统一刊号", "开版");
                 ?>

                <div class="zhuzuo-info-title">
                    基本信息
                </div>
                <div class="zhuzuo-info">
                    <?php  foreach ( $info_array as $key=>$item) { ?>
                        <p>●<?php  echo $headers[$key];  ?>：<?php  echo $item;  ?></p>
                    <?php }   ?>
                </div>
            </div>
            <div class="zhuzuo-author-container">
                <div class="zhuzuo-author-title">
                    作者介绍
                </div>
                <div class="zhuzuo-author">
                    <p><a href="https://www.baidu.com/s?wd=<?php  echo $article->Metas->author;  ?>"><?php  echo $article->Metas->author;  ?></a></p>
                    <p><?php  echo $article->Metas->author_info;  ?></p>
                </div>
            </div>
        </div>
        <div class="zhuzuo-content-container">
            <div class="zhuzuo-content-title">
                主要内容
            </div>
            <div class="zhuzuo-content">
                <?php  echo $article->Content;  ?>
            </div>
        </div>
    </div>
</div>
<!-- 页脚 -->
<?php  include $this->GetTemplate('footer');  ?>
