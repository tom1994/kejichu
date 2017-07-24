          <div class="tiao"></div>
		  <div class="normal-list">
		      <a href="{$article.Url}"><img src="{qxcms_FirstIMG($article,500,281)}" alt="{$article.Title}"></a>
			  <span class="list-tag">
				  {$article.Category.Name}
			  </span>
			  <h3><a href="{$article.Url}">{$article.Title}</a></h3>
			  <div class="list-msg">
			  <span><img src="{$article.Author.Avatar}"><a href="{$article.Author.Url}" target="_blank">{$article.Author.Name}</a></span>
			  
			  <span>{$article.Time('Y年m月d日')}</span>
			  <span>点击:{$article.ViewNums}</span>
			  <span>评论:{$article.CommNums}</span>			  
			  </div>
              <p>{qxcms_jj($article,1,50,'...')}</p>
		  </div>