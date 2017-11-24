<!-- Stored in resources/views/child.blade.php -->
@extends('templete_backend')

@section('title', 'Page Title')

@section('content')

@endsection

@section('input_form_merchants')
    <div class="content">
    	    <div class="box box-warning ">
            <div class="box-header with-border">
              <h3 class="box-title">+ Merchants</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{route('addMerchants')}}" method="post" enctype="multipart/form-data">
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
                  <input type="text" class="form-control" name="logo" placeholder="url">
                </div>

                <div class="form-group">
                  <label>Banner Url</label>
                  <input type="text" class="form-control" name="branner" placeholder="url">
                </div>
                <input type="submit" class="btn btn-primary" value="submit">
              </form>
            </div>
            <!-- /.box-body -->
          </div>
               
    </div>
@endsection

@section('input_form_branchs')
    <div class="content">
          <div class="box box-warning ">
            <div class="box-header with-border">
              <h3 class="box-title">+ Branchs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{route('addMerchants')}}" method="post" enctype="multipart/form-data">
                <!-- text input -->
                {{ csrf_field() }}

                
                <div class="form-group">
                  <label>Merchant</label>
                  <select name='merchant_id' class="form-control">
                    <option value="1">1</option>
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

@section('input_form_campaigns')
    <div class="content">
          <div class="box box-warning ">
            <div class="box-header with-border">
              <h3 class="box-title">+ Campaigns</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{route('addMerchants')}}" method="post" enctype="multipart/form-data">
                <!-- text input -->
                {{ csrf_field() }}

                 <div class="form-group">
                  <label>Merchant</label>
                  <select name='merchant_id' class="form-control">
                    <option value="1">1</option>
                  </select>
                </div>


                <div class="form-group">
                  <label>Campaigns Name</label>
                  <input type="text" class="form-control" name="name" placeholder="name">
                </div>

                <div class="form-group">
                  <label>Campaigns Detail</label>
                  <textarea class="form-control" name="detail" placeholder="detail"></textarea>
                </div>

                <div class="form-group">
                  <label>Stamp Logo Url</label>
                  <input type="text" class="form-control" name="stamp_logo_url" placeholder="detail">
                </div>

                <div class="form-group">
                  <label>Stamp Per Page</label>
                  <input type="number" class="form-control" name="stamp_per_page" placeholder="detail">
                </div>

                 <div class="form-group">
                  <label>Background Url</label>
                  <input type="text" class="form-control" name="background_url" placeholder="detail">
                </div>

                 <div class="form-group">
                  <label>Banner Url</label>
                  <input type="text" class="form-control" name="banner_url" placeholder="detail">
                </div>

                <div class="form-group">
                  <label>policy</label>
                  <textarea  class="form-control" name="policy" placeholder="detail"></textarea>
                </div>

                <div class="form-group">
                  <label>Term Condition</label>
                  <textarea  class="form-control" name="term_condition" placeholder="detail"></textarea>
                </div>
                  
                <div class="form-group">
                  <label>active</label>
                  <input type="checkbox"  class="form-control" name="active" placeholder="detail">
                </div>

              
                 
                <div class="form-group">
                    <label>collect_expired_at:</label>

                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker">
                    </div>
                    <!-- /.input group -->
                </div>
                

                 <div class="form-group">
                  <label>collect_expired_at</label>
                   <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker2">
                    </div>
                    <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>campaign_expired_at</label>
                   <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="datepicker3">
                    </div>
                    <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>qr_code</label>
                  <input type="text"  class="form-control" name="qr_code" placeholder="detail">
                </div>

                <div class="form-group">
                  <label> password</label>
                  <input type="text"  class="form-control" name="password" placeholder="detail">
                </div>

                <div class="form-group">
                  <label> verify_type</label>
                  <select name='verify_type' class="form-control">
                    <option value="1">1 Require QRCode Or Password </option>
                    <option value="2">2 Require QRCode And Password</option>
                    <option value="3">3 For EDC </option>
                  </select>
                    
                </div>

                 <div class="form-group">
                  <label> campaign_branch</label>
                  <select name='campaign_branch' class="form-control">
                    <option value="full">full</option>
                    <option value="partial">partial</option>
                  </select>
                   
                </div>

                <input type="submit" class="btn btn-primary" value="submit">
               
            </div>
            <!-- /.box-body -->
          </div>
               
    </div>
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
    </script>
@endsection