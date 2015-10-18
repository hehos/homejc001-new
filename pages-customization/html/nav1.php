<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

    <script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
</head>
<body class="publicity">
<?php include "header.php" ?>

<div class="container">
    <div class="cont-nav">
        <div class="item on">
            <a href="nav1.php">
                <img src="../img/nav-1-on.png" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="nav2.php">
                <img src="../img/nav-2.png" alt=""/>
            </a>
        </div>
        <div class="item">
            <a href="nav3.php">
                <img src="../img/nav-3.png" alt=""/>
            </a>
        </div>
    </div>
    <div class="head-form from1">
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
            <p class="call"><img src="../img/call.png" alt=""/>400-6464-001</p>
        </div>
    </div>

    <img src="../img/1-pk.png" alt=""/>

    <div class="case-and-new">

        <div class="new-yanfang" style="width: 100%">
            <div>
                <div class="title">
                    <h2>最新申请定制服务</h2>
                </div>
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
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                                <tr>
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                                <tr>
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                                <tr>
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                                <tr>
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                                <tr>
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                                <tr>
                                    <td>成都市金牛区地中海楼盘</td><td>住宅公寓</td><td>小李</td><td>8月20日</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="scrolltable2"></div>
                </div>
            </div>
        </div>

        <script src="../../js/scroll-vertical.js" type="text/javascript"></script>

    </div>
    <img src="../img/shengqing.png" alt=""/>
    <img src="../img/3taofangan.png" alt=""/>
    <img src="../img/3taoyusuanduibi.png" alt=""/>
</div>

<?php include "../../footer.php" ?>
</body>
</html>