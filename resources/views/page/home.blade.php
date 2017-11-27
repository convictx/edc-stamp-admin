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

@section('dataTable')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
           

        
           
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

     
      var dataSet = [
          [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
          [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
          [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
          [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
          [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
          [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
          [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
          [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
          [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
          [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
          [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
          [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
          [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
          [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
          [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
          [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
          [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
          [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
          [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
          [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
          [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
          [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
          [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
          [ "Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600" ],
          [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
          [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
          [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
          [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
          [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
          [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
          [ "Michelle House", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400" ],
          [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
          [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
          [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
          [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
          [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
      ];

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
                  { title: "Name" },
                  { title: "Position" },
                  { title: "Office" },
                  { title: "Extn." },
                  { title: "Start date" },
                  { title: "Salary" }
              ]
          } );
      })
    
    </script>
@endsection