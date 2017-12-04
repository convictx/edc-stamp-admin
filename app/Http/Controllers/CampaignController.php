<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Client;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('campaign.index');
    }

    public function getData(Request $request)
    {
        $param = $request->input();
        $client = new Client();
        $res = $client->request('GET', 'http://api-estamp.wls-aws.loc/admin/campaigns', [
            'auth' => ['admin', 'estamp']
        ]);
        $data = json_decode($res->getBody()->getContents(), true);
        
        foreach($data['data'] as $val) {
            $dataModel[] = [
                'id' => $val['id'],
                'merchant_id' => $val['merchant_id'],
                'name' => $val['name'],
                'detail' => $val['detail'],
                'stamp_logo_url' => $val['stamp_logo_url'],
                'stamp_per_page' => $val['stamp_per_page'],
                'background_url' => $val['background_url'],
                'banner_url' => $val['banner_url'],
                'policy' => $val['policy'],
                'active' => $val['active'],
                'collect_expired_at' => $val['collect_expired_at'],
                'campaign_expired_at' => $val['campaign_expired_at'],
                'verify_type' => $val['verify_type'],
                'started_at' => $val['started_at']
            ];
        }
        
        $output = [
            'recordsTotal' => $data['pagination']['total_page'], //count page 
            'recordsFiltered' => $data['pagination']['total'], //count all
            'data' => $dataModel
        ];

        return json_encode($output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('campaign.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $param = $request->input();
        $client = new Client();
        $res = $client->request('POST', 'http://api-estamp.wls-aws.loc/admin/campaign', [
            'auth' => ['admin', 'estamp'],
            'json' => $param
        ]);

        $data = json_decode($res->getBody()->getContents(), true);
        
        if(isset($data['error'])){
            return ['status' => false, 'messages' => $data['error']['message']];
        } else {
            return ['status' => true];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
