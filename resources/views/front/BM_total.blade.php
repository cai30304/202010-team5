@extends('layouts/nav_footer')

@section('css')
    <!-- BM_total -->
    <link rel="stylesheet" href="/css/BM_total.css">
@endsection

@section('content')
<div id="BM_total">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <h1 class="title">日本建材</h1>
            <div class="w-100"></div>
            <div class="BM_photo col-12 d-flex p-0">
                <div class="BM_content d-flex align-items-center" style="background-image: url(./images/陶板/3.png);"data-ptid="1">  
                    <div class="BM_text d-flex justify-content-center align-items-center">
                        <h2>陶板達人</h2>
                    </div>
                </div>
                <div class="BM_content d-flex align-items-center" style="background-image: url(./images/東濃檜木/IMG_9904-1.png);"data-ptid="2">
                    <div class="BM_text d-flex justify-content-center align-items-center">
                        <h2>東濃檜木</h2>
                    </div>
                </div>
                <div class="BM_content d-flex align-items-center" style="background-image: url(./images/日本竹地板/IMG_5713.png);"data-ptid="3">
                    <div class="BM_text d-flex justify-content-center align-items-center">
                        <h2>竹地板</h2>
                    </div>
                </div>
                <div class="BM_content d-flex align-items-center" style="background-image: url(./images/屋瓦/20120821150118.jpg);"data-ptid="4">
                    <div class="BM_text d-flex justify-content-center align-items-center">
                        <h2>屋瓦</h2>
                    </div>
                </div>
                <div class="BM_content d-flex align-items-center" style="background-image: url(./images/隔熱毯/07.jpg);"data-ptid="5">
                    <div class="BM_text d-flex justify-content-center align-items-center">
                        <h2>隔熱毯</h2>
                    </div>
                </div>
                <div class="BM_content d-flex align-items-center" style="background-image: url(./images/棟飾/225.jpg);"data-ptid="6">
                    <div class="BM_text d-flex justify-content-center align-items-center">
                        <h2>棟飾</h2>
                    </div>
                </div>
                <!-- 可以考慮在這邊用JQ直接更改分母(套用此欄資料庫數量),問老師 -->
                <div class="mask"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        var btnarr = document.querySelectorAll('.BM_content');
        btnarr.forEach(element => {
            element.onclick =function(){
                window.location.href = '/ProductType/' + $(this).data('ptid');
            };
        });

    </script>
@endsection
