<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-main/index.css?v=6b71165789"/>
</head>
<body>

<!-- 地区弹出框 -->
<?php //include "../popup-region.php"; ?>
<!-- 预约表单 -->
<?php //include "../popup-form-yuyue.php"; ?>
<!-- 预约成功弹出提示 -->
<?php //include "../popup-yuyue-succeed.php"; ?>
<?php //include "../popup-yuyue-succeed2.php"; ?>
<!--<div id="mask"></div>-->
<!-- 底部漂浮条 -->
<?php //include "../fixed-bottom-form.php"; ?>
<!-- 右侧 QQ 客服 -->
<?php include "../online-service.php"; ?>


<?php include "../header.php"; ?>

<!--  begin 头部banner  -->
<div class="index-full-banner">
    <div class="banner slider">
        <ul class="items">
            <li>
                <a href="javascript:void(0);"><img src="../../img/full-banner1.jpg?v=9efa0de820?v=7349843b8f" alt=""/></a>
            </li>
            <li>
                <a href="javascript:void(0);"><img src="../../img/full-banner2.jpg?v=625610985e?v=5887de3e41" alt=""/></a>
            </li>
            <li>
                <a href="javascript:void(0);"><img src="../../img/full-banner3.jpg?v=12b9f882f0?v=b21f0a7b35" alt=""/></a>
            </li>
            <li>
                <a href="javascript:void(0);"><img src="../../img/full-banner4.jpg?v=c9605655ef" alt=""/></a>
            </li>
        </ul>
        <ol class="dots">
            <li class="dot"></li>
        </ol>
        <div class="arrows">
            <div class="arrow prev"><</div>
            <div class="arrow next">></div> 
        </div>
    </div>


    <script type="text/javascript" src="../../js/unslider.js?v=ebbc073b11"></script>
    <script>
        $('.banner').unslider({
            keys: true,
            autoplay: false,
            arrows: true,
            fluid: true,
            dots: true
        });
    </script>

</div>
<!--  end 头部banner  -->

