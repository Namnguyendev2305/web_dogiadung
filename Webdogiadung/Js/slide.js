// slide banner
    $('.banner').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        mouseDrag:true,
        autoplayHoverPause:true,
        autoplay: true, 
        autoplayTimeout: 3000,
        autoplaySpeed:1500,
        dotsSpeed:1500,
        autoHeight: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    // bán chạy
    $('.product_newcart').owlCarousel({
        loop:true,
        autoWidth:true,
        margin: 20,
        dots:false,
        nav: true,
        autoplay: true, 
        autoplayTimeout: 5000,
        autoplaySpeed:2500,
        responsive: {
            0: {
                items: 5
            },
            600: {
                items: 5
            },
            1000: {
                items: 5
            }
        },
        navText: ["<i class='fa-solid fa-circle-chevron-left'></i>", "<i class='fa-solid fa-circle-chevron-right'></i>"] // Sử dụng FontAwesome icons làm nút previous

    })
    // cho tiết ảnh
    $('.image_con').owlCarousel({
        loop:true,
        autoWidth:true,
        margin: 10,
        dots:false,
        nav: false,
        autoplay: true, 
        autoplayTimeout: 5000,
        autoplaySpeed:2500,
        responsive: {
            0: {
                items: 4
            },
            600: {
                items: 4
            },
            1000: {
                items: 4
            }
        }

    })