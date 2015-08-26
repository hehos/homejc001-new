/**
 * Created by hui on 2015/9/15.
 */


$(document).ready(function(){
    $('[data-close]').click(function() {
        $(this).parent().hide();
        $(this).siblings('[data-open]').show();
    });
    $('[data-hide]').click(function() {
        var eleWidth = $(this).parent().width();
        $(this).parent().css("left", -eleWidth);
    });

    $('[data-show]').click(function() {
        $(this).parent().css("left", 0);
    });

    $('[data-popup] [data-close]').click(function() {
        $("#mask").hide();
    });

    $("#mask").click(function() {
        $('[data-popup]').hide();
        $(this).hide();
    });
});