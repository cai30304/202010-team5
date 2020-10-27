@extends('layouts/nav_footer')

@section('css')

    <!-- aos css -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--swiper css-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- hover -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" />

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('header')
<div class="section01">
    <div class="container-fluid d-flex p-0">
        <div class="swiper_text d-flex justify-content-end align-items-center">
            <div class="text_box pt-5">
                <div class="row justify-content-end align-items-center">
                    <div class="title_text col-8">全家節能綠建築</div>
                    <div class="w-100"></div>
                    <div class="sec1_line col-1"></div>
                    <div class="sub_text col-6 mr-xl-5 m-0">無毒、舒適、安全、<br> 節能、耐震、環保</div>
                </div>
            </div>

        </div>
        <!-- Swiper -->
        <div class="swiper-container swiper-container1">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg"
                        alt=""></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="header_news container-lg container-fluid py-5">
        <div class="row">
            <div class="news col-12 d-flex align-items-start">
                <h4 class="col-sm-3 col-md-2">最新消息</h4>
                <div class="slash_position">
                    <div class="slash"></div>
                </div>
                <div class="news_date ml-md-3">2020/10/12</div>
                <div class="news_content col-6">2021年3月起將於北中南不定期舉辦「全家節能綠建築」說明會。歡迎預先報名。</div>
                <a href="" id="sec1-link" class="col-2 ml-auto">
                    <span>LEARN MORE</span>
                    <div class="line"></div>
                    <div class="line2"></div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="section02">
    <div class="container-fluid py-4">
        <div class="row d-flex justify-content-center align-items-center m-0 flex-wrap-reverse">
            <div class="photo" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="500">909*560</div>
            <div class="text" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="600"></div>
        </div>
    </div>
</div>

<div class="section03">
    <div class="container">
        <h2 class="sec03_title col-12 col-md-4" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="900">02<br>綠建築特色</h2>
        <div class="row d-flex flex-wrap align-items-center">
            <div class="box col-12 col-lg-7" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="580"></div>
            <div class="box col-12 col-lg-5" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="520"></div>
        </div>
        <div class="row d-flex flex-wrap-reverse align-items-center justify-content-center">
            <div class="box col-12 col-lg-5" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="500"></div>
            <div class="box col-12 col-lg-7" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom" data-aos-offset="600"></div>
        </div>
        <div class="row  justify-content-center">
            <div class="col-6 pt-5">
                <h1>輕鬆打造夢想屋就是這麼簡單!</h1>
            </div>
            <div class="w-100"></div>
            <a href="" id="sec3-link" class="ml-auto">
                <h5>LEARN MORE</h5>
                <div class="line"></div>
                <div class="line2"></div>
            </a>
        </div>

    </div>
</div>
<div class="section04">
    <!-- <div class="box"></div> -->
    <div class="sec04_group container-lg container-fluid">
        <div class="row justify-content-center py-5">
            <div class="sec4-title-number">
                <h2>03</h2>
            </div>
            <div class="w-100"></div>
            <div class="sub_title pb-lg-4 p-0">
                <h2>精選案例</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-12 swiper2">
                <!-- Swiper -->
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                        <div class="swiper-slide"
                            style="background-image:url(https://a-static.besthdwallpaper.com/san-ha-shi-qi-xiao-gou-qiangzhi-tw-1920x1080-27980_48.jpg)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section05">
    <div class="container">
        <div class="row py-5">
            <div class="sec5-title-number">
                <h2>04</h2>
            </div>
            <div class="w-100"></div>
            <div class="sub_title p-0">
                <h2>日本建材供應</h2>
            </div>
        </div>
        <div class="row photo_group justify-content-around">
            <div class="col-lg-4 col-md-6 col-12 p-1"><div class="box"></div></div>
            <div class="col-lg-4 col-md-6 col-12 p-1"><div class="box"></div></div>
            <div class="col-lg-4 col-md-6 col-12 p-1"><div class="box"></div></div>
            <div class="col-lg-4 col-md-6 col-12 p-1"><div class="box"></div></div>
            <div class="col-lg-4 col-md-6 col-12 p-1"><div class="box"></div></div>
            <div class="col-lg-4 col-md-6 col-12 p-1"><div class="box"></div></div>
        </div>

        <div class="row justify-content-end">
            <a href="" id="sec5-link" class="my-5 pr-3">
                <h4>LEARN MORE</h4>
                <div class="line"></div>
                <div class="line2"></div>
            </a>
        </div>

    </div>
</div>

<div id="section06">
    <div class="container-fluid d-flex align-items-center">
        <div class="col-12 col-lg-4 offset-lg-3 text">
            <h2>全家國際理念</h2>
            <span>我們使用無毒的材料維護您的健康，以綠能概念節省能源消耗但又能保持住宅舒適度，強壯的質地具備耐震結構保護您與家人的安全，結合環保材質達成永續利用。</span>
            <div class="row justify-content-end">
                <a href="" id="sec6-link" class="my-5 pr-3">
                    <span class="pl-1">LEARN MORE</span>
                    <div class="line"></div>
                    <div class="line2"></div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

    <!-- aos.js -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            mirror: false,
            useClassNames: true,
            initClassName: false,
            animatedClassName: 'animate__animated'
        });

    </script>

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container1', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Initialize Swiper

        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: true,
            freeMode: true,
            loopedSlides: 5, //looped slides should be the same
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            loop: true,
            loopedSlides: 5, //looped slides should be the same
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs,
            },
        });

    </script>

@endsection
