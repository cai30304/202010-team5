
@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container">
   
  

   
    <table id="contact_service" class="table table-striped table-bordered" style="width:100%">
    <thead>
            <tr>
                <th>主旨</th>
                <th>聯絡者姓名</th>
                <th>服務類別</th>
                <th>收件日期</th>
                <th style="width:180px">功能</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($messages as $message)
                <tr>
                    <td>{{$message->subject}}</td>
                    <td>{{$message->user_name}}</td>
                    <?php
                        if($message->serverce_id != 0)
                            $name = App\ContactService::find($message->serverce_id);
                        else
                            $name = null;
                    ?>
                    @if($name)
                        <td>{{$name->service_name}}</td>
                    @else
                        <td>服務類型已移除</td>
                    @endif
                    <td>{{$message->created_at}}</td>
                    <td class ="d-flex justify-content-around">
                        <a href="/admin/ContactMessages/info/{{$message->id}}" class = "btn btn-sm btn-secondary btn-info">查看訊息內容</a>
                        <div id="deleteBtn_{{$message->id}}" class="deleteBtn btn btn-sm btn-secondary alert-danger" data-ptid="{{$message->id}}">刪除訊息
                            <form method="POST" id="deleteform_{{$message->id}}" class="deleteform" data-ptid="{{$message->id}}" action="/admin/ContactMessages/{{$message->id}}">
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
            $('#contact_service').dataTable({
                "order": [
                    [3, 'desc']
                ], //3為創建時間那格
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
                    text: "即將刪除此訊息，並且無法復原",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '刪除'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            '刪除成功',
                            '此訊息已經成功刪除',
                            'success'
                        )
                        document.querySelector(select_form).submit();
                    }
                })
                
            }

           
        })
    </script>
    <?php
        echo $contact_service_name_list = "";
    ?>
@endsection
