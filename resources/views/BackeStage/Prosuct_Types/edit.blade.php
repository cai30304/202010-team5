@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/admin/ProductsTypes/{{$product_type->id}} " enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class = "d-flex justify-content-between mb-3 "style = "width:100%;">
            <div class = "col-2">
                <span >產品類型</span>
                <span class = "lable_required">*</span>
            </div>
            <input type="text" class = "col-7" name = "type_name" value = "{{$product_type->type_name}}" required>
        </div>

        <div class = "d-flex justify-content-between mb-3" style = "width:100%;">
            <div class = "col-2">
                <span >權重</span>
            </div>
            <input type="number" class = "col-7" name = "sort" value = "{{$product_type->sort}}" >
        </div>

        <button type="submit" class="btn btn-primary">送出審查</button>

    </form>

</div>


@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
@endsection
