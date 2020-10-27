@extends('layouts/nav_footer')

@section('css')
    <link rel="stylesheet" href="/css/about_us.css">
    <link rel="stylesheet" href="/css/style.css">
@endsection

@section('header')
    <!--header-->
    <header>
        <div class="header-banner pt-5" style="background-image: url(/images/WF07.jpg);">
            <h1 style="text-align:center; line-height:80px;">關於全家國際</h1>
            <h4 style="text-align:center; line-height:20px;">About Us</h4>
        </div>
    </header>
@endsection

@section('content')


    <!-- content -->
    <section class="about_us" id="about">
        <div class="container">
            <div class="row pt-5 px-4 align-items-center">
                <div class="title_number title-number_none_line mr-3">01</div>
                <div class="content_title title_font">公司理念</div>
            </div>
            <div class="row m-lg-5">
                <div class="content_text col-xs-12 col-sm-12 px-4">
                    &emsp;&emsp;&emsp;人類從最早居住在洞穴裡．稻草屋．石板屋．磚造．一直演進到現在的鋼筋水泥或鋼構房子。在每次的演進過程中，建築材料也跟隨著在進步。<br>&emsp;&emsp;&emsp;台灣目前大學建築系都還是在教導如何設計建造鋼筋水泥的房子，而學過建築的都知道建造鋼筋水泥的房子是最耗能源最不環保。目前由於地球暖化造成氣候異常，全世界的科學家無不研究如何取得乾淨的能源以及如何讓能源能夠再利用達到永續循環。全家國際起初是從國外進口「綠建材」批發販賣，在八年前偶然的機會接觸到日本的日式輕鋼構建築工法，深入了解之後發現日式輕鋼構工法不僅是綠建築要求的節能減碳都做到了，而且將來拆除房子後的材料還能夠重複再利用，這不就是綠建築所追求的永續循環利用的目標嗎？所以三年前全家國際便開始踏入「綠建築」的領域，「全家節能綠建築」是結合了台灣與日本工法精隨而發展出來的一套獨特工法，「舒適」、「節能」、「耐震」、「環保」、「平價」是我們的基本訴求。<br>為客戶打造一個滿意的家更是我們的使命。
                </div>
            </div>
        </div>
    </section>

    <section class="call_us py-5" id="map">
        <div class="container py-5">
            <div class="row px-4">
                <div class="title_number mr-3 title-number_none_line">02</div>
                <div class="content_title title_font">聯絡方式</div>
                <!-- <div class="content_title_sub_text">歡迎來電洽詢</div> -->
            </div>
            <div class="row justify-content-between">
                <div class="col-12 col-md-4 group_content d-flex flex-wrap mb-4 mb-sm-0">

                    <div class="sub_title ml-4 pl-3">歡迎來電洽詢</div>

                    <div class="col-12 ml-4">
                        <div class="address_title col-2 p-0">地址</div>
                        <div class="col-12 d-flex p-0">
                            <div class="icon"><span class="iconify" data-icon="ic:baseline-add-location"
                                    data-inline="false" data-height="20"></span><i class="map"></i></div>
                            <div class="text col-11 ">406 台中市北屯區軍福十三路18號</div>
                        </div>
                    </div>
                    <div class="col-12 ml-4">
                        <div class="address_title col-2 p-0">Email</div>
                        <div class="col-12 d-flex p-0">
                            <div class="icon"><span class="iconify" data-icon="ls:mail" data-inline="false"></span><i class="map"></i></div>
                            <div class="text col-11 ">info@famihouse.com.tw</div>
                        </div>
                    </div>
                    <div class="col-12 ml-4">
                        <div class="address_title col-2 p-0">電話</div>
                        <div class="col-12 d-flex p-0">
                            <div class="icon"><span class="iconify" data-icon="ant-design:phone-outlined"
                                data-inline="false" data-height="24"></span><i class="map"></i></div>
                            <div class="text col-11 ">04-22392834<br>04-23016970</div>
                        </div>
                    </div>
                    <a href="" class="btn_contact_us m-auto">聯絡我們</a>

                </div>
                <div class="google_map col-12 col-md-7 px-4">
                    <iframe width="100%" height="90%" frameborder="0" style="border:0;" allowfullscreen=""
                    aria-hidden="false" tabindex="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3640.0386893164655!2d120.73036051543644!3d24.170375878518442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691814fd9f46a5%3A0xb535568adf888c0b!2zNDA25Y-w5Lit5biC5YyX5bGv5Y2A6LuN56aP5Y2B5LiJ6LevMTjomZ8!5e0!3m2!1szh-TW!2stw!4v1603158826559!5m2!1szh-TW!2stw"></iframe>
                    <div class="google_map_btn m-auto">
                        <a href="https://www.google.com/maps/place/406%E5%8F%B0%E4%B8%AD%E5%B8%82%E5%8C%97%E5%B1%AF%E5%8D%80%E8%BB%8D%E7%A6%8F%E5%8D%81%E4%B8%89%E8%B7%AF18%E8%99%9F/@24.170371,120.732549,16z/data=!4m2!3m1!1s0x34691814fd9f46a5:0xb535568adf888c0b?hl=zh-TW&gl=TW" class="map_position">Google Map</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bot_wallpaper" style="background-image: url(/images/WF07.jpg);">

    </section>
@endsection

@section('js')

@endsection
