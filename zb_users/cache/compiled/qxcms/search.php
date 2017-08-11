<?php  include $this->GetTemplate('header');  ?>
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