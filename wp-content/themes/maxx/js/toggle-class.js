    jQuery(document).ready(function($){
        $(".primary_video .icon-right").click(function(){
            $("body").addClass("hide_video");
        });
		$(".bottom_float span").click(function(){
            $(".bottom_ads").hide();
        });
		$(".side_float span").click(function(){
            $(".maxx_float_ads").hide();
        });
		$(".footer_box.box_center").click(function(){
            $(".maxx_search").toggleClass("opensearch");
			$(".footer_share").removeClass("openshare");
			$(".mobile_trend").removeClass("opentrending");
			$("body").removeClass("opensidebar");
        });
		$(".footer_box.box_share").click(function(){
            $(".footer_share").toggleClass("openshare");
			$(".maxx_search").removeClass("opensearch");
			$(".mobile_trend").removeClass("opentrending");
			$("body").removeClass("opensidebar");
        });
		$(".footer_box.box_trending").click(function(){
            $(".mobile_trend").toggleClass("opentrending");
			$(".footer_share").removeClass("openshare");
			$(".maxx_search").removeClass("opensearch");
			$("body").removeClass("opensidebar");
        });
		$(".footer_box.box_sidebar").click(function(){
            $("body").toggleClass("opensidebar");
			$(".mobile_trend").removeClass("opentrending");
			$(".footer_share").removeClass("openshare");
			$(".maxx_search").removeClass("opensearch");
        });
    });
	
	function resize() {
        if ( jQuery(window).width() < 982 ) { 
	    	jQuery("#header-one .nav .dd").addClass("accord").removeClass("desktop"); 
			jQuery("body").addClass("maxx_mobile");
		} else { 
	    	jQuery("#header-one .nav .dd").removeClass("accord").addClass("desktop");
			jQuery("body").removeClass("maxx_mobile");
		}
    }
	
	jQuery(document).ready(function () {
                jQuery('.newsticker_post').AcmeTicker({
                    type:'marquee',/*horizontal/horizontal/Marquee/type*/
                    direction: 'left',/*up/down/left/right*/
                    speed: 0.1,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
                    controls: {
                        toggle: jQuery('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                    }
                });
	});
	
    (console.log = function () {}),
    jQuery.noConflict(),
    jQuery("document").ready(function (e) {
            
            e(".nav > ul > li:has(ul),.nav > ul > li > ul > li:has(ul),.nav > ul > li > ul > li > ul > li:has(ul)").addClass("has-sub"),
            e(".nav > ul > li > a").click(function () {
                var l = e(this).next();
                return (
                    e(".nav li").removeClass("active"),
                    e(this).closest("li").addClass("active"),
                    l.is("ul") && l.is(":visible") && (e(this).closest("li").removeClass("active"), l.slideUp("slow")),
                    l.is("ul") && !l.is(":visible") && (e(".nav ul ul:visible").slideUp("slow"), l.slideDown("slow")),
                    !l.is("ul")
                );
            }),
            e(".nav > ul > li > ul > li > a").click(function () {
                var l = e(this).next();
                return (
                    e(".nav li ul li").removeClass("active"),
                    e(this).closest("li").addClass("active"),
                    l.is("ul") && l.is(":visible") && (e(this).closest("li").removeClass("active"), l.slideUp("slow")),
                    l.is("ul") && !l.is(":visible") && (e(".nav ul ul ul:visible").slideUp("slow"), l.slideDown("slow")),
                    !l.is("ul")
                );
            }),
            e(".nav > ul > li > ul > li > ul > li > a").click(function () {
                var l = e(this).next();
                return (
                    e(".nav li ul li ul li").removeClass("active"),
                    e(this).closest("li").addClass("active"),
                    l.is("ul") && l.is(":visible") && (e(this).closest("li").removeClass("active"), l.slideUp("slow")),
                    l.is("ul") && !l.is(":visible") && (e(".nav ul ul ul ul:visible").slideUp("slow"), l.slideDown("slow")),
                    !l.is("ul")
                );
            });
    });
	
    jQuery(document).ready(function (e) {
        e(window).resize(resize), resize();
    });
	
	
	