@extends('backend.layout.master')
@section('content')


<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-file-text-o" aria-hidden="true"></i>
    แบบบันทึกข้อความ</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">แก้ไข บันทึกข้อความ</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="/backend/memo/{{$memo->id}}" method="POST" >
                @method('patch')
                @csrf
            <div class=" container">
                <div class="form-row">
                        <div class="form-group col-md-5">
                                <label for="inputPhone">ส่วนราชการ :</label>
                        <input type="text" name="part" value="{{$memo->part}}" class="form-control">
                            </div>


                    <div class="form-group col-md-5">
                        <label for="inputPhone">โทร :</label>
                        <input type="text" name="phone" value="{{$memo->phone}}" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputText">ที่ :</label>
                        <input type="text" name="at" value="{{$memo->at}}" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputDate">วันที่ :</label>
                    <input type="date" name="date" value="{{$memo->date}}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputSubject">เรื่อง :</label>
                    <input type="text" name="subject" value="{{$memo->subject}}" class="form-control" id="inputSubject" placeholder="กรุณากรอกเรื่อง">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputText">เรียน :</label>
                        <input type="text" name="study" value="{{$memo->study}}" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-12">
                                <label for="inputText">เนื้อหา :</label>
                        <textarea id="summernote" name="deteil">{{$memo->deteil}}</textarea>
                        </div>
            </div>
                <div class="form-row">
                        {{-- <div class="form-group col-md-7">
                                <label for="inputText">จึงเรียนมา.. :</label>
                                <input type="text" name="ending" class="form-control">
                            </div> --}}
                            <div class="form-group col-md-7">
                                <label for="inputState">State</label>
                                <select id="inputState" name="ending" class="form-control">
                                  <option selected>{{$memo->ending}}</option>
                                  <option>จึงเรียนมาเพื่อโปรดพิจารณา</option>
                                  <option>จึงเรียนมาเพื่อโปรดทราบ</option>
                                  <option>จึงเรียนมาเพื่อโปรดให้ความร่วมมือ</option>
                                  <option>จึงเรียนมาเพื่อโปรดทราบ และพิจารณา</option>
                                </select>
                              </div>
                </div>
                <div class="form-group col-md-5">
                        <label for="inputPhone">ลงนาม :</label>
                <input type="text" name="sign" value="{{$memo->sign}}" class="form-control">
                    </div>

        </div>
        <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> บันทึกข้อมูล</button>
        </form>
    </div>
</div>
</div>

@section('script')
<script>
    $(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'เนื้อหา ข้อความ',
        tabsize: 1,
        height: 200,
      });
  });

</script>
@endsection
@endsection
