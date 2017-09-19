{* Template Name:论文著作页面 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <div class="cms-content">
        <div class="cbzz" style="height:650px;">
            <div class="cms-cbzz-title">
                <div class="cbzz-title"><span>出版著作</span></div>
                <span class="cbzz-more"><a href="{$categorys[23].Url}">更多</a></span>
            </div>
            <style type="text/css">
            .stage ul{
                list-style:none;
                    margin-left: 40px;
            }
            .stage{
                position:relative;
                margin:100px;
            }
            .desk{
                background:#eae1dc;
                width:640px;
                height:20px;
                position:absolute;
                bottom:-35px;
                border-bottom:2px solid #f5ebe9;
                z-index:-1;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }

            .desk:after{
                content: "";
                background: #F2EDEA;
                width: 724px;
                position: absolute;
                height: 65px;
                -webkit-transform: perspective(300px) rotateX(50deg) translateX(-42px) translateY(-90px);
                transform: perspective(300px) rotateX(50deg) translateX(-42px) translateY(-90px);
            }
            .desk-shadow{
                position: absolute;
                bottom: -100px;
                z-index: -2;
                background: none;
                width: 670px;
                height: 65px;
                box-shadow: 0 56px 63px rgba(0,0,0,0.3);
                -webkit-transform: perspective(300px) rotateX(33deg) translateX(3px) translateY(-90px);
                transform: perspective(300px) rotateX(33deg) translateX(3px) translateY(-90px);
            }
            .books-list li{
                position:relative;
                display:inline-block;
                margin-left:12px;
                width:130px;
                height:134px;
                z-index:2;
                overflow-y:hidden;
                overflow-x:visible;

            }
            .books-list li img{
                width:100px;
                height:134px;

            }
            .books-list li:after{
                content: "";
                position: absolute;
                overflow: hidden;
                right: 28px;
                bottom: 0px;
                width: 25px;
                height: 129px;
                background: rgba(0,0,0,0.4);
                box-shadow: 0 10px 25px rgba(0,0,0,0.4);
                -webkit-transform: perspective(300px) rotateX(29deg) rotateY(-61deg) rotateZ(-11deg) translateX(8px) translateY(8px);
                transform: perspective(300px) rotateX(29deg) rotateY(-61deg) rotateZ(-11deg) translateX(8px) translateY(8px);
                z-index: -1;
            }
            </style>
            <div class="cbzz-lunbo">
                <div class="stage">
                    <ul class="books-list">
                        <li><img src="{$host}zb_users/theme/{$theme}/img/11.jpg"></li>
                        <li><img src="{$host}zb_users/theme/{$theme}/img/12.jpg"></li>
                        <li><img src="{$host}zb_users/theme/{$theme}/img/13.jpg"></li>
                        <li><img src="{$host}zb_users/theme/{$theme}/img/14.jpg"></li>
                    </ul>
                    <div class="desk"></div>
                    <div class="desk-shadow"></div>
                </div>
                <div class="stage">
                    <ul class="books-list">
                        <li><img src="{$host}zb_users/theme/{$theme}/img/21.jpg"></li>
                        <li><img src="{$host}zb_users/theme/{$theme}/img/22.jpg"></li>
                        <li><img src="{$host}zb_users/theme/{$theme}/img/23.jpg"></li>
                        <li><img src="{$host}zb_users/theme/{$theme}/img/24.jpg"></li>
                    </ul>
                    <div class="desk"></div>
                    <div class="desk-shadow"></div>
                </div>
            </div>
        </div>


        <div class="cms-lwzz-lwfb">
            <div class="cms-cbzz-title">
                <div class="cbzz-title"><span>论文编著</span></div>
                <span class="cbzz-more"><a href="{$categorys[22].Url}">更多</a></span>
            </div>
            <div class="cms-lwfb-list">
                <ul>
                    {foreach GetList(4,22) as $key=>$article}
                    <li><a href="{$article.Url}">{$article.Title}</a><span class="lwfb-date">[出版日期:{$article.Time('Y-m-d')}]</span></li>
                    <li><span class="lufb-zz"><strong>·</strong>作者:{$article.Author.Name}</span><span class="lufb-cbs"><strong>·</strong>出版社</span></li>
                    {/foreach}
                </ul>
            </div>
        </div>
    </div>
    <!-- cms2结束 -->

    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            {module:link}
        </ul>
    </div>
    <!-- 友情链接结束 -->
    {template:footer}