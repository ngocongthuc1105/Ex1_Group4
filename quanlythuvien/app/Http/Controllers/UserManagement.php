<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class UserManagement extends Controller
{
    public function add_user(){
        return view('admin.add_user');
    }
    public function all_user(){
        $all_user = DB::table('users')->get();
        $manager_user = view('admin.all_user')->with('all_user',$all_user);
        return view('admin.admin_layout')->with('admin.all_user',$manager_user);
    }
    public function save_user(Request $request){

        $data = array();
        $data['user_id'] = $request->user_id;
        $data['user_name'] = $request->user_name;
        $data['user_email'] = $request->user_email;
        $data['user_password'] = $request->user_password;
        $data['user_phone'] = $request->user_phone;
        $data['user_address'] = $request->user_address;

        DB::table('users')->insert($data);
        Session::put('message','Thêm Thành Công');
        return Redirect::to('/add-user');
    }
     public function edit_user($user_id){
        $edit_user = DB::table('users')->where('user_id',$user_id)->get();
        $manager_user = view('admin.edit_user')->with('edit_user',$edit_user);
        return view('admin.admin_layout')->with('admin.edit_user',$manager_user);
    }
    public function update_user(Request $request,$user_id){
        $data = array();
        $data = array();
        $data['user_id'] = $request->user_id;
        $data['user_name'] = $request->user_name;
        $data['user_email'] = $request->user_email;
        $data['user_password'] = $request->user_password;
        $data['user_phone'] = $request->user_phone;
        $data['user_address'] = $request->user_address;

        DB::table('users')->where('user_id',$user_id)->update($data);
        Session::put('message','Cập Nhập Thành Công');
        return Redirect::to('/all-user');
    }
    public function delete_user($user_id){
        DB::table('users')->where('user_id',$user_id)->delete();
        Session::put('message','Xoá Thành Công');
        return Redirect::to('/all-user');
    }

}
