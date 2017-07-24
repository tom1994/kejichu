<div class="right-right">
   
   <?php if ((!$module->IsHideTitle)&&($module->Name)) { ?>
   <div class="right-t"><span><?php  echo $module->Name;  ?></span></div>
   <?php }else{  ?>
   <div style="display:none;"></div>
   <?php } ?>
   <div class="right_c">

<?php if ($module->Type=='div') { ?>
<div><?php  echo $module->Content;  ?></div>
<?php } ?>

<?php if ($module->Type=='ul') { ?>
<ul><?php  echo $module->Content;  ?></ul>
<?php } ?>
</div>
</div>