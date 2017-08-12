<?php  include $this->GetTemplate('header');  ?>
<?php 
$type = $searchresult[0];
$articles = $searchresult[1];
 ?>
<?php if ($type==0) { ?>
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
<?php }else{  ?>
<h1>这是类型1搜索</h1>
<?php } ?>
<?php  include $this->GetTemplate('footer');  ?>