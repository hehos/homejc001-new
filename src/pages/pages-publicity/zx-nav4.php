<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-publicity/publicity.css?v=46979ff8ed"/>
</head>
<body class="publicity">
<?php include "../header.php" ?>

<div class="container">
    <div class="cont-nav zx-page">
        <div class="item">
            <a href="zx-nav1.php">
                <img src="../../img/pages-publicity/zx-nav-1.jpg?v=aee88aafe9" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="zx-nav2.php">
                <img src="../../img/pages-publicity/zx-nav-2.jpg?v=dec75ea9fd" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="zx-nav3.php">
                <img src="../../img/pages-publicity/zx-nav-3.jpg?v=5965242162" alt=""/>
            </a>
        </div>
        <div class="item on last">
            <a href="zx-nav4.php">
                <img src="../../img/pages-publicity/zx-nav-4-on.jpg?v=4dd5e832c0" alt=""/>
            </a>
        </div>
    </div>
    <div class="head-form zx-from4">
        <div class="banner-form banner-cont">
            <?php include "yuyue-form2.php" ?>
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

    <img src="../../img/pages-publicity/zx-nav4-img1.jpg?v=8f5d343235" alt=""/>
    <img src="../../img/pages-publicity/zx-nav4-img2.jpg?v=f752223648" alt=""/>
</div>

</body>
</html>