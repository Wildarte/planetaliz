$(document).ready(function(){
    
    $(".video-carousel").owlCarousel({
        loop:true,
        margin: 10,
        nav:true,
        autoplay:true,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });


    $(".over_mat_carousel").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });


    $(".carousel_pers").owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay:true,
        autoplayTimeout: 4000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    const btn_menu = document.querySelector('.btn_menu');
    const nav_menu = document.querySelector('nav.menu');
    const close_menu = document.querySelector('.btn_close_menu');

    btn_menu.addEventListener('click', () => {

        if(nav_menu.classList.contains('open_nav_menu')){
            nav_menu.classList.remove('open_nav_menu');
        }else{
            nav_menu.classList.add('open_nav_menu');
        }

    });

    close_menu.addEventListener('click', () => {

            nav_menu.classList.remove('open_nav_menu');

    });

    const search = document.querySelector('.search');
    const over_body = document.querySelector('.over_body');

    search.addEventListener('click', () => {
        if(over_body.classList.contains('open_over_body')){
            over_body.classList.remove('open_over_body')
        }else{
            over_body.classList.add('open_over_body');
        }
    })

});