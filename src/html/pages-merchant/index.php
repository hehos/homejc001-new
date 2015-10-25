<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-merchant/merchant.css"/>
</head>
<body>
<?php include "header.php"; ?>


<?php include "popup-form-yuyue.php"; ?>
<div id="mask"></div>

<div class="container">
    <!--  begin 头部banner  -->
    <div class="index-banner row">
        <div class="banner-media">
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
                        <a href=""><img src="../../img/pages-merchant/banner1.jpg?v=9efa0de820?v=778a40e37b" alt=""/></a>
                    </div>
                    <div class="item carousel-item">
                        <a href=""><img src="../../img/pages-merchant/banner1.jpg?v=9efa0de820?v=778a40e37b" alt=""/></a>
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
        </div>
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
    </div>
    <!--  end 头部banner  -->

    <!--  begin 量房、公司介绍  -->
    <div class="row clearfix liangfang-and-corp">
        <div class="pull-left liangfang-area">
            <div class="title-bar">
                <h2 class="title"><a href="">免费量房</a></h2>
                <a class="other-info pull-left">点击申请 ></a>
                <a class="more" href="">更多<i class=" icon-angle-right"></i></a>
            </div>
            <div class="liangfang-cont">
                <div class="scrolltable-warp">
                    <table id="scrolltableHead" class="scrolltableHead"></table>
                    <div id="scrolltable">
                        <div id="scrolltable1">
                            <table class="">
                                <thead>
                                <tr>
                                    <th>业主</th>
                                    <th>区域</th>
                                    <th>户型</th>
                                    <th>面积</th>
                                    <th>预算</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                <tr>
                                    <td>张三</td><td>住宅公寓</td><td>全包</td><td>156㎡</td><td>5-8万</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="scrolltable2"></div>
                    </div>
                </div>

                <script src="http://192.168.0.188/homejc001-new/src/js/scroll-vertical.js?v=ac6696f350"></script>
                <script>
                    $(".scrolltable-warp").scrollTable({rows: 6});
                </script>
            </div>
        </div>
        <div class="pull-right corp-area">
            <div class="title-bar">
                <h2 class="title"><a href="">公司介绍</a></h2>
            </div>
            <div class="corp-cont">
                <p>
                    成都禾木艺景装饰工程有限公司创建设计工作室已有10年之余，属建筑装饰工程施工设计乙级，本公司注册资金100万元，
                    主营住宅装饰装修和酒店、宾馆、会所、商场、展厅办公楼等公共空间设计和施工，兼营家具制作、建筑材料软装配饰等产业。
                </p>
                <p>
                    从业人员40人，其中拥有高端室内设计师10人，项目经理和工程监理20多名，技术工人400多名，
                    本公司为天府新区建筑装饰协会会员单位公司锐意进取，公司定位于整体装修搭配,以完善客户能享受到新时代生活的服务；
                    以手绘为亲和工具、以家居文化引导为目的家装文化展，拉近设计师与客户距离，贴近客户需求，创造和谐家居，
                    大大地提升了客户的家居生活品质；公司将设计师送至中西展会中，拓展其眼见，吸取装饰艺术的精髓，以形成的国际化设计理念，
                    不断地提高企业的经营管理和服务水平。
                </p>
            </div>
        </div>
    </div>
    <!--  end 量房、公司介绍  -->


    <!--  begin 产品展示  -->
     <div class="row product">
         <div class="title-bar">
             <h2 class="title"><a href="">免费量房</a></h2>
         </div>
         <div class="product-list">
             <div class="col-lg-4">
                 <div class="media-base">
                     <a href="" class="thumbnail">
                         <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                     </a>
                     <h4 class="media-title"><a href="">图片标题</a></h4>
                     <p class="media-explain"><span class="pull-right">预算：30000元</span>风格：欧式风格</p>
                     <a class="media-btn u-circle-btn" href="">约我 <br><i class=" icon-angle-down"></i></a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="media-base">
                     <a href="" class="thumbnail">
                         <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                     </a>
                     <h4 class="media-title"><a href="">图片标题</a></h4>
                     <p class="media-explain"><span class="pull-right">预算：30000元</span>风格：欧式风格</p>
                     <a class="media-btn u-circle-btn" href="">约我 <br><i class=" icon-angle-down"></i></a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="media-base">
                     <a href="" class="thumbnail">
                         <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                     </a>
                     <h4 class="media-title"><a href="">图片标题</a></h4>
                     <p class="media-explain"><span class="pull-right">预算：30000元</span>风格：欧式风格</p>
                     <a class="media-btn u-circle-btn" href="">约我 <br><i class=" icon-angle-down"></i></a>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="media-base">
                     <a href="" class="thumbnail">
                         <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                     </a>
                     <h4 class="media-title"><a href="">图片标题</a></h4>
                     <p class="media-explain"><span class="pull-right">预算：30000元</span>风格：欧式风格</p>
                     <a class="media-btn u-circle-btn" href="">约我 <br><i class=" icon-angle-down"></i></a>
                 </div>
             </div>
         </div>
     </div>
    <!--  end 产品展示  -->


    <!--  begin 案例展示  -->
    <div class="row case">
        <div class="title-bar">
            <h2 class="title"><a href="">案例展示</a></h2>
        </div>
        <div class="case-list">
            <div class="col-lg-4">
                <div class="media-base">
                    <a href="" class="thumbnail">
                        <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                    </a>
                    <h4 class="media-title"><a href="">图片标题</a></h4>
                    <p class="media-explain">案例简单介绍</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media-base">
                    <a href="" class="thumbnail">
                        <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                    </a>
                    <h4 class="media-title"><a href="">图片标题</a></h4>
                    <p class="media-explain">案例简单介绍</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="media-base">
                    <a href="" class="thumbnail">
                        <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                    </a>
                    <h4 class="media-title"><a href="">图片标题</a></h4>
                    <p class="media-explain">案例简单介绍</p>
                </div>
            </div>
        </div>
    </div>
    <!--  end 案例展示   -->
 </div>

<?php include "footer.php"; ?>
</body>
</html>