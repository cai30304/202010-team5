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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/style.css">

@endsection

@section('header')
<div class="section01">
    <div class="container-fluid d-flex p-0">
        <div class="swiper_text d-flex justify-content-end align-items-center">
            <div class="text_box pt-sm-5 pt-0">
                <div class="row text_group justify-content-end align-items-center">
                    <h1 class="title_text col-10 col-sm-9 ">全家節能綠建築</h1>
                    <div class="w-100"></div>
                    <!-- <div class="sec1_line col-1"></div> -->
                    <h4 class="sub_text col-9 col-sm-7 m-0">無毒、舒適、安全、<br> 節能、耐震、環保</h4>
                </div>
            </div>

        </div>
        <!-- Swiper -->
        <div class="swiper-container swiper-container1">
            <div class="swiper-wrapper p-0">
                @foreach ($banner_images as $banner_image)
                    <div class="swiper-slide"><img src={{$banner_image->img}} alt=""></div>
                @endforeach
                <!-- <div class="swiper-slide"><img
                        src="/images/首頁輪播圖/P6260003.JPG"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="./image/首頁輪播圖/IMG_9928.JPG"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="./image/首頁輪播圖/多治見市寛ぎの家① (1).jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                        src="./image/首頁輪播圖/茶畑に立つ家①.jpg"
                        alt=""></div>
                <div class="swiper-slide"><img
                    src="./image/首頁輪播圖/000001.jpg"
                    alt=""></div>
                <div class="swiper-slide"><img
                    src="./image/首頁輪播圖/RIMG0067.JPG"
                    alt=""></div> -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="header_news container-lg container-fluid py-5">
        <div class="row justify-content-center">
            <h3 class="news_title_sm">最新消息</h3>
            <div class="news col-12 d-flex align-items-start flex-wrap">
                <h5 class="news_title col-xs-12 col-sm-3 col-md-2">最新消息</h5>
                <div class="slash_position">
                    <div class="slash"></div>
                </div>
                <div class="news_date ml-md-3">{{($news->created_at)->format('Y-m-d')}}</div>
                <div class="news_content col-md-6 col-12">{{$news->title}}</div>
                <a href="/news_index/{{$news->id}}" id="sec1-link" class="col-6 col-md-2 col-lg-2 ml-auto">
                    <span class="btn_news" data-newslink="{{$news->id}}">LEARN MORE</span>
                    <div class="line"></div>
                    <div class="line2"></div>
                </a>
            </div>
        </div>
    </div>
    <hr>
</div>
@endsection

