<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Store;


class MultipleDB extends Controller
{
     public function index(){
       //using models
       //return Member::get();
        return Store::get();


       //DB connection code
        // return DB::table('members')->get();
        //return DB::connection('mysql2')->table('store')->get();
    }
}
