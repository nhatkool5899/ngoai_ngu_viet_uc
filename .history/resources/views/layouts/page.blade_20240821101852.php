<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front-end/assets/imgs/logo/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front-end/assets/imgs/logo/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front-end/assets/imgs/logo/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('front-end/assets/imgs/logo/site.webmanifest')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Link custom css -->
    <link rel="stylesheet" href="{{asset('front-end/assets/fonts/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/animation.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/responsive.css')}}">
    
</head>
<body>
    <div class="app">
        <header>
            <div class="header">
                <div class="header_top">
                    <div class="container">
                        <div class="header_top-main">
                            <div class="header_top-item">
                                <p class="header_top-text">Chúng tôi đang đưa ra những ưu đãi tốt nhất cho sinh viên mới giảm giá 25%</p>
                            </div>
                            <div class="header_top-item">
                                <p class="header_top-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_main">
                    <div class="container">
                        <div class="header_elementor">
                            <a href="{{url('/')}}" class="logo">
                                <div class="logo-img">
                                    <img src="{{asset('front-end/assets/imgs/logo/logo.webp')}}" alt="logo">
                                </div>
                                <div class="logo-text">
                                    <h4>Trung tâm ngoại ngữ</h4>
                                    <h2>Việt Úc</h2>
                                </div>
                            </a>
                            <div class="header_item">
                                <div class="header_item-icon">
                                    <i class="fa-sharp fa-solid fa-phone"></i>
                                </div>
                                <div class="header_item-context">
                                    <h4>Liên hệ</h4>
                                    <p>0934-163-034</p>
                                </div>
                            </div>
                            <div class="header_item">
                                <div class="header_item-icon">
                                 <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="header_item-context">
                                    <h4>Email</h4>
                                    <p>ngoainguvietuceducation@gmail.com</p>
                                </div>
                            </div>
                             <div class="header_item">
                                <div class="header_search">
                                    <input type="search" name="keyword" placeholder="Nhập từ khóa...">
                                    <button><i class="fa-regular fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_fixed">
                    <div class="container">
                        <div class="header_nav">
                            <ul class="navigation">
                                <li class="nav-item">
                                    <a href="{{url('gioi-thieu')}}" class="nav-link">Giới thiệu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('chuong-trinh-hoc')}}" class="nav-link">Chương trình học <i class="fa-regular fa-chevron-down"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('co-so-vat-chat')}}" class="nav-link">Cơ sở vật chất</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('giao-vien')}}" class="nav-link">Giáo viên</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('tin-tuc')}}" class="nav-link">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('tuyen-dung')}}" class="nav-link">Tuyển dụng <i class="fa-regular fa-chevron-down"></i></a>
                                </li>
                            </ul>
                            <div class="header_btn">
                                <button class="register_button">Đăng ký ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="banner">
            <div class="swiper bannerSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('front-end/assets/imgs/banner/demo-1.jpg')}}" alt="banner-1">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('front-end/assets/imgs/banner/demo-2.png')}}" alt="banner-2">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('front-end/assets/imgs/banner/demo-3.jpg')}}" alt="banner-3">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
                <div class="autoplay-progress">
                  <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                  </svg>
                  <span></span>
                </div>
            </div>
        </div>
        <main>
            <section class="section bg-shape-1">
                <div class="container">
                   <div class="box_search">
                    <div class="search_elementor">
                        <div class="search_context">
                            <p>Tìm các khóa học phù hợp với bạn và giúp con đường học vấn của bạn thành công</p>
                        </div>
                        <div class="search_inner">
                            <div class="search_lits">
                                <div class="search_item search_age">
                                    <div class="group-input">
                                        <div class="dropdown">
                                            <div class="dropdown-select">
                                                <div>
                                                    <i class="fa-light fa-user"></i>
                                                    <span class="select selected-start select-name">Độ tuổi</span>
                                                </div>
                                                <i class="fa-regular fa-chevron-down dropdown-icon"></i>
                                            </div>
                                            <div class="dropdown-list">
                                                <div class="dropdown-content">
                                                    <div class="dropdown-list-item select-start">3 - 6 tuổi</div>
                                                    <div class="dropdown-list-item select-start">6 - 11 tuổi</div>
                                                    <div class="dropdown-list-item select-start">Người đi làm</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search_item search_course">
                                    <div class="group-input">
                                        <div class="dropdown">
                                            <div class="dropdown-select">
                                                <div>
                                                    <i class="fa-regular fa-book"></i>
                                                    <span class="select selected-start select-name">Chương trình học</span>
                                                </div>
                                                <i class="fa-regular fa-chevron-down dropdown-icon"></i>
                                            </div>
                                            <div class="dropdown-list">
                                                <div class="dropdown-content">
                                                    <div class="dropdown-list-item select-start">Tiếng Anh trung học</div>
                                                    <div class="dropdown-list-item select-start">Ila Du Học</div>
                                                    <div class="dropdown-list-item select-start">Luyện thi IELTS</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search_more">
                                    <button class="btn_view-more">
                                        Xem thêm
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="search_img">
                            <img src="{{asset('front-end/assets/imgs/thumb.webp')}}" alt="thump">
                        </div>
                    </div>
                   </div>

                   <div class="home_study">
                    <div class="study_program">
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/1.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chương Trình THCS - THPT</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/2.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chương Trình Đại Học</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/3.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chứng Chỉ VSTEP</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/3.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chương Trình THCS - THPT</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/2.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Chương Trình Tiếng Anh Giao Tiếp</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/1.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chương Trình THCS - THPT</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
            <div class="background_inner">
                <a href="#" class="banner-link" target="_blank">
                    <img src="{{asset('front-end/assets/imgs/images-1.jpg')}}" alt="image-1">
                </a>
            </div>
            <section class="section ">
                <div class="container">
                    <div class="wrapper_title">
                        <div class="title_inner">
                            <div class="title_context">
                                <h3>Tin tức</h3>
                            </div>
                            <div class="title_arrow">
                                <span class="slide_prev-btn"><i class="fa-regular fa-chevron-left"></i></span>
                                <span class="slide_next-btn"><i class="fa-regular fa-chevron-right"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="home_news">
                        <div class="swiper">
                            <div class="swiper-wrapper news_wrapper">
                                <div class="swiper-slide news_slide">
                                    <div class="news_content">
                                        <div class="home_news-image">
                                            <img src="{{asset('front-end/assets/imgs/news/1.jfif')}}" alt="news-1">
                                        </div>
                                        <div class="home_news-context">
                                            <div class="home_news-title"> Summer Festival: Lễ hội mùa hè sôi động và ý nghĩa của hơn 3.000 bạn nhỏ </div>
                                            <div class="home_news-desc">
                                                Khép lại lễ hội mùa hè  Summer Festival vào ngày 19/7, hơn 3.000 bạn nhỏ đã làm bùng nổ sân vận động Hoa Lư với hàng trăm sắc màu rực rỡ! Lễ hội Summer Festival 2024 không chỉ là một sự kiện…
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide news_slide">
                                    <div class="news_content">
                                        <div class="home_news-image">
                                            <img src="{{asset('front-end/assets/imgs/news/1.jfif')}}" alt="news-1">
                                        </div>
                                        <div class="home_news-context">
                                            <div class="home_news-title"> Summer Festival: Lễ hội mùa hè sôi động và ý nghĩa của hơn 3.000 bạn nhỏ </div>
                                            <div class="home_news-desc">
                                                Khép lại lễ hội mùa hè  Summer Festival vào ngày 19/7, hơn 3.000 bạn nhỏ đã làm bùng nổ sân vận động Hoa Lư với hàng trăm sắc màu rực rỡ! Lễ hội Summer Festival 2024 không chỉ là một sự kiện…
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
        </main>
        <footer></footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('front-end/assets/js/main.js')}}"></script>


    <script>
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
      </script>
</body>
</html>