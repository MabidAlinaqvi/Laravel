<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadApiController extends Controller
{
     public function index(Request $req){
     //   return "hello world";
        $file = $req->file('file')->getClientOriginalName();
     //   return $file;
        $result = $req->file('file')->storeAs('apiDocs',$file);
        return $file." is successfully uploaded";
    }
}
