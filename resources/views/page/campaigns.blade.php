<!-- Stored in resources/views/child.blade.php -->
@extends('templete_backend')

@section('title', 'Page Title')


@section('css')
 
@endsection
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
              <form role="form" action="{{route('addCampaigns')}}" method="post" id="form1">
                <!-- text input -->
                {{ csrf_field() }}
              
               <div class="form-group">
                  <label>Merchants</label>
                  <select name='merchant_id' class="form-control">
                    @foreach($dataMerchants['data'] as $key => $value)
                      <option value="{{$value['id']}}">{{ $value['name'] }}</option>
                    @endforeach
                  </select>
                 
                </div>

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </div>

                <div class="form-group">
                  <label>Detail</label>
                  <input type="text" class="form-control" name="detail" placeholder="Detail">
                </div>

                <div class="form-group">
                  <label>Stamp Logo</label>
                  <input type="text" class="form-control" name="stamp_logo_url" placeholder="Stamp Logo Url">
                </div>

                <div class="form-group">
                  <label>Stamp Per Page</label>
                  <input type="number" class="form-control" min="0" name="stamp_per_page" value="0">
                </div>

                <div class="form-group">
                  <label>Background</label>
                  <input type="text" class="form-control" name="background_url" placeholder="Background Url">
                </div>

                <div class="form-group">
                  <label>Banner</label>
                  <input type="text" class="form-control" name="banner_url" placeholder="Banner Url">
                </div>

                <div class="form-group">
                  <label>Policy</label>
                  <textarea class="form-control" name="policy" placeholder="Policy"></textarea>
                </div>

                <div class="form-group">
                  <label>Term Condition</label>
                  <textarea class="form-control" name="term_condition" placeholder="Term Condition"></textarea>
                </div>

                <div class="form-group">
                  <label>Active</label><br>
                                    <!-- Rounded switch -->
                  <label class="switch">
                    <input type="checkbox" name="active">
                    <span class="slider round"></span>
                  </label>
                </div>

                <div class="form-group">
                  <label>Started Date</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="started_at">
                  </div>

                </div>

           

                <div class="form-group">
                  <label>Collect Expired Date</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker2" name="collect_expired_at">
                  </div>
                </div>

                <div class="form-group">
                  <label>Campaign Expired At</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker3" name="campaign_expired_at">
                  </div>
                </div>




                <div class="form-group">
                  <label>QR Code</label>
                  <input type="text" class="form-control" name="qr_code">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password">
                </div>

                <div class="form-group">
                  <label>Verify Type</label>
                  <select class="form-control" name="verify_type">
                    <option value="1">1 Require QRCode Or Password </option>  
                    <option value="2">2 Require QRCode And Password</option>  
                    <option value="3">3 for EDC </option>  
                  </select>
                </div>

                <div class="form-group">
                  <label>Campaign Branch</label>
                  <select class="form-control" name="campaign_branch">
                    <option value="full">Full</option>  
                    <option value="partial">Partial</option> 
                  </select>
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
      // Date picker
      $('#datepicker').datepicker({
        autoclose: true,
      })

      $('#datepicker2').datepicker({
        autoclose: true
      })
      $('#datepicker3').datepicker({
        autoclose: true
      })

      //Timepicker
    $('.timepicker').timepicker({
      showInputs: false,
      timeFormat: 'H:mm:ss' 
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
    

    $("#form1").submit(function(e){
      e.preventDefault();
     
      var $form = $("#form1");
      var data = getFormData($form);

    
    if( data.hasOwnProperty('active') ){
      data.active= 1;
    }else{
      data.active= 0;
    }


      $.ajax({
        headers:{ 'X-CSRF-Token': data._token },
        url: '{{route('addCampaigns')}}',
        type: 'POST',
        data: {data : data}
      })
      .done(function() {
        console.log("success");
      })
      .fail(function() {
        console.log("error");
      })
      .always(function(msg) {
        console.log('always');
        console.log(msg);
      });
      
    });


    function getFormData($form){
      var unindexed_array = $form.serializeArray();
      var indexed_array = {};

      $.map(unindexed_array, function(n, i){
          indexed_array[n['name']] = n['value'];
      });

      return indexed_array;
    }
    </script>



@endsection