@section('content')
<div class="section02">
    
    <div class="container-fluid py-lg-4 p-0 px-3">
        <div class="row justify-content-center align-items-center m-0 flex-wrap-reverse">
            <div class="photo col-12 col-lg-6" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom"
                data-aos-offset="500"><img src="/images/P6260003.JPG" alt=""></div>
            <div class="text col-lg-4 col-12 pt-3" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom"
                data-aos-offset="600">
                <div class="row justify-content-end align-items-center px-lg-3">
                    <h3 class="title-number">01 </h3>
                    <h2 class="sec02_title ml-3">綠建築介紹</h2>
                    <div class="sec02_content mt-2 ">
                        <p>
                            &emsp;&emsp;&emsp;使用日本鋼構工法作為屋體的骨架，提供每個連接處強而有力的鍵結，同時具備高耐震性，屋體的外層則採高斷熱工法，讓屋子有夏天隔熱冬天保溫的功能，屋內裝有24小時內外換氣系統，可過濾室外空氣送入乾淨氣體，就像人體的肺一樣呼吸，讓你在屋內的空氣就像森林一樣清新，且有別於傳統房屋建造時間，我們的建築從施作開始到完成只要120天左右，不到傳統水泥建築的一半，甚至更短!但又具備以上的條件，安全又舒適。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section03">
    <div class="container">

        <div class="row sec03_title_box px-3">
            <h3 class="title-number">02</h3>
            <div class="w-100"></div>
            <h2 class="sec03_title">綠建築特色</h2>
        </div>

        <div class="group_content row flex-wrap align-items-center content-margin">
            <div class="col-12 col-lg-7" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom"
                data-aos-offset="580">
                <div class="row justify-content-end px-3">
                    <h3 class="px-lg-3 p-0">輕鋼構</h3>
                    <div class="content"><p>&emsp;&emsp;&emsp;全家節能綠建築採用新發明的Ｃ型鋼閉鎖連接盒的組裝工法，跟日本目前所採用自攻螺絲固定工法以及台灣傳統焊接工法不同，Ｃ型鋼閉鎖連接盒靠著螺絲跟拉帽的強力拉拔能力，牢固地扣住每根樑柱，即使遇到強烈地震也難以鬆脫。
                    </p></div>
                </div>
            </div>
            <div class="photo col-12 col-lg-5" data-aos="animate__fadeOutUp"
                data-aos-anchor-placement="bottom-bottom" data-aos-offset="520"><img src="/images/輕鋼構/IMG_0571.jpg" alt=""></div>
        </div>
        <div class="row d-flex flex-wrap-reverse align-items-center justify-content-center px-3  content-margin">
            <div class="box col-12 col-lg-5" data-aos="animate__fadeOutUp"
                data-aos-anchor-placement="bottom-bottom" data-aos-offset="500"><img src="/images/便利性/IMG_0176.jpg" alt=""></div>
            <div class="col-12 col-lg-7" data-aos="animate__fadeOutUp" data-aos-anchor-placement="bottom-bottom"
                data-aos-offset="600">
                <div class="row justify-content-end mt-2 px-lg-3 px-3">
                    <h3 class="mb-4">便利性</h3>
                    <div class="content"><p>&emsp;&emsp;&emsp;傳統的RC工法蓋一間別墅動輒一年以上，加上近年來建築業嚴重缺工，工期通常是一延再延。而全家節能綠建築從地基完成後算起約120個工作天即可完工。
                        傳統的RC房屋如果要增建則必須動用到大型的機具，每天敲敲打打影響生活品質，而且施工期長。全家節能綠建築的工法具有絕佳的延伸性，只要將增建面的外牆板拆除，再鎖上Ｃ型鋼閉鎖連接盒後，就能輕輕鬆鬆進行增建工程，不僅對於本身的生活起居影響小，而且也不會造成左鄰右舍的困擾。
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row sec03_group justify-content-center">
            <div class="col-12 col-md-6 pt-5 d-flex justify-content-center">
                <h2>輕鬆打造夢想屋<br>就是這麼簡單!</h2>
            </div>
            <div class="w-100"></div>
            <a href="/GreenBuilding" id="sec3-link" class="ml-auto mb-3">
                <span>LEARN MORE</span>
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
            <div class="title-number">
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
                        <div class="swiper-slide" style="background-image:url(/images/DSC00970.JPG)">
                        </div>
                        <div class="swiper-slide" style="background-image:url(/images/P6260003.JPG)">
                        </div>
                        <div class="swiper-slide" style="background-image:url(/images/RIMG0067.JPG)">
                        </div>
                        <div class="swiper-slide" style="background-image:url(/images/スチール構造宮城邸.jpg)">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image:url(/images/DSC00970.JPG)">
                        </div>
                        <div class="swiper-slide" style="background-image:url(/images/P6260003.JPG)">
                        </div>
                        <div class="swiper-slide" style="background-image:url(/images/RIMG0067.JPG)">
                        </div>
                        <div class="swiper-slide" style="background-image:url(/images/スチール構造宮城邸.jpg)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section05">
    <div class="container">
        <div class="row p-4">
            <div class="title-number">
                <h3>04</h3>
            </div>
            <div class="w-100"></div>
            <div class="sub_title p-0">
                <h2>日本建材供應</h2>
            </div>
        </div>
        <div class="row photo_group justify-content-around px-2">

            <div class="col-lg-4 col-6 p-1 ">
                <div class="photo d-flex justify-content-center" style="background-image: url(./images/陶板/3.png);" >陶板達人</div>
            </div>
            <div class="col-lg-4 col-6 p-1">
                <div class="photo d-flex justify-content-center" style="background-image: url(./images/東濃檜木/IMG_9904-1.png);">東濃檜木</div>
            </div>
            <div class="col-lg-4 col-6 p-1">
                <div class="photo d-flex justify-content-center" style="background-image: url(./images/日本竹地板/IMG_5713.png);">竹地板</div>
            </div>
            <div class="col-lg-4 col-6 p-1">
                <div class="photo d-flex justify-content-center" style="background-image: url(./images/屋瓦/20120821150118.jpg);">屋瓦
                </div>
            </div>
            <div class="col-lg-4 col-6 p-1">
                <div class="photo d-flex justify-content-center" style="background-image: url(./images/隔熱毯/07.jpg);">隔熱毯</div>
            </div>
            <div class="col-lg-4 col-6 p-1">
                <div class="photo d-flex justify-content-center" style="background-image: url(./images/棟飾/225.jpg);">棟飾</div>
            </div>

        </div>

        <div class="row justify-content-end">
            <a href="/BM_total" id="sec5-link" class="my-5 pr-3">
                <span>LEARN MORE</span>
                <div class="line"></div>
                <div class="line2"></div>
            </a>
        </div>

    </div>
</div>

<div id="section06">
    <div class="container-fluid d-flex align-items-center bottom_bg_img">

        <div class="col-12 col-lg-4 offset-lg-3 text" >
            <h2>全家國際理念</h2>
            <span>&emsp;&emsp;&emsp;我們使用無毒的材料維護您的健康，以綠能概念節省能源消耗但又能保持住宅舒適度，強壯的質地具備耐震結構保護您與家人的安全，結合環保材質達成永續利用。</span>
            <div class="row justify-content-end">
                <a href="/about_us" id="sec6-link" class="my-5 pr-3">
                    <span class="pl-1">LEARN MORE</span>
                    <div class="line"></div>
                    <div class="line2"></div>
                </a>
            </div>
        </div>
        <div class="mask"></div>
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

<!-- <script>
    $('.btn_news').click(function() {
        var link_url = "/news_index" + $(this).data('newslink');
        console.log(123);


        $.get(link_url, function(data) {
            $(".result").html(data);
            alert("Load was performed.");
        });
    })
</script> -->

@endsection
