<?php  include $this->GetTemplate('header');  ?>
<?php 
$type = $searchresult[0];
$articles = $searchresult[1];
 ?>
<div class="top-content">
    <style>
        .Pagination{height: 55px;_height: 45px; line-height: 20px;_margin-right: 5px; color:
            #565656;_margin-top: 20px; clear:both;margin: 0 140px}
        .Pagination span{margin-right: 5px;display: block;float: left;margin-left: 5px;}
        .Pagination span b{padding: 0 2px;}
        .Pagination div {float:left}
        .Pagination a{ font-size: 12px;text-decoration: none;display: block;float: left;color: #565656;border: 1px solid #cacaca;height: 20px;line-height: 20px;padding: 0 10px;margin: 0 2px;}
        .Pagination .Ellipsis {line-height: 32px;overflow: hidden; display:none;}
        cite.FormNum{display: block;float: left;line-height: 20px;height: 20px; font-style: normal; padding-left:10px;}
        #PageNum{ color:#777;width: 30px;height: 20px;line-height: 20px; border: 1px solid #cacaca; margin:0 5px; text-align:center;}
        .Pagination a:hover,.Pagination a.PageCur{background-color: #65B5F0;border: 1px solid #65B5F0;color: #ffffff; }
    </style>
    <?php if ($type==0) { ?>
    <h3>网站搜索结果:</h3>
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
    <h3>智库中心搜索结果:</h3>
    <div class="list-content">
        <div class="newslist">
            <ul>
                <li>
                    <?php  foreach ( $articles as $article) { ?>
                    <?php  include $this->GetTemplate('post-search');  ?>
                    <?php }   ?>
                </li>
            </ul>
        </div>
    </div>
    <?php } ?>
</div>
<?php  include $this->GetTemplate('footer');  ?>
<script type="text/javascript" src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/js/jquery.kkPages.js"></script>
<script>
        $('.newslist').kkPages({

            PagesClass:'.zkzx_item', //需要分页的元素
            PagesMth:5, //每页显示个数
            PagesNavMth:5 //显示导航个数
        });

</script>