@extends('layouts/nav_footer')

@section('css')

<link rel="stylesheet" href="/css/BM_info.css">
{{-- swiper --}}
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

@endsection

@section('content')
<section id="Building_materials_page">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="title_swiper col-9 col-md-8 col-xl-4">
                <!-- 文字Swiper -->
                <div class="swiper-container swiper1">
                    <div class="swiper-wrapper d-flex align-items-center">
                        @foreach($product_types as $product_type)
                            <div class="swiper-slide btn_switch_product_type"data-pttid="{{$product_type->id}}">{{$product_type->type_name}}</div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> -->
                </div>
                <!-- Add Arrows -->

                <div class="swiper-button-prev swiper-button-prev1"></div>
                <div class="swiper-button-next swiper-button-next1"></div>
            </div>
        </div>


        <div class="BM_content row justify-content-center pt-5">
            <div class="photo">
                <div class="big_photo mt-auto">

                    <!-- 大圖Swiper -->
                    <div class="swiper-container swiper2">
                        <div class="swiper-wrapper">
                            @foreach ($material_images as $material_image)
                                <div class="swiper-slide" style="background-image: url('{{$material_image->material_image}}');"></div>
                            @endforeach
                            <!-- <div class="swiper-slide" style="background-image: url('https://th.bing.com/th/id/OIP.Qryb748DRapXpcFvEtRXhwHaE6?pid=Api&rs=1');"></div>
                            <div class="swiper-slide" style="background-image: url('https://th.bing.com/th/id/OIP.Qryb748DRapXpcFvEtRXhwHaE6?pid=Api&rs=1');"></div>
                            <div class="swiper-slide" style="background-image: url('https://th.bing.com/th/id/OIP.Qryb748DRapXpcFvEtRXhwHaE6?pid=Api&rs=1');"></div>
                            <div class="swiper-slide" style="background-image: url('https://th.bing.com/th/id/OIP.Qryb748DRapXpcFvEtRXhwHaE6?pid=Api&rs=1');"></div> -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                    <div class="line_circle">
                        <img id="line_b" src="/images/Group 59.svg" alt="">
                    </div>
                </div>

            </div>
            <!-- 標題內文區 -->
            <div class="text_photo">
                <div class="text_group">
                    <div class="text_title_line d-flex">
                        <h2 id="text_title">{{$product->product_name}}</h2>
                    </div>
                    <!-- <h4 id="sub_title">副標題</h4> -->
                    <span id="info">{!!$product->info!!}</span>
                </div>
                <div class="small_photo_box d-flex align-items-end">
                    <div class="small_photo" style="background-image: url({{$product->info_img}});"></div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    {{-- swiper.js --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper1', {
            // direction: 'vertical',
            slidesPerView: 3,
            spaceBetween: 30,
            // slidesPerGroup: 4,
            // loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
    });

    // <!-- Initialize Swiper -->

    var swiper1 = new Swiper('.swiper2', {
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    $('.btn_switch_product_type').click(function(){
        // console.log("123");
        window.location.href="/ProductType/" + $(this).data('pttid');
    });

</script>

@endsection
