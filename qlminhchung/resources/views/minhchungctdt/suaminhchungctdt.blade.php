@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa Minh Chứng CTDT
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Điền thông tin Minh Chứng</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="" name="editForm">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="f-grid">
                <div class="form-group f-grid-col">
                  <label>Số hiệu</label>
                  <div class="control-group">
                    <input type="number" value="{{$minhchung->sohieu}}" name="sohieu" data-form-field="number" placeholder="Chọn số" class="span8"  min="1">
                  </div>
                </div>
                  <div class="form-group f-grid-col">
                    <label>Tên Tiêu chuẩn</label>
                    <div class="control-group">
                    <select name="tentieuchuan" value="{{$minhchung->tentieuchuan}}">
                      <option class="option">{{$minhchung->tentieuchuan}}</option> 
                        <option>Tiêu chuẩn 27</option>
                      <option>Tiêu chuẩn 25</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group f-grid-col">
                    <label>Tên Tiêu chí</label>
                    <div class="control-group kt">
                    <select name="tentieuchi">
                          <option class="option">{{$minhchung->tentieuchi}}</option>
                      <option>Tiêu chí 1</option>
                      <option>Tiêu chí 2</option>
                    
                    </select>
                  </div>
                  </div>
                  </div>
                <div class="form-group">
                  <label>Tiêu Đề Minh Chứng</label>
                  <input type="text" class="form-control" name="tenminhchung" value="{{$minhchung->tenminhchung}}" placeholder="Tên minh chứng">
                </div>
                <div class="form-group">
                  <label>Nơi ban hành</label>
                  <input type="text" class="form-control" name="noibanhanh" value="{{$minhchung->noibanhanh}}" placeholder="Nơi ban hành">
                </div>
                <div class="form-group">
                  <label>Ngày ban hành:</label>
                  <input name="ngaybanhanh" value="{{$minhchung->ngaybanhanh}}" style="margin-left: 20px; "> 
                </div>
                <div class="form-group">
                  <label>Tên chương trình đào tạo</label>
                  <input type="text" class="form-control" name="tenctdt" placeholder="Tên CTDT">
                </div>
                <div class="form-group">
                  <label>Nội dung</label>
                  <textarea class="form-control noidung" rows="3" name="noidung" value="{{$minhchung->noidung}}" placeholder="Nhập nội dung ...">{{$minhchung->noidung}}</textarea>
                </div>
                <div class="form-group">
                  <label type="file"> File hiện tại: {{$minhchung->file}}</label><br>
                  <label for="exampleInputFile">Chọn File thay thế</label>
                  <input name="file" type="file" id="exampleInputFile">

                  <p class="help-block">Chọn file minh chứng của bạn.</p>
                </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cập nhật minh chứng</button>
              </div>
           </form>
         
          <script type="text/javascript">
            document.forms['editForm'].elements['cap_id'].value='{{ $minhchung->cap_id }}'
          </script>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
