/**
 * Created by hui on 2015/9/15.
 */


$(document).ready(function(){
    // 处理IE浏览器input，textarea 文本提示
    if ((navigator.userAgent.indexOf('MSIE') >= 0)
        && (navigator.userAgent.indexOf('Opera') < 0)){
        var forms = $("[placeholder]");
        for(var i = 0; i < forms.length; i++) {
            $(forms[i]).val($(forms[i]).attr("placeholder"));
            $(forms[i]).attr("placeholder", "");
        }
    }

    // 处理页面内容高度小于窗口高度时，将body的高度强制拉升为窗口的高度
    if($("body").height() < $(window).height()) {
        $("body").height($(window).height());
        $("#footer").css({
            "position": "absolute",
            "bottom": 0,
            "left": 0,
            "right": 0
        });
        $("body").css({
            "position": "relative",
            "padding-bottom": $("#footer").height() + 50
        });
    }

    // 处理模态层 及 漂浮 层的关闭逻辑
    $('[data-close]').click(function() {
        $(this).parent().hide();
        $(this).siblings('[data-open]').show();
    });

    $('[data-hide]').click(function() {
        var eleWidth = $(this).parent().width();
        $(this).parent().css("left", -eleWidth);
        $(this).siblings('[data-show]').addClass("show");
    });

    $('[data-show]').click(function() {
        $(this).parent().css("left", 0);
        $(this).removeClass("show");
    });

    $('[data-popup] [data-close]').click(function() {
        $("#mask").hide();
    });

    $("#mask").click(function() {
        $('[data-popup]').hide();
        $(this).hide();
    });

    // 底部悬浮条 显示 与 隐藏逻辑
    $(window).bind("scroll",function(){
        if($(this).scrollTop() > 200) {
            $(".fixed-bottom-form").show();
        } else {
            $(".fixed-bottom-form").hide();
        }
    });
});