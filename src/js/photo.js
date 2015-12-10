/**
 * Created by hehui on 2015/12/10.
 */

//获取对象
var oPhoto = document.getElementById('photo');
var oBigImg = oPhoto.getElementsByTagName("div")[0];
var oListImg = document.getElementById('listImg');
var oImgDiv = oListImg.getElementsByTagName("div")[0];

// 缩略图按钮的左右切换
var oPrev = oListImg.getElementsByTagName('p')[0];
var oNext = oListImg.getElementsByTagName('p')[1];

//大图按钮的左右切换
var oPrevCurrent = document.getElementById("ImgPrev");
var oNextCurrent = document.getElementById("ImgNext");
//大图扩大区域切换元素
var oPrevSpan = oBigImg.getElementsByTagName("span")[0];
var oNextSpan = oBigImg.getElementsByTagName("span")[1];


var oUl = oListImg.getElementsByTagName('ul')[0];
var oLis = oUl.getElementsByTagName('li');

//显示数量
var showNum = 5;
var num = 0;

var i, len = oLis.length;
//设置缩略图单元的间距
var liMargin = 3;//3px


var showHeightVal = parseInt(getBystyle(oListImg, "height"));//548
//alert(showHeightVal);


var showHeight = showHeightVal - oPrev.offsetHeight - oNext.offsetHeight;//548 - 30 - 30 = 488

//设置相册缩略图的图片的平均宽度。
// 注意：多加一个liMargin的原因是因为css的margin值上下是相互抵消，且尾部的margin不能抵消所以要多一个liMargin值
var liHeight = (showHeight - liMargin * (showNum + 1)) / showNum;
oUl.style.height = (liHeight + liMargin) * len + liMargin + "px";
oImgDiv.style.height = showHeight + "px";

var liUseHeight = liHeight + liMargin;

//需要隐藏的li数量。
var iTar = len - showNum;//3

// 大图扩大点击区域 的 逻辑处理
oPrevSpan.style.height = oBigImg.offsetHeight + "px";
oNextSpan.style.height = oBigImg.offsetHeight + "px";
// 设置相册大图的切换按钮垂直居中显示
var bigBtnOffsetTop = (oBigImg.offsetHeight - (oPrevCurrent||oNextCurrent).offsetHeight)/2 + "px";
oPrevCurrent.style.top = oNextCurrent.style.top = bigBtnOffsetTop;
if(oPrevCurrent) {
    oPrevSpan.style.display = "inline-block";
}
if(oNextCurrent) {
    oNextSpan.style.display = "inline-block";
}

oPrevSpan.onmousemove = function() {
    oPrevCurrent.style.visibility = "visible";
    // 计算大图上的左右图标居中显示
//		setTimeout(function() { oPrevCurrent.style.display = "none" }, 1000);
}
oPrevSpan.onmouseout = function() {
    oPrevCurrent.style.visibility = "hidden";
}

oNextSpan.onmousemove = function() {
    oNextCurrent.style.visibility = "visible";
    // 设置下一个切换图标在1秒后消失
//		setTimeout(function() { oNextCurrent.style.display = "none" }, 1000);
}
oNextSpan.onmouseout = function() {
    oNextCurrent.style.visibility = "hidden";
}


//鼠标点击相册缩略图的事件  显示当前的缩略图可见
for(i = 0; i < len; i++) {
    // 设置缩略图的尺寸
    oLis[i].style.height = liHeight + "px";
    oLis[i].style.margin = liMargin + "px" + " 0";

    // 下面的逻辑是计算当前选中缩略图在缩略图中居中显示
    // 获取li元素的className
    var liClassName = oLis[i].className;
    // 开始移动的零界位置。
    var moveZeroNum = parseInt(showNum/2);
    // 移动的三个条件。
    if(liClassName.match("on") && i > moveZeroNum && len > showNum) {
        // 移动多少个li的数量
        var moveNum = 0;

        // 按照常规来移动
        if(len - i > moveZeroNum) {
            // 计算移动多少。
            moveNum = i - moveZeroNum;
            oUl.style.top = -moveNum * liUseHeight + "px";
            // 在最后几个不需要按照常规来移动的
        } else {
            moveNum = iTar;
            oUl.style.top = -moveNum * liUseHeight + "px";
        }
        num = moveNum;
    }

}

// 鼠标移上缩略图元素时所有事件注册
oPhoto.onmouseover = allEvent;
// 鼠标移出缩略图元素时取消上下键盘的事件
oPhoto.onmouseout = function() {
    onkeydownCancel();
    onmousewheelDisabled(true);
}

//
////  相册大图上的所有事件
//oBigImg.onmouseover = bigImgEvent;
//// 鼠标移出缩略图元素时取消上下键盘的事件
//oBigImg.onmouseout = onkeydownCancel;

