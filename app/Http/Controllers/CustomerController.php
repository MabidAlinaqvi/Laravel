<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
    //    return "ali";
    //return Customer::find(2);
       $phone = Customer::find(2)->phone;
       return $phone;
    }
}
