@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="/css/BackStageContactSeviceEdit.css">
@endsection

@section('content')
<?php 
    $material_name = DB::table('materials')->where("id",$product->material_id)->first()->material_name;
    $product_type_name = DB::table('product_types')->where("id",$product->type_id)->first()->type_name;
?>

<div class="container">
    <div class="title mb-5 text-center align-middle">編輯產品</div>

    <form class="contact_info d-flex flex-wrap justify-content-end    " action="/admin/Products/{{$product->id}} " method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="d-flex justify-content-between mb-3" style="width:100%;">
            <div class="col-2">
                <span>產品名稱</span>
                <span class="lable_required">*</span>
            </div>
            <input type="text" class="col-9" name="product_name" value="{{$product->product_name}}" require>
        </div>

        <div class="d-flex justify-content-between mb-3" style="width:100%;">
            <div class="col-2">
                <span>產品類型</span>
                <span class="lable_required">*</span>
            </div>
            <!-- <input type="text" class="col-9" name="type_name" require> -->

            <select name="type_id" id="type_id">
                @foreach ($product_types as $product_type)
                    @if( $product_type->id == $product->type_id)
                        <option  value="{{$product_type->id}}" selected="selected">{{$product_type->type_name}}</option>
                    @else
                        <option  value="{{$product_type->id}}">{{$product_type->type_name}}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between mb-3" style="width:100%;">
            <div class="col-2">
                <span>產品顏色</span>
                <span class="lable_required">*</span>
            </div>
            <input type="text" class="col-9" name="material_name" value="{{$material_name}}" require>
        </div>

        <div class="d-flex justify-content-between mb-3" style="width:100%;">
            <div class="col-2">
                <span>產品權重</span>
            </div>
            <input type="number" class="col-9" name="sort" value = "{{$product->sort}}">
        </div>

        <div class="d-flex justify-content-between mb-3 " style="width:100%;">
            <div class="col-2">
                <span>產品圖片</span>
            </div>
            <input type="file" class="col-9" name="info_img">
        </div>
        <img width="200" src="{{$product->info_img}}" alt="">

        <div class="d-flex justify-content-between mb-3 " style="width:100%;">
            <div class="col-2">
                <span>內頁多張照片</span>
            </div>
            <input type="file" class=" col-9" id="multiple_images" name="multiple_images[]" multiple>
        </div>
        <div class="d-flex justify-content-between col-9" >
            @foreach($material_images as $material_image)
                <div class ="ml-3" >
                    <div id ="delete_btn_{{$material_image->id}}"class="deleteBtn btn btn-sm alert-danger" data-imgid={{$material_image->id}}>刪除</div>
                    <img width="200" src="{{$material_image->material_image}}" alt="">
                    <input type="number" witdh="200" value="{{$material_image->sort}}" name="material_sort_{{$material_image->id}}" >
                </div>
            @endforeach
        </div>
        
        
      

        <div class="d-flex justify-content-between mb-3" style="width:100%;">
            <div class="col-2">
                <span>產品資訊</span>
            </div>
            <textarea id="summernote" type="text" class=" col-7" id="info" value="{{$product->info}}" name="info">{{$product->info}}</textarea>
        </div>

        <button type="submit" class="btn_update btn btn-secondary mt-3" style="margin:0;">送出儲存</button>

    </form>
    @foreach ($material_images as $material_image)
        <form method="POST" id="deleteform_{{$material_image->id}}" class="deleteform"  action="/admin/ProductImages/{{$product->id}}/{{$material_image->id}}">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
    <div class=" d-flex justify-content-end">

        <!-- <button class = "btn_update btn btn-secondary">
            送出儲存
        </button> -->
    </div>

</div>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/lang/summernote-zh-TW.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- sweet alert -->
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 350,
            width: 712,
            lang: 'zh-TW',
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                },
                onMediaDelete: function(target) {
                    $.delete(target[0].getAttribute("src"));
                }
            }
        })


        $.upload = function(file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_upload_img',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function(img) {
                    $('#summernote').summernote('insertImage', img);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };

        $.delete = function(file_link) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_delete_img',
                data: {
                    file_link: file_link
                },
                success: function(img) {
                    console.log("delete:", img);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }
    });

    var btnArr = document.querySelectorAll(".deleteBtn");

        //刪除資料之按鈕
        btnArr.forEach(element => {
            var imgid = element.dataset.imgid;
            var select_form = "#deleteform_" + imgid;
            console.log(select_form);

            element.onclick = function() {
                console.log(select_form);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        console.log(select_form);

                        document.querySelector(select_form).submit();
                    }
                })

            }
        })
</script>
@endsection