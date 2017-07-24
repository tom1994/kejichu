          <div class="tiao"></div>
		  <div class="top-list">
			  <a href="<?php  echo $article->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($article,500,281);  ?>" alt="<?php  echo $article->Title;  ?>"></a>
			  <h3><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h3>
             
			  <p><?php  echo qxcms_jj($article,1,50,'...');  ?></p>			  
		  </div>