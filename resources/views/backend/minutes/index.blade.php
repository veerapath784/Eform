@extends('backend.layout.master')
@section('content')


<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-file-text-o" aria-hidden="true"></i>
    รายงานการประชุม</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการ รายงานการประชุม</h4>
            <span class="float-right"><a href="/backend/minutes/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                        รายงานการประชุม</a></span>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered ">
                        <tr class="text-center">
                            <th>#</th>
                            <th>เรื่อง</th>

                            <th width="150">จัดการ</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($minutes as $minutes)
                            <tr>
                                <td class="text-center">{{$minutes->id}}</td>
                                <td>{!!$minutes->heading!!}</td>
                                <td class="text-center">
                                    <div class="button-group">
                                        <a href="/backend/minutes/{{$minutes->id}}/edit" class="btn btn-warning btn-sm"><i
                                                class="fa fa-edit"></i></a>

                                        <a href="javaScript: deleteItem('{{$minutes->id}}')"
                                            class="btn  btn-danger btn-sm">
                                            <i class="fa fa-trash"></i></a>

                                        <a href="/backend/printing_memo/{{$minutes->id}}" class="btn btn-info btn-sm"><i
                                                class="fa fa-print" aria-hidden="true"></i></a>

                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


                @section('script')
                <script>
                    var deleteItem = function deleteItem(id) {

                        swal.fire({
                            title: "แน่ใจหรือไม่ ?",
                            text: "คุณต้องการลบข้อมูลนี้จริงหรือไม่ ?",
                            type: "warning",
                            showCancelButton: true,
                        }).then(function (result) {
                            if (result.value) {
                                axios.delete('/backend/minutes/' + id).then(function (response) {
                                    window.location.href = "/backend/minutes/";
                                }).catch(function (error) {
                                    console.log(error.response)
                                    swal('เกิดข้อผิดพลาด', 'ไม่สามารถลบข้อมูลได้ \n ' + error.response.statusText,
                                        'error');
                                });
                            }
                        })


                    }
                </script>
            </div>
            @endsection
        </div>





    </div>
</div>
</div>


@endsection
