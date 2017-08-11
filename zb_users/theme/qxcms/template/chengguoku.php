{* Template Name:智库中心首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/css/pure-min.css"/>

    <script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery-3.2.1.js"></script>

    <style type="text/css">
        ul.tree, ul.tree * {
            list-style-type: none;
            margin: 0;
            padding: 0 0 5px 0;
        }

        ul.tree img.arrow {
            padding: 2px 0 0 0;
            border: 0;
            width: 20px;
        }

        ul.tree li {
            padding: 4px 0 0 0;
        }

        ul.tree li ul {
            padding: 0 0 0 20px;
            margin: 0;
        }

        ul.tree label {
            cursor: pointer;
            font-weight: bold;
            padding: 2px 0;
        }

        ul.tree label.hover {
            color: red;
        }

        p {
            margin: 5px 15px;
        }

        ul {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        ul.tree li .arrow {
            width: 20px;
            height: 20px;
            padding: 0;
            margin: 0;
            cursor: pointer;
            float: left;
            background: transparent no-repeat 0 4px;
        }

        ul.tree li .collapsed {
            background-image: url({$host}zb_users/theme/{$theme}/images/collapsed.gif);
        }

        ul.tree li .expanded {
            background-image: url({$host}zb_users/theme/{$theme}/images/expanded.gif);
        }

        ul.tree li .checkbox {
            width: 20px;
            height: 18px;
            padding: 0;
            margin: 0;
            cursor: pointer;
            float: left;
            background: url({$host}zb_users/theme/{$theme}/images/check0.gif) no-repeat 0 0px;
        }

        ul.tree li .checked {
            background-image: url({$host}zb_users/theme/{$theme}/images/check2.gif);
        }

        ul.tree li .half_checked {
            background-image: url({$host}zb_users/theme/{$theme}/images/check1.gif);
        }
    </style>
    <div style="">
        <form name="search-chengguoku" method="post" action="{$host}zb_system/cmd.php?act=search">
            <div class="pure-g" style="    min-height: 600px;">
                <div class="pure-u-1-5">
                    <ul class="tree" style="margin-left: 15px;">
                        <li>
                            <input type="checkbox" name="all" value="all">
                            <label>所有项</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="wbgd-all" value="wbgd-all">
                                    <label>外部观点</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="wbgd[]" value="wbgd-zxdj">
                                            <label>最新洞见</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="wbgd[]" value="wbgd-rmht">
                                            <label>热门话题</label>
                                        </li>
<!--                                        <li>-->
<!--                                            <input type="checkbox" name="wbgd[]" value="wbgd-ssjg">-->
<!--                                            <label>所属机构</label>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <input type="checkbox" name="wbgd[]" value="wbgd-yjzj">-->
<!--                                            <label>研究专家</label>-->
<!--                                        </li>-->
                                    </ul>
                                </li>

                                <li>
                                    <input type="checkbox" name="nbgd-all" value="nbgd-all">
                                    <label>内部研究</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="nbgd[]" value="nbgd-yjzz">
                                            <label>研究专家</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="nbgd[]" value="nbgd-ssxk">
                                            <label>所属学科</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="nbgd[]" value="nbgd-cglb">
                                            <label>成果类别</label>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <input type="checkbox" name="xlzt-all" value="xlzt-all">
                                    <label>系列专题</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-yfzg">
                                            <label>依法治国</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-cyzd">
                                            <label>从严治党</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-ydyl">
                                            <label>一带一路</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-dsj">
                                            <label>大数据</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-jjjyth">
                                            <label>京津冀一体化</label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>


                </div>
                <div class="pure-u-4-5">
                    <h3>成果库</h3>
                    <table class="pure-table pure-table-bordered">
                        <tbody>
                        <tr>
                            <td>包含全部关键词：<input type="text" name="q" placeholder="多个请用空格分开"></td>
                            <td>
                                关键词位置
                                <label for="option-three" class="pure-radio">
                                    <input type="checkbox" name="all-text" value="1">全文
                                </label>

                            </td>
                        </tr>

                        <tr>
                            <td>包含任意关键词：<input type="text" name="q_any" placeholder="多个请用空格分开"></td>
                            <td>
                                时间范围
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="time" value="1">
                                    3天内
                                </label>
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="time" value="2">
                                    一周内
                                </label>
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="time" value="3">
                                    一月内
                                </label>
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="time" value="4">
                                    半年内
                                </label>
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="time" value="5">
                                    一年内
                                </label>
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="time" value="6">
                                    全部
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td>不包含的关键词：<input type="text" name="q_except" placeholder="多个请用空格分开"></td>
                            <td>
                                排序方式
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="sort" value="desc">
                                    发布日期降序
                                </label>
                                <label for="option-three" class="pure-radio">
                                    <input id="option-three" type="radio" name="sort" value="asc">
                                    发布日期升序
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center">
                                <input class="input" name="type" type="hidden" value="1"/>
                                <button type="submit" class="pure-button pure-button-primary">查询</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>

                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery.checktree.js"></script>
    <script>
        $(function () {
            $('ul.tree').checkTree();
        });
    </script>


    <!-- 友情链接开始 -->
    <div class="link">
        <ul>
            <li>友情链接:</li>
            {module:link}
        </ul>
    </div>
</div>
<!-- 友情链接结束 -->
{template:footer}