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
        return view('merchant.index');
    }

    public function setFilter($params) {
        $query = [];
        if(isset($params['length'])) {
            $query['limit'] = $params['length'];
        }

        if(isset($params['start']) && $params['start'] != 0 && $params['start'] != '') {
            $query['page'] = ($params['start'] / $params['length']) + 1;
        } 

        return $query;
    }

    public function getData(Request $request)
    {
        $param = $request->input();
        $filter = $this->setFilter($param);
        $client = new Client();
        $res = $client->request('GET', env('API_HOST').'admin/merchants', [
            'auth' => ['admin', 'estamp'],
            'query' => $filter
        ]);
        $data = json_decode($res->getBody()->getContents(), true);
        
        foreach($data['data'] as $val) {
            $dataModel[] = [
                'id' => $val['id'],
                'code' => $val['code'],
                'name' => $val['name'],
                'logo_url' => $val['logo_url'],
                'banner_url' => $val['banner_url']
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
