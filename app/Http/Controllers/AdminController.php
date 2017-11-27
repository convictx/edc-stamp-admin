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
    	 return view('page/home');
    }
  
    public function addMerchants(Request $request){
    	$url = 'http://api-estamp.wls-aws.loc/admin/addMerchants';
    	// $token = self::getToken();
    	$input = $request->input();

		$client = new Client(); //GuzzleHttp\Client
		$res = $client->request('PUT',  $url, [
            'auth' => ['admin', 'estamp'],
            'json' => $input
        ]);

        $data = json_decode($res->getBody()->getContents(), true);
        return $data ;
    }
}
