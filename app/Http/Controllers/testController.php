<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Response;

class testController extends BaseController
{
    public function test()
    {
        $client = new Client();
        $res = $client->request('GET', env('API_HOST').'admin/campaigns', [
            'auth' => ['admin', 'estamp']
        ]);
        $data = json_decode($res->getBody()->getContents(), true);
        
        return response($data, 200)->header('Content-Type', 'json');
    }
}