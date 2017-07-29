{* Template Name:文章页单页 *}
{template:header}
<body class="single {$type}">
<div id="divAll">
	<div id="divPage">
	<div id="divMiddle">

		<div id="divTop">
			<h1 id="BlogTitle"><a href="{$article.Category.Url}">{$article.Category.Name}</a></h1>
		</div>
		<div id="divNavBar">
<ul>
{$modules['navbar'].Content}
</ul>
		</div>
		<div id="divMain">
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
		</div>
		<div id="divSidebar">
{template:sidebar}
		</div>
{template:footer}