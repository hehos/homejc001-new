<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/dist/css/pages-main/index.min.css"/>
</head>
<body>

<!-- 预约成功弹出提示 -->
<?php //include "../popup-form-yuyue.php"; ?>
<?php //include "../popup-yuyue-succeed.php"; ?>
<!--<div id="mask"></div>-->
<!-- 弹出表单 -->
<?php include "../fixed-bottom-form.php"; ?>
<?php include "../online-service.php"; ?>


<?php include "../header.php"; ?>
<div class="container">
    <!--  begin 头部banner  -->
    <div class="index-banner row">
        <div class="banner-form">
            <div class="form-tab row">
                <ul>
                    <li class="col-lg-3 on">
                        <a href="">免费<br/>量房</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                    <li class="col-lg-3">
                        <a href="">免费<br/>设计报价</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                    <li class="col-lg-3">
                        <a href="">免费<br/>监理</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                    <li class="col-lg-3">
                        <a href="">安装满意<br/>再付款</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                </ul>
            </div>
            <div class="form-state">
                <p>今日 <em>888</em> 户业主已报名</p>
            </div>
            <div class="form-cont">
                <div class="form-hd">
                    <p style="display: block;">10秒登记，免费获取3份专业设计方案</p>
                    <p style="display: none;">3套报价对比，获取更靠谱方案，拒绝超预算</p>
                    <p style="display: none;">专业监理免费上门，按照行业标准严格验收</p>
                    <p style="display: none;">免费检测15大项30小项，全面检测房屋质量</p>
                </div>
                <div class="form-line">
                    <input class="form-control" type="text" placeholder="您的称呼"/>
                </div>
                <div class="form-line">
                    <input class="form-control"  type="text" placeholder="您的电话"/>
                </div>
                <div class="form-line city col-2">
                    <select class="form-control" name="" id="">
                        <option value="">四川</option>
                        <option value="">重庆</option>
                    </select>
                    <select class="form-control" name="" id="">
                        <option value="">成都</option>
                        <option value="">绵阳</option>
                    </select>
                </div>
                <div class="form-line">
                    <button class="btn btn-lg btn-block u-main-btn" >立即预约</button>
                </div>
            </div>
            <div class="form-bottom">
                <p><i class="icon-caret-right"></i>风投C轮投资2亿美金，互联网装修领导者</p>
                <p><i class="icon-caret-right"></i>更专业的装修服务平台，800万业主的共同选择</p>
            </div>
        </div>

        <div class="banner-media">
                <!--     bootstrap 4       -->
