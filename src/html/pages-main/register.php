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
                <div class="g-regNav">
                    <ul class="reg-tab">
                        <li class="first on"><a href="/member.php?_a=reg_personal">个人用户</a></li>
                        <li><a href="/member.php?_a=reg_designer">设计师</a></li>
                        <li><a href="/member.php?_a=reg_company">企业用户</a></li>
                    </ul>
                </div>
                <form class="g-regForm" action="/member.php?_a=reg_personal&amp;" method="post">
                    <ul class="m-loginForm">
                        <li>
                            <input class="txt Validform_error" type="text" name="email" id="email" value="" placeholder="请输入邮箱" datatype="e" ajaxurl="/member.php?_a=reg_ajaxemail&amp;" errormsg="邮箱格式不合法！">
                            <span class="Validform_checktip error Validform_wrong" style="display: inline;"><i class="icon-minus-circle"></i>邮箱格式不合法！</span>
                        </li>
                        <li>
                            <input class="txt" type="password" name="password" id="password" placeholder="请输入密码" datatype="*6-16" errormsg="密码范围在6~16位之间！">
                            <span class="Validform_checktip Validform_right" style="display: inline;"><i class="icon-check"></i>通过信息验证！</span>
                        </li>
                        <li>
                            <input class="txt" type="text" name="nickname" id="nickname" value="" placeholder="请输入昵称" datatype="s4-14" errormsg="至少4个字符,最多14个字符！">
                            <span class="Validform_checktip"></span>
                        </li>
                        <li>
                            <input class="txt checkcode" type="text" name="imgocde" id="imgocde" placeholder="请输验证码" datatype="*4-4" errormsg="请输入4位验证码！">
                            <img src="http://home.jc001.cn/captcha.php?r=1498095313" onclick="this.src='http://home.jc001.cn/captcha.php?r=495874359&amp;rm=' + Math.random(); ">
                            <span class="Validform_checktip"></span>
                        </li>
                        <li>
                            <a class="regAgree" href="">《九正家居网用户注册协议》</a>
                        </li>
                        <li>
                            <input class="submit u-btn-reg" type="submit" name="" id="" value="同意协议并注册">
                        </li>
                        <li class="otherLogin">
                            <a target="_blank" class="" title="微博登录" href="/member.php?_a=openapi_login&amp;cl=sina"><i class="myicon-sina-weibo2"></i>微博登陆</a>
                            <a target="_blank" class="" title="QQ登录" href="/member.php?_a=openapi_login&amp;cl=qq"><i class="myicon-qq"></i>QQ登录</a>
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