<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index(){
        return view ('user.login');
    }

    public function registerpage()
    {
      return view ('user.register');
    }

    public function login(Request $request){
        $user_email = $request->user_email;
        $user_password = md5($request->user_password);

        $result = DB::table('users')->where('user_email',$user_email)->where('user_password',$user_password)->first();

        if($result){
            Session::put('user_name',$result->user_name);
            Session::put('user_id',$result->user_id);
            return Redirect::to('/');
        }
        else{
            Session::put('message','Mật khẩu hoặc Email sai làm ơn nhập lại');
            return Redirect::to('/loginpage');
        }
    }

    public function register(Request $request){

        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_email'] = $request->user_email;
        $data['user_password'] = $request->user_password;
        $data['user_phone'] = $request->user_phone;
        $data['user_address'] = $request->user_address;

        DB::table('users')->insert($data);
        Session::put('message','Thêm Thành Công');
        Session::put('user_name',$request->user_name);
        Session::put('user_id',$request->user_id);
        return Redirect::to('/');
    }

     public function logout(){
        Session::put('user_name',null);
        Session::put('user_id',null);
        return Redirect::to('/');
    }
}
