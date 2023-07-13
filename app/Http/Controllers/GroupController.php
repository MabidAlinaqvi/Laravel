<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function productList(){
        return "product list";
    }
    public function productUpdate(){
        return "update product";
    }
    public function addProduct(){
        return "add product";
    }
}
