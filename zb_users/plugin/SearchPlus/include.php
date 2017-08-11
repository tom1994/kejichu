<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'searchstr.php';
#注册插件
RegisterPlugin("SearchPlus","ActivePlugin_SearchPlus");

function ActivePlugin_SearchPlus() {
	Add_Filter_Plugin('Filter_Plugin_Search_Begin','SearchPlus_Main');

}

function SearchPlus_Main() {
	global $zbp;

	foreach ($GLOBALS['Filter_Plugin_ViewSearch_Begin'] as $fpname => &$fpsignal) {
		$fpreturn = $fpname();
		if ($fpsignal == PLUGIN_EXITSIGNAL_RETURN) {
			$fpsignal=PLUGIN_EXITSIGNAL_NONE;return $fpreturn;
		}
	}

	if(!$zbp->CheckRights($GLOBALS['action'])){Redirect('./');}

	$q = trim(htmlspecialchars(GetVars('q','GET')));
	$qc = '<b style=\'color:red\'>' . $q . '</b>';

	$articles = array();
	$category = new Metas;
	$author = new Metas;
	$tag = new Metas;

	$type = 'post-search';

	$zbp->title = $zbp->lang['msg']['search'] . ' &quot;' . $q . '&quot;';

	$template = $zbp->option['ZC_INDEX_DEFAULT_TEMPLATE'];

	if(isset($zbp->templates)){
		if(isset($zbp->templates['search'])){
			$template = 'search';
		}
	}else{
		if(isset($zbp->template->templates['search'])){
			$template = 'search';
		}
	}

	$w=array();
	$w[]=array('=','log_Type','0');
	if($q){
		$w[]=array('search','log_Content','log_Intro','log_Title',$q);
	}else{
		Redirect('./');
	}

	if(!($zbp->CheckRights('ArticleAll')&&$zbp->CheckRights('PageAll'))){
		$w[]=array('=','log_Status',0);
	}

	$articles = $zbp->GetArticleList(
		'*',
		$w,
		array('log_PostTime' => 'DESC'),
		array($zbp->searchcount),
		null
	);

	foreach($articles as $article){
		$intro = preg_replace('/[\r\n\s]+/', '', trim(SubStrStartUTF8(TransferHTML($article->Content,'[nohtml]'),$q,170)) . '...');
		$article->Intro = str_ireplace($q,$qc,$intro);
		$article->Title = str_ireplace($q,$qc,$article->Title);
	}

	$zbp->header .= '<meta name="robots" content="noindex,follow" />' . "\r\n";
	$zbp->template->SetTags('title', $zbp->title);
	$zbp->template->SetTags('articles',$articles);
	$zbp->template->SetTags('type',$type);
	$zbp->template->SetTags('page',1);
	$zbp->template->SetTags('pagebar',null);

	if (isset($zbp->templates['search'])) {
		$zbp->template->SetTemplate($template);
	} else {
		$zbp->template->SetTemplate('index');
	}

	foreach ($GLOBALS['Filter_Plugin_ViewPost_Template'] as $fpname => &$fpsignal) {
		$fpreturn=$fpname($zbp->template);
	}

	$zbp->template->Display();
	RunTime();
	die();
}

function InstallPlugin_SearchPlus() {
	global $zbp;

}

function UninstallPlugin_SearchPlus() {
	global $zbp;

}