<?php  include $this->GetTemplate('header');  ?>
<div class="list-content">
    <?php  foreach ( $articles as $article) { ?>
    <?php  include $this->GetTemplate('post-search');  ?>
    <?php }   ?>


    <div class="pagebar">
        <?php  include $this->GetTemplate('pagebar');  ?>
    </div>
</div>
<?php  include $this->GetTemplate('footer');  ?>