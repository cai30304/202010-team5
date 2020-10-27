
@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/BackStageContactSeviceEdit.css">
@endsection
    
@section('content')
<div class="container">
    <div class="title mb-5 text-center align-middle">產品類型</div>

    <form class = "contact_info d-flex flex-wrap justify-content-end    "  action = "/admin/ProductsTypes " method = "POST">
        @csrf

        <div class = "d-flex justify-content-between mb-3 "style = "width:100%;">
            <div class = "col-2">
                <span >產品類型</span>
                <span class = "lable_required">*</span>
            </div>
            <input type="text" class = "col-7" name = "type_name"  required>
        </div>

        <div class = "d-flex justify-content-between mb-3" style = "width:100%;">
            <div class = "col-2">
                <span >權重</span>
            </div>
            <input type="number" class = "col-7" name = "sort" value = 0 >
        </div>
        
        <button type="submit" class = "btn_update btn btn-secondary mt-3" style = "margin:0;">送出儲存</button>
        
    </form>

    <div class =" d-flex justify-content-end">
        
        <!-- <button class = "btn_update btn btn-secondary">
            送出儲存
        </button> -->
    </div>
    
</div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- sweet alert -->
    <script>
       

   
    </script>
@endsection
