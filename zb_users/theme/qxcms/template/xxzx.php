{* Template Name:信息咨询页面 *}
{template:header}

<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery-3.2.1.js"></script>
<div class="top-content">

    <div class="cms-content">
        <div class="cms-xxzx-xwdt">
            <div class="cms-title-xxzx">
                <div class="xxzx-title"><span>新闻动态</span></div>
                <a href="{$categorys[20].Url}"><span class="xxzx-more">更多</span></a>
            </div>
            <div class="xwdt">
                <!--取得该分类下第一个置顶文章-->
                {$topArray = GetList(1, 1, null, null, null, null, array("only_ontop"  => true));}
                {foreach $topArray as $top}
                <div class="img-xwdt">
                    <a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}"></a>
                </div>
                <div class="main-content-xwdt">
                    <span class="content-title-xwdt">{$top.Title}</span>
                    <div class="content-line-xwdt"></div>
                    <div class="content-xwdt">{$top.Content}</div>
                </div>
                {/foreach}
            </div>
        </div>
        <div class="cms-xxzx-hydt">
            <div class="cms-title-xxzx">
                <div class="xxzx-title"><span>会议动态</span></div>
                <a href="{$categorys[21].Url}"><span class="xxzx-more">更多</span></a>
            </div>
            <!-- 左侧选项卡开始 -->
            <div class="" style="float:left;width:300px;
">
                <div style="
    width: 80px;
    background: #005999;
    height: 475px;float:left;
            "><span style="
    color: white;
    display: inline-block;
    background-color: #2485CC;
    border-radius: 4px;
    width: 80%;
    text-align: center;
    /* margin-left: 10px; */
    margin-left: 10%;
    margin-top: 20px;
    font-size: 14px;
    margin-bottom:20px;
">时间优先</span>
                    <span class="time">2017.06</span>
                    <span class="time">2017.05</span>
                    <span class="time">2017.04</span>
                    <span class="time">2017.03</span>
                    <span class="time">2017.02</span>
                    <span class="time">2017.01</span>
                    <span class="time">2016.12</span>
                    <span class="time">2016.11</span></div>

                <div style="background-color:#2D90D9;width: 220px;float: right;color: white;font-size: 18px;">
<span style="
    display: block;
    width: 100%;
    text-align: center;
    color: white;
    font-size: 22px;
    margin-top: 30px;
    margin-bottom: 75px;
">活动日程</span>
                    <span style="
    float: left;
    margin-left: 15px;
">类别</span>
                    <span style="
    float: right;
    margin-right: 15px;
">次数</span><span style="
    width: 100%;
    display: block;
    height: 40px;
    border-bottom: rgba(255,255,255,0.5) solid 1px;margin-bottom:20px;
"></span>
                    <div class="slotbar"><span class="conftitle">重要讲话</span>      <span class="count">2</span></div>
                    <div class="slotbar"><span class="conftitle">会议活动</span>      <span class="count">0</span></div>
                    <div class="slotbar"><span class="conftitle">考察调研</span>      <span class="count">0</span></div>
                    <div class="slotbar"><span class="conftitle">出访</span>        <span class="count">0</span></div>
                    <div class="slotbar"><span class="conftitle">外事</span>        <span class="count">0</span></div>
                    <div class="slotbar"><span class="conftitle">指示批示</span>      <span class="count">0</span></div>
                    <div class="slotbar"><span class="conftitle">致电致信</span>      <span class="count">0</span></div>
                </div>

            </div>
            <!-- 左侧选项卡结束 -->

            <!-- 右侧页面内容开始 -->
            <div class="main-content-hydt">
                <!--取得该分类下第一个置顶文章-->
                {$topArray = GetList(1, 1, null, null, null, null, array("only_ontop"  => true));}
                {foreach $topArray as $top}
                <div class="img-hydt">
                    <div class="content-title-hydt"><span>{$top.Title}</span></div>
                    <a href="{$top.Url}"><img src="{$top.Metas.pic}" alt="{$top.Title}"></a>
                </div>
                {/foreach}
            </div>
        </div>

<!-- 右侧页面内容结束 -->

    </div>

</div>

{template:footer}