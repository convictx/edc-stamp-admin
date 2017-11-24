<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
    	 return view('page/home');
    }
    public function getToken(){
    	$url = 'http://api-estamp.wls-aws.loc/v1/oauth/access_token';
    	$stamp_client_id = env('STAMP_CLIENT_ID');
    	$stamp_secret = env('STAMP_SECRET');
    	$input  = [
	    			"client_secret" => "$stamp_client_id",
	    			"client_id" => "$stamp_secret",
	    			"grant_type" =>  "client_credentials"
    			  ];

    	$client = new Client(); //GuzzleHttp\Client
		$result = $client->request('POST',$url, [
                        'form_params' =>  $input
        ]);
		return $result ;
    }
    public function addMerchants(Request $request){
    	$url = 'http://api-estamp.wls-aws.loc/admin/add_merchants';
    	$token = self::getToken();
  //   	$input = $request->input();

		// $client = new Client(); //GuzzleHttp\Client
		// $result = $client->put($url, $input);
    	return $token;
    	return $result;
    }
}
