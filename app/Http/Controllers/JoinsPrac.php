<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinsPrac extends Controller
{
    function tableJoins(){
        // return DB::table('companys')
        //         ->rightJoin('employees','companys.employee_id',"=",'employees.id')
        //         ->where('employees.name','aun')->get();
        // return DB::table('employees')
        //         ->leftJoin('companys','employees.id',"=",'companys.employee_id')
        //         ->where('employees.name','aun')->get();
          return DB::table('companys')
                ->Join('employees','companys.employee_id',"=",'employees.id')->get();
        }
}
