<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
    function upload(Request $req){
        $filename = $req->file('upload')->getClientOriginalName();
        $req->file('upload')->storeAs('My_files',$filename);
       return "Success Uploaded the file";
    }
}
