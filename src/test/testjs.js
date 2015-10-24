/**
 * Created by hehui on 2015/11/4.
 */
$(document).ready(function () {
    if (navigator.userAgent.indexOf("MSIE") >= 0 && navigator.userAgent.indexOf("Opera") < 0) {
        for (var t = $("[placeholder]"), i = 0; i < t.length; i++)$(t[i]).val($(t[i]).attr("placeholder"));
        $(t).on("focus blur", function (t) {
            var i = $(this).val(), a = $(this).attr("placeholder");
            i === a && "focus" === t.type && $(this).val(""), "" === i && "blur" === t.type && $(this).val(a)
        })
    }
    $("body").height() < $(window).height() && ($("body").height($(window).height()), $("#footer").css({
        position: "absolute",
        bottom: 0,
        left: 0,
        right: 0
    }), $("body").css({
        position: "relative",
        "padding-bottom": $("#footer").height() + 50
    })), $("[data-close]").click(function () {
        $(this).parents("[data-popup]").hide(), $("#mask").hide()
    }), $("#mask").click(function () {
        $("[data-popup]").hide(), $(this).hide()
    }), $("[data-display]").click(function () {
        var t = $(this).attr("data-display"), i = $(this).parents("[data-fixed]"), a = i.outerWidth(), o = i.find('[data-display="show"]').outerWidth(), e = i.attr("data-fixed"), d = {}, h = {};
        "hide" == t ? (d[e] = -a, h[e] = 0, i.animate(d, 400), i.find('[data-display="show"]').delay(800).animate(h, 200)) : "show" == t && (d[e] = -o, h[e] = 0, $(this).animate(d, 200), i.delay(800).animate(h, 400))
    }), $(window).bind("scroll", function () {
        $(this).scrollTop() > 200 ? $(".fixed-bottom-form").show() : $(".fixed-bottom-form").hide()
    })
});