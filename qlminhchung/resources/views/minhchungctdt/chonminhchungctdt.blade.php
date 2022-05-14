@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hãy Chọn Minh Chứng 
      </h1>
    
    </section>
<form method="post" action="vietbaocaoctdt.blade.php" name="SelectForm">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <!-- Main content -->
    <section class="invoice">
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Tích Chọn</th>
              <th>ID Minh Chứng</th>
              <th>Tên Minh Chứng</th>
              <th>Nơi Ban Hành</th>
              <th>Ngày Ban Hành</th>
              <th>Tên chương trình đào tạo</th>
              <th>Số Hiệu</th>
              <th>Tên Tiêu Chuẩn</th>
              <th>Tên Tiêu Chí</th>
              <th>Nội Dung</th>
              <th>File</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td><input value="{{$row->sohieu}}" id="{{$row->sohieu}}" type="checkbox" name="chon"></td>
                <td>{{$row->id}}</td>
                <td>{{$row->tenminhchung}}</td>
                <td>{{$row->noibanhanh}}</td>
                <td>{{$row->ngaybanhanh}}</td>
                <td>{{$row->tenctdt}}</td>
                <td>{{$row->sohieu}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->tentieuchi}}</td>
                <td>{{$row->noidung}}</td>
                <td>{{$row->file}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="box-footer">
          <input type="button" id="btn" value="Hiển thị số hiệu đã chọn"/>     
        </div>
        <div><a href="{{ URL::previous() }}">Quay lại Trang Viết Báo Cáo</a></div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </form>
    <!-- /.content -->
    <div class="clearfix"></div>
    <script language="javascript">
            document.getElementById('btn').onclick = function()
            {
                // Khai báo tham số
                var checkbox = document.getElementsByName('chon');
                var result = "";
                 
                // Lặp qua từng checkbox để lấy giá trị
                for (var i = 0; i < checkbox.length; i++){
                    if (checkbox[i].checked === true){
                        result += ' [' + checkbox[i].value + ']';
                    }
                }
                 
                // In ra kết quả
                alert("Các minh chứng đã chọn có số hiệu: " + result);
            };
        </script>
  </div>
  
  @stop