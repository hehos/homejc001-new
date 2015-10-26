/**
 * Created by hui on 2015/9/15.
 */

window.HotSlider = function(isLoop, time) {
    // data
    this.activeIdx = 0;
    this.itemLength = 0;
    this.items = $(".hot-cates .hot-cate");
    this.isLoop = isLoop == undefined? isLoop : false;
    this.time = time == undefined? time : 3000;
}
HotSlider.prototype.init = function() {
    this.itemLength = this.items.length;
}

HotSlider.prototype.run = function() {
    this.init();
    this.eventBind();
    if(this.isLoop) {
        this.loopRun();
    }
}

HotSlider.prototype.next = function() {
    this.activeIdx++;
    if(this.activeIdx == this.itemLength) {
        this.activeIdx = 0;
    }
    this.switchRun();
}

HotSlider.prototype.prev = function() {
    this.activeIdx--;
    if(this.activeIdx < 0) {
        this.activeIdx = this.itemLength-1;
    }
    this.switchRun();
}

HotSlider.prototype.switchRun = function() {
    var items = this.items;
    $(items).hide();
    for(idx in items) {
        if(idx == this.activeIdx) {
            $(items[idx]).fadeIn("slow");
        }
    }

    var sortUls = $(".hot-sort ul");
    sortUls.hide();
    $(sortUls[this.activeIdx]).show();
    $(".hot-tab li").removeClass("on");
    $($(".hot-tab li")[this.activeIdx]).addClass("on");
}

HotSlider.prototype.runloop = function() {
    var timer = setInterval("");
}
HotSlider.prototype.clearloop = function() {

}

HotSlider.prototype.eventBind = function() {
    var other = this;
    $(".hot-cates .right-btn").click(function() {
        other.next();
    });
    $(".hot-cates .left-btn").click(function() {
        other.prev();
    });
    $(".hot-tab li").click(function() {
        other.activeIdx = jQuery.inArray(this,  $(".hot-tab li"));
        other.switchRun();
        $(".hot-tab li").removeClass("on");
        $(this).addClass("on");
    });
}


$(document).ready(function(){
    var slider = new HotSlider();
    slider.run();
});