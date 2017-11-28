<!-- Stored in resources/views/child.blade.php -->
@extends('templete_backend')

@section('title', 'Page Title')

@section('content')

@endsection

@section('input_form')
    <div class="content">
          <div class="box box-warning ">
            <div class="box-header with-border">
              <h3 class="box-title">+ Branchs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{route('addBranchs')}}" method="post" enctype="multipart/form-data">
                <!-- text input -->
                {{ csrf_field() }}

                <div class="form-group">
                  <label>Branchs</label>
                  <select name='merchant_id' class="form-control">
                    @foreach($dataMerchants['data'] as $key => $value)
                      <option value="{{$value['id']}}">{{ $value['name'] }}</option>
                    @endforeach
                  </select>
                 
                </div>

                <div class="form-group">
                  <label>Branchs Code</label>
                  <input type="text" class="form-control" name="code" placeholder="code">
                </div>

                <div class="form-group">
                  <label>Branchs Name</label>
                  <input type="text" class="form-control" name="name" placeholder="name">
                </div>
                <input type="submit" class="btn btn-primary" value="submit">
               
            </div>
            <!-- /.box-body -->
          </div>
               
    </div>
@endsection

@section('dataTable')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Branchs</h3>
           

        
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                
              </table>
            </div>
            <!-- /.box-body -->

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

@endsection

@section('js')
    <script type="text/javascript">
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })
      $('#datepicker2').datepicker({
        autoclose: true
      })
      $('#datepicker3').datepicker({
        autoclose: true
      })

       var dataSet = <?php echo $data; ?>

      $(function () {
        $('#example').DataTable( {
              'data'        : dataSet,
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false,
              columns: [
                  { title: "id" },
                  { title: "code" },
                  { title: "name" },
                  { title: "merchant" }

              ]
          } );
      })

    </script>
@endsection