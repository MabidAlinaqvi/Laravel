<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;


class DeleteItem extends Controller
{
    function show(){
        $data = Member::all();
        return view('showlist',['memebers'=>$data]);
    }
    function delete($id){
        $userInfo = DB::table('members')
            ->where('id',$id)->get()[0];
            Session()->flash('deleteduser',$userInfo->firstname." ".$userInfo->lastname);
            $data =Member::find($id);
            $data->delete();
        // DB::table('members')
        //     ->where('id',$id)
        //     ->delete();
        return redirect('showlist');
    }
    function multiDelete(Request $req){
        $data = $req->input();
        $ids=$data['Ids'];
        DB::table('members')
            ->whereIn('ID',$ids)
            ->delete();
        return redirect('showlist');
    }
    function editMember($id){
        $data=Member::find($id);
        return view('update',['data'=>$data]);
    }
    function updateMember(Request $req){
        $member = Member::find($req->id);
        $member->id = $req->id;
        $member->firstname = $req->firstname;
        $member->lastname = $req->lastname;
        $member->phoneno = $req->phoneno;
        $member->company = $req->company;
        $member->save();
        return redirect ('showlist');
    }
}