@extends('layouts/nav_footer')

@section('css')
    <!-- error_page -->
    <link rel="stylesheet" href="/css/error_page.css">
@endsection

@section('content')
    <div id="error_page">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <div class="group">
                <div class="title title-number_none_line">404</div>
                <div class="content">找不到頁面</div>
                <div class="row auto-justify-content-around">
                    <a class="btn">回到首頁</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
