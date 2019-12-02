$(function() {
    var $slides = $('#slides');

    Hammer($slides[0]).on("swipeleft", function(e) {
        $slides.data('superslides').animate('next');
    });

    Hammer($slides[0]).on("swiperight", function(e) {
        $slides.data('superslides').animate('prev');
    });

     $slides.superslides({
         hashchange: false,
         play: 10000000//8000
     });

    /*
     $('#slides').on('mouseenter', function() {
         $(this).superslides('stop');
     });
     $('#slides').on('mouseleave', function() {
         $(this).superslides('start');
     });*/

});