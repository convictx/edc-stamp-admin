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

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('history.index');
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
        $res = $client->request('GET', env('API_HOST').'admin/historys', [
            'auth' => ['admin', 'estamp'],
            'query' => $filter
        ]);
        $data = json_decode($res->getBody()->getContents(), true);
        
        foreach($data['data'] as $val) {
            $dataModel[] = [
                'id' => $val['id'],
                'stamp_id' => $val['stamp_id'],
                'user_id' => $val['user_id'],
                'campaign_id' => $val['campaign_id'],
                'campaign_name' => $val['campaign_name'],
                'campaign_expired_at' => $val['campaign_expired_at'],
                'reward_name' => $val['reward_name'],
                'reward_expired_at' => $val['reward_expired_at'],
                'reward_logo_url' => $val['reward_logo_url'],
                'reward_background_url' => $val['reward_background_url'],
                'reward_position' => $val['reward_position']
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
