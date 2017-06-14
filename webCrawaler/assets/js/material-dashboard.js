/*!
    
 =========================================================
 * Material Dashboard - v1.1.1
 =========================================================
 
 * Product Page: http://www.creative-tim.com/product/material-dashboard
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)
 
 =========================================================
 
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 
 */

// Material Dashboard Wizard Functions



var searchVisible = 0;
var transparent = true;

var transparentDemo = true;
var fixedTop = false;

var mobile_menu_visible = 0,
    mobile_menu_initialized = false,
    toggle_initialized = false,
    bootstrap_nav_initialized = false;

var seq = 0, delays = 80, durations = 500;
var seq2 = 0, delays2 = 80, durations2 = 500;


$(document).ready(function(){

    $sidebar = $('.sidebar');

    $.material.init();

    md.initSidebarsCheck();

    window_width = $(window).width();

    // check if there is an image set for the sidebar's background
    md.checkSidebarImage();

    //  Activate the tooltips
    $('[rel="tooltip"]').tooltip();


    $('.form-control').on("focus", function(){
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function(){
        $(this).parent(".input-group").removeClass("input-group-focus");
    });

});

// activate collapse right menu when the windows is resized
$(window).resize(function(){
    md.initSidebarsCheck();

    // reset the seq for charts drawing animations
    seq = seq2 = 0;

});

md = {
    misc:{
        navbar_menu_visible: 0,
        active_collapse: true,
        disabled_collapse_init: 0,
    },

    checkSidebarImage: function(){
        $sidebar = $('.sidebar');
        image_src = $sidebar.data('image');

        if(image_src !== undefined){
            sidebar_container = '<div class="sidebar-background" style="background-image: url(' + image_src + ') "/>'
            $sidebar.append(sidebar_container);
        }
    },

    initSidebarsCheck: function(){
        if($(window).width() <= 991){
            if($sidebar.length != 0){
                md.initRightMenu();

            } else {
                md.initBootstrapNavbarMenu();
            }
        }

    },

    checkScrollForTransparentNavbar: debounce(function() {
            if($(document).scrollTop() > 260 ) {
                if(transparent) {
                    transparent = false;
                    $('.navbar-color-on-scroll').removeClass('navbar-transparent');
                }
            } else {
                if( !transparent ) {
                    transparent = true;
                    $('.navbar-color-on-scroll').addClass('navbar-transparent');
                }
            }
    }, 17),


    initRightMenu: debounce(function(){
        $sidebar_wrapper = $('.sidebar-wrapper');

        if(!mobile_menu_initialized){
            $navbar = $('nav').find('.navbar-collapse').first().clone(true);

            nav_content = '';
            mobile_menu_content = '';

            $navbar.children('ul').each(function(){

                content_buff = $(this).html();
                nav_content = nav_content + content_buff;
            });

            nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';

            $navbar_form = $('nav').find('.navbar-form').clone(true);

            $sidebar_nav = $sidebar_wrapper.find(' > .nav');

            // insert the navbar form before the sidebar list
            $nav_content = $(nav_content);
            $nav_content.insertBefore($sidebar_nav);
            $navbar_form.insertBefore($nav_content);

            $(".sidebar-wrapper .dropdown .dropdown-menu > li > a").click(function(event) {
                event.stopPropagation();

            });

            mobile_menu_initialized = true;
        } else {
            if($(window).width() > 991){
                // reset all the additions that we made for the sidebar wrapper only if the screen is bigger than 991px
                $sidebar_wrapper.find('.navbar-form').remove();
                $sidebar_wrapper.find('.nav-mobile-menu').remove();

                mobile_menu_initialized = false;
            }
        }

        if(!toggle_initialized){
            $toggle = $('.navbar-toggle');

            $toggle.click(function (){

                if(mobile_menu_visible == 1) {
                    $('html').removeClass('nav-open');

                    $('.close-layer').remove();
                    setTimeout(function(){
                        $toggle.removeClass('toggled');
                    }, 400);

                    mobile_menu_visible = 0;
                } else {
                    setTimeout(function(){
                        $toggle.addClass('toggled');
                    }, 430);


                    main_panel_height = $('.main-panel')[0].scrollHeight;
                    $layer = $('<div class="close-layer"></div>');
                    $layer.css('height',main_panel_height + 'px');
                    $layer.appendTo(".main-panel");

                    setTimeout(function(){
                        $layer.addClass('visible');
                    }, 100);

                    $layer.click(function() {
                        $('html').removeClass('nav-open');
                        mobile_menu_visible = 0;

                        $layer.removeClass('visible');

                         setTimeout(function(){
                            $layer.remove();
                            $toggle.removeClass('toggled');

                         }, 400);
                    });

                    $('html').addClass('nav-open');
                    mobile_menu_visible = 1;

                }
            });

            toggle_initialized = true;
        }
    }, 500),


    initBootstrapNavbarMenu: debounce(function(){

        if(!bootstrap_nav_initialized){
            $navbar = $('nav').find('.navbar-collapse').first().clone(true);

            nav_content = '';
            mobile_menu_content = '';

            //add the content from the regular header to the mobile menu
            $navbar.children('ul').each(function(){
                content_buff = $(this).html();
                nav_content = nav_content + content_buff;
            });

            nav_content = '<ul class="nav nav-mobile-menu">' + nav_content + '</ul>';

            $navbar.html(nav_content);
            $navbar.addClass('off-canvas-sidebar');

            // append it to the body, so it will come from the right side of the screen
            $('body').append($navbar);

            $toggle = $('.navbar-toggle');

            $navbar.find('a').removeClass('btn btn-round btn-default');
            $navbar.find('button').removeClass('btn-round btn-fill btn-info btn-primary btn-success btn-danger btn-warning btn-neutral');
            $navbar.find('button').addClass('btn-simple btn-block');

            $toggle.click(function (){
                if(mobile_menu_visible == 1) {
                    $('html').removeClass('nav-open');

                    $('.close-layer').remove();
                    setTimeout(function(){
                        $toggle.removeClass('toggled');
                    }, 400);

                    mobile_menu_visible = 0;
                } else {
                    setTimeout(function(){
                        $toggle.addClass('toggled');
                    }, 430);

                    $layer = $('<div class="close-layer"></div>');
                    $layer.appendTo(".wrapper-full-page");

                    setTimeout(function(){
                        $layer.addClass('visible');
                    }, 100);


                    $layer.click(function() {
                        $('html').removeClass('nav-open');
                        mobile_menu_visible = 0;

                        $layer.removeClass('visible');

                         setTimeout(function(){
                            $layer.remove();
                            $toggle.removeClass('toggled');

                         }, 400);
                    });

                    $('html').addClass('nav-open');
                    mobile_menu_visible = 1;

                }

            });
            bootstrap_nav_initialized = true;
        }
    }, 500),

    startAnimationForLineChart: function(chart){

        chart.on('draw', function(data) {
          if(data.type === 'line' || data.type === 'area') {
            data.element.animate({
              d: {
                begin: 600,
                dur: 700,
                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                to: data.path.clone().stringify(),
                easing: Chartist.Svg.Easing.easeOutQuint
              }
            });
          } else if(data.type === 'point') {
                seq++;
                data.element.animate({
                  opacity: {
                    begin: seq * delays,
                    dur: durations,
                    from: 0,
                    to: 1,
                    easing: 'ease'
                  }
                });
            }
        });

        seq = 0;
    },
    startAnimationForBarChart: function(chart){

        chart.on('draw', function(data) {
          if(data.type === 'bar'){
              seq2++;
              data.element.animate({
                opacity: {
                  begin: seq2 * delays2,
                  dur: durations2,
                  from: 0,
                  to: 1,
                  easing: 'ease'
                }
              });
          }
        });

        seq2 = 0;
    }
}


// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.

function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		clearTimeout(timeout);
		timeout = setTimeout(function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		}, wait);
		if (immediate && !timeout) func.apply(context, args);
	};
};
function readTextFile() {
            
			var file = new XMLHttpRequest();
			file.open("GET", "../url.txt", false);
			var file2 = new XMLHttpRequest();
			var file3 = new XMLHttpRequest();
			var file4 = new XMLHttpRequest();
			var file5 = new XMLHttpRequest();
			var file6 = new XMLHttpRequest();
            var file7 = new XMLHttpRequest();
			// console.log(file.responseText)
			var traffic,sources = ""
			file.onreadystatechange = function () {
				if (file.readyState === 4) {
					if (file.status === 200 || file.status == 0) {
						traffic = "https://widget.similarweb.com/traffic/".concat(file.responseText);
						document.getElementById("api1").src = traffic;
						sources = "https://widget.similarweb.com/sources/".concat(file.responseText);
						document.getElementById("api2").src = sources;
						// console.log(allText)
						// return allText
					}
				}
			}
			file.send(null);
			// return allText
            file2.open("GET","../flikes.txt",false);
            file2.onreadystatechange = function () {
				if (file2.readyState === 4) {
					if (file2.status === 200 || file2.status == 0) {
                        document.getElementById("facebook-likes").innerHTML = file2.responseText;
                    }
                }
            }
            file2.send(null);
            file3.open("GET","../tweets.txt",false);
            file3.onreadystatechange = function () {
				if (file3.readyState === 4) {
					if (file3.status === 200 || file3.status == 0) {
                        document.getElementById("tweets").innerHTML = file3.responseText;
                    }
                }
            }
            file3.send(null);
			file4.open("GET","../seo.txt",false);
            file4.onreadystatechange = function () {
				if (file4.readyState === 4) {
					if (file4.status === 200 || file4.status == 0) {
                        var lines = file4.responseText.split('\n');
                        document.getElementById("yip").innerHTML = lines[1];                        
                        document.getElementById("gip").innerHTML = lines[0];
                        document.getElementById("bip").innerHTML = lines[2];
                        
                    }
                }
            }
            file4.send(null);
            //file5.send(null);
            file5.open("GET","../datareport.txt",false);
            file5.onreadystatechange = function () {
				if (file5.readyState === 4) {
					if (file5.status === 200 || file5.status == 0) {
                        var lines = file5.responseText.split('\n');
                        document.getElementById("pviews").innerHTML = lines[0];                        
                        document.getElementById("adincome").innerHTML = lines[1];
                        //document.getElementById("bip").innerHTML = lines[2];
                        
                    }
                }
            }
            file5.send(null);
            file6.open("GET","../gen.txt",false);
            file6.onreadystatechange = function () {
				if (file6.readyState === 4) {
					if (file6.status === 200 || file6.status == 0) {
                        var lines = file6.responseText.split('\n');
                        document.getElementById("gen").innerHTML = lines[1];                        
                        document.getElementById("head").innerHTML = lines[0];
                        document.getElementById("domain").innerHTML = lines[3];
                        document.getElementById("rank").innerHTML = lines[2];
                        document.getElementById("owner").innerHTML = lines[4];
                        document.getElementById("registrar").innerHTML = lines[5];
                        
                    }
                }
            }
            file6.send(null);
            file7.open("GET","../graph.txt",false);
            file7.onreadystatechange = function () {
				if (file7.readyState === 4) {
					if (file7.status === 200 || file7.status == 0) {
                        //var lines = file7.responseText.split('\n')
                        //console.log(responseText);
                        document.getElementById("graph").innerHTML = file7.responseText;                        
                        
                        
                    }
                }
            }
            file7.send(null);

		}
