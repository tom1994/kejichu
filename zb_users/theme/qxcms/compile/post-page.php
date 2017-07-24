           <div class="tiao"></div>
		   <div class="mb-nav">			  
			  <a href="<?php  echo $host;  ?>">首页</a> - <a href="<?php  echo $article->Category->Url;  ?>"class="cata"><?php  echo $article->Category->Name;  ?></a> - <?php  echo $article->Title;  ?>
		   </div>
		   <div class="art-t">
			   <h1><?php  echo $article->Title;  ?></h1>
		   </div>
		   <div class="art-msg">
			   <span><a href="<?php  echo $article->Author->Url;  ?>"><img src="<?php  echo $article->Author->Avatar;  ?>" alt="<?php  echo $article->Author->Name;  ?>">
			   <?php  echo $article->Author->Name;  ?></a>
			   </span>
			   <span><?php  echo $article->Time('Y年m月d日');  ?></span>
			   <span><a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a></span>
			   <span><a href="#commenturl">我有话说(<?php  echo $article->CommNums;  ?>人讨论)</a></span>
			   <span><?php  echo $article->ViewNums;  ?>次浏览</span>			   		   
		   </div>
		   <div class="art-content">
			   <?php  echo $article->Content;  ?> 
		   </div>
		   <div class="art-tag">
			    <ul>
				    <?php  foreach ( $article->Tags as $tag) { ?>
					<li><a href="<?php  echo $tag->Url;  ?>" target="_blank"><?php  echo $tag->Name;  ?></a></li>
					<?php }   ?>
			    </ul>
		   </div>
           <?php if ($zbp->Config('qxcms')->Adon6=='1') { ?>
		   <div class="art-ad">
			   <?php  echo $zbp->Config('qxcms')->Ad6;  ?>
		   </div>
           <?php } ?>
		   <div class="art-xg">
			    <div class="right-t">
					<span>相关文章</span>	
			    </div>
				<div class="art-xg-c">
                    <?php  foreach ( GetList(4,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>
					<div class="art-xg-box">
		                <a href="<?php  echo $related->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($related,154,125);  ?>"  alt="<?php  echo $related->Title;  ?>">
		                <span><?php  echo $related->Title;  ?></span>
		                </a>
	                </div>
                    <?php }   ?>					
				</div>
		   </div>

		   
			<?php if (!$article->IsLock) { ?>
            <?php  include $this->GetTemplate('comments');  ?>
            <?php } ?>
		   