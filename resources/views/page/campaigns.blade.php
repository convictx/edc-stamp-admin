<!-- Stored in resources/views/child.blade.php -->
@extends('templete_backend')

@section('title', 'Page Title')

@section('content')

@endsection

@section('input_form')
    <div class="content">
    	    <div class="box box-warning ">
            <div class="box-header with-border">
              <h3 class="box-title">+ Campaigns</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{route('addMerchants')}}" method="post" >
                <!-- text input -->
                {{ csrf_field() }}
                <div class="form-group">
                  <label>Merchants Code</label>
                  <input type="text" class="form-control" name="code" placeholder="code">
                </div>

                <div class="form-group">
                  <label>Merchants Name</label>
                  <input type="text" class="form-control" name="name" placeholder="name">
                </div>

                <div class="form-group">
                  <label>Logo Url</label>
                  <input type="text" class="form-control" name="logo_url" placeholder="url">
                </div>

                <div class="form-group">
                  <label>Banner Url</label>
                  <input type="text" class="form-control" name="banner_url" placeholder="url">
                </div>
                <input type="submit" class="btn btn-primary" value="submit">
              </form>
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
              <h3 class="box-title">Campaigns</h3>
           

        
           
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

      var dataSet = <?php echo $data; ?>;
     
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
                  { title: "name" },
                  { title: "logo" },
                  { title: "banner" }
              ]
          } );
      })
    
    </script>
@endsection