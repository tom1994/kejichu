{* Template Name:智库中心首页 *}
{template:header}
<!--面包屑导航-->
{template:breadcrumb}
<!-- 焦点文章开始 -->
<div class="top-content">
    <link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/css/pure-min.css"/>

    <script type="text/javascript" src="{$host}zb_users/theme/{$theme}/js/jquery-3.2.1.js"></script>
    <script type="application/javascript">
        $(document).ready(function(){
            $('input:checkbox').prop('checked', false);
            $('#full-text').prop('checked', true);
            $('#time6').prop('checked', true);
            $('#desc').prop('checked', true);
        });
    </script>

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
                <div class="pure-u-5-24">
                    <ul class="tree" style="margin-left: 15px;">
                        <li>
                            <input type="checkbox" name="all" value="all">
                            <label>所有项</label>
                            <ul>
                                <li>
                                    <input type="checkbox" name="gjzl-all" value="gjzl-all">
                                    <label>国家战略专题</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="gjzl[]" value="gjzl-xksh">
                                            <label>全面建设小康社会</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="gjzl[]" value="gjzl-shgg">
                                            <label>全面深化改革</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="gjzl[]" value="gjzl-yfzg">
                                            <label>全面推进依法治国</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="gjzl[]" value="gjzl-cyzd">
                                            <label>全面从严治党</label>
                                        </li>
<!--                                        <li>-->
<!--                                            <input type="checkbox" name="gjzl[]" value="gjzl-ssjg">-->
<!--                                            <label>所属机构</label>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <input type="checkbox" name="gjzl[]" value="gjzl-yjzj">-->
<!--                                            <label>研究专家</label>-->
<!--                                        </li>-->
                                    </ul>
                                </li>

                                <li>
                                    <input type="checkbox" name="gjzk-all" value="gjzk-all">
                                    <label>国家智库专题</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="gjzk[]" value="gjzk-ydyl">
                                            <label>一带一路</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="gjzk[]" value="gjzk-jjjyth">
                                            <label>京津冀一体化</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="gjzk[]" value="gjzk-dsj">
                                            <label>大数据</label>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <input type="checkbox" name="xlzt-all" value="xlzt-all">
                                    <label>其他内部研究</label>
                                    <ul>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-yfzg">
                                            <label>研究专家</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" name="xlzt[]" value="xlzt-cyzd">
                                            <label>所属学科</label>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>


                </div>
                <div class="pure-u-19-24">
                    <h3>成果库</h3>
                    <table class="pure-table pure-table-bordered">
                        <tbody>
                        <tr>
                            <td>关键词（必填）：<input type="text" name="q" placeholder="输入关键词:必填" required="required"></td>
                            <td>
                                关键词位置
                                <label for="full-text" class="pure-radio">
                                    <input id="full-text" type="checkbox" name="all-text" value="1" disabled="disabled" checked="checked">全文
                                </label>

                            </td>
                        </tr>

                        <tr>
                            <td>不包含的关键词：<input type="text" name="q_except" placeholder="请输入..."></td>
                            <td>
                                时间范围
                                <label for="time1" class="pure-radio">
                                    <input id="time1" type="radio" name="time" value="1">
                                    3天内
                                </label>
                                <label for="time2" class="pure-radio">
                                    <input id="time2" type="radio" name="time" value="2">
                                    一周内
                                </label>
                                <label for="time3" class="pure-radio">
                                    <input id="time3" type="radio" name="time" value="3">
                                    一月内
                                </label>
                                <label for="time4" class="pure-radio">
                                    <input id="time4" type="radio" name="time" value="4">
                                    半年内
                                </label>
                                <label for="time5" class="pure-radio">
                                    <input id="time5" type="radio" name="time" value="5">
                                    一年内
                                </label>
                                <label for="time6" class="pure-radio">
                                    <input id="time6" type="radio" name="time" value="6">
                                    全部
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                排序方式
                                <label for="asc" class="pure-radio">
                                    <input id="asc" type="radio" name="sort" value="SORT_ASC">
                                    发布日期升序
                                </label>
                                <label for="desc" class="pure-radio">
                                    <input id="desc" type="radio" name="sort" value="SORT_DESC">
                                    发布日期降序
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