(function($, f) {
    var ScrollTable = function() {
        this.o = {
            delay: 30,  //  滚动速度
            num: 10     // 可见行数
        }
    }

    ScrollTable.prototype.init = function(el, o) {
        var _ = this;
        _.el = el;

        var o = _.o = $.extend(_.o, o);
        var delay = o.delay,
            num = o.num,
            box = _.box = el.find('#scrolltable'),
            el1 = _.el1 = el.find('#scrolltable1'),
            el2 = _.el2 = el.find('#scrolltable2');

        // 让表格的thead和tbody水平自动对齐。
        var ths = el1.find("thead th");
        var firstTds = el1.find("tbody tr").first().find("td");
        for(var i = 0; i < ths.length; i++) {
            var wt = $(ths[i]).width();
            $(ths[i]).width(wt);
            $(firstTds[i]).width(wt);
        }

        // 设置默认样式
        box.css({
            position: "relative",
            overflow: "hidden",
            height: $("#scrolltable1 tbody tr").first().height() * num
        });

        el.find("#scrolltableHead").append(el1.find("thead"));
        el1.find("thead").empty();

        // 满足条件开始滚动
        console.log(el1.height() + ", " + box.height());
        if(el1.height() > box.height()) {
            el2[0].innerHTML=el1[0].innerHTML;

            _.play();
        } else return;

        // 鼠标移上移出事件。
        box.on('mouseover mouseout', function (e) {
            _.stop();
            e.type === 'mouseout' && _.play(box, el1, el2);
        });

        return _;
    }

    ScrollTable.prototype.play = function() {
        var _ = this;
        _.t = setInterval(function() {
            _.go();
        }, _.o.delay);
    }
    ScrollTable.prototype.stop = function() {
        this.t = clearInterval(this.t);
    }

    ScrollTable.prototype.go = function() {
        var _ = this;
        console.log(_.el2[0].offsetTop);
        // offsetTop是元素的上外边框至包含元素的上内边框之间的像素距离
        if(_.box[0].scrollTop >= _.el2[0].offsetTop)
            _.box[0].scrollTop = 0;
        else _.box[0].scrollTop++;
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
})(jQuery, false);

