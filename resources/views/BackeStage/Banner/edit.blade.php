
@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/BackStageContactSeviceEdit.css">
@endsection
    
@section('content')
<div class="container">

    <div class="title mb-5 text-center align-middle">Banner 管理</div>

    <form class = "contact_info"  action = "/admin/BannerImages/{{$banner_image->id}} " method = "POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <label for="img">上傳照片</label>
                <img width=200 src={{$banner_image->img}} alt="">
                <input type="file" class = "col-7"id = "img"  name = "img"  required value = {{$banner_image->img}} >
            </div>
        </div>


        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >權重</span>
            </div>
            <input type="number" class = "col-7" name = "sort" required value = {{$banner_image->sort}} >
        </div>
    </form>

    <div class =" d-flex justify-content-end">
        <button class = "btn_update btn btn-secondary">
            送出更改
        </button>
    </div>
    
</div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- sweet alert -->
    <script>
        
        var btn = document.querySelector(".btn_update");
        var select_form = document.querySelector("form.contact_info");
        btn.onclick = function(){
            console.log('click');
            console.log(select_form);
            select_form.submit();
        }
      
    </script>
@endsection
