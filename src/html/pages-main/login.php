<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-main/login.css"/>
</head>
<body>
<?php include "../header-top.php"; ?>

<div class="container">

    <div class="row">
        <div class="goLogin">
            <a class="login-img" href="/" alt="九正家居">
                <img src="../../img/logo.png" alt="">
            </a>
        </div>
        <div class="g-wrap f-cb">
            <div class="g-left f-fl">
                <img src="../../img/login-img.jpg" alt="美好生活从这里开始">
            </div>
            <div class="g-right f-fr">
                <h2>会员登录</h2>
                <form class="g-regForm" action="/member.php?_a=login&amp;" method="post">
                    <ul class="m-loginForm">
                        <li>
                            <input class="txt" type="text" name="email" id="email" placeholder="请输入邮箱" datatype="*6-30" errormsg="格式不合法！">
                            <span class="Validform_checktip error"><i class="icon-minus-circle"></i>邮箱格式不合法！</span>
                        </li>
                        <li>
                            <input class="txt" type="password" name="password" id="password" placeholder="请输入密码" datatype="*6-16" errormsg="密码范围在6~16位之间！">
                            <span class="Validform_checktip Validform_right"><i class="icon-check"></i>通过信息验证！</span>
                        </li>
                        <li>
                            <input class="txt checkcode" type="text" name="imgocde" id="imgocde" placeholder="请输验证码" datatype="*4-4" errormsg="请输入4位验证码！">
                            <img src="http://home.jc001.cn/captcha.php?r=1130098175" onclick="this.src='http://home.jc001.cn/captcha.php?r=1585807591&amp;rm=' + Math.random(); ">
                            <span class="Validform_checktip"></span>
                        </li>
                        <li class="submit-row">
                            <input class="submit u-btn-reg" type="submit" name="" id="" value="立即登录">
                        </li>
                        <li class="otherLogin">
                            <a target="_blank" class="" title="微博登录" href="/member.php?_a=openapi_login&amp;cl=sina"><i class="myicon-sina-weibo2"></i>微博登陆</a>
                            <a target="_blank" class="" title="QQ登录" href="/member.php?_a=openapi_login&amp;cl=qq"><i class="myicon-qq"></i>QQ登录</a>
                            <a class="register" href="/member.php?_a=reg_personal">注册</a>
                        </li>
                    </ul>
                </form>

            </div>
        </div>
    </div>

</div>

<?php include "../footer.php"; ?>
</body>
</html>