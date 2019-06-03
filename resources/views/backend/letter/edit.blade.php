@extends('backend.layout.master')
@section('content')


<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-file-text-o" aria-hidden="true"></i>
    แบบหนังสือภายนอก</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">แก้ไข หนังสือภายนอก</h4>
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
            <form action="/backend/letter/{{$letter->id}}" method="POST" >
                @method('patch')
                @csrf
            <div class=" container">
                <div class="form-row">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputText">ที่ :</label>
                        <input type="text" name="at" value="{{$letter->at}}" class="form-control">
                        </div>


                    <div class="form-group col-md-8">
                        <label for="inputPhone">ที่อยู่ :</label>
                        <textarea id="summernote1" name="address">{{$letter->address}}</textarea>
                    </div>
                </div>


                    <div class="form-group col-md-4">
                        <label for="inputDate">วันที่ :</label>
                        <input type="text" name="date"value="{{$letter->date}}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputSubject">เรื่อง :</label>
                    <input type="text" name="subject"value="{{$letter->subject}}" class="form-control" id="inputSubject" placeholder="กรุณากรอกเรื่อง">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputText">เรียน :</label>
                        <input type="text" name="study"value="{{$letter->study}}" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-12">
                                <label for="inputText">เนื้อหา :</label>
                <textarea id="summernote2" name="deteil">{{$letter->deteil}}</textarea>
                        </div>
            </div>
                <div class="form-row">
                        {{-- <div class="form-group col-md-7">
                                <label for="inputText">จึงเรียนมา.. :</label>
                                <input type="text" name="ending" class="form-control">
                            </div> --}}
                            <div class="form-group col-md-7">
                                <label for="inputState">คำลงท้าย</label>
                                <select id="inputState" name="ending" class="form-control">
                                  <option selected>{{$letter->ending}}</option>
                                  <option>ขอแสดงความนับถือ</option>

                                </select>
                              </div>
                </div>
                <div class="form-group col-md-5">
                        <label for="inputPhone">ลงนาม :</label>
                        <input type="text" name="sign"value="{{$letter->sign}}" class="form-control">
                    </div>


                        <div class="form-group col-md-7">
                            <label for="inputText">ตำแหน่ง :</label>
                            <input type="text" name="position"value="{{$letter->position}}" class="form-control">
                        </div>


                    <div class="form-group col-md-5">
                        <label for="inputPhone">โทร :</label>
                        <input type="text" name="phone"value="{{$letter->phone}}" class="form-control">
                    </div>

        </div>
        <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i>บันทึกข้อมูล</button>
        </form>
    </div>
</div>
</div>

@section('script')
<script>
    $(document).ready(function() {
    $('#summernote1').summernote({
        placeholder: 'เนื้อหา ข้อความ',
        tabsize: 1,
        height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true
      });
  });

  $(document).ready(function() {
    $('#summernote2').summernote({
        placeholder: 'เนื้อหา ข้อความ',
        tabsize: 1,
        height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true
      });
  });

</script>
@endsection
@endsection