<div class="container">
    <!--  begin 顶部报名条  -->
    <div class="row">
        <form action="">
        <div class="yuyue-form-bar">
            <input type="text" placeholder="请输入您的姓名"/>
            <input type="text" placeholder="请输入您的电话号码"/>
            <select name="" id="">
                <option value="">省份</option>
                <option value="">四川</option>
                <option value="">广东</option>
            </select>
            <select name="" id="">
                <option value="">城市/地区</option>
                <option value="">成都</option>
                <option value="">广州</option>
            </select>
            <label for="">
                <input type="radio"/>装&nbsp;修
            </label>
            <label for="">
                <input type="radio"/>定制家居
            </label>
            <button>免费预约</button> 
        </div>
        </form>
    </div>
    <!--  end 顶部报名条  -->

    <!--  begin 顶部装修和定制切换  -->
    <div class="row">
        <a href="">装修服务</a>
        <a href="">定制家居</a>
    </div>
    <!--  end 顶部装修和定制切换  -->

    <!--  begin 定制流程  -->
    <div class="index-flow2 row">
        <img src="../../img/flow-1.png?v=4154f19c89" alt=""/>
    </div>
    <!--  end 定制流程  -->


    <!--  begin 0风险  -->
    <div class="row">
        <ul>
            <li>
                <div class="txt">
                    <h5>免费上门量尺</h5>
                    <p>免费上门、量房、报价</p>
                </div>
                <div class="active-txt">
                    <h5>免费上门量尺</h5>
                    <p>专业第三方监理分水电，泥木，油漆，竣工四节点验收...<a href="">详细>></a></p>
                </div>
                <span class="bg"></span>
                <span class="active-bg"></span>
            </li>
            <li>
                <div class="txt">
                    <h5>3套设计报价方案</h5>
                    <p>选择性价比最高的商家</p>
                </div>
                <div class="active-txt">
                    <h5>免费全程监管</h5>
                    <p>专业第三方监理分水电，泥木，油漆，竣工四节点验收...<a href="">详细>></a></p>
                </div>
                <span class="bg"></span>
                <span class="active-bg"></span>
            </li>
            <li>
                <div class="txt">
                    <h5>满意后再付款</h5>
                    <p>保障您的权益</p>
                </div>
                <div class="active-txt">
                    <h5>免费全程监管</h5>
                    <p>专业第三方监理分水电，泥木，油漆，竣工四节点验收...<a href="">详细>></a></p>
                </div>
                <span class="bg"></span>
                <span class="active-bg"></span>
            </li>
            <li>
                <div class="txt">
                    <h5>满意后再付款</h5>
                    <p>保障您的权益</p>
                </div>
                <div class="active-txt">
                    <h5>免费全程监管</h5>
                    <p>专业第三方监理分水电，泥木，油漆，竣工四节点验收...<a href="">详细>></a></p>
                </div>
                <span class="bg"></span>
                <span class="active-bg"></span>
            </li>
            <li>
                <div class="txt">
                    <h5>售后保障</h5>
                    <p>拒绝扯皮推诿、投诉无门</p>
                </div>
                <div class="active-txt">
                    <h5>免费全程监管</h5>
                    <p>专业第三方监理分水电，泥木，油漆，竣工四节点验收...<a href="">详细>></a></p>
                </div>
                <span class="bg"></span>
                <span class="active-bg"></span>
            </li>
        </ul>
    </div>
    <!--  end 0风险  -->

    <!--  begin 装修效果图  -->
    <div class="index-xiaoguo2 row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">装修效果图</a></h2>
            <span class="other-info pull-left">已有 32055909 位业主找到灵感</span>
            <a class="more" href="">查看更多</a>
        </div>
        <div class="xiaoguo-cont">
            <div class="cate-box">
                <a class="img" href=""><img src="../../img/xiaoguo-ad.jpg?v=53e8f7131e" alt=""/></a>
                <ul class="label-bar">
                    <li class="label-cell on"><a href="">中式装修</a></li>
                    <li class="label-cell"><a href="">LOFT</a></li>
                    <li class="label-cell"><a href="">现代简约</a></li>
                    <li class="label-cell"><a href="">东南亚风格</a></li>
                    <li class="label-cell"><a href="">美式乡村</a></li>
                    <li class="label-cell"><a href="">儿童房</a></li>
                    <li class="label-cell"><a href="">小户型</a></li>
                    <li class="label-cell"><a href="">韩式主义</a></li>
                    <li class="label-cell"><a href="">法式浪漫</a></li>
                    <li class="label-cell"><a href="">地中海美宅</a></li>
                </ul>
            </div>
            <div class="small-media-box">
                <ul>
                    <li>
                        <a class="img" href=""><img src="../../img/temp-img/xiaoguo-small1.jpg?v=3b6d35202b" alt=""/></a>
                        <a href=""><i></i></a>
                    </li>
                    <li class="big">
                        <a class="img" href=""><img src="../../img/temp-img/xiaoguo-big1.jpg?v=15be6e2523" alt=""/></a>
                    </li>
                    <li>
                        <a class="img" href=""><img src="../../img/temp-img/xiaoguo-big1.jpg?v=15be6e2523" alt=""/></a>
                    </li>
                    <li class="big">
                        <a class="img" href=""><img src="../../img/temp-img/xiaoguo-small1.jpg?v=3b6d35202b" alt=""/></a>
                    </li>
                </ul>
            </div>
            <div class="big-media-box">
                <a href=""><img src="../../img/temp-img/xiaoguo-big.jpg?v=7d42c4d1a3" alt=""/></a>
            </div>
        </div>
    </div>
    <!--  end 装修效果图  -->

    <!--  begin 装修攻略  -->
    <div class="index-gonglue row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">装修攻略</a></h2>
            <span class="other-info pull-left">已有 17840358 位业主学习到装修知识</span>
        </div>
        <div class="gonglue-cont">
            <div class="gonglue-cont-line line1 clearfix">
                <div class="title"><i class="myicon-gonglue1"></i><h5>装修百科</h5></div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修前</h4>
                    <div class="media-img-txtlist">
                        <a class="img" href=""><img src="../../img/gl-wenda1.jpg?v=fa49b10985" alt=""/></a>
                        <ul class="txtlist">
                            <li><a href="">装修问答</a></li>
                            <li><a href="">现代简约实木床该怎么选择</a></li>
                            <li><a href="">瓷砖拼贴电视背景墙好看吗</a></li>
                            <li><a href="">请问地暖管安装方法是怎样的</a></li>
                        </ul>
                    </div>
                </div>  
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修中</h4>
                    <div class="media-img-txtlist">
                        <a class="img" href=""><img src="../../img/gl-wenda2.jpg?v=dd8909acb0" alt=""/></a>
                        <ul class="txtlist">
                            <li><a href="">装修问答</a></li>
                            <li><a href="">现代简约实木床该怎么选择</a></li>
                            <li><a href="">瓷砖拼贴电视背景墙好看吗</a></li>
                            <li><a href="">请问地暖管安装方法是怎样的</a></li>
                        </ul>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修后</h4>
                    <div class="media-img-txtlist">
                        <a class="img" href=""><img src="../../img/gl-wenda3.jpg?v=a55450abe1" alt=""/></a>
                        <ul class="txtlist">
                            <li><a href="">装修问答</a></li>
                            <li><a href="">现代简约实木床该怎么选择</a></li>
                            <li><a href="">瓷砖拼贴电视背景墙好看吗</a></li>
                            <li><a href="">请问地暖管安装方法是怎样的</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gonglue-cont-line line2 clearfix">
                <div class="title"><i class="myicon-gonglue2"></i><h5>你问我答</h5></div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修流程</h4>
                    <div class="media-img-txtlist">
                        <a class="img" href=""><img src="../../img/gl-baike1.jpg?v=b9324e5c9d" alt=""/></a>
                        <ul class="txtlist">
                            <li><a href="">装修问答</a></li>
                            <li><a href="">现代简约实木床该怎么选择</a></li>
                            <li><a href="">瓷砖拼贴电视背景墙好看吗</a></li>
                            <li><a href="">请问地暖管安装方法是怎样的</a></li>
                        </ul>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>家装产品</h4>
                    <div class="media-img-txtlist">
                        <a class="img" href=""><img src="../../img/gl-baike2.jpg?v=8d60d9b75b" alt=""/></a>
                        <ul class="txtlist">
                            <li><a href="">装修问答</a></li>
                            <li><a href="">现代简约实木床该怎么选择</a></li>
                            <li><a href="">瓷砖拼贴电视背景墙好看吗</a></li>
                            <li><a href="">请问地暖管安装方法是怎样的</a></li>
                        </ul>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>家装设计</h4>
                    <div class="media-img-txtlist">
                        <a class="img" href=""><img src="../../img/gl-baike3.jpg?v=958bdc5832" alt=""/></a>
                        <ul class="txtlist">
                            <li><a href="">装修问答</a></li>
                            <li><a href="">现代简约实木床该怎么选择</a></li>
                            <li><a href="">瓷砖拼贴电视背景墙好看吗</a></li>
                            <li><a href="">请问地暖管安装方法是怎样的</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--  end 装修攻略  -->

    <!--  begin 小区案例  -->
    <div class="index-case row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">装修攻略</a></h2>
            <a class="more" href="">查看更多</a>
        </div>
        <div class="col-lg-4">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/case1.jpg?v=2ddc7e882b" alt=""/>
                    <a class="hide-txt">查看详情</a>
                </a>
                <span class="pull-right"><i class="icon-heart"></i>888</span>
                <div class="inner-imgtxt">
                    <a class="img pull-left" href=""><img src="../../img/temp-img/case-avatar.jpg?v=afd4801b11" alt=""/></a>
                    <p>谢女士<em>188m²</em></p>
                    <p>中德英伦联邦/12-18万</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/case1.jpg?v=2ddc7e882b" alt=""/>
                    <a class="hide-txt">查看详情</a>
                </a>
                <span class="pull-right"><i class="icon-heart"></i>888</span>
                <div class="inner-imgtxt">
                    <a class="img pull-left" href=""><img src="../../img/temp-img/case-avatar.jpg?v=afd4801b11" alt=""/></a>
                    <p>谢女士<em>188m²</em></p>
                    <p>中德英伦联邦/12-18万</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/case1.jpg?v=2ddc7e882b" alt=""/>
                    <a class="hide-txt">查看详情</a>
                </a>
                <span class="pull-right"><i class="icon-heart"></i>888</span>
                <div class="inner-imgtxt">
                    <a class="img pull-left" href=""><img src="../../img/temp-img/case-avatar.jpg?v=afd4801b11" alt=""/></a>
                    <p>谢女士<em>188m²</em></p>
                    <p>中德英伦联邦/12-18万</p>
                </div>
            </div>
        </div>
    </div>
    <!--  end 小区案例  -->

    <!--  begin 明星商家  -->
    <div class="index-corp row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">装修攻略</a></h2>
            <a class="more" href="">查看更多</a>
        </div>
        <div class="corp-item">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/corp-room1.jpg?v=9fb1a7337c" alt=""/>
                </a>
                <p>打破常规，才有好的设计</p>
                <div class="inner-imgtxt">
                    <a href="" class="img"><img class="pull-left" src="../../img/temp-img/corp-logo.jpg?v=f54c01872f" alt=""/></a>
                    <p><a href="">成都天怡美装饰工程有限公司</a></p>
                </div>
                <a href="">立即预约</a>
            </div>
        </div>
        <div class="corp-item">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/corp-room1.jpg?v=9fb1a7337c" alt=""/>
                </a>
                <p>打破常规，才有好的设计</p>
                <div class="inner-imgtxt">
                    <a href="" class="img"><img class="pull-left" src="../../img/temp-img/corp-logo.jpg?v=f54c01872f" alt=""/></a>
                    <p><a href="">成都天怡美装饰工程有限公司</a></p>
                </div>
                <a href="">立即预约</a>
            </div>
        </div>
        <div class="corp-item">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/corp-room1.jpg?v=9fb1a7337c" alt=""/>
                </a>
                <p>打破常规，才有好的设计</p>
                <div class="inner-imgtxt">
                    <a href="" class="img"><img class="pull-left" src="../../img/temp-img/corp-logo.jpg?v=f54c01872f" alt=""/></a>
                    <p><a href="">成都天怡美装饰工程有限公司</a></p>
                </div>
                <a href="">立即预约</a>
            </div>
        </div>
        <div class="corp-item">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/corp-room1.jpg?v=9fb1a7337c" alt=""/>
                </a>
                <p>打破常规，才有好的设计</p>
                <div class="inner-imgtxt">
                    <a href="" class="img"><img class="pull-left" src="../../img/temp-img/corp-logo.jpg?v=f54c01872f" alt=""/></a>
                    <p><a href="">成都天怡美装饰工程有限公司</a></p>
                </div>
                <a href="">立即预约</a>
            </div>
        </div>
        <div class="corp-item">
            <div class="media-base">
                <a href="" class="thumb">
                    <img src="../../img/temp-img/corp-room1.jpg?v=9fb1a7337c" alt=""/>
                </a>
                <p>打破常规，才有好的设计</p>
                <div class="inner-imgtxt">
                    <a href="" class="img"><img class="pull-left" src="../../img/temp-img/corp-logo.jpg?v=f54c01872f" alt=""/></a>
                    <p><a href="">成都天怡美装饰工程有限公司</a></p>
                </div>
                <a href="">立即预约</a>
            </div>
        </div>
    </div>
    <!--  end 明星商家  -->

    <!--  begin 家居品牌  -->
    <div class="index-brand row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">家具品牌</a></h2>
        </div>
        <div class="brand-cont">
            <ul class="clearfix">
                <li>
                    <a href="http://192.168.0.188/homejc001-new/pages-merchant/index.php"><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                    <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg?v=5aadf2b9b5" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
            </ul>
        </div>
    </div>
    <!--  end 家居品牌  -->

</div>
<?php //include "login-after.php"; ?>


<?php include "../footer.php"; ?>
</body>
</html>