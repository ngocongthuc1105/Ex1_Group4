<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ListBorrower extends Controller
{
    public function add_list(){
        return view('admin.add_list');
    }
    public function all_list(){
        $all_borrower = DB::table('muon')->orderBy('ma_muon')->get();
        $manager_borrower = view('admin.all_list')->with('all_list',$all_borrower);
        return view('admin.admin_layout')->with('admin.all_list',$manager_borrower);
    }

    public function save_list(Request $request){

        $data = array();
        // $data['ma_muon'] = $request->borrower_id;
        $data['user_name'] = $request->user_name;
        $data['ten_sach'] = $request->book_name;
        $data['so_luong'] = $request->so_luong;
        $data['ngay_muon'] = $request->ngay_muon;
        $data['ngay_hen_tra'] = $request->ngay_hen_tra;
        $data['ngay_tra'] = $request->ngay_tra;


        DB::table('muon')->insert($data);
        Session::put('message','Thêm Thành Công');
        return Redirect::to('/add-list');
    }
     public function edit_list($ma_muon){
        $edit_borrower = DB::table('muon')->where('ma_muon',$ma_muon)->get();
        $manager_borrower = view('admin.edit_list')->with('edit_list',$edit_borrower);
        return view('admin.admin_layout')->with('admin.edit_list',$manager_borrower);
    }
    public function update_list(Request $request,$ma_muon){

        $data = array();
        // $data['ma_muon'] = $request->borrower_id;
        $data['user_name'] = $request->user_name;
        $data['ten_sach'] = $request->book_name;
        $data['so_luong'] = $request->so_luong;
        $data['ngay_muon'] = $request->ngay_muon;
        $data['ngay_hen_tra'] = $request->ngay_hen_tra;
        $data['ngay_tra'] = $request->ngay_tra;

        DB::table('muon')->where('ma_muon',$ma_muon)->update($data);
        Session::put('message','Cập Nhập Thành Công');
        return Redirect::to('/all-list');
    }
    public function delete_list($ma_muon){
        DB::table('muon')->where('ma_muon',$ma_muon)->delete();
        Session::put('message','Xoá Thành Công');
        return Redirect::to('/all-list');
    }

}
