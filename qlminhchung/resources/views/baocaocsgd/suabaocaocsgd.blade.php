@extends('layouts.dash')
@section('section')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa Báo Cáo CSGD
      </h1>
      <br>
      {{ Session::get('message')}}
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- left column -->
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Điền thông tin báo cáo CSGD</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="" name="formulariol">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                    <label><a href="{{ url('/chonminhchungcsgd')}}">Chọn số hiệu minh chứng</a></label>
                    <div class="control-group kt">
              <!--       @foreach($minhchungcsgdList as $sohieu)
                    <input type="text" name="" value="{{$sohieu->sohieu}}">
                    @endforeach -->
                    <input type="text" name="sohieuminhchung" class="form-control" placeholder="Nhập các số hiệu minh chứng đã chọn" value="{{$baocaocsgd->sohieuminhchung}}">
                  </div>
                  </div>
                <div class="f-grid">
              <!--    <div class="form-group f-grid-col">
                    <label><a href="{{ url('/chonminhchungctdt')}}">Chọn số hiệu minh chứng</a></label>
                    <div class="control-group kt">
                    <select name="sohieuminhchung" id="" class="form control input-sm">
                      <option>{{$baocaocsgd->sohieuminhchung}}</option>
                      @foreach($minhchungcsgdList as $sohieu)
                      <option value="{{$sohieu->sohieu}}">{{$sohieu->sohieu}}</option>
                      @endforeach
                    </select>
                  </div>
                  </div> -->
                  <div class="form-group f-grid-col">
                    <label>Tên đơn vị</label>
                    <div class="control-group kt">
                    <input type="text" name="tennhombaocao" value="{{$baocaocsgd->tennhombaocao}}" placeholder="Nhập tên đơn vị">
                  </div>
                  </div>
                  <div class="form-group f-grid-col">
                    
                    <label>Tên Tiêu chuẩn</label>
                    <div class="control-group">
                    <select name="tentieuchuan" value="{{$baocaocsgd->tentieuchuan}}" onchange="chon();">
                      <option value="0">Tiêu chuẩn {{$baocaocsgd->tentieuchuan}}</option> 
                      <option value="1">Tiêu Chuẩn 1</option>
                      <option value="2">Tiêu Chuẩn 2</option>
                      <option value="3">Tiêu Chuẩn 3</option>
                      <option value="4">Tiêu Chuẩn 4</option>
                      <option value="5">Tiêu Chuẩn 5</option>
                      <option value="6">Tiêu Chuẩn 6</option>
                      <option value="7">Tiêu Chuẩn 7</option>
                      <option value="8">Tiêu Chuẩn 8</option>
                      <option value="9">Tiêu Chuẩn 9</option>
                      <option value="10">Tiêu Chuẩn 10</option>
                      <option value="11">Tiêu Chuẩn 11</option>
                      <option value="12">Tiêu Chuẩn 12</option>
                      <option value="13">Tiêu Chuẩn 13</option>
                      <option value="14">Tiêu Chuẩn 14</option>
                      <option value="15">Tiêu Chuẩn 15</option>
                      <option value="16">Tiêu Chuẩn 16</option>
                      <option value="17">Tiêu Chuẩn 17</option>
                      <option value="18">Tiêu Chuẩn 18</option>
                      <option value="19">Tiêu Chuẩn 19</option>
                      <option value="20">Tiêu Chuẩn 20</option>
                      <option value="21">Tiêu Chuẩn 21</option>
                      <option value="22">Tiêu Chuẩn 22</option>
                      <option value="23">Tiêu Chuẩn 23</option>
                      <option value="24">Tiêu Chuẩn 24</option>
                      <option value="25">Tiêu Chuẩn 25</option>
                    </select>
                    </div>
                  </div>
                <div class="form-group f-grid-col">
                    <label>Tên Tiêu chí</label>
                    <div class="control-group kt">
                    <select name="tentieuchi" value="{{$baocaocsgd->tentieuchi}}">
                      <option value="0">{{$baocaocsgd->tentieuchi}}</option> 

                    </select>
                  </div>
                  </div>
                  </div>
        <div class="row">
        <div class="col-md-12">
          <div class="box">
            
            <div class="box-header">
              <h3 class="box-title">Nhập tên báo cáo</h3>
                <input type="text" name="tenbaocao" value="{{$baocaocsgd->tenbaocao}}" style="width: 100%; height: 30px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
              <h3 class="box-title" style="margin-top: 10px;">Nhập nội dung báo cáo
                <small style="margin-left: 10px;">1. Mô tả; 2.Điểm mạnh; 3.Tồn tại; 4.Kế hoạch hành động; 5.Tự đánh giá</small>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <textarea class="textarea" placeholder="Nhập nội dung báo cáo gồm: 1. Mô tả; 2.Điểm mạnh; 3.Tồn tại; 4.Kế hoạch hành động; 5.Tự đánh giá" name="noidungbaocao" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$baocaocsgd->noidungbaocao}}</textarea>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
                <div class="form-group">
                  <label>Đánh giá</label>
                  <div class="checkbox">
                  <label class="dat">Không đáp ứng
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                  <label class="dat">Chưa đáp ứng cần nhiều cải tiến
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                  <label class="dat">Chưa đáp ứng cần vài cải tiến nhỏ
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                  <br>
                  <label class="dat">Đáp ứng đầy đủ
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                  <label class="dat">Đáp ứng cao
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                  <label class="dat">Thực hiện tốt
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                  <label class="dat">Thực hiện xuất sắc
                  <input type="radio" checked="checked" name="danhgia" value="{{$baocaocsgd->danhgia}}">
                  </label>
                </div>
                </div>
                  </div>
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Lưu báo cáo này</button>
              </div>
            </form>
            <script type="text/javascript">
              var opt_1 = new Array("Tiêu chí 1.1", "Tiêu chí 1.2", "Tiêu chí 1.3", "Tiêu chí 1.4", "Tiêu chí 1.5");
              var opt_2 = new Array("Tiêu chí 2.1", "Tiêu chí 2.2", "Tiêu chí 2.3", "Tiêu chí 2.4");
              var opt_3 = new Array("Tiêu chí 3.1", "Tiêu chí 3.2", "Tiêu chí 3.3", "Tiêu chí 3.4");
              var opt_4 = new Array("Tiêu chí 4.1", "Tiêu chí 4.2", "Tiêu chí 4.3", "Tiêu chí 4.4");
              var opt_5 = new Array("Tiêu chí 5.1", "Tiêu chí 5.2", "Tiêu chí 5.3", "Tiêu chí 5.4");
              var opt_6 = new Array("Tiêu chí 6.1", "Tiêu chí 6.2", "Tiêu chí 6.3", "Tiêu chí 6.4", "Tiêu chí 6.5", "Tiêu chí 6.6", "Tiêu chí 6.7",);
              var opt_7 = new Array("Tiêu chí 7.1", "Tiêu chí 7.2", "Tiêu chí 7.3", "Tiêu chí 7.4", "Tiêu chí 7.5");
              var opt_8 = new Array("Tiêu chí 8.1", "Tiêu chí 8.2", "Tiêu chí 8.3", "Tiêu chí 8.4");
              var opt_9 = new Array("Tiêu chí 9.1", "Tiêu chí 9.2", "Tiêu chí 9.3", "Tiêu chí 9.4", "Tiêu chí 9.5", "Tiêu chí 9.6");
              var opt_10 = new Array("Tiêu chí 10.1", "Tiêu chí 10.2", "Tiêu chí 10.3", "Tiêu chí 10.4");
              var opt_11 = new Array("Tiêu chí 11.1", "Tiêu chí 11.2", "Tiêu chí 11.3", "Tiêu chí 11.4");
              var opt_12 = new Array("Tiêu chí 12.1", "Tiêu chí 12.2", "Tiêu chí 12.3", "Tiêu chí 12.4", "Tiêu chí 12.5");
              var opt_13 = new Array("Tiêu chí 13.1", "Tiêu chí 13.2", "Tiêu chí 13.3", "Tiêu chí 13.4", "Tiêu chí 13.5");
              var opt_14 = new Array("Tiêu chí 14.1", "Tiêu chí 14.2", "Tiêu chí 14.3", "Tiêu chí 14.4", "Tiêu chí 14.5");
              var opt_15 = new Array("Tiêu chí 15.1", "Tiêu chí 15.2", "Tiêu chí 15.3", "Tiêu chí 15.4", "Tiêu chí 15.5");
              var opt_16 = new Array("Tiêu chí 16.1", "Tiêu chí 16.2", "Tiêu chí 16.3", "Tiêu chí 16.4");
              var opt_17 = new Array("Tiêu chí 17.1", "Tiêu chí 17.2", "Tiêu chí 17.3", "Tiêu chí 17.4");
              var opt_18 = new Array("Tiêu chí 18.1", "Tiêu chí 18.2", "Tiêu chí 18.3", "Tiêu chí 18.4");
              var opt_19 = new Array("Tiêu chí 19.1", "Tiêu chí 19.2", "Tiêu chí 19.3", "Tiêu chí 19.4");
              var opt_20 = new Array("Tiêu chí 20.1", "Tiêu chí 20.2", "Tiêu chí 20.3", "Tiêu chí 20.4");
              var opt_21 = new Array("Tiêu chí 21.1", "Tiêu chí 21.2", "Tiêu chí 21.3", "Tiêu chí 21.4");
              var opt_22 = new Array("Tiêu chí 22.1", "Tiêu chí 22.2", "Tiêu chí 22.3", "Tiêu chí 22.4");
              var opt_23 = new Array("Tiêu chí 23.1", "Tiêu chí 23.2", "Tiêu chí 23.3", "Tiêu chí 23.4", "Tiêu chí 23.5", "Tiêu chí 23.6");
              var opt_24 = new Array("Tiêu chí 24.1", "Tiêu chí 24.2", "Tiêu chí 24.3", "Tiêu chí 22.4");
              var opt_25 = new Array("Tiêu chí 25.1", "Tiêu chí 25.2");

              function chon(){
                var tentieuchuan;
                tentieuchuan = document.formulariol.tentieuchuan[document.formulariol.tentieuchuan.selectedIndex].value;
                if(tentieuchuan!=0){
                  mis_opts=eval("opt_" +  tentieuchuan);
                  num_opts=mis_opts.length;
                  document.formulariol.tentieuchi.length = num_opts;
                  for(i=0; i<num_opts;i++){
                    document.formulariol.tentieuchi.options[i].value=mis_opts[i];
                    document.formulariol.tentieuchi.options[i].text=mis_opts[i];
                }
                }else{
                  document.formulariol.tentieuchi.length = 1;
                  document.formulariol.tentieuchi.options[0].value="-";
                  document.formulariol.tentieuchi.options[0].text="-";
                }
                document.formulariol.tentieuchi.options[0].selected = true;             
              }

            </script>
            <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
          </div>
          <!-- /.box -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
