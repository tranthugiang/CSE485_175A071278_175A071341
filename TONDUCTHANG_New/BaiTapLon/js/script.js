$(document).ready(function(){
    $(window).scroll(function(){
        if($(document).scrollTop() >= 200 && $('#header_menu.header-menu').hasClass('fixed') == false) {
            $('#header_menu.header-menu').addClass('fixed');
        }
        if($(document).scrollTop() < 200 && $('#header_menu.header-menu').hasClass('fixed') == true) {
            $('#header_menu.header-menu').removeClass('fixed');
        }
        if($(document).scrollTop() <=1100){
            $('.slide-cauhoi1 , .slide-cauhoi2').hide();
         }
        if($(document).scrollTop() >=1200){
           $('.slide-cauhoi1').slideDown(1500,function(){
            $('.slide-cauhoi2').slideDown(1500);
           });
        }
        if($(document).scrollTop() >=2000){
            $('.container-img-yeucau').fadeIn(1300);
         }
         if($(document).scrollTop() <=1900){
             $('.container-img-yeucau').fadeOut(800);
          }
        console.log('window position=', $(window).scrollTop());
    });
});