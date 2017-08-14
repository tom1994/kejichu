<?php  include $this->GetTemplate('header');  ?>
<?php 
$type = $searchresult[0];
$articles = $searchresult[1];
 ?>
<?php if ($type==0) { ?>
<h3>网站搜索结果:</h3>
<?php }else{  ?>
<h3>智库中心搜索结果:</h3>
<?php } ?>
<div class="list-content">
    <ul>
        <li>
            <?php  foreach ( $articles as $article) { ?>
            <?php  include $this->GetTemplate('post-search');  ?>
            <?php }   ?>
        </li>
    </ul>
    <div class="pagebar">
        <?php  include $this->GetTemplate('pagebar');  ?>
    </div>
</div>
<?php  include $this->GetTemplate('footer');  ?>