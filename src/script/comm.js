/**
 * Created by hui on 2015/9/15.
 */

$(document).ready(function(){

    // ===============================================
    // 全局的js
    // 处理IE浏览器input，textarea 文本提示
    if ((navigator.userAgent.indexOf('MSIE') >= 0)
        && (navigator.userAgent.indexOf('Opera') < 0)){
        var forms = $("[placeholder]");
        for(var i = 0; i < forms.length; i++) {
            $(forms[i]).val($(forms[i]).attr("placeholder"));
        }
        $(forms).on('focus blur', function(e) {
            var val = $(this).val();
            var pla =  $(this).attr("placeholder");
            if(val === pla && e.type === 'focus') { $(this).val(""); }
            if(val === "" && e.type === 'blur') { $(this).val(pla); }
        });
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

    // 处理模态层 关闭逻辑
    $('[data-close]').click(function() {
        $(this).parents("[data-popup]").hide();
        $("#mask").hide();
    });
    $("#mask").click(function() {
        $('[data-popup]').hide();
        $(this).hide();
    });

    // fixed显示、隐藏逻辑
    $('[data-display]').click(function() {
        var display = $(this).attr("data-display");
        var box = $(this).parents("[data-fixed]");
        var eleWidth = box.outerWidth();
        var showBtnW = box.find('[data-display="show"]').outerWidth();
        var dir = box.attr("data-fixed");

        var obj1 = {}, obj2 = {};
        if("hide" == display) {
            obj1[dir] = -eleWidth, obj2[dir] = 0;
            box.animate(obj1, 400);
            box.find('[data-display="show"]').delay(800).animate(obj2, 200);
        } else if("show" == display) {
            obj1[dir] = -showBtnW, obj2[dir] = 0;
            $(this).animate(obj1, 200);
            box.delay(800).animate(obj2, 400);
        }
    });


    // 底部悬浮条 显示 与 隐藏  时刻逻辑
    $(window).bind("scroll",function(){
        if($(this).scrollTop() > 200) {
            $(".fixed-bottom-form").show();
        } else {
            $(".fixed-bottom-form").hide();
        }
    });
});