<?php  /* Template Name:文章页单页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="single <?php  echo $type;  ?>">
<div id="divAll">
	<div id="divPage">
	<div id="divMiddle">

		<div id="divTop">
			<h1 id="BlogTitle"><a href="<?php  echo $article->Category->Url;  ?>"><?php  echo $article->Category->Name;  ?></a></h1>
		</div>
		<div id="divNavBar">
<ul>
<?php  echo $modules['navbar']->Content;  ?>
</ul>
		</div>
		<div id="divMain">
<?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
<?php  include $this->GetTemplate('post-single');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-page');  ?>
<?php } ?>
		</div>
		<div id="divSidebar">
<?php  include $this->GetTemplate('sidebar');  ?>
		</div>
<?php  include $this->GetTemplate('footer');  ?>