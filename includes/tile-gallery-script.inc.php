<script>
    $(document).ready(function(){
        $(".galleryCarousel").owlCarousel({
            autoplay: true,
            autoplayHoverPause: true,
            smartSpeed: 550,
            responsiveClass: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 3000,
            loop: false,
            margin: 15, 
            items: 3,
            nav: false,
            dots: true,
            responsiveClass: true,
            responsive: {
                0: { items: 1, },
                576: { items: 2 },
                768: { items: 2 },
                992: { items: 3 },
                1200: { items: 3 },
                1400: { items: 3 },
                2000: { items: 4 },
            },
        });


        $('.galleryItem').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom', 
            gallery:{ enabled:true
                },
            
            zoom: {
                enabled: true,  
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function 
                opener: function(openerElement) { 
                return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            } 
        });
    });
</script>