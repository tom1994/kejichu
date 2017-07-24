<?php  include $this->GetTemplate('header');  ?>
<div class="list-content">
   <div class="art-left">
    <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
    <?php  include $this->GetTemplate('post-single');  ?>
    <?php }else{  ?>
    <?php  include $this->GetTemplate('post-page');  ?>
    <?php } ?>
   </div>
    <!--  侧栏 --> 
      
    
    <?php if ($zbp->Config('qxcms')->Ceart=='1') { ?> 
     <div class="list-right">
     <?php  include $this->GetTemplate('sidebar');  ?>
     </div>
	 <?php }else{  ?>
     <div class="list-right">
	 <?php  include $this->GetTemplate('right');  ?>
     </div>
	 <?php } ?>
    
</div>
 <!-- 页脚 -->
<?php  include $this->GetTemplate('footer');  ?>
