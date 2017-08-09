<div class="horizon-line bg-lightgray"></div>
<div class="search-list-item">
    <h3><a href="{$article.Url}">{$article.Title}</a></h3>
    <div class="list-msg">
        <span>{$article.Time('Y年m月d日')}</span>
        <span>点击:{$article.ViewNums}</span>
    </div>
    <p>{qxcms_jj($article,1,50,'...')}</p>
</div>