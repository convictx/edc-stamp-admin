@extends('layouts.main')

@section('content')
<section class="content-header">
    <h1>
        Stamps
        <small> List</small>
    </h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
            <table class="table table-striped table-hover datatable-dom-position" id="stamp-table" data-page-length="10" width="100%">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Position</th>
                        <th class="">User&nbsp;ID</th>
                        <th class="">Campaign&nbsp;ID</th>
                        <th class="">Status</th>
                        <th class="">Merchant&nbsp;Code</th>
                        <th class="">Branch&nbsp;Code</th>
                        <th class="">Merchant&nbsp;terminal</th>
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
    var url = '/admin/stamp';
    
    var oTable = $('#stamp-table').on('error.dt',function(e, settings, techNote, message){
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
                data: 'position', 
                name: 'position', 
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
                data: 'user_id', 
                name: 'user_id', 
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
                data: 'campaign_id', 
                name: 'campaign_id', 
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
                data: 'status', 
                name: 'status', 
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
                data: 'merchant_code', 
                name: 'merchant_code', 
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
                data: 'branch_code', 
                name: 'branch_code', 
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
                data: 'merchant_terminal', 
                name: 'merchant_terminal', 
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