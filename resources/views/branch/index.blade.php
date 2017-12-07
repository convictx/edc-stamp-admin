@extends('layouts.main')

@section('content')
<section class="content-header">
    <h1>
        Branchs
        <small> List</small>
    </h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
            <a href="branchs/create" class="btn btn-box-tool">
                <i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-striped table-hover datatable-dom-position" id="branch-table" data-page-length="10" width="100%">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Code</th>
                        <th class="">Name</th>
                        <th class="">Merchant&nbsp;ID</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
<!-- End: Campaign list panel -->
@endsection

@section('js')

<script type="text/javascript">
    var url = '/admin/branch';
    
    var oTable = $('#branch-table').on('error.dt',function(e, settings, techNote, message){
        swal('Error!', 'Error connection', 'error');
    }).DataTable({
        scrollY: true,
        scrollX: '100%',
        processing: true,
        serverSide: true,
        searching: false,
        retrieve : true,
        destroy : true,
        cache: true,
        dom: '<"datatable-header"fl><t><"datatable-footer"ip>',
        language: {
            lengthMenu: '<span>Show :</span> _MENU_',
            paginate: { 'first': 'First', 'last': 'Last', 'next': '&rarr;', 'previous': '&larr;' }
        },
        fnInitComplete: function() {
            this.css("visibility", "visible");
        },
        ajax: {
            url: url + '/data',
            type: 'GET',
            beforeSend: function() { $('.loading').show(); },
            complete: function() { $('.loading').hide(); },
            data: function (d) {
                //launch-date-input
                d.search_text_input = $('#search-text-input').val();
                d.launch_date_input = $('#launch-date-input').val();
            },
            error: function(xhr, error, thrown) {
                swal('Error!', 'Error connection', 'error');
                $('#merchant-table').find('tbody').find('td').html('No Data, please try again later');
            }
        },
        columns: [
            {
                data: 'id',
                name: 'checkbox',
                orderable: false,
                searchable: false,
                className: 'text-center',
                render: function(data, type, row){
                    return data;
                }
            },
            { 
                data: 'code', 
                name: 'code', 
                orderable: false, 
                render: function ( data, type, row ) {
                    if(data == null){
                        return '';
                    }
                    return data.length > 10 ?
                        data.substr( 0, 10 ) + '…' + data.substr(data.length-10, data.length) :
                        data;
                }
            },
            { 
                data: 'name', 
                name: 'name', 
                orderable: false, 
                render: function ( data, type, row ) {
                    if(data == null){
                        return '';
                    }
                    return data.length > 10 ?
                        data.substr( 0, 10 ) + '…' + data.substr(data.length-10, data.length) :
                        data;
                }
            },
            { 
                data: 'merchant_id', 
                name: 'merchant_id', 
                orderable: false, 
                render: function ( data, type, row ) {
                    if(data == null){
                        return '';
                    }
                    return data.length > 10 ?
                        data.substr( 0, 10 ) + '…' + data.substr(data.length-10, data.length) :
                        data;
                }
            }
        ]
    });
    if (!!window.performance && window.performance.navigation.type === 2) {
        //window.location.reload();
        $('.check-all').attr('checked', false);
    }

</script>

@include('common._datatable')
@endsection