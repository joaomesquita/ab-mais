$(window).scroll(function(){
    if($(window).scrollTop() > 0) {
        $("#nav-home").css("background", "linear-gradient(180deg, #272727 0%, #272727 0.01%, #272727 100%)");
        $("#nav-transparent").css("background", "linear-gradient(180deg, #272727 0%, #272727 0.01%, #272727 100%)");
        $(".navbar").css("box-shadow","0 0 14px rgba(0,0,0,0.3)");
        $(".navbar").css("padding", "15px 0");
        $(".navbar").css("transition", "0.2s");
        $("#nav-home .navbar-brand").removeClass("d-lg-none");
    } else {
        $("#nav-home").css("background", "");
        $("#nav-transparent").css("background", "linear-gradient(180deg, rgba(0, 0, 0, 0.7) 0%, rgba(49, 59, 55, 0) 100%)");
        $(".navbar").css("box-shadow","none");
        $(".navbar").css("padding", "");
        $("#nav-home .navbar-brand").addClass("d-lg-none");
    }
});

$(".navbar-toggler").click(function() {
    $(".navbar").toggleClass("bg-primary-100");
    $("#nav-transparent").css("background", "linear-gradient(180deg, #272727 0%, #272727 0.01%, #272727 100%)");
})

$('[data-fancybox]'). fancybox ({
    animationEffect: 'zoom',
    thumbs: {
        autoStart:  true ,
        hideOnClose:  true
    }
});

new Splide( '.splide', {
	type: 'fade',
	rewind: true,
    direction: 'ttb',
	height: 'auto',
} ).mount();

new Splide( '#splide-empreendimentos', {
	type: 'fade',
	rewind: true,
    direction: 'ttb',
	height: 'auto',
} ).mount();

var elms = document.getElementsByClassName( 'splide' );
for ( var i = 0, len = elms.length; i < len; i++ ) {
	new Splide( elms[ i ] ).mount();
}

const scrollReveal = ScrollReveal({
    origin: 'top',
    distance: '30px',
    duration: 700,
    reset: false
})
  
scrollReveal.reveal(
    `.row`,
    { interval: 100 }
)
