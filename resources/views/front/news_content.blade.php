@extends('layouts/nav_footer')

@section('css')
    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection


<body>
    <nav>
        <div class="container-fluid d-flex p-0">
            <div class="logo"><img height="80px" src="/image/LOGO.jpg" alt=""></div>
            <ul class="d-flex ml-auto align-items-center">
                <a href="/" class="nav_btn" >
                    <li>首頁</li>
                </a>
                <a href="/GreenBuilding" class="nav_btn" >
                    <li>綠能建築</li>
                </a>
                <a href="/BM_total" class="nav_btn" >
                    <li>日本建材</li>
                </a>
                <a href="" class="nav_btn" >
                    <li>最新消息</li>
                </a>
                <a href="" class="nav_btn" >
                    <li>關於我們</li>
                </a>
                <a href="" class="nav_btn" >
                    <li>聯絡我們</li>
                </a>
            </ul>
        </div>
    </nav>

    <main>
        <div class="section03">
            <div class="container mt-3 mb-4">
                
                <div class="row d-flex justify-content-center mb-4 mt-5">
                    <div class="box col-12 col-md-12 col-lg-6 bg-light">
                        <img src="{{$news->info_img}}"
                            class="card-img-top container-fluid" alt="...">
                    </div>

                    <div class="box col-12 col-md-12 col-lg-6 bg-light" >
                        <div>
                            <h2 class="mt-0">{{$news->title}}</h2>
                            <p>{!! $news->inner_text !!}</p>
                        </div>
                    </div>
                </div>
    
                <a href="/news_index" class="btn btn-secondary float-right">＜回到消息頁</a>
                   
            </div>
        </div>
    </main>

    


@section('js')
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
</body>
</html>
