$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

$(document).ready(function () {

            var thoigianchay = 2 * 1000;

            var owl = $("#owl-demo");

            owl.owlCarousel({
                items: 3, 
            });

            // Custom Navigation Events
            $(".next").click(function () {
                owl.trigger('owl.next');
            })
            $(".prev").click(function () {
                owl.trigger('owl.prev');
            })
            owl.trigger('owl.play', thoigianchay);

            $(".owl-item").hover(function () {
                owl.trigger('owl.stop');
            }, function () {
                owl.trigger('owl.play', thoigianchay);
            });

        });