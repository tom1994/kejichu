{* Template Name:要闻下面的综合新闻页面 *}
{template:header}
<body class="multi {$type}">
<div id="divAll">
    <div id="divPage">
        <div id="divMiddle">
            <!--面包屑导航-->
            {template:breadcrumb}
            <div class="notice-header">
                <span class="notice-title">综合新闻</span>
                <div class="notice-line"></div>
            </div>
            <div id="divMain">
                <div id="divNoticeContent" class="notice-content">
                    <ul>
                        <li class="list-table-header">
                            <div class="list-table-th notice-list-title">标题</div>
                            <div class="list-table-th notice-list-date">发布时间</div>
                        </li>
                        {foreach $articles as $article}
                        <li>
                            <div class="list-table-td notice-list-title">
                                <a href="{$article.Url}">{$article.Title}</a>
                            </div>
                            <div class="list-table-td notice-list-date">
                                {$article.Time('Y-m-d')}
                            </div>
                        </li>
                        {/foreach}
                    </ul>
                    <div class="pagebar">{template:pagebar}</div>
                </div>
            </div>
            {template:footer}