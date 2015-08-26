/**
 * Created by hui on 2015/9/15.
 */


$(document).ready(function(){
    $('[class^="popup-"] .close, [class*=" popup-"]  .close').click(function() {
        $(this).parents('[class^="popup-"], [class*=" popup-"]').hide();
        $("#mask").hide();
    });
    $("#mask").click(function() {
        $('[class^="popup-"], [class*=" popup-"]').hide();
        $(this).hide();
    });
});