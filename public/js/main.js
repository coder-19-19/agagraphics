$(document).ready(() => {

    //preloader
    const hidePreloader = () => {

        const preloader = $('.spinner-wrapper');
        preloader.fadeOut(500);
    }

    hidePreloader();

    // toggle menu/navbar script
    $(".menu-btn").click(function () {
        $(".navbar .menu").toggleClass("active");
        $(".menu-btn i").toggleClass("active");
        if($('.main').css('display') === 'block'){
            $('.main').fadeOut()
        }
        else{
            $('.main').fadeIn()
        }
    });

    $(window).scroll(() => {
        if(this.scrollY > 20){
            $('.navbar').addClass('sticky')
        }else{
            $('.navbar').removeClass('sticky')
        }
        // scroll-up button show/hide script
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass('show')
        } else {
            $('.scroll-up-btn').removeClass('show')
        }
    })

    // slide-up script
    $('.scroll-up-btn').on('click', () => {
        $('html').animate({ scrollTop: 0 })
        // removing smooth scroll on slide-up button click
        $('html').css('scrollBehavior', 'auto')
    })

    AOS.init()
})