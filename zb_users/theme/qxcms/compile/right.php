           <div class="right-right">
			    <div class="right-t">
					<span>推荐阅读</span>	
			    </div>
				<div class="right-tui-c">
				<?php 
                $array = explode(',',$zbp->Config('qxcms')->Cetui);
                $i=0;
                 ?>
                <?php  foreach ( $array as $cetuiid) { ?>
                <?php $i++; ?>
                <?php  $cetui=GetPost((int)$cetuiid);  ?>
					<div class="right-tui-img">
		                <a href="<?php  echo $cetui->Url;  ?>"><img src="<?php  echo qxcms_FirstIMG($cetui,120,90);  ?>"  alt="<?php  echo $cetui->Title;  ?>">
		                <h3><?php  echo $cetui->Title;  ?></h3>
		                </a>
	                </div>
				  <?php }   ?>
				</div>
		   </div>
		   <?php if ($zbp->Config('qxcms')->Adon5=='1') { ?>
		   <div class="right-right">
		        <div class="right-t">
					<span>猜你喜欢</span>	
			    </div>
				<div class="right-ad">
					<?php  echo $zbp->Config('qxcms')->Ad5;  ?>
				</div>
		   </div>
		   <?php } ?>
            <div class="right-right">
		        <div class="right-t">
					<span>热门标签</span>	
			    </div>
				<div class="right-tag">
					<ul>
						<?php  if(isset($modules['tags'])){echo $modules['tags']->Content;}  ?>
					</ul>
				</div>
			</div>
			<div class="right-right">
			    <div class="right-t">
					<span>热门阅读</span>	
			    </div>
				<div class="right-hot-c">
					<ul>
					    <?php 
			      $stime = time();
			      $ytime = 180*24*60*60;
			      $ztime = $stime-$ytime;
			      $order = array('log_ViewNums'=>'DESC');
			      $where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
			      $array = $zbp->GetArticleList(array('*'),$where,$order,array(8),'');
			       ?>
			      <?php  foreach ( $array as $article) { ?>
						<li><a href="<?php  echo $article->Url;  ?>"><h3><?php  echo $article->Title;  ?></h3><img src="<?php  echo qxcms_FirstIMG($article,100,70);  ?>" alt="<?php  echo $article->Title;  ?>"></a>
						<p><?php  echo qxcms_jj($article,1,80,'...');  ?></p>
						</li>
						 <?php }   ?>
		                
					</ul>
				</div>
		    </div>