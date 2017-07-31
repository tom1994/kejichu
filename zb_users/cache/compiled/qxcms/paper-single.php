<?php  /* Template Name:论文页单页（无侧边） */  ?>
<?php  include $this->GetTemplate('header');  ?>
<div class="list-content">
    <div class="art-full">
        <!--		   <div class="mb-nav">			  -->
        <!--			  <a href="<?php  echo $host;  ?>">首页</a> - <a href="<?php  echo $article->Category->Url;  ?>"class="cata"><?php  echo $article->Category->Name;  ?></a> - <?php  echo $article->Title;  ?>-->
        <!--		   </div>-->
        <!--面包屑导航-->
        <?php  include $this->GetTemplate('breadcrumb');  ?>
        <div class="paper-t-full">
            <?php  echo $article->Title;  ?>
        </div>
        <div class="paper-a-full">
            <?php  echo $article->Metas->author;  ?>
        </div>
        <div class="paper-o-full">
            <?php  echo $article->Metas->org;  ?>
        </div>
        <div class="horizon-line bg-lightgray"></div>
        <div class="paper-content-left">
            <?php  echo $article->Content;  ?>
        </div>
<!--        使用<?php  echo $article->Metas->pic;  ?>替换img的源-->
        <div class="paper-img-right">
            <img src="<?php  echo qxcms_FirstIMG($btuid,120,160);  ?>" alt="<?php  echo $btuid->Title;  ?>">
        </div>
        <!--		   <div class="art-tag">-->
        <!--			    <ul>-->
        <!--				    <?php  foreach ( $article->Tags as $tag) { ?>-->
        <!--					<li><a href="<?php  echo $tag->Url;  ?>" target="_blank"><?php  echo $tag->Name;  ?></a></li>-->
        <!--					<?php }   ?>-->
        <!--			    </ul>-->
        <!--		   </div>-->
        <!--           <?php if ($zbp->Config('qxcms')->Adon6=='1') { ?>-->
        <!--		   <div class="art-ad">-->
        <!--			   <?php  echo $zbp->Config('qxcms')->Ad6;  ?>-->
        <!--		   </div>-->
        <!--           <?php } ?>-->
        <!--		   <div class="art-xg">-->
        <!--			    <div class="right-t">-->
        <!--					<span>相关文章</span>	-->
        <!--			    </div>-->
        <!--				<div class="art-xg-c">-->
        <!--                    <?php  foreach ( GetList(4,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>-->
        <!--					<div class="art-xg-box">-->
        <!--		                <a href="<?php  echo $related->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($related,154,125);  ?>"  alt="<?php  echo $related->Title;  ?>">-->
        <!--		                <span><?php  echo $related->Title;  ?></span>-->
        <!--		                </a>-->
        <!--	                </div>-->
        <!--                    <?php }   ?>					-->
        <!--				</div>-->
        <!--		   </div>-->

    </div>

</div>
<!-- 页脚 -->
<?php  include $this->GetTemplate('footer');  ?>
