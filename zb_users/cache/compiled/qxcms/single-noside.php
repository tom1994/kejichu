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
                <span><a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a></span>
                <span><?php  echo $article->ViewNums;  ?>次浏览</span>
            </div>
        </div>
        <div class="art-content-full">
            <?php  echo $article->Content;  ?>
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
