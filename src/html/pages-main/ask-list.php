<!DOCTYPE html>
<html>
<head lang="en">
    <?php include "../head-resource.php"; ?>
    <link rel="stylesheet" href="http://192.168.0.188/homejc001-new/src/css/pages-main/baike.css"/>
</head>
<body>
<?php include "../header.php"; ?>

<!--  页面位置  -->
<?php include "../location.php"; ?>

<div class="container">

    <!--  头部分类  -->
    <div class="row">
        <?php include "ask-wg-cate.php"; ?>
    </div>

    <!--  主体内容  -->
    <div class="row clearfix">
        <!--  左侧内容  -->
        <div class="layout-main pull-left">

            <!--  搜索框  -->
            <?php include "ask-wg-search.php"; ?>


            <!--  问答列表  -->
            <div class="ask-list-box">
                <div class="ask-list-tabs">
                    <ul class="tabs-base">
                        <li class="on"><a href=""><i></i>以解决问题</a></li>
                        <li><a href=""><i></i>待解决问题</a></li>
                    </ul>
                </div>

                <div class="ask-list">
                    <ul class="list-content">
                        <li class="list-group-item">
                            <div class="right-info"><span><i></i>回答数：<em>20</em>条</span><span>发布于：<em>7</em>天前</span></div>
                            <h4 class="list-group-item-title"><a href=""> <em>厨卫电器</em>厨房单水槽尺寸多少合适</a></h4>
                            <p class="list-group-item-text"><b>最新回答：</b>不锈钢水槽尺寸还是比较标准的，一般的尺寸就是单槽60*45cm、50*40cm是比较小型的；双槽的尺</p>
                        </li>
                        <li class="list-group-item">
                            <div class="right-info"><span><i></i>回答数：<em>20</em>条</span><span>发布于：<em>7</em>天前</span></div>
                            <h4 class="list-group-item-title"><a href="">[<em>厨卫电器</em>]厨房单水槽尺寸多少合适</a></h4>
                            <p class="list-group-item-text"><b>最新回答：</b>不锈钢水槽尺寸还是比较标准的，一般的尺寸就是单槽60*45cm、50*40cm是比较小型的；双槽的尺</p>
                        </li>
                        <li class="list-group-item">
                            <div class="right-info"><span><i></i>回答数：<em>20</em>条</span><span>发布于：<em>7</em>天前</span></div>
                            <h4 class="list-group-item-title"><a href="">[<em>厨卫电器</em>]厨房单水槽尺寸多少合适</a></h4>
                            <p class="list-group-item-text"><b>最新回答：</b>不锈钢水槽尺寸还是比较标准的，一般的尺寸就是单槽60*45cm、50*40cm是比较小型的；双槽的尺</p>
                        </li>
                        <li class="list-group-item">
                            <div class="right-info"><span><i></i>回答数：<em>20</em>条</span><span>发布于：<em>7</em>天前</span></div>
                            <h4 class="list-group-item-title"><a href="">[<em>厨卫电器</em>]厨房单水槽尺寸多少合适</a></h4>
                            <p class="list-group-item-text"><b>最新回答：</b>不锈钢水槽尺寸还是比较标准的，一般的尺寸就是单槽60*45cm、50*40cm是比较小型的；双槽的尺</p>
                        </li>
                    </ul>
                </div>

                <div class="paging-bar divide">
                    <div class="paging-list">
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



        </div>
        <!--  右侧内容   -->
        <div class="layout-side pull-right">

            <?php include "ask-wg-side-cont.php"; ?>

        </div>
    </div>


</div>

<?php include "../footer.php"; ?>
</body>
</html>  