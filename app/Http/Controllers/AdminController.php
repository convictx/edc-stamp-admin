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

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
    	return view('page.home');
    }
    
    public function merchants()
    {
        $url = 'http://api-estamp.wls-aws.loc/admin/getMerchants';
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('GET',  $url, [
            'auth' => ['admin', 'estamp'],
        ]);
        $dataset = [];
        $data = json_decode($res->getBody(), true);

        foreach ($data['data']['data'] as $key => $value) {
            $dataset[] = array_flatten($value);
        }
        
        return view('page.merchants')->with('data', json_encode($dataset));
    }

    public function branchs()
    {
        $url = 'http://api-estamp.wls-aws.loc/admin/getMerchants';
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('GET',  $url, [
            'auth' => ['admin', 'estamp'],
        ]);
        $dataset = [];
        $dataMerchants = json_decode($res->getBody(), true);   
        $dataMerchants = $dataMerchants['data'];
   

        $url = 'http://api-estamp.wls-aws.loc/admin/getBranchs';
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('GET',  $url, [
            'auth' => ['admin', 'estamp'],
        ]);
        $dataset = [];
        $data = json_decode($res->getBody(), true);

        foreach ($data['data']['data'] as $key => $value) {
            $dataset[] = array_flatten($value);
        }  

        return view('page.branchs')->with('dataMerchants', $dataMerchants)->with('data', json_encode($dataset));
    }

    public function campaigns()
    {
        $url = 'http://api-estamp.wls-aws.loc/admin/getMerchants';
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('GET',  $url, [
            'auth' => ['admin', 'estamp'],
        ]);
        $dataset = [];
        $dataMerchants = json_decode($res->getBody(), true);   
        $dataMerchants = $dataMerchants['data'];

        $url = 'http://api-estamp.wls-aws.loc/admin/getMerchants';
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('GET',  $url, [
            'auth' => ['admin', 'estamp'],
        ]);
        $dataset = [];
        $data = json_decode($res->getBody(), true);

        foreach ($data['data']['data'] as $key => $value) {
            $dataset[] = array_flatten($value);
        }
        
        return view('page.campaigns')
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

    public function addBranchs(Request $request){
        $url = 'http://api-estamp.wls-aws.loc/admin/addBranchs';
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

    public function addCampaigns(Request $request){

      
        $url = 'http://api-estamp.wls-aws.loc/admin/addCampaigns';
        // $token = self::getToken();
        $input = $request->input();
        $input = $input['data'];
        $client = new Client(); //GuzzleHttp\Client
        $res = $client->request('POST',  $url, [
            'auth' => ['admin', 'estamp'],
            'json' => $input
        ]);

        $data = json_decode($res->getBody()->getContents(), true);
        return $data;
    }

    
}
