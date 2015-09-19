var SGCategory = {
    cache : {},

    qQueue : {},
    qWQueue : {},

    /**
     * get json data
     * @param cid
     * @param type
     * @param callback
     */
    getData : function(cid, type, callback){
        var that = this;
        var key = '_SGCategory' + cid + type;
        if(that.cache[key]){
            callback(that.cache[key]);
            return;
        }

        if(that.qQueue[key]){
            if(!that.qWQueue[key]){
                that.qWQueue[key] = [];
            }
            that.qWQueue[key].push(callback);
            return;
        }

        that.qQueue[key] = true;
        jc001.api.call('gcat', {'id' : cid, 'do' : type}, function(rs){
            that.cache[key] = rs;
            that.qQueue[key] = false;

            callback(rs);

            var waitQueue = that.qWQueue[key];
            if(!waitQueue){
                return;
            }

            for(var i = 0, j = waitQueue.length; i < j; i++){
                waitQueue[i](rs);
            }

            delete(that.qWQueue[key]);
        });
    }
}

var JMulSelect = function(name, cid, onclose, container){
    this.name = name;
    this.cid = cid;

    this.cat = SGCategory;
    this.wrap = {};
    this.onclose = onclose || function(){
    };
    this.container = container;
}

JMulSelect.counter = 0;
JMulSelect.prototype = {
    curr : 'curr',
    choose : '请选择',
    hover : 'hover',
    wrapClass : '.store-selector',
    render : function(){
        var box;
        var html =  '' +
            '    <input type="hidden" name="' + this.name + '" value="' + this.cid + '" />' +
            '    <div class="text">' +
            '        <div>' + this.choose + '</div>' +
            '        <b></b>' +
            '    </div>' +
            '    <div class="content">' +
            '        <div class="JC-stock">' +
            '            <div class="mt"> <ul class="tab"></ul></div>' +
            '            <div class="mc" style="display: block;">' +
            '                <ul class="area-list"></ul>' +
            '            </div>' +
            '        </div>' +
            '        <span class="clr"></span>' +
            '        <div class="close"></div>' +
            '    </div>';
        if(this.container){
            this.container.html(html);
            box = this.container;
            box.addClass('store-selector');
        }else {
            var id = 'jSelect_' + JMulSelect.counter++;
            if($('#' + id).size() == 0){
                html = '' +
                '<div class="store-selector" id="' + id + '">' +
                html +
                '</div>';
                document.write(html);
            }
            box = $('#' + id + '.store-selector');
        }

        this.wrap['box'] = box;
        this.wrap['value'] = $('input', box);
        this.wrap['title'] = $('.text div', box);
        this.wrap['path'] = $('.mt .tab', box);
        this.wrap['items'] = $('.mc .area-list', box);
        this.wrap['close'] = $('.close', box);

        this.init();

        var that = this;
        this.wrap['close'].click(function(){
            that.close();
        });

        this.wrap['title'].parent().click(function(){
            var el = that.wrap['box'];
            el.css('z-index', 999);
            el.toggleClass(that.hover);

            // 处理弹出地区div的方向
            var triggerTargetT = el.width();
            var triggerTargetH = el.height();
            var windowT = $(window).width();
            var windowH = $(window).height();
            var ttOffsetL = el.offset().left;
            var ttOffsetT = el.offset().top - $(window).scrollTop();

            // 水平
            if(ttOffsetL + triggerTargetT/2 > windowT/2) {
                el.addClass("store-popup-left");
            }
            if(ttOffsetT + triggerTargetH/2 > windowH/2) {
                el.addClass("store-popup-top");
            }
        });
    },

    init : function(){
        var that = this;
        if(!this.cid || this.cid.length == 0){
            that.wrap['title'].html(that.choose);
            that.drawItems(0, true);
        }else{
            this.cat.getData(this.cid, 'fullName', function(rs){
                if(!rs || typeof(rs) == 'object'){
                    rs = this.choose;
                }

                that.wrap['title'].html(rs);
            });

            this.cat.getData(this.cid, 'path', function(rs){
                that.drawPath(rs);
                if(rs && (((rs instanceof Array) && rs.length > 0) || !that.isNullObj(rs))){
                    var keys = that._keys(rs);
                    var lastItem = rs[keys[keys.length - 1]];
                    that.cat.getData(lastItem.id, 'child', function(rs){
                        if(rs && !that.isNullObj(rs)) {
                            // 渲染子先
                            that.drawItems(lastItem.id, true, rs);
                        } else {
                            // 显示父级子
                            that.drawItems(lastItem.pid, false);
                        }
                    });
                }else{
                    that.changePid(0, that.choose);
                }
            });
        }
    },

    _keys: function(object) {
        var keys = [];
        for (var property in object)
            keys.push(property);
        return keys;
    },

    drawPath : function(rs){
        var html = '';
        for(var i in rs){
            html += '<li data-index="' + rs[i].pid + '"><a href="#none"><em>' + rs[i].name + '</em><i></i></a></li>';
        }

        this.wrap['path'].html(html);

        // set curr
        this.setCurr($('li:last-child', this.wrap['path']));

        var that = this;
        $('li', this.wrap['path']).click(function(){
            that.choosePid($(this));
        });
    },

    /**
     * path click handle
     *  set path class, render it's items
     * @param el
     */
    choosePid : function(el){
        this.setCurr(el);
        this.drawItems(el.attr('data-index'));
    },

    setCurr : function(item){
        $('li', this.wrap['path']).removeClass(this.curr);
        item.addClass(this.curr);

        $('a', this.wrap['path']).removeClass(this.hover);
        $('a', item).addClass(this.hover);
    },

    /**
     * render items
     * @param cid
     * @param choose
     */
    drawItems : function(cid, choose, rs){
        var that = this;

        var appendPath = function(){
            var html = '<li data-index="' + cid + '" class="' + that.curr + '">' +
                '<a href="#none" class="hover">' +
                '<em>' + that.choose + '</em><i></i>' +
                '</a></li>';
            that.wrap['path'].append(html);

            var path = $('li:last-child', that.wrap['path']);
            that.setCurr(path);
            path.click(function(){
                that.choosePid($(this));
            });
        }

        var render = function(rs){
            if(!rs || rs.length == 0){
                that.close();
                return;
            }

            var html = '', className;
            for(var i in rs){
                html += '<li data-index="' + rs[i].id + '"><a href="#none"><em>' + rs[i].name + '</em><i></i></a></li>';
            }

            if(html == ''){
                that.close();
                return;
            }

            if(choose){
                appendPath();
            }

            that.wrap['items'].html(html);
            $('li', that.wrap['items']).click(function(){
                var cid = $(this).attr('data-index');
                var name = $('em', $(this)).text();
                that.changePid(cid, name);
            });
        }

        if(rs){
            render(rs);
        } else {
            this.cat.getData(cid, 'child', render);
        }
    },


    /**
     * items click handle
     * @param cid
     * @param name
     */
    changePid : function(cid, name){
        this.cid = cid;
        this.wrap['value'].val(cid);
        var current = $('.' + this.curr, this.wrap['path']);
        $('em', current).text(name);

        this.clearPath();
        this.drawItems(cid, true);
    },

    clearPath : function(){
        var remove = false;
        var that = this;
        $('li', that.wrap['path']).each(function(){
            if(remove){
                $(this).remove();
                return;
            }
            if($(this).attr('class') == that.curr){
                remove = true;
            }
        });
    },

    close : function(){
        var name = [];
        var that = this;
        $('em', this.wrap['path']).each(function(){
            var title = $(this).text();
            if(title != that.choose){
                name.push(title);
            }
        });

        name = name.join(' - ');
        if(name.length == 0){
            name = this.choose;
        }

        var el = this.wrap['box'];
        this.wrap['title'].text(name);
        el.removeClass(this.hover);
        el.css('z-index', 2);
        if(typeof(this.onclose) == 'function'){
            this.onclose(this.wrap['value'].val());
        }

        // 关闭 弹出地区div 时移除可能的弹出方向的className
        el.removeClass("store-popup-left");
        el.removeClass("store-popup-top");
    },

    isNullObj : function(obj){
        for(var i in obj){
            if(obj.hasOwnProperty(i)){
                return false;
            }
        }
        return true;
    }
}