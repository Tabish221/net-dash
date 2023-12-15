$(document).ready(function() {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
});


// Header and Aside Bar
function addasideclasses(){
    $('aside').addClass("showAside");
    $('aside').removeClass("hideAside");
}
function removeasideclasses(){
    $('aside').addClass("hideAside");
    $('aside').removeClass("showAside");
}

// On click buger menu 
$('aside .menu-Bar').click(function() {
    $('.menu-Bar').show();
    $(this).hide();
    $('.menu-Bar').addClass('open');
    $(this).removeClass('open');
    $('aside').addClass('closedBar');
    $('header').addClass('closedBar');
    setTimeout(removeasideclasses, 500);
});

$("header .menu-Bar").click(function() {
    $('.menu-Bar').show();
    $(this).hide();
    $('.menu-Bar').addClass('open');
    $(this).removeClass('open');
    $('aside').removeClass('closedBar');
    $('header').removeClass('closedBar');
    setTimeout(addasideclasses, 10);
});

// Hover header buger menu show and hover out not show menu
$("header .menu-Bar").hover(function(){
    if($(this).hasClass("open")){
        addasideclasses();
    }
}, function(){
    if($(this).hasClass("open")){
        removeasideclasses();
    }
});

$("aside").hover(function(){
    if($(this).hasClass("closedBar")){
        addasideclasses();
    }
}, function(){
    if($(this).hasClass("closedBar")){
        removeasideclasses();
    }
});

// Data Loader
$(".dataload").click(function(){
    var x = $(this);
    x.addClass("startload");

    setTimeout(function(){
        x.removeClass("startload");
    }, 1500);
});

// Chat Always bottom
$(document).ready(function () {
    var x = $(".addCustomerPanel-chat .timeline .timeline-container").innerHeight();
    $(".addCustomerPanel-chat .timeline").scrollTop(x);
});



// Sticky Navigation
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});


// Navigation Menu 
$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function() {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    });
});

// Tabbing JS
$('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
});

/* RESPONSIVE JS */
if ($(window).width() < 825) {
}

// Show the loader
function showLoader() {
    $('.loader-items').hide();
    $('.loader-overlay').show();
    $('.loader-div').show();
    $('body, .bodyPanel').addClass("overflow-hidden");
}
  
// Hide the loader
function hideLoader() {
    $('.loader-overlay').hide();
    $('.loader-div').hide();
    $('.loader-items').show();
    $('.loader-items').attr("style", "");
    $('.loader-items').removeClass("loader-items");
    $('body, .bodyPanel').removeClass("overflow-hidden");
}


$(document).ready(function () {
    // On DOM ready, show the loader
    hideLoader();
});
  
// Window onload event
// $(window).on('load', function () {
//     // Hide the loader after all resources have been loaded
//     hideLoader();
// });





















