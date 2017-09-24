<?php  /* Template Name:信息咨讯首页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">

    <div class="cms-content">
        <div class="cms-wbyj-zxdj">
            <div class="cms-title-wbyj">
                <div class="title-wbyj-left"></div>
                <div class="title-wbyj"><span><h2>最新洞见</h2></span></div>
                <div class="more-wbyj"><a href="<?php  echo $categorys[73]->Url;  ?>">更多</a></div>
            </div>
            <!--取得最新洞见分类下4个置顶文章-->
            <?php  $topArray = GetList(4, 73, null, null, null, null, array("only_ontop"  => true));;  ?>
            <?php  foreach ( $topArray as $top) { ?>
            <div class="cms-wbyj">
                <div class="tu-wbyj-f">
                    <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>"></a>
                    <div class="wbyj-tu-font">
                        <h3><?php  echo $top->Title;  ?></h3>
                    </div>
                </div>
            </div>
            <?php }   ?>
        </div>
        <div class="cms-title-wbyj">
            <div class="title-wbyj-left"></div>
            <div class="title-wbyj"><span><h2>热点话题</h2></span></div>
            <div class="more-wbyj"><a href="<?php  echo $categorys[74]->Url;  ?>">更多</a></div>
        </div>
        <div class="cms-wbyj-redian">
            <div class="tu-wbyj-f-redian">
                <!--取得热点话题分类下第1个置顶文章-->
                <?php  $topArray = GetList(1, 74, null, null, null, null, array("only_ontop"  => true));;  ?>
                <?php  foreach ( $topArray as $top) { ?>
                        <a href="<?php  echo $top->Url;  ?>"><img src="<?php  echo $top->Metas->pic;  ?>" alt="<?php  echo $top->Title;  ?>"></a>
                <?php }   ?>
            </div>
            <div class="cms-redian-list">
                <ul>
                    <?php  foreach ( GetList(5,74) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></li>
                    <?php }   ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
        </ul>
    </div>
    <!-- 友情链接结束 -->
    <?php  include $this->GetTemplate('footer');  ?>