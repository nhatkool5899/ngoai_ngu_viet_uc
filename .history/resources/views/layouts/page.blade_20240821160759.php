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
                                <div class="study_name">Bứt phá tiếng Anh Trung học cơ sở cùng Việt Úc THCS</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/demo-2.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chương Trình Đại Học</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/demo-3.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi Chương trình tiểu học</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/demo-4.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi chứng chỉ vstep</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/demo-5.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Luyện Thi chứng chỉ IELTS</div>
                                <a href="#" class="learn_more">Tìm hiểu thêm <span class="learn_more-icon"><i class="fa-solid fa-arrow-up-right"></i></span></a>
                            </div>
                        </div>
                        <div class="study_item">
                            <div class="study_image">
                                <img src="{{asset('front-end/assets/imgs/study/demo-6.jpg')}}" alt="program-1">
                            </div>
                            <div class="study_context">
                                <div class="study_name">Tiếng Anh giao tiếp - tư vấn du học</div>
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
                        <div class="swiper news_swiper">
                            <div class="swiper-wrapper news_wrapper">
                                <div class="swiper-slide news_slide">
                                    <a href="#" class="news_content" target="_blank">
                                        <div class="home_news-image">
                                            <img src="{{asset('front-end/assets/imgs/news/1.jpg')}}" alt="news-1">
                                        </div>
                                        {{-- <div class="home_news-context">
                                            <div class="home_news-title"> "TIẾP LỬA" mùa khai trường - Quà tặng ngập tràn </div>
                                            <div class="home_news-desc">
                                                "TIẾP LỬA" mùa khai trường - Quà tặng ngập tràn, miễn phí 1 bài kiểm tra năng lực 4 kỹ năng
                                            </div>
                                        </div> --}}
                                    </a>
                                </div>
                                <div class="swiper-slide news_slide">
                                    <a href="#" class="news_content" target="_blank">
                                        <div class="home_news-image">
                                            <img src="{{asset('front-end/assets/imgs/news/2.jpg')}}" alt="news-1">
                                        </div>
                                        <div class="home_news-context">
                                            <div class="home_news-title"> LỘ TRÌNH HỌC TIẾNG ANH CHUẨN QUỐC TẾ CHO TRẺ TIỂU HỌC </div>
                                            <div class="home_news-desc">
                                                Học tiếng Anh là quá trình thu thập kiến thức dài hạn và cần có lộ trình cụ thể. Chính vì thế, Việt Úc thiết kế lộ trình học tiếng Anh bài bản cho trẻ tiểu học từ A-Z. Từ đó ba mẹ cùng các con sẽ có định hướng học tập tiếng Anh rõ ràng.
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide news_slide">
                                    <a href="#" class="news_content" target="_blank">
                                        <div class="home_news-image">
                                            <img src="{{asset('front-end/assets/imgs/news/3.jpg')}}" alt="news-1">
                                        </div>
                                        <div class="home_news-context">
                                            <div class="home_news-title">PHẦN MỀM DOTB - QUẢN LÝ SINH VIÊN SIÊU TIỆN ÍCH </div>
                                            <div class="home_news-desc">
                                                Thì ra QUẢN LÝ SINH VIÊN cũng dễ như thế, chỉ một cái click chuột và 1 tích tắc…là XONG.
                                                DOTB sẽ cho bạn thấy thế nào được gọi là “phao cứu sinh” của các phụ huynh mùa tựu trường
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="news_tabs">
                            <div thumbsSlider="" class="swiper news_swiper-menu">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="menu_news-item">
                                            <img src="{{asset('front-end/assets/imgs/news/1.jpg')}}" alt="1-image">
                                            <div class="menu_news-context">
                                                <h4> "TIẾP LỬA" mùa khai trường - Quà tặng ngập tràn </h4>
                                                <p>"TIẾP LỬA" mùa khai trường - Quà tặng ngập tràn, miễn phí 1 bài kiểm tra năng lực 4 kỹ năng</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="menu_news-item">
                                            <img src="{{asset('front-end/assets/imgs/news/2.jpg')}}" alt="1-image">
                                            <div class="menu_news-context">
                                                <h4>LỘ TRÌNH HỌC TIẾNG ANH CHUẨN QUỐC TẾ CHO TRẺ TIỂU HỌC</h4>
                                                <p>
                                                    Học tiếng Anh là quá trình thu thập kiến thức dài hạn và cần có lộ trình cụ thể. Chính vì thế, Việt Úc thiết kế lộ trình học tiếng Anh bài bản cho trẻ tiểu học từ A-Z. Từ đó ba mẹ cùng các con sẽ có định hướng học tập tiếng Anh rõ ràng.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="menu_news-item">
                                            <img src="{{asset('front-end/assets/imgs/news/3.jpg')}}" alt="1-image">
                                            <div class="menu_news-context">
                                                <h4> PHẦN MỀM DOTB - QUẢN LÝ SINH VIÊN SIÊU TIỆN ÍCH</h4>
                                                <p>
                                                    Thì ra QUẢN LÝ SINH VIÊN cũng dễ như thế, chỉ một cái click chuột và 1 tích tắc…là XONG.
                                                    DOTB sẽ cho bạn thấy thế nào được gọi là “phao cứu sinh” của các phụ huynh mùa tựu trường
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
            <section class="section bg-blue">
                <div class="container">
                    <div class="wrapper_title">
                        <div class="title_inner">
                            <div class="title_context">
                                <h3>Chương trình nổi bật</h3>
                            </div>
                        </div>
                    </div>
                    <div class="activities">
                        <div class="swiper activities_swiper">            
                            <div class="activities_body swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="activities_item">
                                        <div class="activi_image">
                                            <img src="{{asset('front-end/assets/imgs/event/1.jpg')}}" alt="su-kien-1">
                                        </div>
                                        <div class="activi_context">
                                            <h4>Làm chủ nền tảng "Bứt phá" VSTEP</h4>
                                            <p>Làm chủ nền tảng "Bứt phá" VSTEP</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide activities_item">
                                    <div class="activities_item">
                                        <div class="activi_image">
                                            <img src="{{asset('front-end/assets/imgs/event/2.jpg')}}" alt="su-kien-1">
                                        </div>
                                        <div class="activi_context">
                                            <h4>Học ngay nhận quà liền tay</h4>
                                            <p>Thời gian: thứ 7 và chủ nhật với bộ quà tặng hấp dẫn (balo, dụng cụ học tập...)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide activities_item">
                                    <div class="activities_item">
                                        <div class="activi_image">
                                            <img src="{{asset('front-end/assets/imgs/event/3.jpg')}}" alt="su-kien-1">
                                        </div>
                                        <div class="activi_context">
                                            <h4>Tiếng Anh vững vàng tự tin thi tốt THPT</h4>
                                            <p>Tại Việt Úc, khóa ôn thi vào Đại học không chỉ là những bài giảng nhàm chán. Chúng tôi mang đến một hành trình học tập thú vị và đầy hiệu quả:</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide activities_item">
                                    <div class="activities_item">
                                        <div class="activi_image">
                                            <img src="{{asset('front-end/assets/imgs/event/4.jpg')}}" alt="su-kien-1">
                                        </div>
                                        <div class="activi_context">
                                            <h4>Lớp bồi dưỡng kiến thức tiếng Anh</h4>
                                            <p>Trung tâm Ngoại ngữ Việt Úc xin trân trọng Thông báo đến Quý Thầy/Cô, Qúy phụ huynh và các em học sinh về kế hoạch khai giảng lớp bồi dưỡng kiến thức tiếng Anh. Đây là cơ hội tuyệt vời để các học viên nâng cao trình độ tiếng Anh, chuẩn bị tốt hơn cho các kỳ thi và cải thiện kỹ năng giao tiếp.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="container">
                    <div class="wrapper_title center">
                        <div class="title">Không gian học tập</div>
                        <div class="subtitle">Bước vào Phòng trưng bày của chúng tôi và đắm mình trong hành trình trực quan về những khoảnh khắc đáng nhớ và những trải nghiệm khó quên tại trường mẫu giáo của chúng tôi.</div>
                        <div class="line-shape"></div>
                    </div>
                    <div class="box_space">
                        <div class="elementor_space">
                            <div class="gallery_space">
                                <div class="swiper swiper_space_1">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="gallery_space-item">
                                                <img src="{{asset('front-end/assets/imgs/space/1.jpg')}}" alt="khong-gian-1">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_space-item">
                                                <img src="{{asset('front-end/assets/imgs/space/2.jpg')}}" alt="khong-gian-2">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_space-item">
                                                <img src="{{asset('front-end/assets/imgs/space/3.jpg')}}" alt="khong-gian-3">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="gallery_space-item">
                                                <img src="{{asset('front-end/assets/imgs/space/4.jpg')}}" alt="khong-gian-4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear_space"></div>
                            <div class="context_space">
                                <div class="head_space">
                                    <div class="head_space-title">
                                        Phòng học
                                    </div>
                                    <div class="head_space-button">
                                        <span class="slide_prev-btn space_prev_1"><i class="fa-regular fa-chevron-left"></i></span>
                                        <span class="slide_next-btn space_next_1"><i class="fa-regular fa-chevron-right"></i></span>
                                    </div>
                                </div>
                                <div class="text_space">
                                    Các lớp học được trang bị tốt của chúng tôi được thiết kế để cung cấp một môi trường học tập nuôi dưỡng và kích thích. Mỗi lớp học được sắp xếp chu đáo để truyền cảm hứng sáng tạo, tò mò và gắn kết.
                                </div>
                            </div>
                        </div>
                        <div class="box_space" style="padding-top: 50px">
                            <div class="elementor_space">
                                <div class="gallery_space">
                                    <div class="swiper swiper_space_1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="gallery_space-item">
                                                    <img src="{{asset('front-end/assets/imgs/space/5.jpg')}}" alt="khong-gian-1">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery_space-item">
                                                    <img src="{{asset('front-end/assets/imgs/space/6.jpg')}}" alt="khong-gian-2">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery_space-item">
                                                    <img src="{{asset('front-end/assets/imgs/space/7.jpg')}}" alt="khong-gian-3">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="gallery_space-item">
                                                    <img src="{{asset('front-end/assets/imgs/space/8.jpg')}}" alt="khong-gian-4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear_space"></div>
                                <div class="context_space">
                                    <div class="head_space">
                                        <div class="head_space-title">
                                            Phòng công nghệ
                                        </div>
                                        <div class="head_space-button">
                                            <span class="slide_prev-btn space_prev_1"><i class="fa-regular fa-chevron-left"></i></span>
                                            <span class="slide_next-btn space_next_1"><i class="fa-regular fa-chevron-right"></i></span>
                                        </div>
                                    </div>
                                    <div class="text_space">
                                        Các lớp học được trang bị tốt của chúng tôi được thiết kế để cung cấp một môi trường học tập nuôi dưỡng và kích thích. Mỗi lớp học được sắp xếp chu đáo để truyền cảm hứng sáng tạo, tò mò và gắn kết.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <section class="section bg-ble">
                <div class="container">
                    <div class="wrapper_title center">
                        <div class="title">Gặp gỡ đội ngũ giảng viên</div>
                        <div class="subtitle">
                            Tại Việt Úc, đội ngũ giảng dạy của chúng tôi là trung tâm trong hành trình giáo dục tại trung tâm. Chúng tôi rất tự hào khi tuyển dụng được những nhà giáo dục có trình độ cao và đam mê với nghề.
                        </div>
                        <div class="line-shape"></div>
                    </div>
                    <div class="teacher_wrapper">
                        <div class="teacher_elementor">
                            <div class="teacher_item">
                                <div class="teacher_head">
                                    <div class="teacher_avt">
                                        <img src="{{asset('front-end/assets/imgs/teacher/1.png')}}" alt="teacher-1">
                                        <div class="teacher_name">Cô Sarah Anderson</div>
                                    </div>
                                    <div class="teacher_icon"><i class="fa-solid fa-envelope"></i></div>
                                </div>
                                <div class="teacher_desc">
                                    <h4>Trình độ chuyên môn: Cử nhân Sư phạm Mầm non</h4>
                                    <p>Cô Sarah là một nhà giáo dục tâm huyết với hơn 10 năm kinh nghiệm hướng dẫn tâm hồn trẻ. Cách tiếp cận ấm áp và nuôi dưỡng của cô tạo ra một môi trường lớp học thân thiện, nơi trẻ em cảm thấy thoải mái để khám phá và học hỏi.</p>
                                </div>
                            </div>
                            <div class="teacher_item">
                                <div class="teacher_head">
                                    <div class="teacher_avt">
                                        <img src="{{asset('front-end/assets/imgs/teacher/2.png')}}" alt="teacher-1">
                                        <div class="teacher_name">Thầy David Roberts</div>
                                    </div>
                                    <div class="teacher_icon"><i class="fa-solid fa-envelope"></i></div>
                                </div>
                                <div class="teacher_desc">
                                    <h4>Trình độ chuyên môn: Thạc sĩ Giáo dục Tiểu học</h4>
                                    <p>
                                        Với nền tảng vững chắc về giáo dục tiểu học, thầy David mang phong cách giảng dạy sáng tạo và tương tác vào lớp học của mình. Sự nhiệt tình học tập của anh đã truyền cảm hứng cho học sinh đặt câu hỏi và suy nghĩ chín chắn.
                                    </p>
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
        
      </script>
</body>
</html>