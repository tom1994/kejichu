<div class="list-content">
    <div class="list-left">



<?php  foreach ( $articles as $article) { ?>

<?php if ($article->IsTop) { ?>
<?php  include $this->GetTemplate('post-istop');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('post-multi');  ?>
<?php } ?>

<?php }   ?>

          
		  
          <div class="pagebar">	
          <?php  include $this->GetTemplate('pagebar');  ?>
          </div>

     </div>

	 <?php if ($zbp->Config('qxcms')->Celist=='1') { ?> 
     <div class="list-right">
     <?php  include $this->GetTemplate('sidebar');  ?>
     </div>
	 <?php }else{  ?>
     <div class="list-right">
	 <?php  include $this->GetTemplate('right');  ?>
     </div>
	 <?php } ?>



</div>