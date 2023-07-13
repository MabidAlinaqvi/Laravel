<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientData extends Controller
{
    public function getData(Request $request){
    //    return Http::get('https://reqres.in/api/users?page=1');
        $data = Http::get('https://reqres.in/api/users?page=1');
        $header = $data->header('Content-Type', 'text/plain');
        return view('httpheader',['data'=>$header]);
    //    return view('httpdata',['data'=>$data['data']]);
    //    return Http::get('https://reqres.in/api/users?page=1');
    }
}
