<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-publicity/publicity.css"/>
</head>
<body class="publicity">
<?php include "header.php" ?>

<div class="container">
    <div class="cont-nav">
        <div class="item on">
            <a href="dz-nav1.php">
                <img src="../../img/pages-publicity/dz-nav-1-on.jpg" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="dz-nav2.php">
                <img src="../../img/pages-publicity/dz-nav-2.jpg" alt=""/>
            </a>
        </div>
        <div class="item last">
            <a href="dz-nav3.php">
                <img src="../../img/pages-publicity/dz-nav-3.jpg" alt=""/>
            </a>
        </div>
    </div>
    <div class="head-form dz-from1">
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
            <p class="call"><img src="../../img/pages-publicity/call.jpg" alt=""/>400-6464-001</p>
        </div>
    </div>

    <img src="../../img/pages-publicity/dz-nav1-img1.jpg" alt=""/>

    <div class="case-and-new">

        <div class="new-yanfang" style="width: 100%">
            <div>
                <div class="title">
                    <h2>最新申请定制服务</h2>
                </div>
                <div class="scrolltable-warp">
                    <table id="scrolltableHead" class="publicity-table"></table>
                    <div id="scrolltable">
                        <div id="scrolltable1">
                            <table class="publicity-table">
                                <thead>
                                    <tr>
                                        <th>楼盘名称</th>
                                        <th>定制类型</th>
                                        <th>申请业主</th>
                                        <th>申请日期</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘1</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘2</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘3</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘4</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘5</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘6</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘7</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘8</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘9</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘10</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                    <tr>
                                        <td>成都市金牛区地中海楼盘11</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="scrolltable2"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="http://192.168.0.188/homejc001-new/src/js/scroll-vertical.js"></script>
        <script>
                $(".scrolltable-warp").scrollTable();
        </script>
    </div>
    <img src="../../img/pages-publicity/dz-nav1-img2.jpg" alt=""/>
    <img src="../../img/pages-publicity/dz-nav1-img3.jpg" alt=""/>
    <img src="../../img/pages-publicity/dz-nav1-img4.jpg" alt=""/>
</div>

<?php include "../../footer.php" ?>
</body>
</html>