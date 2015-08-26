<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../css/my.css"/>

    <script src="http://lib.sinaapp.com/js/jquery/1.9.1/jquery-1.9.1.min.js"></script>
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
                <img src="../img/nav-2-on.png" alt=""/>
            </a>
        </div>
        <div class="item" style="height: 93px; background: #eee">
            <a href="nav3.php">
            </a>
        </div>
    </div>
    <div class="head-form from2">

        <div class="form-cont">
            <p class="current-num">今日已有<em>888</em>业主申请，本月申请人数已达<em>87878</em></p>

            <form action="">
                <input type="text" placeholder="您的称呼"/>
                <input type="text" placeholder="手机号码"/>
                <select name="zxtype">
                    <option value="新房装修" selected="">新房装修</option>
                    <option value="旧房翻新">旧房翻新</option>
                    <option value="办公室装修">办公室装修</option>
                    <option value="店铺装修">店铺装修</option>
                    <option value="餐厅装修">餐厅装修</option>
                    <option value="酒店装修">酒店装修</option>
                    <option value="其他类型">其他类型</option>
                </select>
                <textarea name="" rows="4"></textarea>
                <button type="submit">免费申请</button>
            </form>

            <p class="call-hintTxt">拨打热线，快速了解九正家居装修</p>

            <p class="call"><img src="../img/call.png" alt=""/>400-6464-001</p>
        </div>
    </div>


    <img src="../img/baozhang1.png" alt=""/>

    <img src="../img/baozhang2.png" alt=""/>
    <img src="../img/baozhang3.png" alt=""/>

    <img src="../img/2-pk.png" alt=""/>

</div>

<?php include "../../footer.php" ?>
</body>
</html>