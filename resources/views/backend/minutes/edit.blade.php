@extends('backend.layout.master')
@section('content')


<h1 class="h3 mb-4 text-gray-800"><i class="fa fa-file-text-o" aria-hidden="true"></i>
    รายงานการประชุม</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">สร้าง รายงานการประชุม</h4>
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
                <form action="/backend/minutes/{{$minutes->id}}" method="POST" >
                    @method('patch')
                    @csrf
                <div class=" container">

                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">หัวเรื่อง :</label>
                        <textarea id="summernote1" name="heading">{{$minutes->heading}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ผู้มาประชุม :</label>
                            <textarea id="summernote2" name="meeting">{{$minutes->meeting}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ผู้เข้าร่วมประชุม :</label>
                            <textarea id="summernote3" name="attendees">{{$minutes->attendees}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ผู้ไม่เข้าร่วมประชุม :</label>
                            <textarea id="summernote4" name="nonattendee">{{$minutes->nonattendee}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputText">เวลาเริ่มประชุม :</label>
                            <input type="text" name="time" class="form-control" value="{{$minutes->time}}">
                            <br>
                            <textarea id="summernote5" name="start">{{$minutes->start}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ระเบียบวาระที่ 1 :</label>
                            <textarea id="summernote01" name="agenda1">{{$minutes->agenda1}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ระเบียบวาระที่ 2 :</label>
                            <textarea id="summernote02" name="agenda2">{{$minutes->agenda2}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ระเบียบวาระที่ 3 :</label>
                            <textarea id="summernote03" name="agenda3">{{$minutes->agenda3}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ระเบียบวาระที่ 4 :</label>
                            <textarea id="summernote04" name="agenda4">{{$minutes->agenda4}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ระเบียบวาระที่ 5 :</label>
                            <textarea id="summernote05" name="agenda5">{{$minutes->agenda5}}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-9">
                            <label for="inputText">ระเบียบวาระที่ 6 :</label>
                            <textarea id="summernote06" name="agenda6">{{$minutes->agenda6}}</textarea>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputText">เวลาเลิกประชุม :</label>
                            <textarea id="summernote001" name="end">{{$minutes->end}}</textarea>
                        </div>
                    </div>


                    <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputPhone">ลงนาม 1 :</label>
                        <input type="text" name="sign1"value="{{$minutes->sign1}}" class="form-control">
                    </div>
                    <div class="form-group col-md-7">
                        <label for="inputText">ตำแหน่ง 1 :</label>
                        <textarea id="summernote0001" name="position1">{{$minutes->position1}}</textarea>
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="inputPhone">ลงนาม 2 :</label>
                        <input type="text" name="sign2"value="{{$minutes->sign2}}" class="form-control">
                    </div>
                    <div class="form-group col-md-7">
                        <label for="inputText">ตำแหน่ง 2 :</label>
                        <textarea id="summernote0002" name="position2">{{$minutes->position2}}</textarea>
                    </div>






                    </div>

                </div>
                <button type="submit" class="btn btn-primary"> บันทึกข้อมูล</button>
            </form>
        </div>
    </div>
</div>

@section('script')
<script>
    $(document).ready(function() {
    $('#summernote1').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true
      });
  });

  $(document).ready(function() {
    $('#summernote2').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote3').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote4').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote5').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 100,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor

      });
  });

  $(document).ready(function() {
    $('#summernote5').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });

//   วาระ
  $(document).ready(function() {
    $('#summernote01').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote02').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote03').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote04').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote05').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote06').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });

  $(document).ready(function() {
    $('#summernote001').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 100,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote0001').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 100,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
  $(document).ready(function() {
    $('#summernote0002').summernote({
        placeholder: ' ',
        tabsize: 1,
        height: 100,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
      });
  });
</script>
@endsection
@endsection
