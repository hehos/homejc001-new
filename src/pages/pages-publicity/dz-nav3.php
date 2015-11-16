<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-publicity/publicity.css?v=8890bc74ef"/>
</head>
<body class="publicity">
<?php include "header.php" ?>

<div class="container">
    <div class="cont-nav">
        <div class="item">
            <a href="dz-nav1.php">
                <img src="../../img/pages-publicity/dz-nav-1.jpg?v=839a9391c7" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="dz-nav2.php">
                <img src="../../img/pages-publicity/dz-nav-2.jpg?v=af6d2a8a95" alt=""/>
            </a>
        </div>
        <div class="item last on">
            <a href="dz-nav3.php">
                <img src="../../img/pages-publicity/dz-nav-3-on.jpg?v=2783040925" alt=""/>
            </a>
        </div>
    </div>

    <div class="head-form dz-from3">
        <div class="form-cont">
            <p class="current-num">今日有<em>888</em>业主已报名</p>
            <p class="chengluo">10秒登记，三家厂家免费上面测量</p>
            <form action="">
                <div class="form-line">
                   <input type="text" placeholder="您的称呼"/>
                </div>
                <div class="form-line">
                    <input type="text" placeholder="手机号码"/>
                </div>
                <div class="form-line city col-2">
                    <select name="">
                        <option value="四川" selected="">四川</option>
                        <option value="成都">成都</option>
                    </select>
                    <select name="">
                        <option value="四川" selected="">四川</option>
                        <option value="成都">成都</option>
                    </select>
                </div>
                <div class="form-line">
                    <button type="submit">立即预约</button>
                </div>
            </form>

            <p class="call-hintTxt">拨打热线，快速了解九正家居定制平台</p>

            <p class="call"><img src="../../img/pages-publicity/call.jpg?v=2de087666b" alt=""/>400-6464-001</p>
        </div>
    </div>

    <!--  贷款计算   -->

    <div class="dkjs clearfix">
        <div class="title">
            贷款计算器，算算更放心
        </div>
        <div class="dkjs-form pull-left">
            <p class="dfl"><i>￥</i>月费率低至0.625%</p>
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

    <img src="../../img/pages-publicity/dz-nav3-img1.jpg?v=cd28668ffb" alt=""/>
    <img src="../../img/pages-publicity/dz-nav3-img2.jpg?v=d237019072" alt=""/>
</div>

<?php include "../../footer.php" ?>
</body>
</html>