<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CheckingStub extends Controller
{
     public function index(){
        $data = "hi, let's learn larvel";
        return Str::of($data)
                ->ucfirst($data)
                ->replace('Hi','Hello',$data)
                ->camel($data);
        // $data = Str::ucfirst($data);
        // $data = Str::replace('Hi','Hello',$data);
        // $data = Str::camel($data);

        return $data;
    }
}
