
$(document).on('click', '.dropdown-select', function () {
    $(this).parent().find('.dropdown-list').toggleClass('active');
})
  
  
$('.dropdown-list').click(function (e) {
    if (e.target !== e.currentTarget) {
        $(this).removeClass('active');
    }
})

$('.select-start').click(function(){
    var selected = $(this).text();
  
    $('.selected-start').text(selected);
  
})



const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper = new Swiper(".bannerSwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 4000,
    disableOnInteraction: false
    },
    pagination: {
    el: ".swiper-pagination",
    clickable: true
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
    },
    on: {
    autoplayTimeLeft(s, time, progress) {
        progressCircle.style.setProperty("--progress", 1 - progress);
        progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    }
    }
});


var swiper = new Swiper(".news_swiper-menu", {
    spaceBetween: 10,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
});
var swiper2 = new Swiper(".news_swiper", {
    spaceBetween: 5,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    navigation: {
        nextEl: ".slide_next-btn",
        prevEl: ".slide_prev-btn",
    },
    thumbs: {
        swiper: swiper,
    },
});

var swiper = new Swiper(".activities_swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
        slidesPerView: 2,
        spaceBetween: 20,
        },
        1200: {
        slidesPerView: 3,
        spaceBetween: 30,
        },
    },
});

var swiper = new Swiper(".swiper_space_1", {
    slidesPerView: 1,
    spaceBetween: 10,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
    breakpoints: {
        768: {
        slidesPerView: 2,
        spaceBetween: 20,
        },
        992: {
        slidesPerView: 3,
        spaceBetween: 30,
        },
        1200: {
        slidesPerView: 4,
        spaceBetween: 40,
        },
    },
});