<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "page-head.php"; ?>
    <link rel="stylesheet" href="../css/index.css"/>
</head>
<body>

<!-- 预约成功弹出提示 -->
<?php //include "popup-yuyue-succeed.php"; ?>
<!-- 弹出表单 -->
<?php include "popup-form-yuyue.php"; ?>
<div id="mask"></div>



<?php include "header.php"; ?>
<div class="container">
    <!--  begin 头部banner  -->
    <div class="index-banner row">
        <div class="banner-left-form">
            <div class="form-tab">
                <ul class="row">
                    <li class="col-xl-3 on">
                        <a href="">免费<br/>量房</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                    <li class="col-xl-3">
                        <a href="">免费<br/>设计报价</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                    <li class="col-xl-3">
                        <a href="">免费<br/>监理</a>
                        <i class="arrows-down icon-sort-down"></i>
                    </li>
                    <li class="col-xl-3">
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
                <div class="form_line">
                    <input class="form-control" type="text" placeholder="您的称呼"/>
                </div>
                <div class="form_line">
                    <input class="form-control"  type="text" placeholder="您的电话"/>
                </div>
                <div class="form_line city">
                    <select class="form-control" name="" id="">
                        <option value="">四川</option>
                        <option value="">重庆</option>
                    </select>
                    <select class="form-control" name="" id="">
                        <option value="">成都</option>
                        <option value="">绵阳</option>
                    </select>
                    <select class="form-control" name="" id="">
                        <option value="">锦江区</option>
                        <option value="">金牛区</option>
                    </select>
                </div>
                <div class="form_line city col-2">
                    <select class="form-control" name="" id="">
                        <option value="">四川</option>
                        <option value="">重庆</option>
                    </select>
                    <select class="form-control" name="" id="">
                        <option value="">成都</option>
                        <option value="">绵阳</option>
                    </select>
                </div>
                <div class="form_line">
                    <button class="form-control form-control-lg" >立即预约</button>
                </div>
            </div>
            <div class="form-bottom">
                <p>风投C轮投资2亿美金，互联网装修领导者</p>
                <p>更专业的装修服务平台，800万业主的共同选择</p>
            </div>
        </div>
        <div class="banner-right-media">
            <div class="banner-slider">
                <a style="" href=""><img src="../img/banner1.png" alt=""/></a>
                <a style="display: none;" href=""><img src="" alt=""/></a>
                <a style="display: none;" href=""><img src="" alt=""/></a>
            </div>
            <div class="banner-bottom">
                <a href=""><img src="../img/zuianquan.png" alt=""/></a>
                <a href=""><img src="../img/baozhiliang.png" alt=""/></a>
                <a href=""><img src="../img/baoshouhou.png" alt=""/></a>
            </div>
        </div>
    </div>
    <!--  end 头部banner  -->

    <!--  begin 定制流程  -->
    <div class="index-flow row">
        <img src="../img/flow.png" alt=""/>
    </div>
