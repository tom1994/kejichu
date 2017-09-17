{php}
$q = $article->Q;
$qc = '<b style=\'color:red\'>' . $q . '</b>';
$cont = qxcms_jj($article,1,100,'...')
{/php}
<div class="horizon-line bg-lightgray"></div>
<div class="search-list-item">
    <h3 style="width: 100%"><a href="{$article.Url}">{$article.Title}</a></h3>
    <div class="list-msg">
        <span>{$article.Time('Y年m月d日 H:i:s')}</span>
        <span>点击:{$article.ViewNums}</span>
        <span>分类:{$article.Category.Parent.Name}:{$article.Category.Name}</span>
    </div>
    <p>{str_replace($q, $qc, $cont)}</p>   <!--str_replace居然在上面的php里不能用，放在这里居然能用，搞不懂，妈拉个鸡！！！-->
</div>
