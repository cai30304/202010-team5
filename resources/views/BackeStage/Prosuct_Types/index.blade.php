@extends('layouts/app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
    <a href="/admin/ProductsTypes/create" class="btn  btn-secondary mb-3 mt-3">新增產品類型</a>
    <table id="product_types" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>產品類型</th>
                <th>權重</th>
                <th style="width:180px;">功能</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product_types as $product_type)
            <tr>
                <td>{{$product_type->type_name}}</td>
                <td>{{$product_type->sort}}</td>
                <td class ="d-flex justify-content-around">
                    <a href="/admin/ProductsTypes/{{$product_type->id}}/edit" class="btn btn-sm btn-secondary">編輯產品類型</a>
                    <div id="deleteBtn_{{$product_type->id}}" class="deleteBtn btn btn-sm btn-secondary alert-danger" data-ptid="{{$product_type->id}}">刪除產品類型
                        <form method="POST" id="deleteform_{{$product_type->id}}" class="deleteform" data-ptid="{{$product_type->id}}" action="/admin/ProductsTypes/{{$product_type->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- sweet alert -->
<script>
    $(document).ready(function() {
        $('#product_types').dataTable({
            "order": [
                [1, 'desc']
            ],
            "language": {
                "processing": "處理中...",
                "loadingRecords": "載入中...",
                "lengthMenu": "顯示 _MENU_ 項結果",
                "zeroRecords": "沒有符合的結果",
                "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
                "infoFiltered": "(從 _MAX_ 項結果中過濾)",
                "infoPostFix": "",
                "search": "搜尋:",
                "paginate": {
                    "first": "第一頁",
                    "previous": "上一頁",
                    "next": "下一頁",
                    "last": "最後一頁"
                },
                "aria": {
                    "sortAscending": ": 升冪排列",
                    "sortDescending": ": 降冪排列"
                }
            }
        });
    });

    var btnArr = document.querySelectorAll(".deleteBtn");
    //刪除資料之按鈕
    btnArr.forEach(element => {
        // console.log("click");

        var ptid = element.dataset.ptid;
        var select_form = "#deleteform_" + ptid;
        // console.log(select_form);

        element.onclick = function() {
            Swal.fire({
                title: '注意',
                text: "即將刪除此產品類型，屬於此產品類型的產品會一併移除。並且無法復原。",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '刪除'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        '刪除成功',
                        '此產品類型已經成功刪除',
                        'success'
                    )
                    document.querySelector(select_form).submit();
                }
            })

        }


    })
</script>



@endsection