@extends('layouts.dash')
@section('section')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tìm Tiêu Chuẩn CTDT:
      </h1>
    
    </section>

    <!-- giao diện tìm kiếm minh chứng 
    theo tên, theo id, theo cấp, theo tiêu chuẩn, theo tiêu chí, theo nơi ban hành, theo ngày, -->
        <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tìm kiếm người dùng theo:</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="" name="timtieuchuancsgd">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="box-body">
                <div class="f-grid">
                <div class="form-group f-grid-col">
                <label>Tên Người Dùng</label>
                    <div class="control-group kt">
                    <input type="text" name="name" placeholder="Nhập tên cần tìm">
                    </div>
                </div>    x
      
                <div class="form-group f-grid-col">
                  <label>Email</label>
                    <div class="control-group kt">
                    <input type="text" name="email" placeholder="Email">
                    </div>
                    
                  </div>

                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
              </div>
              </form>
          </div>
          <!-- /.box -->
      <!-- /.row -->



      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Tên Người Dùng</th>
              <th>Email</th>
              <th>Sửa</th>
              <th>Xóa</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>
                  <a href="{{ url('/suamuser')}}/{{$row->id}}" class="glyphicon glyphicon-edit">Sửa</a>
                </td>
                <td>  <a href="{{ url('/xoauser')}}/{{$row->id}}" onclick="return  confirm(' Bạn có chắc muốn xóa user này chứ!')" class="glyphicon glyphicon-remove">Xóa</a>
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
  </div>
  @stop