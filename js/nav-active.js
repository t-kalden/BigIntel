$(document).ready(function(){
    //NAVBAR ACTIVE
    $('.icon-container').click(function() {
        $('.icon-container').toggleClass('active');
        $('.nav-wrapper').toggleClass('pulldown');
    });
    $('.menu-item').click(function(){
        $('.icon-container').toggleClass('active');
        $('.nav-wrapper').toggleClass('pulldown');
    });
});