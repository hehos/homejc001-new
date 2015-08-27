<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/my.css"/>
</head>
<body class="publicity">
<?php include "header.php" ?>

<div class="container">
    <div class="cont-nav">
        <div class="item on">
            <a href="nav1.php">
                <img src="../img/nav-1.png" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="nav2.php">
                <img src="../img/nav-2.png" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="nav3.php">
                <img src="../img/nav-3-on.png" alt=""/>
            </a>
        </div>
    </div>

    <div class="head-form from3">
        <div class="form-cont">
            <p class="current-num">今日已有<em>888</em>业主申请，本月申请人数已达<em>87878</em></p>

            <form action="">
                <input type="text" placeholder="您的称呼"/>
                <input type="text" placeholder="手机号码"/>
                <div class="city col-2">
                    <select name="">
                        <option value="四川" selected="">四川</option>
                        <option value="成都">成都</option>
                    </select>
                    <select name="">
                        <option value="四川" selected="">四川</option>
                        <option value="成都">成都</option>
                    </select>
                </div>
                <button type="submit">立即预约</button>
            </form>

            <p class="call-hintTxt">拨打热线，快速了解九正家居装修</p>

            <p class="call"><img src="../img/call.png" alt=""/>400-6464-001</p>
        </div>
    </div>

<!--  贷款计算   -->

    <div class="dkjs clearfix">
        <div class="title">
            贷款计算器，算算更放心
        </div>
        <div class="dkjs-form pull-left">
            <p class="dfl"><i></i>月费率低至0.625%</p>
            <form>
                <div class="form-group row">
                    <label for="dkje" class="col-sm-3 form-control-label">贷款金额：</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="dkje" placeholder="贷款金额">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dkqs" class="col-sm-3 form-control-label">贷款期数：</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="dkqs">
                            <option value="">12期（1年）</option>
                            <option value="">24期（2年）</option>
                            <option value="">36期（3年）</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-8">
                        <button type="submit" class="btn btn-primary">计算还款金额</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="dkjs-result pull-right clearfix">
            <div class="pull-left left">
                每月还款 <em>999.99</em>元
            </div>
            <div class="pull-right right">
                <p>贷款金额：<em>100000.00</em>元</p>
                <p>贷款期数：<em>100000.00</em>元</p>
                <p>本息合计：<em>100000.00</em>元</p>
            </div>
        </div>
    </div>

    <img src="../img/xiuhui.png" alt=""/>
    <img src="../img/3-buzhou.png" alt=""/>
</div>

<?php include "../../footer.php" ?>
</body>
</html>