/**
 * Created by hehui on 2015/11/17.
 */
    // ��Ʒ��ϸҳ���͵ı�ǩ�����л�Ч��
$(function() {
    var tabs = $('[data-product-detail-box] [data-detail-tabs] li');
    var contItems = $('[data-product-detail-box] [data-detail-item]');
    tabs.click(function() {
        tabs.removeClass("on");
        contItems.hide();
        $(this).addClass("on");
        var idx = $.inArray(this, tabs);
        $(contItems[idx]).show();
    });
})