/* 缩略图的移动效果逻辑  */
function move(obj, iTarget) {
    clearInterval(obj.timer);
    obj.timer = setInterval(function() {
        var speed = (iTarget - obj.offsetTop) / 10;
        if (obj.offsetTop == iTarget) {
            clearInterval(obj.timer);
        } else {
            obj.style.top = obj.offsetTop + speed + 'px';
        }
    }, 30);
}
function next() {
    if (num < iTar && num >= 0) {
        num++;
        move(oUl, -num * liUseHeight);
    }
}

function prev() {
    if (num <= iTar && num > 0) {
        num--;
        move(oUl, -num * liUseHeight);
    }
}


// 相册大图左右切换效果逻辑
function bigPrev() {
    if(oPrevCurrent) {
        var aUrl = oPrevCurrent.getAttribute("href");
    }
    window.location.href= aUrl;
}
function bigNext() {
    if(oNextCurrent) {
        var aUrl = oNextCurrent.getAttribute("href");
    }
    window.location.href= aUrl;
}


/* 相册事件整合。 */
function allEvent() {
    // 注册键盘按下事件
    document.onkeydown = keydownFunc;
    /* 注册缩略图鼠标滚动事件 */
    if (oListImg.addEventListener) {//火狐
        oListImg.addEventListener('DOMMouseScroll', scrollFunc, false);
    }//W3C
    oListImg.onmousewheel = scrollFunc;

    //注册相册大图鼠标滚动事件
//	if (oBigImg.addEventListener) {//火狐
//		oBigImg.addEventListener('DOMMouseScroll', scrollFunc_big, false);
//	}//W3C
//	oBigImg.onmousewheel = scrollFunc_big;

    // 注册缩略图按钮切换事件
    oNext.onclick = next;
    oPrev.onclick = prev;

    // 注册大图左右切换按钮事件
    oPrevSpan.onclick = bigPrev;
    oNextSpan.onclick = bigNext;
}

// 鼠标按下事件
function keydownFunc(e) {
    var currKey = keyFunc(e);
    switch(currKey) {
        case 37: //left
            bigPrev(); break;
        case 38: //up
            prev(); break;
        case 39: //right
            bigNext(); break;
        case 40: //down
            next(); break;
    }
    (e || window.event).preventDefault();
}

function onkeydownCancel () {
    document.onkeydown = function(e) {
        var currKey = keyFunc(e);
        if (currKey == 40 || currKey == 38) {
            currKey.returnValue == false;
        }
    }
}

// 鼠标滚轮事件
function scrollFunc(e) {
    e = e || window.event;
    if (e.wheelDelta) {//IE/Opera/Chrome
        e.wheelDelta < 0 ? next() : prev();
    } else if (e.detail) {//Firefox
        e.detail < 0 ? prev() : next();
    }
    onmousewheelDisabled(false);
    if(e.preventDefault());
}

function scrollFunc_big(e) {
    e = e || window.event;
    if (e.wheelDelta) {//IE/Opera/Chrome
        e.wheelDelta < 0 ? bigNext() : bigPrev();
    } else if (e.detail) {//Firefox
        e.detail < 0 ? bigPrev() : bigNext();
    }
    onmousewheelDisabled(false);
    if(e.preventDefault());
}

// 获取键盘的键值。
function keyFunc(e) {
    var e = e || event;
    return e.keyCode || e.which || e.charCode;
}


//  取消默认的鼠标滚轮事件
//  该方法兼容滚动事件IE8不支持preventDefault方法
function onmousewheelDisabled(T_F) {
    if (oListImg.addEventListener) {//火狐
        // 返回false表示什么都不操作
        document.body.addEventListener('DOMMouseScroll', function() { return T_F; });
    }
    //W3C
    document.onmousewheel = function() { return T_F; }	//返回false表示什么都不操作
}


/*获取dom对象指定属性的值*/
function getBystyle(obj, name) {
    if (obj.currentStyle) {
        return obj.currentStyle[name];
    } else {
        return getComputedStyle(obj, false)[name];
    }
}



//function parseVal(obj, attr) {
//	var valNum = parseInt(getBystyle(obj, attr));
//	if(isNaN(valNum)) {
//		return 0;
//	} else { return valNum; }
//}

//// 获取元素的margin值
//function getMarginValue(obj, attr) {
//	var margin = parseVal(obj, attr);
//	return margin;
//}
//
///* 获取元素的所有宽度：width、border-width、padding、margin */
//function getAllWidth(obj) {
//	var width1 = parseVal(obj, "width");
//	var width2 = parseVal(obj, "border-left-width") +
//		parseVal(obj, "border-right-width");
//	var width3 = parseVal(obj, "padding-left") +
//		parseVal(obj, "padding-right");
//	var width4 = parseVal(obj, "margin-left") +
//		parseVal(obj, "margin-right");
//	return width1 + width2 + width3 + width4;
//}