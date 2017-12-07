@extends('layouts.main')

@section('content')
<section class="content-header">
    <h1>
        Histories
        <small> List</small>
    </h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        <div class="box-body">
            <table class="table table-striped table-hover datatable-dom-position" id="history-table" data-page-length="10" width="100%">
                <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Stamp&nbsp;ID</th>
                        <th class="">User&nbsp;ID</th>
                        <th class="">Campaign&nbsp;ID</th>
                        <th class="">Campaign&nbsp;name</th>
                        <th class="">Reward&nbsp;name</th>
                        <th class="">Campaign&nbsp;expired</th>
                        <th class="">Reward&nbsp;expired</th>
                        <th class="">Position</th>
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
    var url = '/admin/history';
    
    var oTable = $('#history-table').on('error.dt',function(e, settings, techNote, message){
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
                $('#history-table').find('tbody').find('td').html('No Data, please try again later');
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
                data: 'stamp_id', 
                name: 'stamp_id', 
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
                data: 'campaign_name', 
                name: 'campaign_name', 
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
                data: 'reward_name', 
                name: 'reward_name', 
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
                data: 'campaign_expired_at', 
                name: 'campaign_expired_at', 
                orderable: false, 
                render: function ( data, type, row ) {
                    return data;
                }
            },
            { 
                data: 'reward_expired_at', 
                name: 'reward_expired_at', 
                orderable: false, 
                render: function ( data, type, row ) {
                    return data;
                }
            },
            { 
                data: 'reward_position', 
                name: 'reward_position', 
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