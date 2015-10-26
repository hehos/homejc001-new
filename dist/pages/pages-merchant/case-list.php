<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/dist/css/pages-merchant/merchant.min.css?v=ea46597e8d"/>
</head>
<body>
<?php include "header2.php"; ?>

<div class="container">
    <div class="row case">
        <div class="col-lg-4">
            <div class="media-base">
                <a href="case-detail.php" class="thumbnail">
                    <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                </a>
                <h4 class="media-title"><a href="">图片标题</a></h4>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="media-base">
                <a href="case-detail.php" class="thumbnail">
                    <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                </a>
                <h4 class="media-title"><a href="">图片标题</a></h4>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="media-base">
                <a href="case-detail.php" class="thumbnail">
                    <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                </a>
                <h4 class="media-title"><a href="">图片标题</a></h4>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="media-base">
                <a href="case-detail.php" class="thumbnail">
                    <img src="../../img/temp-img/product1.jpg?v=bd99c5a26b" alt="">
                </a>
                <h4 class="media-title"><a href="">图片标题</a></h4>
            </div>
        </div>
    </div>
    <!--  分页  -->
    <div class="paging-bar">
        <div class="paging-list  ">
            <a class="prev" href="">上一页</a>
            <a href="">1</a>
            <a class="current" href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
            <a class="omit" href="">...</a>
            <a href="">100</a>
            <a href="">101</a>
            <a class="next" href="">下一页</a>
        </div>
        <div class="paging-form">
            <span>共<em>100</em>页</span>
            <span>到<input maxlength="6" type="number"/>页</span>
            <span><button>确定</button></span>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
</body>
</html>