<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Testtemplate;
use App\Http\Controllers\InlineTemplate;
use App\Http\Controllers\SubmitForm;
use App\Http\Controllers\UserData;
use App\Http\Controllers\UserModelData;
use App\Http\Controllers\HttpClientData;
use App\Http\Controllers\TestHttpMethod;
use App\Http\Controllers\SessionControl;
use App\Http\Controllers\FlashControl;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\MemberList;
use App\Http\Controllers\MemberPagination;
use App\Http\Controllers\SaveData;
use App\Http\Controllers\DeleteItem;
use App\Http\Controllers\QueryBuilder;
use App\Http\Controllers\JoinsPrac;
use App\Http\Controllers\AccesserController;
use App\Http\Controllers\OneManyRelation;
use App\Http\Controllers\CheckingStub;
use App\Http\Controllers\BindingModel;
use App\Http\Controllers\MultipleDB;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // return view('user');
   return redirect('contactus');
});

// Route::get('/{firstname}', function ($name) {
//     return view('user',['firstname'=>$name]);
// });

// Route::get('contactus/{firstname}', function($name){
//     return view('contact',['firstname'=>$name]);
// });
Route::get('contactus',function(){
    return view('contact');
});

Route::get('welcome',function(){
    return view('welcome');
});

//there is also a short way to write it
//Route::view('link','page name');

Route::view('aboutus','about');

Route::get('userdata/{user}',[Users::class,'username']);


//controller test_template

Route::get('templatetest',[Testtemplate::class,'viewLoad']);

Route::get('inlinetemplate',[InlineTemplate::class,'productList']);

Route::post('submitformdata',[SubmitForm::class,'getData']);

Route::view('home','home')->middleware('restrict');

Route::view('restrict','noaccess');

Route::group(['middleware'=>'restrict'],function(){
    Route::view('loginuser','loginform');
});

Route::get('dbusersdata',[UserData::class,'dbUsers']);

Route::get('modeluserdata',[UserModelData::class,'getUsers']);

Route::get('httpdata',[HttpClientData::class,'getData']);

Route::patch('submitform',[TestHttpMethod::class,'httpMethod']);

Route::view('userlogin','userlogin');

Route::get('usersession',function(){
    if(session()->has('userIs')){
        return redirect('userprofile');
    }
    return view('sessionlogin');
});

//Route::view('usersession','sessionlogin');

Route::post('userdata',[SessionControl::class,'sessionData']);

Route::get('userprofile',function(){
    if(session()->has('userIs')){
        return view('profile');
    } else{
        return redirect('usersession');
    }
});
//Route::view('userprofile','profile');

Route::get('profilelogout',function(){
    if(session()->has('userIs')){
        session()->pull('userIs');
    }
    return view('sessionlogin');
});

Route::get('addmember',function(){
    return view('flashs');
});

Route::post('memberadded',[FlashControl::class,'addFlash']);

Route::view('fileupload','fileupload');

Route::post('uploadcontrol',[UploadFile::class,'upload']);

Route::get('testlang/{lang}',function($lang){
    App::setlocale($lang);
    return view('languages');
});

Route::get('showmember',[MemberList::class,'memberList']);

Route::get('memberpag',[MemberPagination::class,'memberList']);

Route::view('savedata','savedata');

Route::post('savemember',[SaveData::class,'addMember']);

Route::get('showlist',[DeleteItem::class,'show']);

Route::get('deletemem/{id}',[DeleteItem::class,'delete']);

Route::post('deletemulti',[DeleteItem::class, 'multiDelete']);

Route::get('editmem/{id}',[DeleteItem::class,'editMember']);

Route::post('update',[DeleteItem::class,'updateMember']);

Route::get('querybuilder',[QueryBuilder::class,'buildQuery']);

Route::get('joinprac',[JoinsPrac::class,'tableJoins']);

Route::get('accesserprac',[AccesserController::class,'changeValue']);

Route::get('relationprac',[OneManyRelation::class,'relationPrac']);

Route::get('fluentstring',[CheckingStub::class,'index']);

Route::get('binding/{key:firstname}',[BindingModel::class,'index']);

Route::get('multipledb',[MultipleDB::class,'index']);

Route::controller(GroupController::class)->group(function(){
    Route::get('productlist','productlist');
    Route::get('productupdate','productUpdate');
    Route::get('productadd','addProduct');
});

Route::get('onetoone',[CustomerController::class,'index']);