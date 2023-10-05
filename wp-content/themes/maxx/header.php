<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes" />
		<?php
			maxx_head_meta();
			wp_head();
		?>
    <style>
	a,body,div,form,html,i,img,li,span,ul{margin:0;padding:0;border:0;font-size:100%;vertical-align:baseline}*{margin:0;padding:0;outline:0}a{text-decoration:none;outline:0!important}img{max-width:100%;height:auto;display:block}body{font-weight:400;font-size:14px;line-height:1.4;text-align:left;font-family:Arial}.maxx_clear:after{content:".";display:block;height:0;clear:both;visibility:hidden}.maxx_container{position:relative;width:auto;max-width:1000px;margin:0 auto;padding:0 16px}.header{position:fixed;top:0;left:0;right:0;height:135px;z-index:1000;box-shadow:0 0 20px rgba(0,0,0,.1)}.maxx_header{height:90px;text-align:center}.maxx_logo{width:calc(100% - 540px);position:relative;display:inline-block;padding:20px;height:50px;text-align:center}.maxx_logo a{display:block;position:relative;z-index:2}.maxx_logo img{height:50px;width:auto;margin:0 auto;display:block}.maxx_social{position:absolute;display:inline-block;width:250px;left:18px;top:0;height:36px;margin:27px 0;text-align:left}.maxx_social a{display:inline-block;width:36px;height:36px;margin:0 5px 0 0;color:#fff}.maxx_social i{width:36px;height:36px;display:block;line-height:36px;text-align:center;border-radius:20px;font-size:18px}.maxx_social .icon-facebook{background:#273edf}.maxx_social .icon-twitter{background:#3bf}.maxx_social .icon-instagram{background:#f4a}.maxx_social .icon-youtube{background:#d35}.maxx_search{position:absolute;display:inline-block;width:178px;right:0;top:0;height:36px;margin:27px 0;text-align:right}.maxx_form_search{width:auto;max-width:150px;height:34px;line-height:34px;padding:0 0 0 10px;border-radius:26px}.maxx_input{display:inline-block;width:calc(100% - 38px)}.maxx_input input[type="text"]{height:33px;border:0;line-height:33px;font-size:15px;width:100%}.maxx_button{display:inline-block;width:28px;height:28px;line-height:28px;border-radius:30px;overflow:hidden;text-align:center;float:right;margin:3px}.maxx_button button{border:0;background:none;font-size:13px}.maxx_flat_menu{height:44px}.nav{float:left;max-width:965px;width:auto;margin:0;padding:0;height:44px}.nav .accordion{height:44px;display:block}.nav .accordion,.nav .accordion ul,.nav .accordion li,.nav .accordion a{border:none;outline:none}.nav .accordion li{list-style:none}.nav .accordion li{float:left;display:inline-block;margin:0;text-align:center;line-height:44px;position:relative}.nav .accordion li.menu-item-has-children:before{content:"";position:absolute;top:8px;right:4px;width:8px;height:8px;border-radius:10px}.nav .accordion li.span1{background:#fc3;color:#111}.nav .accordion li a{text-decoration:none;display:block;margin:0;padding:0 18px;font-size:13px;line-height:44px;position:relative}.nav .accordion li>.sub-menu{position:absolute;width:240px;display:none;box-shadow:0 4px 20px rgba(0,0,0,.1)}.nav .accordion li>.sub-menu>li{display:block;float:none;text-align:left}.nav .accordion li>.sub-menu>li.menu-item-has-children:before{display:none}.nav .accordion li>.sub-menu>li>ul{display:none!important}.maxx_tanggal{float:right;display:inline-block;height:44px;line-height:44px;font-size:13px;padding:0}.header_mobile{display:none;padding:8px 0 0;height:52px}.mobile_icon{display:inline-block;width:20%;float:left;text-align:center}.mobile_icon i{display:block;font-size:17px;margin:0 0 2px}.mobile_icon span{display:block;font-size:11px}.maxx_running{margin:135px auto 0;max-width:1000px;padding:8px 0;height:24px;box-shadow:0 -5px 15px inset rgba(0,0,0,.1)}.runscroll{position:relative;width:100%;overflow:hidden;margin-top:0;opacity:1}.scroll{display:flex;width:100%}.scrollin{white-space:nowrap;color:#212121;animation:animate 120s -120s linear infinite;will-change:transform;margin-right:10px;height:22px}.scrollin:nth-child(2){animation:animate2 120s -60s linear infinite}.runin{display:inline-block;margin:0 40px 0 0;overflow:hidden;height:22px}.scrollin a{font-weight:700;font-size:14px;height:22px;line-height:22px;display:inline-block}.runtime{display:inline-block;height:22px;line-height:22px;text-transform:uppercase;font-weight:700;font-size:8px;padding:0 8px;margin:0 10px 0 0}@keyframes animate{0%{transform:translateX(100%)}100%{transform:translateX(-100%)}}@keyframes animate2{0%{transform:translateX(0)}100%{transform:translateX(-200%)}}.area_content{padding:16px 0 50px;max-width:1000px;margin:0 auto;clear:both}.area_content:before,.area_content:after{content:"";display:table;clear:both}.area_primary{width:calc(100% - 350px);float:left;display:inline-block;vertical-align:top}.late_news{margin:0}.loop_classic{margin:0 0 16px;position:relative}.loop_classic.with_shadow{padding:35px;box-shadow:0 0 20px rgba(0,0,0,.1)}.classic_img{float:right;width:140px;height:140px;margin:0;overflow:hidden}.classic_img img{width:100%;height:auto}.classic_over{float:left;width:calc(100% - 170px);padding:0}.classic_author{margin:0 0 18px}.classic_author .avatar{float:left;width:35px;height:35px;margin:0 15px 0 0;border-radius:35px}.loop_author{float:right;width:calc(100% - 50px)}.span_author{font-weight:700;display:block;font-size:14px}.span_time{display:block;font-size:11px}.classic_title{line-height:1.3;font-size:26px;margin:0 50px 0 0}.home_widget{margin:0}@media screen and (max-width:982px){.maxx_header{height:80px}.maxx_logo{display:block;width:auto;height:40px;position:relative;z-index:2}.maxx_logo img{height:40px}.maxx_social{display:none;position:fixed;z-index:3;top:0;left:0;right:0;width:100%;text-align:center;margin:0;padding:22px 0}.maxx_search{top:0;right:0;left:0;margin:0;width:auto;padding:22px 0;display:none;z-index:3}.maxx_form_search{width:300px;max-width:100%;margin:0 auto}.maxx_flat_menu{height:54px;position:relative;z-index:2}.nav{position:fixed;top:135px;left:0;right:0;float:none;max-width:100%;width:100%;height:auto;bottom:-20px;border-top:1px solid rgba(125,125,125,.2);display:none}.nav .accordion li{display:block;float:none;text-align:left}.nav .accordion li.menu-item-has-children:before{top:18px;right:15px}.nav .accordion li>.sub-menu{position:relative;background:#fff;width:100%!important;display:none;box-shadow:0 0 0 rgba(0,0,0,0)}.nav .accordion li>.sub-menu>li{width:100%;background:rgba(0,0,0,.05)}.maxx_tanggal{display:none}.header_mobile{display:block}.area_primary{width:100%;float:none}.loop_classic{margin:0 16px 16px}}@media screen and (max-width:533px){.header{height:115px}.maxx_header{height:54px}.maxx_logo{padding:12px;height:30px}.maxx_logo img{height:30px}.maxx_social{padding:12px 0;height:30px}.maxx_social a{width:30px;height:30px}.maxx_social i{width:30px;height:30px;line-height:30px}.maxx_flat_menu{height:60px}#maxxmenu{padding:0}.nav{top:115px}.nav .accordion li a{font-size:16px}.maxx_search{padding:9px 0}.maxx_running{padding:4px 0;margin:115px 0 0}.scrollin a{font-size:13px}.area_content{padding:8px 0 50px}.loop_classic{padding:15px}.classic_img{width:90px;height:90px}.classic_over{width:calc(100% - 110px)}.classic_title{font-size:16px;margin:0}.classic_author{margin:0 0 12px}.span_author{font-size:13px}.loop_classic{margin:0 8px 8px}}[class^="icon-"]:before{font-family:"maxx-font";font-style:normal;font-weight:400;speak:never;display:inline-block;text-decoration:inherit;width:1em;margin-right:.2em;text-align:center;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-eye:before{content:'\e800'}.icon-search:before{content:'\e803'}.icon-home:before{content:'\e809'}.icon-block:before{content:'\e815'}.icon-twitter:before{content:'\f099'}.icon-facebook:before{content:'\f09a'}.icon-youtube:before{content:'\f16a'}.icon-instagram:before{content:'\f16d'}.icon-share:before{content:'\f1e0'}
	</style>
	</head>
	<body <?php body_class(); ?>>
	    <?php wp_body_open(); ?>
	    <section class="header">
		    <div class="maxx_header">
				<div class="maxx_container maxx_clear">
					<div class="maxx_logo">
						<?php maxx_custom_logo(); ?>
					</div>
					<div class="maxx_social">
					    <?php maxx_social_icon(); ?>
					</div>
					<div id="maxxsearch" class="maxx_search">
						<?php get_search_form(); ?>
					</div>
						
				</div>
			</div>
			<div class="maxx_flat_menu">
			    <div id="maxxmenu" class="maxx_container maxx_clear <?php echo get_theme_mod('maxx_menu_date', 'date_right'); ?>">
					<?php 
						if (has_nav_menu('navigation')) {
							wp_nav_menu(array(
						    	'theme_location' => 'navigation', 
						     	'container' => 'div',
								'container_class' => 'nav',
								'menu_class' => 'dd accordion',
								'menu_id' => 'maxxnav',
								'fallback_cb' => false
							));
						}
					?>
					<span class="maxx_tanggal"><?php echo esc_html( date_i18n('l, d M Y') ); ?></span>
					<div class="header_mobile maxx_clear">
						    <a class="mobile_icon" href="<?php echo get_home_url(); ?>">
						        <i class="icon-home"></i>
								<span>Home</span>
							</a>
							<div class="mobile_icon" onclick="mysearch()">
						        <i class="icon-search"></i>
								<span>Search</span>
							</div>
							<div class="mobile_icon" onclick="mymenu()">
						        <i class="icon-block"></i>
								<span>Menu</span>
							</div>
							<div class="mobile_icon" onclick="myshare()">
						        <i class="icon-share"></i>
								<span>Share</span>
							</div>
							<div class="mobile_icon" onclick="myside()">
						        <i class="icon-eye"></i>
								<span>More</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="maxx_running"><?php get_header_newsticker(); ?></div>