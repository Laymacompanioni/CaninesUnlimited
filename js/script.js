$(document).ready(function(){
    // wow initiation
  

    $('#navbar-toggle').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });

    // navbar - change bg on scroll
    $(window).scroll(function(){
        let pos =$(window).scrollTop();
        if (pos > 100){
            $('.navbar').addClass('cng-navbar');
        }else{
            $('.navbar').removeClass('cng-navbar');
        }
    });

});