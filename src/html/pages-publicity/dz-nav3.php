<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-publicity/publicity.css"/>
</head>
<body class="publicity">
<?php include "../header.php" ?>

<div class="container">
    <div class="cont-nav">
        <div class="item">
            <a href="dz-nav1.php">
                <img src="../../img/pages-publicity/dz-nav-1.jpg" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="dz-nav2.php">
                <img src="../../img/pages-publicity/dz-nav-2.jpg" alt=""/>
            </a>
        </div>
        <div class="item last on">
            <a href="dz-nav3.php">
                <img src="../../img/pages-publicity/dz-nav-3-on.jpg" alt=""/>
            </a>
        </div>
    </div>

    <div class="head-form dz-from3">
        <div class="banner-form banner-cont">
            <?php include "yuyue-form.php" ?>
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

    <img src="../../img/pages-publicity/dz-nav3-img1.jpg" alt=""/>
    <img src="../../img/pages-publicity/dz-nav3-img2.jpg" alt=""/>
</div>

<?php include "../../footer.php" ?>
</body>
</html>