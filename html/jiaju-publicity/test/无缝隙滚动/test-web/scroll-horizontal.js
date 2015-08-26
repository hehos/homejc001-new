void function(){
    var  speed = 10,//轮播速度
        slideBox = $("#slideBox"),
        tab = $("#box"),
        tab1 = $("#box1"),
        cWidth = tab1.width(),//轮播图总宽度
        MyMar = Marquee();
    tab1[0].innerHTML += tab1[0].innerHTML;
    //计时器，无限滚动
    function Marquee(){
        clearTimeout(MyMar);
        var l = (parseInt(tab.css("left")) || 0);
        //获取绝对值再比较
        if(Math.abs(l) >= cWidth){
            tab.css("left",0);
        }else{
            tab.css("left",l-1);
        }
        return MyMar = setTimeout(Marquee,speed);
    }
    //鼠标放上时：停止滚动
    slideBox.mouseenter(function(){
        if(flag){ //执行中防止干扰
            return false;
        }
        clearTimeout(MyMar);
    });
    //鼠标移开时：开始滚动
    slideBox.mouseleave(function(){
        if(flag){
            return false;
        }
        Marquee();
    });

    //向左还是向右移动
    var flag = false;
    function animl(p){
        if(flag){
            return false;
        }
        flag = true;
        clearTimeout(MyMar);//先停止动画
        var vLeft = parseInt(tab.css("left")) || 0; //获取当前位置
        var tWidth = slideBox.width(); //视口宽度
        var sp = 1000;//动画执行时间
        var sLeft =  p == "right" ? (vLeft+tWidth) : (vLeft-tWidth);//最后到达的位置
        var cLeft = 0;//转换位置
        //(实现无缝对接,防止断层)
        if(sLeft > 0){
            cLeft = (cWidth - vLeft);
            tab.css("left", -cLeft); //往前移动，则转换到对接点
            sLeft = -(cLeft-tWidth);//更新最后到达位置
            console.log("转移前对接点");
        }
        tab.animate({
            left : sLeft,
            speed : sp
        },function(){
            vLeft = (parseInt(tab.css("left")) || 0);//获取更新后的left
            if(Math.abs(vLeft) > cWidth){
                console.log("转移后对接点");
                tab.css("left",vLeft + cWidth); //往后移动，则转换为前面位置
            }
            Marquee();
            flag = false;
        });
    }
    $("#s_left").click(function(){
        animl("left");
    });
    $("#s_right").click(function(){
        animl("right");
    });
}();