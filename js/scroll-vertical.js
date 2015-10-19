(function($, f) {
    var ScrollTable = function() {
        this.o = {
            speed: 30,
            num: 10,
            t: null
        }
    }

    ScrollTable.prototype.init = function(el, o) {
        var _ = this;
        _.el = el;

        var o = _.o = $.extend(_.o, o);

        var speed = o.speed,          // 默认的滚动速度
            num = o.num,  // 默认的显示函数
            tardiv = el.find('#scrolltable'),
            tardiv1 = el.find('#scrolltable1'),
            tardiv2 = el.find('#scrolltable2');

        // 让表格的thead和tbody水平自动对齐。
        var ths = tardiv1.find("thead th");
        var firstTds = tardiv1.find("tbody th").first().find("td");
        for(var i = 0; i < ths.length; i++) {
            var wt = $(ths[i]).width();
            $(ths[i]).width(wt);
            $(firstTds[i]).width(wt);
        }

        el.find("#scrolltableHead").append($("#scrolltable thead"));
        tardiv1.find("thead").empty();

        // 设置默认样式
        $(tardiv).css({
            position: "relative",
            overflow: "hidden",
            height: $("#scrolltable1 tbody tr").first().height() * num
        });

        // 判断逻辑开始执行
        if($(tardiv1).height() > $(tardiv).height()) {
            tardiv2.innerHTML=tardiv1.innerHTML;
            _.t = setInterval(function() {
                _.go(tardiv, tardiv1, tardiv2);
            });
        }

        // 鼠标移上移出事件。
        tardiv.mouseover(function() {
            clearInterval(_.t);
        });
        tardiv.mouseout(function() {
            clearInterval(_.t);
        });
    }

    ScrollTable.prototype.go = function(box, e1, e2) {
        if(e1.scrollTop >= e2.offsetTop)
            box.scrollTop = 0;
        else {
            box.scrollTop++;
        }
    }

    //  Create a jQuery plugin
    $.fn.scrollTable = function (o) {
        var len = this.length;

        return this.each(function (index) {
            var me = $(this),
                key = 'scrollTable' + (len > 1 ? '-' + ++index : ''),
                instance = (new ScrollTable).init(me, o);

            me.data(key, instance).data('key', key);
        });
    };

})($,false);

