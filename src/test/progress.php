<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <?php include "../html/page-head.php"; ?>
    <link rel="stylesheet" href="../css/widget.css"/>
</head>
<body>

<style>
    .progress-table th, .progress-table td {
        text-align: center;
    }
</style>

<div style="margin-top: 50px"></div>

<table class="table progress-table">
    <tr>
        <th>&nbsp;</th>
        <th>完成量房</th>
        <th>完成报价</th>
        <th>完成签约</th>
        <th>完成备案</th>
        <th>完成订单</th>
        <td rowspan="4" style="vertical-align: middle; text-align: center">
            <button class="btn btn-success">接单</button>
            <button class="btn btn-danger">巨单</button>
        </td>
    </tr>
    <tr>
        <th>您的公司</th>
        <td colspan="5">
            <ul class="my-progress">
                <li class="on">
                    <em class="prog-num"></em>
                </li>
                <li class="on">
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>其他公司</th>
        <td colspan="5">
            <ul class="my-progress">
                <li class="on">
                    <em class="prog-num"></em>
                </li>
                <li class="on">
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <th>xxxxx公司</th>
        <td colspan="5">
            <ul class="my-progress">
                <li class="on">
                    <em class="prog-num"></em>
                </li>
                <li class="on">
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
                <li>
                    <em class="prog-num"></em>
                    <span class="prog-line"></span>
                </li>
            </ul>
        </td>
    </tr>
</table>


</body>
</html>