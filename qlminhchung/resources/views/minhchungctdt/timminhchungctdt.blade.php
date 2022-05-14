@extends('layouts.dash')
@section('section')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tìm Minh Chứng CSGD:
      </h1>
    
    </section>

    <!-- giao diện tìm kiếm minh chứng 
    theo tên, theo id, theo cấp, theo tiêu chuẩn, theo tiêu chí, theo nơi ban hành, theo ngày, -->
        <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tìm kiếm minh chứng theo:</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="">
              {!! Form::open(['url' => '/minhchungcsgd/add','method'=>'post','role'=>'form']) !!}
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="f-grid">
                <div class="form-group f-grid-col">
                <label>Số hiệu cần tìm</label>
                    <div class="control-group kt">
                    <input type="text" name="sohieu" placeholder="Nhập số hiệu cần tìm">
                    </div>
                </div>
      
                  <div class="form-group f-grid-col">
                  <label>Tên tiêu chuẩn</label>
                    <div class="control-group kt">
                    <input type="text" name="tentieuchuan" placeholder="Tiêu chuẩn">
                    </div>
                    
                  </div>

                  <div class="form-group f-grid-col">
                  <label>Tên tiêu chí</label>
                    <div class="control-group kt">
                    <input type="text" name="tentieuchi" placeholder="Tiêu chí">
                    </div> 
                  </div>

                  </div>


                <div class="form-group">
                  <label>Tiêu Đề Minh Chứng</label>
                  <input type="text" class="form-control" name="tenminhchung" placeholder="Tên minh chứng">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
              </div>
              </form>
            {!! Form::close() !!}
          </div>
          <!-- /.box -->
      <!-- /.row -->



      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>ID Minh Chứng</th>
              <th>Tên Minh Chứng</th>
              <th>Nơi Ban Hành</th>
              <th>Ngày Ban Hành</th>
              <th>Tên CTDT </th>
              <th>Số Hiệu</th>
              <th>Tên Tiêu Chuẩn</th>
              <th>Tên Tiêu Chí</th>
              <th>Nội Dung</th>
              <!-- <th>File</th>
              <th>Sửa</th>
              <th>Xóa</th> -->
            </tr>
            </thead>
            <tbody>
              @foreach($data as $row)
              <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->tenminhchung}}</td>
                <td>{{$row->noibanhanh}}</td>
                <td>{{$row->ngaybanhanh}}</td>
                <td>{{$row->tenctdt}}</td>
                <td>{{$row->sohieu}}</td>
                <td>{{$row->tentieuchuan}}</td>
                <td>{{$row->tentieuchi}}</td>
                <td>{{$row->noidung}}</td>
                <!-- <td>{{$row->file}}</td> -->
                <!-- <td>
                  <a href="{{ url('/suaminhchungcsgd')}}/{{$row->id}}" class="glyphicon glyphicon-edit">Sửa</a>
                </td>
                <td>  <a href="{{ url('/xoaminhchungcsgd')}}/{{$row->id}}" onclick="return  confirm(' Bạn có chắc muốn xóa minh chứng này chứ!')" class="glyphicon glyphicon-remove">Xóa</a>
                </td> -->
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      
          </div>
    </section>
  </div>
  @stop