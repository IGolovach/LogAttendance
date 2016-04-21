$(document).ready(function() {        
    $('.navbar li a').hover(
        function(e) {
            $(this).stop().animate({ marginTop: -50}, 100);
        },
        function(e) {
            $(this).stop().animate({ marginTop: 0}, 100);
        }
    );
});