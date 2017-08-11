<div class="horizon-line bg-lightgray"></div>
<div class="search-list-item">
    <h3><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h3>
    <div class="list-msg">
        <span><?php  echo $article->Time('Y年m月d日');  ?></span>
        <span>点击:<?php  echo $article->ViewNums;  ?></span>
        <span>分类:<?php  echo $article->Category->Name;  ?></span>
    </div>
    <p><?php  echo qxcms_jj($article,1,50,'...');  ?></p>
</div>