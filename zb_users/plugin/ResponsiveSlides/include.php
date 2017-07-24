<?php 
RegisterPlugin('ResponsiveSlides', 'ActivePlugin_ResponsiveSlides');
function ActivePlugin_ResponsiveSlides(){
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','ResponsiveSlides_AddMenu');
	Add_Filter_Plugin('Filter_Plugin_Zbp_MakeTemplatetags','ResponsiveSlides_Zbp_MakeTemplatetags');	
}
function ResponsiveSlides_AddMenu(&$m){
	global $zbp;
	array_unshift($m, MakeTopMenu("root",'幻灯片插件配置',$zbp->host . "zb_users/plugin/ResponsiveSlides/main.php","","topmenu_show"));
}
function ResponsiveSlides_SubMenu($id){
	$aryCSubMenu = array(
		0 => array('基础设置', 'main.php', 'left', false),		
		1 => array('添加幻灯片', 'slides.php', 'left', false),		
		7 => array('技术支持', 'http://www.boke8.net/zbpResponsiveSlides.html', 'right', true)
	);
	foreach($aryCSubMenu as $k => $v){
		echo '<a href="'.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$k?'m-now':'').'">'.$v[0].'</span></a>';
	}
}
function InstallPlugin_ResponsiveSlides(){
	global $zbp;
	if(!$zbp->Config('ResponsiveSlides')->HasKey('Version')){
		$zbp->Config('ResponsiveSlides')->Version = '1.0';
		$zbp->Config('ResponsiveSlides')->auto='1';
		$zbp->Config('ResponsiveSlides')->pager='1';
		$zbp->Config('ResponsiveSlides')->nav='1';
		$zbp->Config('ResponsiveSlides')->speed='500';
		$zbp->Config('ResponsiveSlides')->timeout='4000';
		$zbp->Config('ResponsiveSlides')->random='0';
		$zbp->Config('ResponsiveSlides')->maxwidth='';
		$zbp->Config('ResponsiveSlides')->slidesArray='[{"title":"这是标题","img":"'.$zbp->host . 'zb_users/plugin/ResponsiveSlides/images/slides/1.jpg","url":"'.$zbp->host . '","order":"1"},{"title":"这是标题","img":"'.$zbp->host . 'zb_users/plugin/ResponsiveSlides/images/slides/2.jpg","url":"'.$zbp->host . '","order":"2"},{"title":"这是标题","img":"'.$zbp->host . 'zb_users/plugin/ResponsiveSlides/images/slides/3.jpg","url":"'.$zbp->host . '","order":"3"}]';		
		$zbp->SaveConfig('ResponsiveSlides');
	}
	$zbp->Config('ResponsiveSlides')->Version = '1.0';
	$zbp->SaveConfig('ResponsiveSlides');
}
function ResponsiveSlides_Zbp_MakeTemplatetags() {
	global $zbp;
	if($zbp->Config('ResponsiveSlides')->auto == '0'){
		$auto = 'false';
	}else{
		$auto = 'true';
	}
	if($zbp->Config('ResponsiveSlides')->pager == '0'){
		$pager = 'false';
	}else{
		$pager = 'true';
	}
	if($zbp->Config('ResponsiveSlides')->nav == '0'){
		$nav = 'false';
	}else{
		$nav = 'true';
	}
	if($zbp->Config('ResponsiveSlides')->speed){
		$speed = $zbp->Config('ResponsiveSlides')->speed;
	}else{
		$speed = '500';
	}
	if($zbp->Config('ResponsiveSlides')->timeout){
		$timeout = $zbp->Config('ResponsiveSlides')->timeout;
	}else{
		$timeout = '4000';
	}
	if($zbp->Config('ResponsiveSlides')->random == '0'){
		$random = 'false';
	}else{
		$random = 'true';
	}
	if($zbp->Config('ResponsiveSlides')->maxwidth != ''){
		$maxwidth = 'maxwidth:'.$zbp->Config('ResponsiveSlides')->maxwidth.',';
	}else{
		$maxwidth = '';
	}
	$zbp->header =  '<link rel="stylesheet" type="text/css" href="'.$zbp->host.'zb_users/plugin/ResponsiveSlides/css/ResponsiveSlides.css"/>' . "\r\n";	
	$zbp->footer =  '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/ResponsiveSlides/js/responsiveslides.min.js"></script>' . "\r\n";
	$zbp->footer .=  '<script type="text/javascript">
	$(function () {     
      $("#slider").responsiveSlides({
        auto: '.$auto.',
        pager: '.$pager.',
        nav: '.$nav.',
        speed: '.$speed.', 
		timeout: '.$timeout.',
		random: '.$random.',
		'.$maxwidth.'
        namespace: "centered-btns"
      });
	});
	</script>';
}
function ResponsiveSlides_call(){
	global $zbp;
	echo '<div class="rslides_container">
      <ul class="rslides" id="slider">';
	echo "\n";
	 if($zbp->Config('ResponsiveSlides')->slidesArray && json_decode($zbp->Config('ResponsiveSlides')->slidesArray,true)) {
		 $slidesArray = json_decode($zbp->Config('ResponsiveSlides')->slidesArray,true);
		 foreach ($slidesArray as $slides){
			echo '<li><a title="'.$slides['title'].'" href="'.$slides['url'].'" target="_blank"><img src="'.$slides['img'].'" alt="'.$slides['title'].'"/></a></li>';
			echo "\n";
		 }
     }
	 echo "\n";
    echo '</ul>
    </div>';	
	
}
function UninstallPlugin_ResponsiveSlides(){
	global $zbp;
	if ($zbp->Config('ResponsiveSlides')->clearSetting){
		$zbp->DelConfig('ResponsiveSlides');
	}
}
?>