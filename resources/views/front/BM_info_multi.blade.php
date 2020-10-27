@extends('layouts/nav_footer')

@section('css')

    <link rel="stylesheet" href="/css/BM_info_multi.css">
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   
@endsection

@section('content')
    <section class="Building_materials_mutipage">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="title_swiper col-9">
                    <!-- 文字Swiper -->
                    <div class="swiper-container swiper-container1">
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

            <div class="row content_group justify-content-center mt-2 flex-wrap-reverse ">
                <div class="col-12 col-sm-10 col-md-6 col-lg-5">
                    <div class="swiper_box">
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top">
                            <div class="swiper-wrapper sswipe_img">
                                <!-- 用來放swipper來源的地方，下面js會生成 -->
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper sswipe_img">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-5 col-lg-5">
                    <div class="text_group">
                        <div class="text_title_line d-flex">
                            <h2 id="text_title">{{$products[0]->product_name}}</h2>
                        </div>
                        <!-- <h4 id="sub_title">副標題</h4> -->
                        <span id="info" class="p-3">{!!$products[0]->info!!}</span>
                    </div>

                    <div class="mini_photo_group">
                        <div class="mini_photo_text">選擇顏色</div>
                        <div class="mini_photos d-flex flex-wrap justify-content-between">
                            <?php
                                $i = 0
                            ?>
                            @foreach($products as $product)
                                <div class="miniphoto select_material"style="background-image: url({{$product->info_img}});"data-mtid="{{$i}}"></div>
                                <?php
                                    $i ++
                                ?>
                            @endforeach
                            

                        </div>

                    </div>
                </div>
            </div>




        </div>

    </section>
    <!-- 用來暫存從資料庫取出來的圖片來源，使用ptid來分裝每個產品的圖片 -->
    <div class= "store_materail_swiper_content"style="visibility:hidden" >
    <?php
        $i = 0;
    ?>
        @foreach ($arrMaterialList as $material_arr)
            <div data-ptid="{{$i}}"> 
                @foreach ($material_arr as $material_image)
                    <div class="swiper-slide material_images "style="background-image: url({{$material_image->material_image}})"data-mtid="{{$i}}"></div>
                @endforeach
                <?php
                    $i ++;
                ?>
                </div>
         @endforeach    
    </div>
@endsection

@section('js')

{{-- swiper.js --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script>
    $('.sswipe_img').html($(`div[data-ptid='${0}']`).html());//初始選擇的圖片
    initializeSwiper()

    $('.btn_switch_product_type').click(function(){
        // console.log("123");
        window.location.href="/ProductType/" + $(this).data('pttid');
    });

    var btnArr = document.querySelectorAll('.select_material');
    //點擊圖按鈕切換顯示swiper
    btnArr.forEach(element => {
        element.onclick = function(){
        
            //屬於這次流水號的商品要顯示出來
            var data_id = $(this).data("mtid");//取得這次網頁生成時商品的流水號
            $('.sswipe_img').html($(`div[data-ptid='${data_id}']`).html());//將這筆id的html放入該div
            initializeSwiper();//重新初始swiper，否則swiper會失效。
        };  
    });


    function initializeSwiper(){

        // <!-- Initialize Swiper -->

        var swiper = new Swiper('.swiper-container1', {
            // direction: 'vertical',
            slidesPerView: 3,
            spaceBetween: 30,
            // slidesPerGroup: 4,
            // loop: true,
            loopFillGroupWithBlank: true,
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // },
            navigation: {
                nextEl: '.swiper-button-next1',
                prevEl: '.swiper-button-prev1',
            },
        });

        // <!-- Initialize Swiper -->

        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: true,
            freeMode: true,
            loopedSlides: 5, //looped slides should be the same
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            observer:true,
            observeParents: true,

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
            observer:true,
            observeParents: true,
           
        });

    }
</script>
@endsection
