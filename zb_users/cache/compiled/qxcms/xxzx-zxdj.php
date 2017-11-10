<?php  /* Template Name:信息咨讯下面的最新洞见页面 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<!--面包屑导航-->
<?php  include $this->GetTemplate('breadcrumb');  ?>
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cms-wbyj-child">
            <div class="cms-img-wbyj"><img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/include/views_left_banner.png"
                                           alt="最新洞见&热门观点"></div>
            <div class="cms-list-wbyj">
                <ul>
                    <?php  foreach ( GetList(9,73) as $key=>$article) { ?>
                    <li><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a><span
                                class="wbyj-date"><?php  echo $article->Time('Y-m-d');  ?></span></li>
                    <div class="cms-list-wbyj-line"></div>
                    <?php }   ?>
                </ul>
            </div>
        </div>


        <div class="cms-wbyj-child-xgjg">
            <div class="cms-wbyj-child-title">
                <div class="wbyj-child-title"><span>相关机构</span></div>
            </div>
            <div class="xgjg-content">
                <a href="http://kyc.cupl.edu.cn/" title="中国政法大学科研处">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/kyc_logo.png">
                </a>
                <a href="http://www.procedurallaw.cn/zh" title="中国政法大学诉讼法学研究院">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/procedurallaw_logo.jpg">
                </a>
                <a href="http://fzzfyjy.cupl.edu.cn/" title="法制政府网">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/fzzfyjy_logo.png">
                </a>
                <a href="http://www.cicjc.com.cn/zh" title="司法文明协同创新中心">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/cicjc_logo.png">
                </a>
                <a href="http://zjkxyjy.cupl.edu.cn/zh" title="中国政法大学证据科学研究院">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/zjkxyjy_logo.png">
                </a>
                <a href="http://rqyjy.cupl.edu.cn/" title="人权研究院">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/rqyjy_logo.png">
                </a>
                <a href="http://www.legalhistory.com.cn/legalhistory/index.aspx" title="法律史学网">
                    <img src="<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/img/institutions/legalhistory_logo.jpg">
                </a>
            </div>
        </div>
    </div>
    <!-- cms2结束 -->

    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
        </ul>
    </div>
    <!-- 友情链接结束 -->
    <?php  include $this->GetTemplate('footer');  ?>