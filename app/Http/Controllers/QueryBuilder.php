<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    function buildQuery(){
        //aggrigates functions
        $min = DB::table('Persons')->min('id');
        $max = DB::table('Persons')->max('id');
        return "Max is ".$max." and Min is ".$min;
       // return DB::table('Persons')->max('id');
       // return DB::table('Persons')->min('id');
      //  return DB::table('Persons')->avg('id');
       // return DB::table('Persons')->sum('id');
      //  return DB::table('Persons')->count();
       // return DB::table('Persons')->get();

        // $isexisted = DB::table('Persons')->find(16);
        // if($isexisted){
        //     DB::table('Persons')
        //      ->where('id',16)
        //      ->update([
        //          'firstname' =>'naqi',
        //          'lastname' => 'khan',
        //          'phoneno' => '12456398',
        //          'company' => 'heuristix'
        //      ]);
        //      return "Data Successfully updated";
        //     } else{
        //         return DB::table('Persons')
        //                 ->insert([
        //                     'firstname' =>'hassan',
        //                     'lastname' => 'khan',
        //                     'phoneno' => '12456398',
        //                     'company' => 'heuristix'
        //                 ]);
        //      }
    //    $data = DB::table('Persons')->find(12);
    //    dd($data);
     //   return DB::table('Persons')->count();

     //   return DB::table('Persons')->find(8);

       return DB::table('Persons')
                ->where('id',8)->get();

    //   return DB::table('Persons')
    //         ->insert([
    //             'firstname' =>'ali',
    //             'lastname' =>'khan',
    //             'phoneno' =>'14528963',
    //             'company' =>'heuristix'
    //         ]);

    //   return DB::table('Persons')
    //         ->where('id',12)
    //         ->update([
    //             'firstname' =>'hassan',
    //         ]);

        return DB::table('Persons')
                ->where('id',12)->delete();
    }
}
