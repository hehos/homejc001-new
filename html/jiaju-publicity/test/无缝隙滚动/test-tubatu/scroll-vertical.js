(function(jq,window) {
	var freeDesign = {
		init:function() {
            scrollTopFn();
		}
	};

    function scrollTopFn(num,selc) {
        var SD = 30,
            myScroll,
            tardiv = document.getElementById('scrolldiv'),
            tardiv1 = document.getElementById('scrolldiv1'),
            tardiv2 = document.getElementById('scrolldiv2');
        if($(tardiv1).height() > $(tardiv).height()) {

            tardiv2.innerHTML=tardiv1.innerHTML;

            function Marquee2(){
                if(tardiv2.offsetTop <= tardiv.scrollTop)
                    tardiv.scrollTop = 0;
                else{
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
        }
    }
    window.freeDesign = freeDesign;
})(jQuery,window);

freeDesign.init();
