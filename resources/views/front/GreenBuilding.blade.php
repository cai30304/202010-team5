@extends('layouts/nav_footer')

@section('css')
    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!--swiper css-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- hover -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"
        integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg=="
        crossorigin="anonymous" />

    {{-- 所有網頁適用的CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/GreenBuilding.css">

@endsection

@section('header')
    <div id="section01">
        <div class="container-fluid">
            <div class="title_group row justify-content-center align-items-center">
                <div class="col-3 title d-flex align-items-center justify-content-end p-0">
                    <div class="title_box mt-5">
                        <div
                            class="row justify-content-end align-items-center no-gutters title-line-height">
                            <div class="title_text mr-md-5 mr-4">新一代<br>綠建築</div>
                            <div class="w-100"></div>
                            <!-- <div class="sec1_line"></div> -->
                            <div class="sub_text">節能、耐震。</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-9 photo p-0">
                    <!-- Swiper -->
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/01-2.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/02.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/03.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/04.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/05.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/06.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/07.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/08.JPG)">
                            </div>

                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/01-2.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/02.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/03.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/04.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/05.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/06.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/07.JPG)">
                            </div>
                            <div class="swiper-slide"
                                style="background-image:url(/images/GreenBuilding/00-swiper/08.JPG)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div id="fb-root"></div>

    <section class="container">
        <!-- 大標題1：綠建築介紹 -->
        <h1 class="section-title">綠建築介紹</h1>
        <hr>
        <div class="pd-20">
            &emsp;&emsp;&emsp;使用日本鋼構工法作為屋體的骨架，提供每個連接處強而有力的鍵結，同時具備高耐震性，屋體的外層則採高斷熱工法，讓屋子有夏天隔熱冬天保溫的功能，屋內裝有24小時內外換氣系統，可過濾室外空氣送入乾淨氣體，就像人體的肺一樣呼吸，讓你在屋內的空氣就像森林一樣清新，且有別於傳統房屋建造時間，我們的建築從施作開始到完成只要120天左右，不到傳統水泥建築的一半，甚至更短!但又具備以上的條件，安全又舒適。
        </div>
    </section>



    <!-- 大標題2：綠建築特色 -->
    <section class="container">
        <h1 class="section-title">綠建築特色</h1>
        <hr>
        <img class="d-none d-lg-block" src="/images/GreenBuilding/LGS_VS_RS.png" alt="">
        <img class="d-lg-none" src="images/GreenBuilding/VS-ST.png" alt="">

        <div class="row my-50 ">
            <div class="col-lg-5 md-center" data-aos="fade-right">
                <h3 class="text-right">質地較輕</h3>
            </div>
            <div class="col-lg-7 md-center" data-aos="fade-left">重量少於混凝土的結構的30%至50%</div>

            <div class="col-lg-5 md-center" data-aos="fade-right">
                <h3 class="text-right">安全耐震</h3>
            </div>
            <div class="col-lg-7 md-center" data-aos="fade-left">耐震性能大於一般的鋼筋混凝土建築</div>

            <div class="col-lg-5 md-center" data-aos="fade-right">
                <h3 class="text-right">延伸性高</h3>
            </div>
            <div class="col-lg-7 md-center" data-aos="fade-left">相較於一般的鋼筋混凝土建築，可增加建築有效面積8%</div>

            <div class="col-lg-5 md-center" data-aos="fade-right">
                <h3 class="text-right">環保節能</h3>
            </div>
            <div class="col-lg-7 md-center" data-aos="fade-left">施工安全性較高，可減少約30%二氧化碳排放，亦可回收運用</div>

            <div class="col-lg-5 md-center" data-aos="fade-right">
                <h3 class="text-right">成本較低</h3>
            </div>
            <div class="col-lg-7 md-center" data-aos="fade-left">建築可減少對砂石的需求、施工時期短、亦可減少勞動成本</div>
        </div>
    </section>


    <!-- 大標題2：施作工法 -->
    <section class="container">
        <h1 class="section-title">施作工法</h1>
        <hr>
    </section>

    <!------ 01 日本工法再進化 -->
    <section id="section-method-01">

        <!-- section01-01 -工法進化 -->
        <div class="container">
            <div class="row my-50">
                <div class="pt-auto pt-md-5 col-12 col-lg-5 order-1 order-lg-0 ">
                    <img class="md-img-size-80" src="images/GreenBuilding/c型鋼閉鎖連接盒.svg" alt="">

                </div>
                <div class="col-12 col-lg-7 order-0 d-flex " data-aos="fade-down">
                    <!-- 文字區塊 -->
                    <div class=" text-bottom " data-aos="fade-down">
                        <h3 class="title-number">01</h3>
                    </div>

                    <div class="section-title">
                        <h2>日本鋼構工法再進化 </h2>
                        <p>&emsp;&emsp;&emsp;全家節能綠建築採用新發明的Ｃ型鋼閉鎖連接盒的組裝工法，
                            跟日本目前所採用自攻螺絲固定工法以及台灣傳統焊接工法不同，
                            Ｃ型鋼閉鎖連接盒靠著螺絲跟拉帽的強力拉拔能力，
                            牢固地扣住每根樑柱，即使遇到強烈地震也難以鬆脫。</p>
                    </div>
                </div>
                <div class="order-2 order-sm-1">
                    <img src="images/GreenBuilding/section01-02.png" alt="" style="width: 80%; ">
                    <!-- <img src="images/GreenBuilding/section01-03.png" alt="" style="width: 80%; "> -->
                </div>
            </div>
        </div>
    </section>


    <!-- section01-02 工法展示影片 -->
    <section class="container-fluid bg-gray">
        <div class="row py-50">
            <div class="container col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="text-center color-light-gray">
                    <h3 class="color-light-gray">工法展示影片</h3>
                    竹節式鋼構組裝模擬動畫
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="fb-video" data-href="https://www.facebook.com/392409824521785/videos/424979174598183/"
                    data-show-text="false" data-width="">
                    <blockquote cite="https://developers.facebook.com/392409824521785/videos/424979174598183/"
                        class="fb-xfbml-parse-ignore"><a
                            href="https://developers.facebook.com/392409824521785/videos/424979174598183/">施工過程</a>
                        <p></p>由<a
                            href="https://www.facebook.com/&#x5168;&#x5bb6;&#x5efa;&#x6750;-392409824521785/">全家建材</a>發佈於
                        2018年4月1日 星期日
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!------ 02 高耐震性 -->

    <section class="bg-light-gray py-50">
        <div class="container">
            <div class="row d-flex align-items-center">

                <!-- 大尺寸要顯示的畫面 -->
                <div class="col-12 col-lg-5  d-none  d-lg-block order-1" data-aos="fade-down">
                    <div class="d-flex justify-content-end " data-aos="fade-down">
                        <h3 class="title-number text-right">02</h3>
                        <h2 class="section-title text-right">高耐震性</h2>
                    </div>
                    <div>
                        <h4 class="d-flex justify-content-end ">讓您全家住得安心</h4>
                        <p class="text-right">
                            &emsp;&emsp;&emsp;採用規格150x50x20mm厚度2.3mm高強度的鍍鋅Ｃ結構型鋼，用C型鋼閉鎖連接盒組裝整體結構，再鎖上結構板牆固定後結構體即完成。由於C型鋼本身重量輕且強度高，結構體組裝完成後就好像一個箱子，遇到再大的地震結構體也不會倒塌。
                        </p>
                    </div>
                </div>


                <!-- md尺寸以下要顯示的畫面 -->
                <div class="col-12 col-lg-5 d-block d-lg-none d-flex " data-aos="fade-down">
                    <!-- 文字區塊 -->
                    <div class=" text-bottom " data-aos="fade-down">
                        <h3 class="title-number">02</h3>
                    </div>

                    <div class="section-title">
                        <h2>高耐震性 </h2>
                        <h4>讓您全家住得安心</h4>
                        <p>&emsp;&emsp;&emsp;採用規格150x50x20mm厚度2.3mm高強度的鍍鋅Ｃ結構型鋼，用C型鋼閉鎖連接盒組裝整體結構，再鎖上結構板牆固定後結構體即完成。由於C型鋼本身重量輕且強度高，結構體組裝完成後就好像一個箱子，遇到再大的地震結構體也不會倒塌。
                        </p>
                    </div>
                </div>


                <!-- 圖片和說明文字 -->
                <div class="col-12 col-lg-7 order-0 md-center d-flex flex-column">
                    <img src="/images/GreenBuilding/section02-01.png" alt="">
                    <p class="text-center">厚度2.3mm高強度C型鋼</p>
                </div>
            </div>
    </section>

    <!------ 03 外斷熱工法 -->

    <section class="container">
        <div class="row d-flex align-items-center">

            <div class="col-9 d-flex" data-aos="fade-down">
                <!-- 文字區塊 -->
                <div class=" text-bottom " data-aos="fade-down">
                    <h3 class="title-number">03</h3>
                </div>

                <div class="section-title">
                    <h2>外斷熱工法 </h2>
                    <h4>節能減碳 冬暖夏涼</h4>
                    <p>&emsp;&emsp;&emsp;採用國外先進的外斷熱工法，在夏天有效地把室外的熱源阻絕在牆體外，相對的在冬天能夠讓室內暖空氣做保溫，達到冬暖夏涼的效果。這樣便能減少冷氣或是暖氣的使用達到節能減碳的效果。
                    </p>
                </div>
            </div>

            <!-- 圖片放這邊 -->
            <div class="col-4">
            </div>
            <img src="images/GreenBuilding/section03-01.jpg" alt="外斷熱工法" class="w-75 mx-auto my-4">
            <img src="images/GreenBuilding/section03-02.jpg" alt="外斷熱工法" class="w-75 mx-auto my-4">
        </div>
    </section>


    <!------ 04 24小時室內外換氣系統 -->
    <section class="bg-light-gray py-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex " data-aos="fade-down">
                    <!-- 文字區塊 -->
                    <div class=" text-bottom " data-aos="fade-down">
                        <h3 class="title-number">04</h3>
                    </div>

                    <div class="section-title">
                        <h2>24小時室內外換氣系統</h2>
                        <h4>讓你住的健康</h4>
                        <p>&emsp;&emsp;&emsp;近年來ＰＭ２.５日益嚴重，搭配全熱交換機，能每天24小時持續做室內外換氣，不用開窗也能把屋內髒空氣排出屋外，同時間把屋外的新鮮空氣過濾後導入屋內，斷絕灰塵防止過敏產生。全熱交換機另一個功能就是能讓您家裡每個角落一年四季都能維持舒適的溫度，其耗電量１天不
                            到10元。</p>
                    </div>
                </div>
            </div>

            <!-- //這裡放圖片 -->
            <div class="my-50">
                <img src="/images/GreenBuilding/室內外換氣.png" alt="">
            </div>
        </div>
    </section>


    <!------ 05 先進的乾式吊掛工法 -->
    <section class="container">
        <div class="row">
            <div class="col-12 col-lg-7 d-flex " data-aos="fade-down">
                <!-- 文字區塊 -->
                <div class=" text-bottom " data-aos="fade-down">
                    <h3 class="title-number">05</h3>
                </div>

                <div class="section-title">
                    <h2>先進的乾式吊掛工法 </h2>
                    <h4>隔熱、防水、環保、省時、省能源</h4>
                    <p>&emsp;&emsp;&emsp;採用國外先進的外斷熱工法，在夏天有效地把室外的熱源阻絕在牆體外，相對的在冬天能夠讓室內暖空氣做保溫，達到冬暖夏涼的效果。這樣便能減少冷氣或是暖氣的使用達到節能減碳的效果。</p>
                </div>
            </div>

            <div class="col-lg-5 ">
            </div>

        </div>

        <!-- //這裡放圖片 -->
        <div class="row pd-20">
            <div class="col-12 col-lg-6">
                <img src="/images/GreenBuilding/牆板.png" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <img src="/images/GreenBuilding/乾式吊掛工法.svg" alt="">
            </div>
    </section>

    <!------ 06 高效施工 -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-4 d-none d-lg-block"></div>
                <div class="col-lg-8 col-12" data-aos="fade-down">
                    <div class="d-flex justify-content-end " data-aos="fade-down">
                        <h3 class="title-number text-right">06</h3>
                        <h2 class="section-title text-right">高效施工</h2>
                    </div>
                    <div>
                        <h4 class="d-flex justify-content-end ">施工期短 延伸性佳</h4>
                        <p class="text-right">
                            &emsp;&emsp;&emsp;傳統的RC工法蓋一間別墅動輒一年以上，加上近年來建築業嚴重缺工，工期通常是一延再延。而全家節能綠建築從地基完成後算起約120個工作天即可完工。
                            傳統的RC房屋如果要增建則必須動用到大型的機具，每天敲敲打打影響生活品質，而且施工期長。全家節能綠建築的工法具有絕佳的延伸性，只要將增建面的外牆板拆除，再鎖上Ｃ型鋼閉鎖連接盒後，就能輕輕鬆鬆進行增建工程，不僅對於本身的生活起居影響小，而且也不會造成左鄰右舍的困擾。
                        </p>
                    </div>
                </div>
            </div>


            <!-- //這裡放圖片 -->
            <img src="/images/GreenBuilding/擴增建法.png" alt="">
        </div>
    </section>
@endsection

@section('js')

    {{-- Facebook 影片js --}}
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>

    <!-- swiper js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 2,
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
