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

        var speed = _.o.speed,          // 默认的滚动速度
            num = _.o.num,  // 默认的显示函数
            tardiv = document.getElementById('scrolltable'),
            tardiv1 = document.getElementById('scrolltable1'),
            tardiv2 = document.getElementById('scrolltable2');

        // 让表格的thead和tbody水平自动对齐。
        var ths = $("#scrolltable1 thead th");
        var firstTds = $("#scrolltable1 tbody tr").first().find("td");
        for(var i = 0; i < ths.length; i++) {
            var wt = $(ths[i]).width();
            $(ths[i]).width(wt);
            $(firstTds[i]).width(wt);
        }

        $("#scrolltableHead").append($("#scrolltable thead"));
        $("#scrolltable1 thead").empty();

        // 设置默认样式
        $(tardiv).css({
            position: "relative",
            overflow: "hidden",
            height: $("#scrolltable1 tbody tr").first().height() * defaultRow,
        });
    }

    //  Create a jQuery plugin
    $.fn.scrollTable = function (o) {
        var len = this.length;

        //  Enable multiple-slider support
        return this.each(function (index) {
            //  Cache a copy of $(this), so it
            var me = $(this),
                key = 'scrollTable' + (len > 1 ? '-' + ++index : ''),
                instance = (new ScrollTable).init(me, o);

            //  Invoke an Unslider instance
            me.data(key, instance).data('key', key);
        });
    };

    var freeDesign = {
        init:function() {
            scrollTopFn();
        }
    };

    function scrollTopFn(num,selc) {
        var SD = 30,          // 默认的滚动速度
            defaultRow = 6,  // 默认的显示函数
            myScroll,
            tardiv = document.getElementById('scrolltable'),
            tardiv1 = document.getElementById('scrolltable1'),
            tardiv2 = document.getElementById('scrolltable2');

        // 让表格的thead和tbody水平自动对齐。
        var ths = $("#scrolltable1 thead th");
        var firstTds = $("#scrolltable1 tbody tr").first().find("td");
        for(var i = 0; i < ths.length; i++) {
            var wt = $(ths[i]).width();
            $(ths[i]).width(wt);
            $(firstTds[i]).width(wt);
        }

        $("#scrolltableHead").append($("#scrolltable thead"));
        $("#scrolltable1 thead").empty();

        // 设置默认样式
        $(tardiv).css({
          position: "relative",
          overflow: "hidden",
          height: $("#scrolltable1 tbody tr").first().height() * defaultRow,
        });

        if($(tardiv1).height() > $(tardiv).height()) {

            tardiv2.innerHTML=tardiv1.innerHTML;

            function Marquee2(){
                if(tardiv.scrollTop >= tardiv2.offsetTop)
                    tardiv.scrollTop = 0;
                else {
                    tardiv.scrollTop++;
                }
            }
            myScroll = window.setInterval(Marquee2,SD);
            tardiv.onmouseover = function() {
                clearInterval(myScroll);
            };
            tardiv.onmouseout = function() {
                myScroll = setInterval(Marquee2,SD);
            };
        } else {
            $(tardiv).height($(tardiv1).height());
        }
    }
    window.freeDesign = freeDesign;
})(jQuery,window);

freeDesign.init();
