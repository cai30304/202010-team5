@extends('layouts/nav_footer')

@section('css')
    <link rel="stylesheet" href="/css/news_index.css">
@endsection

@section('content')
<div class="section03">
    <div class="container mt-3 mb-4 ml">
        {{-- <div class="d-flex justify-content-between">

            <div class=" d-flex justify-content-center mb-4 mt-3 d-md-none d-lg-block"style="width:586px display:inline-block">

                <div class="box col-6 col-lg-6 col-md-6 col-sm-6 ">
                    <h2 class="ml-3"style="min-height:76; min-width:586px">最新消息News</h2>
                    <img id="big_img" src="/img/3.png" class="card-img-top container-fluid" alt="..." style="min-height:500px;min-width:586px">
                </div>
            </div>
            <div>
                <div class="row box col-6 col-lg-6 col-md-6 " style="min-width:517px;">
                    <div style="min-height:420px">
                        <div style="margin:200px 0;">
                            <h2 id="big_title" class="mt-0 text-center" style="width:517px">標題</h2>
                            <p id="big_text"class="text-center" style="width:517px ">內容內容內容內容</p>
                        </div>
                    </div>
                </div>

                <div class=" d-flex justify-content-end" style="width:517px" >
                    <a href="" id="big_href"class = "text-dark " style="height:100px;font-size:24px;" >learn more</a>
                </div>
            </div>


        </div> --}}

        <h2 class="ml-3">最新消息News</h2>

        <div class="row d-flex mb-4 mt-3 ">
            <div class="box col-sm-6 col-md-6 col-lg-6 d-none d-lg-block">
                <img id="big_img" height="300px" width="350px" style="object-fit: cover;" src="https://attach.setn.com/newsimages/2019/02/15/1782324-XXL.jpg"
                    class="card-img-top container-fluid" alt="...">
            </div>
            <div class="box col-md-6 col-lg-6 d-none d-lg-block">
                <div>
                    <h2 class="big_title mt-0">標題</h2>
                    <p id="big_text">內容內容內容內容</p>
                </div>
            </div>
        </div>


        <div class="row text-left d-flex ">
            @foreach($news_list as $news)
            {{-- <div class="col-12 col-lg-4 mb-3 news_card" data-newsid="{{$news->id}}" data-newstitle="{{$news->title}}" data-newssub="{{$news->subtitle}}" data-newsimg="{{$news->info_img}}" data-newshref="/news_index/{{$news->id}}"> --}}
            {{-- <div class="card m-auto border-secondary " data-aos="fade-up" style="width: 100%;">
                    <div class="card-header mb-0">
                        {{($news->created_at->format('Y-m-d'))}}
                        <hr width="200px" size="5px" style="margin:0;">
                    </div>

                    <img style="height:246px" src="{{$news->preview_img}}" class="card-img-top" alt="...">
                    <div class="card-body d-flex justify-content-between"style="height:37px;position:relative;">
                        <h5 class="card-title" >{{$news->title}}</h5 >
                            <div>
                                <a href="/news_index/{{$news->id}}" class = "text-dark">learn more</a>
                            </div>
                        <!-- <button type="button" class="btn btn-info btn-sm">learn more</button> -->
                    </div>
                </div>
            </div> --}}

            <div class="col-12 col-lg-4 mb-3 news_card" data-newsid="{{$news->id}}" data-newstitle="{{$news->title}}" data-newssub="{{$news->subtitle}}" data-newsimg="{{$news->info_img}}" data-newshref="/news_index/{{$news->id}}"">
                <div class="card m-auto border-secondary" data-aos="fade-up">
                    <div class="card-header mb-0">{{($news->created_at->format('Y-m-d'))}}</div>
                    <img height="246px" style="object-fit: cover;" src="{{$news->preview_img}}"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$news->title}}</h5>
                        <a href="/news_index/{{$news->id}}" type="button" class="btn btn-info btn-sm">詳細內容</a>
                    </div>
                </div>
            </div>
            @endforeach





        </div>
        <nav style="margin:0 auto;" aria-label="Page navigation example">
            <div class="d-flex justify-content-center">{{ $news_list->links() }}</div>

            <!-- <ul class="pagination ml-lg-5">
                    <li class="page-item"><a class="page-link" href="#">前一頁</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">下一頁</a></li>
                    </ul> -->
        </nav>
    </div>
</div>
@endsection

@section('js')
<script>
    var img = $('.news_card:first-child').data("newsimg");
    var title = $('.news_card:first-child').data("newstitle");
    var link_href = $('.news_card:first-child').data("newshref")
    var sub = $('.news_card:first-child').data("newssub")

    // var innertext = $(this).data("newsinner")
    $('#big_img').attr('src', img);
    $('#big_title').text(title);
    $('#big_text').html(sub);
    $('#big_href').attr('href',link_href);
    // console.log("123"+link_href);


    $('.news_card').hover(function() {
        // console.log("123");
        var img = $(this).data("newsimg");
        var title = $(this).data("newstitle")
        var sub = $(this).data("newssub");
        // console.log(title);
        // console.log($(this).data("newsid")+'hover');
        // console.log(title);
        $('#big_img').attr('src', img);
        $('#big_title').text(title);
        $('#big_text').html(sub);
        // console.log($('#big_img').attr('src'));
    });

    $('.card-body').click(function() {
        console.log("123");

        // console.log($('#big_img').attr('src'));
    });
</script>
@endsection
