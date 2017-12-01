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

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = 'http://api-estamp.wls-aws.loc/admin/getMerchants';
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('GET',  $url, [
            'auth' => ['admin', 'estamp'],
        ]);
        $dataset = [];
        $dataMerchants = json_decode($res->getBody(), true);   
        $dataMerchants = $dataMerchants['data'];

        $data = json_decode($res->getBody(), true);

        foreach ($data['data']['data'] as $key => $value) {
            $dataset[] = array_flatten($value);
        }
        
        return view('merchants.index')
                    ->with('dataMerchants', $dataMerchants)
                    ->with('data', json_encode($dataset));
    }


     public function addMerchants(Request $request){
        $url = 'http://api-estamp.wls-aws.loc/admin/addMerchants';
        // $token = self::getToken();
        $input = $request->input();

        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('POST',  $url, [
            'auth' => ['admin', 'estamp'],
            'json' => $input
        ]);

        $data = json_decode($res->getBody()->getContents(), true);
         return back();
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