<!--            <div id="carousel-example-generic" class="carousel slide banner-slider" data-ride="carousel">-->
<!--                <ol class="carousel-indicators">-->
<!--                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--                </ol>-->
<!--                <div class="carousel-inner" role="listbox">-->
<!--                    <div class="carousel-item active">-->
<!--                        <a href=""><img src="../../img/banner1.jpg" alt=""/></a>-->
<!--                    </div>-->
<!--                    <div class="carousel-item">-->
<!--                        <a href=""><img src="../../img/banner1.jpg" alt=""/></a>-->
<!--                    </div>-->
<!--                    <div class="carousel-item">-->
<!--                        <a href=""><img src="../../img/banner1.jpg" alt=""/></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
<!--                    <span class="icon-prev" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>-->
<!--                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
<!--                    <span class="icon-next" aria-hidden="true"></span>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
<!--            </div>-->


            <!--     bootstrap 3.3.5       -->
            <div id="carousel-example-generic" class="carousel slide banner-slider" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item carousel-item active">
                        <a href="http://192.168.0.188/homejc001-new/dist/html/pages-merchant/index.php"><img src="../../img/banner1.jpg" alt=""/></a>
                    </div>
                    <div class="item carousel-item">
                        <a href="http://192.168.0.188/homejc001-new/dist/html/pages-merchant/index.php"><img src="../../img/banner2.jpg" alt=""/></a>
                    </div>
                    <div class="item carousel-item">
                        <a href="http://192.168.0.188/homejc001-new/dist/html/pages-merchant/index.php"><img src="../../img/banner3.jpg" alt=""/></a>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="icon-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="icon-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="banner-bottom">
                <a href=""><img src="../../img/bz1-anquan.png" alt=""/></a>
                <a href=""><img src="../../img/bz2-zhiliang.png" alt=""/></a>
                <a href=""><img src="../../img/bz3-shouhou.png" alt=""/></a>
            </div>
        </div>
    </div>
    <!--  end 头部banner  -->

    <!--  begin 定制流程  -->
    <div class="index-flow row">
        <img src="../../img/flow.png" alt=""/>
    </div>
    <!--  end 定制流程  -->

    <!--  begin 热门产品及排行  -->
    <div class="index-hot row">
        <div class="hot-tab">
            <ul class="tabs-nav1">
                <li class="on"><a href="javascript:void(0);">厨柜厨具 <span>cupboard</span></a></li>
                <li><a href="javascript:void(0);">实木门窗 <span>gate</span></a></li>
                <li><a href="javascript:void(0);">定制衣柜 <span>floor</span></a></li>
            </ul>
        </div>
        <div class="hot-conts">
            <div class="hot-cates">
                <span class="left-btn">&lt;</span>
                <span class="right-btn">&gt;</span>
                <div class="hot-cate">
                    <div class="media-big-img hot-item">
                        <a href="" class="img">
                            <img src="../../img/temp-img/product2.jpg" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜1</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="media-btn u-circle-btn" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="img">
                            <img src="../../img/temp-img/product2.jpg" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜1</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="media-btn u-circle-btn" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="img">
                            <img src="../../img/temp-img/product2.jpg" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜1</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="media-btn u-circle-btn" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="hot-cate" style="display: none;">
                    <div class="media-big-img hot-item">
                        <a href="" class="img">
                            <img src="../../img/temp-img/product2.jpg" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜2</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="media-btn u-circle-btn" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="img">
                            <img src="../../img/temp-img/product2.jpg" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜2</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="media-btn u-circle-btn" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="img">
                            <img src="../../img/temp-img/product2.jpg" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜2</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="media-btn u-circle-btn" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hot-sort">
                <div class="sort-title">
                    <i class="myicon-sort"></i><h3>本月热度排行榜</h3>
                </div>
                <ul>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜1</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜1</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜1</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜1</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <ul style="display: none;">
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜2</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜2</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜2</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="img"><img src="../../img/temp-img/sort1.jpg" alt=""/></span>
                            <div class="media-cont">
                                <h4>奥佳厨柜2</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--  end 热门产品及排行  -->


    <!--  begin 装修效果图  -->
    <div class="index-xiaoguo row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">装修效果图</a></h2>
            <span class="other-info pull-left">已有 32055909 位业主找到灵感</span>
        </div>
        <div class="xiaoguo-cont">
            <div class="xiaoguo-bigimg">
                <div class="media-big-img xiaoguo-item">
                    <a href="" class="img">
                        <img style="width: 463px; height: 340px" src="../../img/temp-img/good-big.jpg" alt=""/>
                    </a>
                    <div class="media-cont tran-layer">
                        <h4 class="media-title"><a href="">中式设计</a></h4>
                        <p>防控打击防范借款人大煞风景卢卡斯的分</p>
                    </div>
                </div>
            </div>
            <div class="xiaoguo-smallimg">
                <div class="smallimg-left">
                        <div class="media-base xiaoguo-item colspan2">
                            <a href="" class="img">
                                <img style="width: 480px; height: 160px;" src="../../img/temp-img/good1.jpg" alt=""/>
                            </a>
                            <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                        </div>
                        <div class="media-base xiaoguo-item">
                            <a href="" class="img">
                                <img style="width: 233px; height: 160px;" src="../../img/temp-img/good1.jpg" alt=""/>
                            </a>
                            <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                        </div>
                        <div class="media-base xiaoguo-item last">
                            <a href="" class="img">
                                <img style="width: 233px; height: 160px;" src="../../img/temp-img/good1.jpg" alt=""/>
                            </a>
                            <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                        </div>
                </div>
                <div class="smallimg-right">
                    <div class="media-base xiaoguo-item rowspan2">
                        <a href="" class="img">
                            <img style="width: 223px; height: 340px;" src="../../img/temp-img/good1.jpg" alt=""/>
                        </a>
                        <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="xiaoguo-cate">
            <span class="title">美好家的空间</span>
            <ul>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate1"></span><br/><span>客厅</span>
                </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate2"></span><br/><span>卧室</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate3"></span><br/><span>餐厅</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate4"></span><br/><span>厨房</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate5"></span><br/><span>浴室</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate6"></span><br/><span>书房</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate7"></span><br/><span>儿童房</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate8"></span><br/><span>阳台</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate9"></span><br/><span>玄关</span>
                    </a></li>
                <li><a href="">
                        <span class="myicon-xiaoguo-cate10"></span><br/><span>庭院</span>
                    </a></li>
            </ul>
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
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="img" href=""><img src="../../img/gl-wenda1.jpg" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="img" href=""><img src="../../img/gl-wenda2.jpg" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="img" href=""><img src="../../img/gl-wenda3.jpg" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gonglue-cont-line line2 clearfix">
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="img" href=""><img src="../../img/gl-baike1.jpg" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="img" href=""><img src="../../img/gl-baike2.jpg" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-lg-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="img" href=""><img src="../../img/gl-baike3.jpg" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--  end 装修攻略  -->

    <!--  begin 家居品牌  -->
    <div class="index-brand row">
        <div class="index-title title-bar">
            <h2 class="title"><a href="">家具品牌</a></h2>
        </div>
        <div class="brand-cont">
            <ul class="clearfix">
                <li>
                    <a href="http://192.168.0.188/homejc001-new/pages-merchant/index.php"><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                    <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../../img/temp-img/pingpai.jpg" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
            </ul>
        </div>
    </div>
    <!--  end 家居品牌  -->

    <!--  bigen 友情链接  -->
    <?php include "../bottom-links.php"; ?>
    <!--  end 友情链接  -->
</div>
<?php //include "login-after.php"; ?>


<?php include "../footer.php"; ?>
</body>
</html>