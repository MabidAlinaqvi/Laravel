<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Validator;
class GetDataController extends Controller
{
    public function getData(){
        return Company::all();
    }
    public function setData(Request $req){
    //    return "Data has been successfully saved";
     //   return $req;
   //     return $req->comp_id;
        $company = new Company;
        $company->comp_id = $req->comp_id;
        $company->comp_name = $req->comp_name;
        $company->city = $req->city;
        $company->employee_id = $req->employee_id;
        $result = $company->save();
        if($result)
        {
            return "Data has been successfully saved";
        }
        else{
            return "Data saved failed";
        }
    }
    public function updateData(Request $req){
        $company = Company::find($req->Comp_id);
        $company->comp_name = $req->comp_name;
        $company->city = $req->city;
        $company->employee_id = $req->employee_id;
        $result = $company->save();
        if($result){
            return "data has been successfully updated";
        }else{
            return "data failed to update";
        }
        return $company;
    }

    public function deleteData($id){
        $company = Company::find($id);
        $result= $company->delete();
        if($result){
            return "data successfully deleted";
        }else{
            return "data not deleted";
        }
    }

    public function searchData($city){
        $company = Company::where("city","like","%".$city."%")->get();
        return $company;
    }

    public function validateData(Request $req){
        $rules = array(
            "comp_id"=>"required|min:1|max:4"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return $validator->errors();
        }else{
            return "your data is valid";
        }
    }
}
