          <div class="tiao"></div>
		  <div class="normal-list">
		      <a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($article,500,281);  ?>" alt="<?php  echo $article->Title;  ?>"></a>
			  <span class="list-tag">
				  <?php  echo $article->Category->Name;  ?>
			  </span>
			  <h3><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h3>
			  <div class="list-msg">
			  <span><img src="<?php  echo $article->Author->Avatar;  ?>"><a href="<?php  echo $article->Author->Url;  ?>" target="_blank"><?php  echo $article->Author->Name;  ?></a></span>
			  
			  <span><?php  echo $article->Time('Y年m月d日');  ?></span>
			  <span>点击:<?php  echo $article->ViewNums;  ?></span>
			  <span>评论:<?php  echo $article->CommNums;  ?></span>			  
			  </div>
              <p><?php  echo qxcms_jj($article,1,50,'...');  ?></p>
		  </div>