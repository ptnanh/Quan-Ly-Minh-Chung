@extends('layouts.dash')

@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh Sách Tiêu Chí CTDT
      </h1>
    </section>

    <!-- Main content -->
    <section class="invoice">

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID Tiêu Chí</th>
              <th>Tên Tiêu Chí</th>
              <th>Tên Tiêu Chuẩn</th>
              <th>Tên Cấp</th>
              <th>Nội Dung</th>
           <!--   <th>Sửa</th>
              <th>Xóa</th> -->
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tentieuchi}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->tencap}}</td>
                <td>{{$row->noidung}}</td>
    <!--            <td>
                  <a href="{{ url('/suaminhchung')}}/{{$row->id}}" class="glyphicon glyphicon-edit">Sửa</a>
                </td>
                <td>  <a href="{{ url('/xoaminhchung')}}/{{$row->id}}" onclick="return  confirm(' Bạn có chắc muốn xóa minh chứng này chứ!')" class="glyphicon glyphicon-remove">Xóa</a>
                </td> -->
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
    <div class="clearfix"></div>
  </div>
@endsection
