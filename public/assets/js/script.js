window.onload = function(){
	// Activate OWL Carousel for testimonials
	var owl = $("#testimonial");
        owl.owlCarousel({
            items : 1,
            itemsDesktop : [1000,1],
            itemsDesktopSmall : [900,1],
            itemsTablet: [600,1],
            itemsMobile : false
        });

        // Custom Navigation Events
        $(".testimonial-next").click(function(){
            owl.trigger('owl.next');
        })
        $(".testimonial-prev").click(function(){
            owl.trigger('owl.prev');
        });

    // Activate OWL for Clients
    var owl = $("#client");
    owl.owlCarousel({
        items : 4,
        itemsDesktop : [1100,3],
        itemsDesktop : [1000,2],
        itemsDesktopSmall : [900,1],
        itemsTablet: [600,1],
        itemsMobile : false
    });
    
    $(".client-next").click(function(){
        owl.trigger('owl.next');
    })
    $(".client-prev").click(function(){
        owl.trigger('owl.prev');
    });

};