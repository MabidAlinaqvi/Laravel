<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;


class InlineTemplate extends Controller
{
    public function productList(){
        $productQty = 20;
        return Blade::render('<h1>{{$total}} This is my inlineTemplate example</h1>',['total'=>$productQty]);
    }
}
