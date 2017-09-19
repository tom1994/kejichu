<?php  /* Template Name:论文著作下面论文发表的期刊页面 */  ?>
<div class="cms-zyqk">
    <div class="cms-title-zyqk">
        <div class="zyqk-title"><span>主要期刊</span></div>
    </div>
    <div class="cms-list-zyqk">
        <!--取得该分类下第一个置顶文章-->
        <?php  $topArray = GetList(4, 42, null, null, null, null, array("only_ontop"  => true));;  ?>
        <?php  foreach ( $topArray as $top) { ?>
        <div class="zyqk">
            <div class="zyqk-img"><a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>"></a></div>
            <div class="zyqk-imgwords">
                <span><?php  echo $top->Content;  ?></span>
            </div>
        </div>
        <?php }   ?>
    </div>
</div>