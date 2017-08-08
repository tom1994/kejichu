{* Template Name:会议动态 *}
{template:header}

    <script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery-3.2.1.js"></script>
<div class="top-banner">
    <img alt="" src="{$host}zb_users/theme/{$theme}/image/bn1.jpg">
    <span class="navbar-left-title">会议动态</span>
</div>
<!-- 左侧选项卡开始 -->
<style type="text/css">
.time{
    width: 100%;
    height: 50px;
    text-align: center;
    color: white;
    display: inline-block;
    line-height: 50px;
        cursor: pointer;
}
.time:hover{
background-color:#004170;
}
.slot{
width:100%;
display:block;
}
.count{
background-color:#2485cc;
float:right;
margin-right:20px;

}
.slot:hover{
background-color:white;
}
.slot:hover .count{
background-color:#ff8a69;
}
</style>
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
    border-bottom: rgba(255,255,255,0.5) solid 1px;
"></span>
<div class="slotbar"><span>重要讲话</span>      <span class="count">2</span></div>
<div class="slotbar"><span>会议活动</span>      <span class="count">0</span></div>
<div class="slotbar"><span>考察调研</span>      <span class="count">0</span></div>
<div class="slotbar"><span>出访</span>        <span class="count">0</span></div>
<div class="slotbar"><span>外事</span>        <span class="count">0</span></div>
<div class="slotbar"><span>指示批示</span>      <span class="count">0</span></div>
<div class="slotbar"><span>致电致信</span>      <span class="count">0</span></div>
</div>

</div>
<!-- 左侧选项卡结束 -->

<!-- 右侧页面内容开始 -->
<div class="main-content">

</div>
<!-- 右侧页面内容结束 -->

{template:footer}