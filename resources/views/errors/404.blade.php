@extends('layouts/nav_footer')

@section('css')
    <!-- error_page -->
    <link rel="stylesheet" href="/css/error_page.css">
@endsection

@section('content')
    <div id="error_page">
        <div class="container-fluid d-flex align-items-center justify-content-center">
            <div class="row justify-content-center">
                <div class="title col-6">404</div>
                <div class="w-100"></div>
                <div class="content col-6">找不到頁面</div>
                <div class="w-100"></div>
                <a href="/"><div class="btn">回到首頁</div></a>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
