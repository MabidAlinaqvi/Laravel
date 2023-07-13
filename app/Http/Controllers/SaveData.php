<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddMember;

class SaveData extends Controller
{
    public function addMember(Request $req){
        $addmember = new AddMember;
        $addmember->ID = $req->Id;
        $addmember->FirstName = $req->Firstname;
        $addmember->LastName = $req->Lastname;
        $addmember->PhoneNo = $req->Phoneno;
        $addmember->Company = $req->company;
        $addmember->save();
        return "Memeber Successfully added";
        
    }
}
