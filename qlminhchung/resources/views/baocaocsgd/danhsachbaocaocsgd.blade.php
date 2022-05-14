@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Báo Cáo CSGD
      </h1>
    </section>

    <section class="invoice">

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID Báo Cáo</th>
              <th>Tên Báo Cáo</th>
              <th>Tên tiêu chuẩn</th>
              <th>Tên tiêu chí</th>
              <th>Đánh giá</th>
              <th>Nội dung báo cáo</th>
              <th>Tên nhóm báo cáo</th>
              <th>Số hiệu MC</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tenbaocao}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->tentieuchi}}</td>
                <td>{{$row->danhgia}}</td>
                <td>{{$row->noidungbaocao}}</td>
                <td>{{$row->tennhombaocao}}</td>
                <td>{{$row->sohieuminhchung}}</td>
                <td>
                  <a href="{{ url('/suabaocaocsgd')}}/{{$row->id}}" class="glyphicon glyphicon-edit">Sửa</a>
                </td>
                <td>  <a href="{{ url('/xoabaocaocsgd')}}/{{$row->id}}" onclick="return  confirm(' Bạn có chắc muốn xóa minh chứng này chứ!')" class="glyphicon glyphicon-remove">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
