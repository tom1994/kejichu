
 <!-- 焦点文章开始 -->
 <div class="top-content">
	
	<!-- 幻灯片开始 -->
	<script type="text/javascript">
    $(function(){
	$("#KinSlideshow").KinSlideshow({
			moveStyle:"right",
			titleBar:{titleBar_height:30,titleBar_bgColor:"#646464",titleBar_alpha:0.5},
			titleFont:{TitleFont_size:14,TitleFont_color:"#ffffff",TitleFont_weight:"normal"},
			btn:{btn_bgColor:"#FFFFFF",btn_bgHoverColor:"#000000",btn_fontColor:"#000000",btn_fontHoverColor:"#FFFFFF",btn_borderColor:"#cccccc",btn_borderHoverColor:"#000000",btn_borderWidth:1}
	});
})
</script>



	<div class="top-img">
	    <div id="KinSlideshow" style="visibility:hidden;">
		        {php}
                    $array = explode(',',$zbp->Config('qxcms')->Slide);
                {/php}
				{foreach $array as $sliderid}
                {$slider=GetPost((int)$sliderid)}
		        <a href="{$slider.Url}" target="_blank"><img src="{qxcms_FirstIMG($slider,560,335)}" alt="{$slider.Title}" width="560" height="335" /></a>
                {/foreach}
		</div>
	</div>



	<!-- 幻灯片结束 -->
	<div class="top-art">

            {php}
                $array = explode(',',$zbp->Config('qxcms')->Tui);
                $i = 0;
            {/php}
            {foreach $array as $tuiid}
            {$tui=GetPost((int)$tuiid)}
            {php}$i++;{/php}

		<dl>
			<dt><a href="{$tui.Url}">{$tui.Title}</a></dt>
			<dd>{qxcms_jj($tui,1,80,'...')}</dd>
		</dl>
		
           {/foreach}

	</div>
 </div>
 <!-- 焦点文章结束 -->
 <!-- 广告1开始 -->
 {if $zbp->Config('qxcms')->Adon1=='1'}
 <div class="big-ad">
	 {$zbp->Config('qxcms')->Ad1}
 </div>
 {/if}
 <!-- 广告1结束 -->
 <!-- cms1开始 -->
 {if $zbp->Config('qxcms')->Acms=='1'}
 <div class="cms-content">
	<div class="cms-title">
	{php}
            $acate = $zbp->Config('qxcms')->Acate;
			$ason1 = $zbp->Config('qxcms')->Ason1;
			$ason2 = $zbp->Config('qxcms')->Ason2;
			$ason3 = $zbp->Config('qxcms')->Ason3;
    {/php}
		<h2><a href="{$categorys[$acate].Url}">{$categorys[$acate].Name}</a></h2>
		<ul>
			<li><a href="{$categorys[$ason1].Url}">{$categorys[$ason1].Name}</a></li>
			<li><a href="{$categorys[$ason2].Url}">{$categorys[$ason2].Name}</a></li>
			<li><a href="{$categorys[$ason3].Url}">{$categorys[$ason3].Name}</a></li>
		</ul>
		<a href="{$categorys[$acate].Url}">
		<div class="more">
		    <span class="">更多</span>		    
		</div>
		</a>
	</div>
	
	<div class="cms-tw">
        {php}
            $array = explode(',',$zbp->Config('qxcms')->Atuiw);
			$i = 0;
        {/php}
        {foreach $array as $tuiid}
        {$tui=GetPost((int)$tuiid)}
        {php}$i++;{/php}
	    <div class="tw-wen">
			<h3><a href="{$tui.Url}">{$tui.Title}</a></h3>
			<p>{qxcms_jj($tui,1,80,'...')}</p>
	    </div>
        {/foreach}
		
		{php}
            $array = explode(',',$zbp->Config('qxcms')->Atuit);
			$i = 0;
        {/php}
        {foreach $array as $tuiidt}
        {$tuit=GetPost((int)$tuiidt)}
        {php}$i++;{/php}
		<div class="tw-tu">
			<a href="{$tuit.Url}"><img src="{qxcms_FirstIMG($tuit,138,100)}" alt="{$tuit.Title}">
			<h3>{$tuit.Title}</h3>
			</a>
		</div>
		{/foreach}
		
	</div>
	
	<div class="cms-te">
	    
		<div class="cms-up">
		     <h3>{$categorys[$ason1].Name}</h3>
			 <ul>
			    {foreach GetList(4,$ason1) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
			 </ul>
		</div>
		<div class="cms-down">
			<h3>{$categorys[$ason2].Name}</h3>
			<ul>
			    {foreach GetList(4,$ason2) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
			</ul>
		</div>
	</div>
	<div class="cms-left">
		<h3>{$categorys[$ason3].Name}</h3>
		
		<ul>
		    {foreach GetList(8,$ason3) as $key=>$article}
            {$i=$key}
            {if $i==0}
			<li class="list-tu"><a href="{$article.Url}"><img src="{qxcms_FirstIMG($article,100,80)}" alt="{$article.Title}"></a>
			<h3><a href="{$article.Url}">{$article.Title}</a></h3>
			<p>{qxcms_jj($article,1,80,'...')}</p>
			</li>
			{else}
			<li><a href="{$article.Url}">{$article.Title}</a></li>
			{/if}
			{/foreach}
		</ul>	
	</div>
 </div>
 {/if}
 <!-- cms1结束 -->
 <!-- 广告2开始 -->
 {if $zbp->Config('qxcms')->Adon2=='1'}
 <div class="big-ad">
	 {$zbp->Config('qxcms')->Ad2}
 </div>
 {/if}
 <!-- 广告2结束 -->
 <!-- cms2开始 -->
 {if $zbp->Config('qxcms')->Bcms=='1'}
  <div class="cms-content">
	<div class="cms-title">
	{php}
            $bcate = $zbp->Config('qxcms')->Bcate;
			$bson1 = $zbp->Config('qxcms')->Bson1;
			$bson2 = $zbp->Config('qxcms')->Bson2;
			$bson3 = $zbp->Config('qxcms')->Bson3;
           
    {/php}
		<h2><a href="{$categorys[$bcate].Url}">{$categorys[$bcate].Name}</a></h2>
		<ul>
			<li><a href="{$categorys[$bson1].Url}">{$categorys[$bson1].Name}</a></li>
			<li><a href="{$categorys[$bson2].Url}">{$categorys[$bson2].Name}</a></li>
			<li><a href="{$categorys[$bson3].Url}">{$categorys[$bson3].Name}</a></li>
		</ul>
		<a href="{$categorys[$bcate].Url}">
		<div class="more">
		    <span class="">更多</span>		    
		</div>
		</a>
	</div>
	<div class="cms-left">
		<h3>{$categorys[$bson1].Name}</h3>
		<ul>
		    {foreach GetList(8,$bson1) as $key=>$article}
            {$i=$key}
            {if $i==0}
			<li class="list-tu"><a href="{$article.Url}"><img src="{qxcms_FirstIMG($article,100,80)}" alt="{$article.Title}"></a>
			<h3><a href="{$article.Url}">{$article.Title}</a></h3>
			<p>{qxcms_jj($article,1,80,'...')}</p>
			</li>
			{else}
			<li><a href="{$article.Url}">{$article.Title}</a></li>
			{/if}
			{/foreach}
			
		</ul>
	
	</div>
	<div class="cms-tui">
        <div class="tu-f">
		    {$btuid=GetPost((int)$zbp->Config('qxcms')->Btuid)}
			<a href="{$btuid.Url}"><img src="{qxcms_FirstIMG($btuid,280,180)}" alt="{$btuid.Title}">
		    <h3>{$btuid.Title}</h3>
			</a>
        </div>
		{php}
                $array = explode(',',$zbp->Config('qxcms')->Btuix);
                $i=0;
        {/php}
        {foreach $array as $btuixid}
        {php}$i++;{/php}
        {$btuix=GetPost((int)$btuixid)}
		<div class="tu-s">
			<a href="{$btuix.Url}"><img src="{qxcms_FirstIMG($btuix,128,100)}" alt="{$btuix.Title}">
			<h3>{$btuix.Title}</h3>
			</a>
		</div>
        {/foreach}
		
	</div>
	<div class="cms-right">
		<div class="cms-up">
		     <h3>{$categorys[$bson2].Name}</h3>
			 <ul>
			    {foreach GetList(4,$bson2) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
			    
			 </ul>
		</div>
		<div class="cms-down">
			<h3>{$categorys[$bson3].Name}</h3>
			<ul>
			    {foreach GetList(4,$bson3) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
				
			</ul>
		</div>
	</div>
 </div>
 {/if}
 <!-- cms2结束 -->
 <!-- 广告3开始 -->
 {if $zbp->Config('qxcms')->Adon3=='1'}
 <div class="big-ad">
	 {$zbp->Config('qxcms')->Ad3}
 </div>
 {/if}
 <!-- 广告3结束 -->
 <!-- cms3开始 -->
 {if $zbp->Config('qxcms')->Ccms=='1'}
 <div class="cms-content">
	<div class="cms-title">
	{php}
            $ccate = $zbp->Config('qxcms')->Ccate;
			$cson1 = $zbp->Config('qxcms')->Cson1;
			$cson2 = $zbp->Config('qxcms')->Cson2;
			$cson3 = $zbp->Config('qxcms')->Cson3;
           
    {/php}
		<h2><a href="{$categorys[$ccate].Url}">{$categorys[$ccate].Name}</a></h2>
		<ul>
			<li><a href="{$categorys[$cson1].Url}">{$categorys[$cson1].Name}</a></li>
			<li><a href="{$categorys[$cson2].Url}">{$categorys[$cson2].Name}</a></li>
			<li><a href="{$categorys[$cson3].Url}">{$categorys[$cson3].Name}</a></li>
		</ul>
		<a href="{$categorys[$ccate].Url}">
		<div class="more">
		    <span class="">更多</span>		    
		</div>
		</a>
	</div>
	<div class="cms-left">
		<h3>热门阅读</h3>
		<ul>
		    {php}
			      $stime = time();
			      $ytime = 180*24*60*60;
			      $ztime = $stime-$ytime;
			      $order = array('log_ViewNums'=>'DESC');
			      $where = array(array('=','log_Status','0'),array('>','log_PostTime',$ztime));
			      $array = $zbp->GetArticleList(array('*'),$where,$order,array(6),'');
			     {/php}
			    {foreach $array as $article}
			<li class="list-tu tu-mar"><a href="{$article.Url}"><img src="{qxcms_FirstIMG($article,100,80)}" alt="{$article.Title}"></a>
			<h3><a href="{$article.Url}">{$article.Title}</a></h3>
			<p>{qxcms_jj($article,1,80,'...')}</p>
			</li>
			
			    {/foreach}
		</ul>
	
	</div>
	
	<div class="cms-tui">
	    {php}
                $array = explode(',',$zbp->Config('qxcms')->Ctui);
                $i=0;
        {/php}
        {foreach $array as $ctuiid}
        {php}$i++;{/php}
        {$ctui=GetPost((int)$ctuiid)}
        <div class="tu-f">
			<a href="{$ctui.Url}"><img src="{qxcms_FirstIMG($ctui,280,180)}" alt="{$ctui.Title}">
			<h3>{$ctui.Title}</h3>
			</a>
        </div>
		 {/foreach}
		
	
		
	</div>
	<div class="cms-right">
		<div class="cms-up">
		     <h3>{$categorys[$cson1].Name}</h3>
			 <ul>
			    {foreach GetList(6,$cson1) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
			    
			 </ul>
		</div>
		<div class="cms-down">
			<h3>{$categorys[$cson2].Name}</h3>
			 <ul>
			    {foreach GetList(6,$cson2) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
			    
			 </ul>
		</div>
		<div class="cms-down">
			<h3>{$categorys[$cson3].Name}</h3>
			 <ul>
			    {foreach GetList(6,$cson3) as $key=>$article}
				<li><a href="{$article.Url}">{$article.Title}</a></li>
				{/foreach}
			    
			 </ul>
		</div>
	</div>
	
 </div>
 {/if}
 <!-- cms3结束 -->
 <!-- 广告4开始 -->
 {if $zbp->Config('qxcms')->Adon4=='1'}
 <div class="big-ad">
	 {$zbp->Config('qxcms')->Ad4}
 </div>
 {/if}
 <!-- 广告4结束 -->
 <!-- 图片列表开始 -->
 {if $zbp->Config('qxcms')->Dcms=='1'}
 <div class="cms-content">
	<div class="cms-title">
	{php}
            $dcate = $zbp->Config('qxcms')->Dcate;          
    {/php}
		<h2><a href="{$categorys[$dcate].Url}">{$categorys[$dcate].Name}</a></h2>
		<a href="{$categorys[$dcate].Url}">
		<div class="more">
		    <span class="">更多</span>		    
		</div>
		</a>
	</div>
	    {php}
                $array = explode(',',$zbp->Config('qxcms')->Dtui);
                $i=0;
        {/php}
        {foreach $array as $dtuiid}
        {php}$i++;{/php}
        {$dtui=GetPost((int)$dtuiid)}
    <div class="img-list">
		<a href="{$dtui.Url}"><img src="{qxcms_FirstIMG($dtui,182,140)}"  alt="{$dtui.Title}">
		<h3>{$dtui.Title}</h3>
		</a>
	</div>
	 {/foreach}
	
 </div>
 {/if}
 <!-- 图片列表结束 -->
 <!-- 友情链接开始 -->
 <div class="link">
	<ul>
		<li>友情链接:</li>
		{module:link}
	</ul>
 </div>
 <!-- 友情链接结束 -->
 
