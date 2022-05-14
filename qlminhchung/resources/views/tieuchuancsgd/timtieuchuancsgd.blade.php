@extends('layouts.dash')
@section('section')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tìm Tiêu Chuẩn CSGD:
      </h1>
    
    </section>

    <!-- giao diện tìm kiếm minh chứng 
    theo tên, theo id, theo cấp, theo tiêu chuẩn, theo tiêu chí, theo nơi ban hành, theo ngày, -->
        <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tìm kiếm tiêu chuẩn theo:</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="" name="timtieuchuancsgd">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="f-grid">
                <div class="form-group f-grid-col">
                <label>Tên tiêu chuẩn</label>
                    <div class="control-group kt">
                    <input type="text" name="tentieuchuan" placeholder="Nhập tên cần tìm">
                    </div>
                </div>
                </div>


                <div class="form-group">
                  <label>Nội dung</label>
                  <input type="text" class="form-control" name="noidung" placeholder="Nhập nội dung cần tìm">
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
              <th>ID Tiêu Chuẩn</th>
              <th>Tên Tiêu Chuẩn</th>
              <th>Tên Cấp</th>
              <th>Nội Dung</th>
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->tencap}}</td>
                <td>{{$row->noidung}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
    </section>
  </div>
  @stop