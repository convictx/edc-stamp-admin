@extends('layouts.main')

@section('content')
<section class="content-header">
    <h1>
        Campaigns
        <small> Create</small>
    </h1>
</section>
<section class="content">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        <form role="form" id="form-submit">
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Merchant</label>
                        <input type="text" class="form-control" name="merchant_id" placeholder="Merchant">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">detail</label>
                        <input type="text" class="form-control" name="detail" placeholder="detail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">stamp_logo_url</label>
                        <input type="text" class="form-control" name="stamp_logo_url" placeholder="stamp_logo_url">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">stamp_per_page</label>
                        <input type="text" class="form-control" name="stamp_per_page" placeholder="stamp_per_page">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">background_url</label>
                        <input type="text" class="form-control" name="background_url" placeholder="background_url">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">banner_url</label>
                        <input type="text" class="form-control" name="banner_url" placeholder="banner_url">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">policy</label>
                        <input type="text" class="form-control" name="policy" placeholder="policy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">term_condition</label>
                        <input type="text" class="form-control" name="term_condition" placeholder="term_condition">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">active</label>
                        <input type="text" class="form-control" name="active" placeholder="active">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">started_at</label>
                        <input type="text" class="form-control" name="started_at" placeholder="started_at">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">collect_expired_at</label>
                        <input type="text" class="form-control" name="collect_expired_at" placeholder="collect_expired_at">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">campaign_expired_at</label>
                        <input type="text" class="form-control" name="campaign_expired_at" placeholder="campaign_expired_at">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">qr_code</label>
                        <input type="text" class="form-control" name="qr_code" placeholder="qr_code">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">password</label>
                        <input type="text" class="form-control" name="password" placeholder="password">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputPassword1">verify_type</label>
                        <input type="text" class="form-control" name="verify_type" placeholder="verify_type">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">campaign_branch</label>
                        <input type="text" class="form-control" name="campaign_branch" placeholder="campaign_branch">
                    </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                        <label for="exampleInputEmail1">code_type</label>
                        <input type="text" class="form-control" name="code_type" placeholder="campaign_branch">
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-submit">Submit</button>
            </div>
        </form>
    </div>
</section>
<!-- End: Campaign list panel -->
@endsection

@section('js')
    @include('campaign._footer_script')
@endsection