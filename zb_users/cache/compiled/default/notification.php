<?php  /* Template Name:首页通知页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="multi <?php  echo $type;  ?>">
<div id="divAll">
    <div id="divPage">
        <div id="divNavBarContainer">
            <div id="divNavBar">
                <ul>
                    <?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
                </ul>
            </div>
        </div>
        <div id="divMiddle">
            <!--面包屑导航-->
            <?php  include $this->GetTemplate('breadcrumb');  ?>
            <div class="notice-header">
                <span class="notice-title"><?php  echo $category->Name;  ?></span>
                <div class="notice-line"></div>
            </div>
            <div id="divMain">
                <div id="divNoticeContent" class="notice-content">
                    <ul>
                        <li class="list-table-header">
                            <div class="list-table-th notice-list-title">标题</div>
                            <div class="list-table-th notice-list-date">发布时间</div>
                        </li>
                        <?php  foreach ( $articles as $article) { ?>
                        <li>
                            <div class="list-table-td notice-list-title">
                                <a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a>
                            </div>
                            <div class="list-table-td notice-list-date">
                                <?php  echo $article->Time('Y-m-d');  ?>
                            </div>
                        </li>
                        <?php }   ?>
                    </ul>
                    <div class="pagebar"><?php  include $this->GetTemplate('pagebar');  ?></div>
                </div>
            </div>
            <!--            <div id="divSidebar">-->
            <!--                <?php  include $this->GetTemplate('sidebar');  ?>-->
            <!--            </div>-->
            <?php  include $this->GetTemplate('footer');  ?>