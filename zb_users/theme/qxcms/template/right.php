           <div class="right-right">
			    <div class="right-t">
					<span>推荐阅读</span>	
			    </div>
				<div class="right-tui-c">
				{php}
                $array = explode(',',$zbp->Config('qxcms')->Cetui);
                $i=0;
                {/php}
                {foreach $array as $cetuiid}
                {php}$i++;{/php}
                {$cetui=GetPost((int)$cetuiid)}
					<div class="right-tui-img">
		                <a href="{$cetui.Url}"><img src="{qxcms_FirstIMG($cetui,120,90)}"  alt="{$cetui.Title}">
		                <h3>{$cetui.Title}</h3>
		                </a>
	                </div>
				  {/foreach}
				</div>
		   </div>
		   {if $zbp->Config('qxcms')->Adon5=='1'}
		   <div class="right-right">
		        <div class="right-t">
					<span>猜你喜欢</span>	
			    </div>
				<div class="right-ad">
					{$zbp->Config('qxcms')->Ad5}
				</div>
		   </div>
		   {/if}
            <div class="right-right">
		        <div class="right-t">
					<span>热门标签</span>	
			    </div>
				<div class="right-tag">
					<ul>
						{module:tags}
					</ul>
				</div>
			</div>
			<div class="right-right">
			    <div class="right-t">
					<span>热门阅读</span>	
			    </div>
				<div class="right-hot-c">
					<ul>
					    {php}
			      $stime = time();
			      $ytime = 180*24*60*60;
			      $ztime = $stime-$ytime;
			      $order = array('log_ViewNums'=>'DESC');
			      $where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
			      $array = $zbp->GetArticleList(array('*'),$where,$order,array(8),'');
			      {/php}
			      {foreach $array as $article}
						<li><a href="{$article.Url}"><h3>{$article.Title}</h3><img src="{qxcms_FirstIMG($article,100,70)}" alt="{$article.Title}"></a>
						<p>{qxcms_jj($article,1,80,'...')}</p>
						</li>
						 {/foreach}
		                
					</ul>
				</div>
		    </div>