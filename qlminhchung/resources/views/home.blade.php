@extends('layouts.dash')

@section('section')

  <script type="text/javascript">
   var analytics = <?php echo $danhgia; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Biểu đồ thống kê đánh giá các tiêu chí'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
   }
  </script>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Trang Chủ Quản Lý Minh Chứng 
      </h1>
    </section>
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Thống kê đánh giá tiêu chí CSGD:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="pie_chart" style="width:750px; height:450px;">
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

   

      <!-- /.row -->

    </section>
  </div>
@endsection
