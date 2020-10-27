
@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/BackStageContactMessageInfo.css">
@endsection
    
@section('content')
<div class="container">
    
    <div class="title mb-5 text-center align-middle">聯絡表單</div>
    <form class = "contact_info"  action="">
        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >客戶姓名</span>
                <span class = "lable_required">*</span>
            </div>
            
            <input type="text" class = "col-7" readonly value = {{$message->user_name}} >
        </div>
        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >聯絡者電話</span>
            </div>
            <input type="text" class = "col-7" readonly value = {{$message->telephone_number}} >
        </div>

        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >連絡者手機</span>
            </div>
            <input type="text" class = "col-7" readonly value = {{$message->phone_number}} >
        </div>

        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >連絡者信箱</span>
            </div>
            <input type="text" class = "col-7" readonly value = {{$message->email}} >
        </div>

        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-3">
                <span >聯絡者詢價產品清單id</span>
            </div>
            @if($message->inquire_id)
                <input type="text" class = "col-7" readonly value ={{$message->inquire_id}} >
            @else
                <input type="text" class = "col-7" readonly value ="無填寫清單" >
            @endif
        </div>

        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >聯絡者填單時間</span>
            </div>
            <input type="text" class = "col-7" readonly value = {{$message->created_at}} readonly>
        </div>
        
        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >服務類型</span>
                <span class = "lable_required">*</span>
            </div>
            @if($service_type != null )
                <input type="text" class = "col-7" readonly value = {{$service_type->service_name}} readonly>
            @else
                <input type="text" class = "col-7" readonly value = "服務類型已移除" readonly>
            @endif
        </div>

        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >主旨</span>
                <span class = "lable_required">*</span>
            </div>
            <input type="text" class = "col-7" readonly value = {{$message->subject}} readonly>
        </div>
        
        <div class = "d-flex justify-content-between mb-3">
            <div class = "col-2">
                <span >內文</span>
                <span class = "lable_required">*</span>
            </div>
            <textarea class = "col-7" name="" id="" readonly value = "{{$message->inner_text}}" rows="10" readonly>{{$message->inner_text}}</textarea>
        </div>
        
        
      
    </form>
    <div class ="d-flex justify-content-end">
        <button class = "btn_info btn btn-primary">
            <a style  href="/admin/ContactMessages">返回上一頁</a>
        </button>
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
