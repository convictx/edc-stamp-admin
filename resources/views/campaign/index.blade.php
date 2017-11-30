@extends('layouts.main')

@section('dataTable')
<!-- Start: Campaign list panel -->
<div class="panel" id="loadingDiv" style="margin-top:10px; margin-right: 10px">
    <div class="panel-body">
        <div class="btn-group">
            <a href="" class="btn bg-teal-400 btn-raised legitRipple createBTN"><i class="icon-plus-circle2 position-left"></i>  Add New</a>
        </div>
    </div>
</div>
<div class="panel">
	<div class="panel-body table-responsive">
		<table class="table table-striped table-hover datatable-dom-position" id="campaign-table" data-page-length="10" width="100%">
			<thead>
				<tr>
					<th class="">ID</th>
					<th class="">Merchant&nbsp;ID</th>
					<th class="">Campaign&nbsp;Name</th>
					<th class="">Detail</th>
					<th class="">stamp_logo_url</th>
					<th class="">stamp_per_page</th>
					<th class="">background_url</th>
					<th class="">banner_url</th>
					<th class="">policy</th>
                    <th class="">Active</th>
                    <th class="">collect_expired_at</th>
                    <th class="">campaign_expired_at</th>
                    <th class="">verify_type</th>
                    <th class="">started_at</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<!-- End: Campaign list panel -->
@endsection

@section('js')

<script type="text/javascript">

    var url = '/admin/banner';
    
    var oTable = $('#campaign-table').on('error.dt',function(e, settings, techNote, message){
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
                $('#campaign-table').find('tbody').find('td').html('No Data, please try again later');
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
                data: 'merchant_id',
                name: 'merchant_id',
                orderable: false,
                searchable: false,
                className: 'text-center',
                render: function(data, type, row){
                    return data;
                }
            },
            { data: 'name', name: 'name', orderable: false},
            {
                data: 'detail',
                name: 'detail',
                orderable: false,
                searchable: false,
                className: 'text-center',
                render: function(data, type, row){
                    return data;
                }
            },
            { data: 'stamp_logo_url', name: 'stamp_logo_url', orderable: false},
            { data: 'stamp_per_page', name: 'stamp_per_page', orderable: false},
            { data: 'background_url', name: 'background_url', orderable: false},
            {
                data: 'banner_url',
                name: 'banner_url',
                orderable: false,
                searchable: false,
                className: 'text-center',
                render: function(data, type, row){
                    return '<a href="'+data+'"><i class="icon-pencil"></i></a>';
                }
            }, 
            {
                data: 'policy',
                name: 'policy',
                orderable: false,
                searchable: false,
                className: 'text-center',
                render: function(data, type, row) {
                    return '<a onclick="deleteItems(\'' + row.id + '\')"><i class="icon-trash text-danger"></a>';
                }
            },
            { data: 'active', name: 'active', orderable: false},
            { data: 'collect_expired_at', name: 'collect_expired_at', orderable: false},
            { data: 'campaign_expired_at', name: 'campaign_expired_at', orderable: false},
            { data: 'verify_type', name: 'verify_type', orderable: false},
            { data: 'started_at', name: 'started_at', orderable: false}
        ]
    });

    if (!!window.performance && window.performance.navigation.type === 2) {
        //window.location.reload();
        $('.check-all').attr('checked', false);
    }

</script>

@include('common._datatable')
@endsection