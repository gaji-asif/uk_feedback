(function($) {
    "use strict";
    $('.nav_toggle').on('click', function() {
        $(this).toggleClass("close_menu");
        $(".navigation_menu").slideToggle(100);
    });
    //dropdown menu
    $(".navigation_menu ul li ul.sub_menu").parents("li").addClass("dropdown_toggle");
    $(".dropdown_toggle").append("<span class='caret_down'></span>");
    $(".navigation_menu ul li").children(".caret_down").on("click", function() {
        $(this).toggleClass("caret_up");
        $(this).prev("ul").slideToggle();
    });
    //mega menu js
    $(".mega_menu").parents("li").addClass("mega_dropdown");
    $(".mega_dropdown").prepend("<span class='mega_toggle'></span>");

    //mega menu js script
    var win_w = $(window).outerWidth();
    if (win_w < 992) {
        $(".mega_dropdown > a").on('click', function() {
            $(this).next(".mega_menu").slideToggle(300);
            $(this).parents(".mega_dropdown").toggleClass("caret_up");
        });
    }
    //fix header on scroll
    var win_scroll = $(window).scrollTop();
    $(window).on('bind scroll', function(e) {
        if ($(window).scrollTop() > 500) {
            $('.navigation_header').addClass('fixed_menu');
        } else {
            $('.navigation_header').removeClass('fixed_menu');
        }
    });
    //cart list open close js
    $(".header_cart").on("click", function() {
        $(".cart_overlay_body").addClass("open");
    });
    $(".cart_close").on("click", function() {
        $(".cart_overlay_body").removeClass("open");
    });
    //change product count on click
    $('.minus').on("click", function() {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val(), 10) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').on("click", function() {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val(), 10) + 1);
        $input.change();
        return false;
    });
    //smooth scroll body on click
    $('a.scrool_anchor').click(function() {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
        return false;
    });
    //payment radio check
    $('.payment_radio input').change(function() {
        if ($(".card_pay_input").is(':checked')) {
            $(".card_pay_form").slideDown(100);
        } else {
            $(".card_pay_form").slideUp(100);
        }
    });
    //search bar popup in mobile
    $(".h_search_icon").on("click", function() {
        $(".mobile_searchbar").slideToggle(200);
    });
    //Home slider
    if ($(".home_slider").length > 0) {
        $(".home_slider").owlCarousel({
            singleItem: true,
            items: 1,
            loop: true,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 4000,
            autoplaySpeed: 1500,
            smartSpeed: 1500,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        });
    }
    //Home slider
    if ($(".offer_img_slider").length > 0) {
        $(".offer_img_slider").owlCarousel({
            singleItem: true,
            items: 1,
            loop: false,
            margin: 0,
            autoplay: false,
            autoplayTimeout: 4000,
            autoplaySpeed: 1500,
            smartSpeed: 1500,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
        });
    }
    //load event
    $(window).on('load', function() {
        $(".ayu_loader").delay(600).fadeOut("slow");
        setTimeout(function() {
            $("body").addClass("body_loaded");
        }, 500);
    });
    //tabs Menu
    $('.tabs_menu > li').on('click', function() {
        var tab_data = $(this).attr("data-tab");
        $('.tabs_menu > li').removeClass("active");
        $(this).addClass("active");
        $(".tab_content").removeClass("active");
        $("#" + tab_data).addClass("active");
    });
    //google review tabs
    $('.g_tabs > li').on('click', function() {
        var tab_data = $(this).attr("data-tab");
        $('.g_tabs > li').removeClass("active");
        $(this).addClass("active");
        $(".g_tab_content").removeClass("active");
        $("#" + tab_data).addClass("active");
    });
    //product category tabs Menu
    $('.p_category_sidebar ul li').on('click', function() {
        var tab_data = $(this).attr("data-tab");
        $('.p_category_sidebar ul li').removeClass("active");
        $(this).addClass("active");
        $(".tab_content").removeClass("active");
        $("#" + tab_data).addClass("active");
    });
    //accordion js
    $(".accordion_heading").on("click", function() {
        $(this).toggleClass("active");
        $(this).next(".accordion_content").slideToggle(250);
        //$(".ac_heading").not(this).next().slideUp(100);
        //$(".ac_heading").not(this).removeClass("active");
    });
    //counter js
    if ($('.counter_n').length > 0) {
        $('.counter_n').appear(function() {
            $('.counter_n').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    }
    //Dropfile function
    $('.dropfile_button input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $(this).prev(".dropfile_label").children(".filepath").text('(' + fileName + ')');
    });
    //file upload function
    $('.file_upload_button input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $(this).parents(".file_upload_button").next(".filepath").text(fileName);
    });
    //bootsrape selectpicker
    if ($(".selectpicker").length > 0) {
        $('.selectpicker').selectpicker();
    }
    //product sidebar widget toggle
    $(".p_widget").eq(1).addClass("open_widget");
    $(".p_widget.open_widget").children(".widget_txt").slideDown();
    $(".p_widget_title").on("click", function() {
        $(this).next(".widget_txt").slideToggle(100);
    });
    //open product sidebar
    if (win_w < 992) {
        $(".sidebar_open_btn").on('click', function(e) {
            $(".product_sidebar").addClass("open");
            e.stopPropagation();
        });
        $("body").on('click', function() {
            $(".product_sidebar").removeClass("open");
        });
        $(".product_sidebar").on("click", function(e) {
            e.stopPropagation();
        });
        $(".sidebar_close_btn").on('click', function() {
            $(".product_sidebar").removeClass("open");
        });
    }
    //wow animation js
    new WOW().init();
    //slider img call in bg
    // $(".slide_img").each(function () {
    // var img_path = $(this).attr("src");
    // $(this).parents(".slide_item").css("background-image","url("+img_path+")");
    // });
    //Custom Dropdown
    $(".d_dropdown_toggle").on("click", function() {
        $(this).next(".dropdown_menu").slideToggle(100);
        $(".d_dropdown_toggle").not(this).next().slideUp(100);
    });
    //product mixit js
    if ($('#product_mixit_wrap').length > 0) {
        $('#product_mixit_wrap').mixItUp({
            load: {
                sort: 'order:asc'
            },
            selectors: {
                target: '.mix-target',
                filter: '.filter-btn'
            },
            callbacks: {
                onMixEnd: function(state) {
                    console.log(state)
                }
            }
        });
    }
    //preview image before upload
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.prev_img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    $(".prev_img_input").change(function() {
        readURL(this);
    });
    //gigs sidebar Open & Close on mobile
    $(".sidebar_open_btn").on("click", function() {
        $(".gigs_dash_sidebar").addClass("active");
    });
    $(".sidebar_close").on("click", function() {
        $(".gigs_dash_sidebar").removeClass("active");
    });
    $('.msg_send_btn').on("click", function() {

        var msg = $(".write_msg").val();
        $(".write_msg").val('');
        var time = new Date();
        var current_time = time.toLocaleString('en-US', {
            hour: 'numeric',
            minute: 'numeric',
            hour12: true
        })
        var message = `<div class="outgoing_msg">
							<div class="sent_msg">
								<p>${msg}</p>
							</div>
						</div>`

        $('.msg_history').append(message);

        var url = 'https://www.localhost/uk_feedback/front/chat'
            // var url = $("#url").val();
        var gig_id = $("#gig_id").val();
        var user_id = $("#user_id").val();
        var gigs_title = $("#gigs_title").val();
        var username = $("#username").val();
        $.ajax({
            type: "POST",
            url: url,
            data: {
                message: msg,
                gig_id: gig_id,
                user_id: user_id,
                gigs_title: gigs_title,
                username: username,
            },
            success: function(data) {

            },
            error: function() {

            }
        });


    });
})(jQuery);
//copy input link on button click
function copyfunction() {
    var copyText = document.getElementById("copy_af_input");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}
//google link copy
function mapcopy() {
    var copyText = document.getElementById("mapinput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}
//google map copy
function linkcopy() {
    var copyText = document.getElementById("link_input");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}
//app copy
function appcopy() {
    var copyText = document.getElementById("appinput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}
//facebook copy
function fbcopy() {
    var copyText = document.getElementById("fbinput");
    copyText.select();
    copyText.setSelectionRange(0, 99999)
    document.execCommand("copy");
}