<!--    <div class="index-flow">-->
<!--        <div class="index-title">-->
<!--            <h2><a href="">定制流程</a></h2>-->
<!--        </div>-->
<!--        <div>-->
<!--            <ul>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <div><img src="" alt=""/></div>-->
<!--                        <p class="title">免费报名</p>-->
<!--                        <p>免费报名，推荐3家对比，选<em>性价比最高的</em>商家</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <div><img src="" alt=""/></div>-->
<!--                        <p class="title">上门服务</p>-->
<!--                        <p>免费 <em>上门</em>量房，报价</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <div><img src="" alt=""/></div>-->
<!--                        <p class="title">三方签约</p>-->
<!--                        <p>平台、野猪、商家 <em>3方协议</em>保障您的权益</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <div><img src="" alt=""/></div>-->
<!--                        <p class="title">全程监管</p>-->
<!--                        <p>全程<em>免费监管</em>安装满意再付款</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">-->
<!--                        <div><img src="" alt=""/></div>-->
<!--                        <p class="title">售后保障</p>-->
<!--                        <p>投诉<em>5分钟</em>相应 <em>100%</em>解决，有问题，九正管，九正赔</p>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
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
                        <a href="" class="thumbnail">
                            <img src="../img/temp-img/good2.png" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜1</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="btn-link" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="thumbnail">
                            <img src="../img/temp-img/good2.png" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜1</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="btn-link" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="thumbnail">
                            <img src="../img/temp-img/good2.png" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜1</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="btn-link" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="hot-cate" style="display: none;">
                    <div class="media-big-img hot-item">
                        <a href="" class="thumbnail">
                            <img src="../img/temp-img/good2.png" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜2</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="btn-link" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="thumbnail">
                            <img src="../img/temp-img/good2.png" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜2</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="btn-link" href="">约我 <br/><i class=" icon-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="media-big-img hot-item">
                        <a href="" class="thumbnail">
                            <img src="../img/temp-img/good2.png" alt=""/>
                        </a>
                        <div class="media-cont tran-layer">
                            <h4 class="media-title"><a href="">实木定制木柜2</a></h4>
                            <p>价格区间：1580-1980元/延米</p>
                            <a class="btn-link" href="">约我 <br/><i class=" icon-angle-down"></i></a>
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
                            <img src="../img/temp-img/sort1.png" alt=""/>
                            <div class="media-cont">
                                <h4>奥佳厨柜1</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../img/temp-img/sort1.png" alt=""/>
                            <div class="media-cont">
                                <h4>奥佳厨柜1</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../img/temp-img/sort1.png" alt=""/>
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
                            <img src="../img/temp-img/sort1.png" alt=""/>
                            <div class="media-cont">
                                <h4>奥佳厨柜2</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../img/temp-img/sort1.png" alt=""/>
                            <div class="media-cont">
                                <h4>奥佳厨柜2</h4>
                                <div class="link-text">点击进入 ></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../img/temp-img/sort1.png" alt=""/>
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
                    <a href="" class="thumbnail">
                        <img style="width: 463px; height: 340px" src="../img/temp-img/good-big.png" alt=""/>
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
                            <a href="" class="thumbnail">
                                <img style="width: 480px; height: 160px;" src="../img/temp-img/good1.png" alt=""/>
                            </a>
                            <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                        </div>
                        <div class="media-base xiaoguo-item">
                            <a href="" class="thumbnail">
                                <img style="width: 233px; height: 160px;" src="../img/temp-img/good1.png" alt=""/>
                            </a>
                            <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                        </div>
                        <div class="media-base xiaoguo-item">
                            <a href="" class="thumbnail">
                                <img style="width: 233px; height: 160px;" src="../img/temp-img/good1.png" alt=""/>
                            </a>
                            <h4 class="media-title tran-layer"><a href="">标题</a></h4>
                        </div>
                </div>
                <div class="smallimg-right">
                    <div class="media-base xiaoguo-item rowspan2">
                        <a href="" class="thumbnail">
                            <img style="width: 223px; height: 340px;" src="../img/temp-img/good1.png" alt=""/>
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
                        <span class="myicon-xiaoguo-cate1"></span><br/><div>客厅</span>
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
                <div class="gonglue-cont-item col-xl-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="thumbnail" href=""><img src="../img/temp-img/zhuangxiuzhishi.png" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-xl-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="thumbnail" href=""><img src="../img/temp-img/zhuangxiuzhishi.png" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-xl-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="thumbnail" href=""><img src="../img/temp-img/zhuangxiuzhishi.png" alt=""/></a>
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
                <div class="gonglue-cont-item col-xl-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="thumbnail" href=""><img src="../img/temp-img/zhuangxiuzhishi.png" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-xl-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="thumbnail" href=""><img src="../img/temp-img/zhuangxiuzhishi.png" alt=""/></a>
                        <div class="media-cont">
                            <a href="">装修问答</a>
                            <a href="">现代简约实木床该怎么选择</a>
                            <a href="">瓷砖拼贴电视背景墙好看吗</a>
                            <a href="">请问地暖管安装方法是怎样的</a>
                        </div>
                    </div>
                </div>
                <div class="gonglue-cont-item col-xl-4">
                    <h4>装修问答</h4>
                    <div class="media-txt-list">
                        <a class="thumbnail" href=""><img src="../img/temp-img/zhuangxiuzhishi.png" alt=""/></a>
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
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                    <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
                <li>
                    <a href=""><img src="../img/temp-img/pingpai.png" alt=""/>
                        <div class="title">红参</div>
                    </a></li>
            </ul>
        </div>
    </div>
    <!--  end 家居品牌  -->

    <!--  bigen 友情链接  -->
    <div id="links" class="row">
        <div class="links-tab">
            <ul class="tabs-nav1">
                <li class="on"><a href="">友情链接</a></li>
                <li><a href="">热点标签</a></li>
            </ul>
            <span>友情链接请联系QQ：2851798612</span>
        </div>
        <div class="links-cont">
            <ul>
                <li><a href="http://piaojia.114piaowu.com/" style="color: #999" title="火车票票价查询" target="_blank">火车票票价查询</a></li>
                <li><a href="http://tianqi.114la.com/" style="color: #999" title="天气预报" target="_blank">天气预报</a></li>
                <li><a href="http://b2b.hc360.com/" style="color: #999" title="慧聪网" target="_blank">慧聪网</a></li>
                <li><a href="http://www.liminjie714.com/" style="color: #999" title="714装修网" target="_blank">714装修网</a></li>
                <li><a href="http://www.xiugei.com/" style="color: #999" title="装修风格" target="_blank">装修风格</a></li>
                <li><a href="http://www.qixiangwang.cn/" style="color: #999" title="天气预报查询一周" target="_blank">天气预报查询一周</a></li>
                <li><a href="http://news.wbiao.cn/" style="color: #999" title="手表网" target="_blank">手表网</a></li>
                <li><a href="http://www.ymt.com/" style="color: #999" title="一亩田农业网" target="_blank">一亩田农业网</a></li>
                <li><a href="http://beijing.tianqi.com/" style="color: #999" title="北京天气网" target="_blank">北京天气网</a></li>
                <li><a href="http://bj.lianjia.com/" style="color: #999" title="北京二手房网" target="_blank">北京二手房网</a></li>
                <li><a href="http://www.zjtcn.com/" style="color: #999" title="工程造价" target="_blank">工程造价</a></li>
                <li><a href="http://huochepiao.tieyou.com/" style="color: #999" title="火车票查询" target="_blank">火车票查询</a></li>
                <li><a href="http://shanghai.liebiao.com/" style="color: #999" title="上海分类信息" target="_blank">上海分类信息</a></li>
                <li><a href="http://banbao.chazidian.com/" style="color: #999" title="板报网" target="_blank">板报网</a></li>
                <li><a href="http://www.huiyi8.com/" style="color: #999" title="素材网" target="_blank">素材网</a></li>
                <li><a href="http://tool.cncn.com/" style="color: #999" title="欣欣百宝箱" target="_blank">欣欣百宝箱</a></li>
                <li><a href="http://yl.szhk.com/" style="color: #999" title="娱乐新闻" target="_blank">娱乐新闻</a></li>
                <li><a href="http://www.aiuw.com/" style="color: #999" title="装修设计" target="_blank">装修设计</a></li>
                <li><a href="http://www.jia360.com" style="color: #999" title="家居网" target="_blank">家居网</a></li>
                <li><a href="http://sc.jb51.net/" style="color: #999" title="素材中国" target="_blank">素材中国</a></li>
                <li><a href="http://gz.ganji.com/" style="color: #999" title="广州赶集网" target="_blank">广州赶集网</a></li>
                <li><a href="http://home.focus.cn/" style="color: #999" title="家居装修" target="_blank">家居装修</a></li>
                <li><a href="http://www.ebieshu.com/" style="color: #999" title="别墅设计图纸" target="_blank">别墅设计图纸</a></li>
                <li><a href="http://home.jc001.cn" style="color: #999" title="九正家居网" target="_blank">九正家居网</a></li>
            </ul>
            <ul>
                <li><a href="http://product.pchouse.com.cn/" style="color: #999" title="家居产品库" target="_blank">家居产品库</a></li>
                <li><a href="http://china.wbiao.com.cn/" style="color: #999" title="腕表" target="_blank">腕表</a></li>
                <li><a href="http://www.bidchance.com/" style="color: #999" title="中国招标网" target="_blank">中国招标网</a></li>
                <li><a href="http://home.fang.com/" style="color: #999" title="房天下家居" target="_blank">房天下家居</a></li>
                <li><a href="http://gz.focus.cn/" style="color: #999" title="广州房产" target="_blank">广州房产</a></li>
                <li><a href="http://tuku.jia.com/" style="color: #999" title="装修效果图" target="_blank">装修效果图</a></li>
                <li><a href="http://www.qianlima.com/" style="color: #999" title="千里马招标网" target="_blank">千里马招标网</a></li>
                <li><a href="http://www.chinamacro.cn/" style="color: #999" title="热水器" target="_blank">热水器</a></li>
                <li><a href="http://www.b2b110.com/" style="color: #999" title="b2b" target="_blank">b2b</a></li>
                <li><a href="http://www.525j.com.cn" style="color: #999" title="我爱我家装修网" target="_blank">我爱我家装修网</a></li>
                <li><a href="http://bj.fang.anjuke.com/" style="color: #999" title="北京房产网" target="_blank">北京房产网</a></li>
                <li><a href="http://www.jiameng.com/" style="color: #999" title="加盟网" target="_blank">加盟网</a></li>
                <li><a href="http://nanjing.anjuke.com/" style="color: #999" title="南京房产网" target="_blank">南京房产网</a></li>
                <li><a href="http://www.shejiben.com/" style="color: #999" title="室内设计" target="_blank">室内设计</a></li>
                <li><a href="http://www.tuku.cn/" style="color: #999" title="图片大全" target="_blank">图片大全</a></li>
                <li><a href="http://xiaoguotu.to8to.com/" style="color: #999" title="装修效果图" target="_blank">装修效果图</a></li>
                <li><a href="http://m.home.jc001.cn/" style="color: #999" title="九正家居手机站" target="_blank">九正家居手机站</a></li>
                <li><a href="http://www.tobosu.com/" style="color: #999" title="装修网" target="_blank">装修网</a></li>
                <li><a href="http://www.517.cn/" style="color: #999" title="沈阳二手房" target="_blank">沈阳二手房</a></li>
                <li><a href="http://www.bzw315.com/" style="color: #999" title="装修网" target="_blank">装修网</a></li>
                <li><a href="http://www.leleju.com/" style="color: #999" title="乐乐居" target="_blank">乐乐居</a></li>
            </ul>
        </div>
    </div>
    <!--  end 友情链接  -->
</div>

<?php include "footer.php"; ?>
</body>
</html>