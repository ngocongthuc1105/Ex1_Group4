<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryStories extends Controller
{
    public function add_stories(){
        return view('admin.add_stories');
    }
    public function all_stories(){
        $all_stories = DB::table('sach')->get();
        $manager_stories = view('admin.all_stories')->with('all_stories',$all_stories);
        return view('admin.admin_layout')->with('admin.all_stories',$manager_stories);
    }

    public static function gia_tien_theo_the_loai($the_loai)
    {
      $all_stories_with_same_type = DB::table('sach')->where('the_loai', $the_loai)->get();
      if(count($all_stories_with_same_type) == 0) return "Không có bản ghi trong csdl";
      $tong_gia_tien = 0;
      foreach ($all_stories_with_same_type as $story) {
        $tong_gia_tien = $tong_gia_tien + $story->gia_tien;
      }
      return $tong_gia_tien;
    }

    public function save_stories(Request $request){

        $data = array();
        // $data['ma_sach'] = $request->stories_id;
        $data['ten_sach'] = $request->stories_name;
        $data['ten_tac_gia'] = $request->stories_author;
        $data['ngon_ngu'] = $request->stories_language;
        $data['dich_gia'] = $request->stories_translator;
        $data['the_loai'] = $request->stories_category;
        $data['ma_ddc'] = $request->stories_ddccode;
        $data['nxb'] = $request->stories_publisher;
        $data['gioi_thieu_sach'] = $request->stories_review;
        $data['so_luong'] = $request->stories_amount;
        $data['gia_tien'] = $request->stories_price;

        DB::table('sach')->insert($data);
        Session::put('message','Thêm Sách Thành Công');
        return Redirect::to('/add-stories');
    }
     public function edit_stories($ma_sach){
        $edit_stories = DB::table('sach')->where('ma_sach',$ma_sach)->get();
        $manager_stories = view('admin.edit_stories')->with('edit_stories',$edit_stories);
        return view('admin.admin_layout')->with('admin.edit_stories',$manager_stories);
    }
    public function update_stories(Request $request,$ma_sach){
        $data = array();
        $data['ma_sach'] = $request->stories_id;
        $data['ten_sach'] = $request->stories_name;
        $data['ten_tac_gia'] = $request->stories_author;
        $data['ngon_ngu'] = $request->stories_language;
        $data['dich_gia'] = $request->stories_translator;
        $data['the_loai'] = $request->stories_category;
        $data['ma_ddc'] = $request->stories_ddccode;
        $data['nxb'] = $request->stories_publisher;
        $data['gioi_thieu_sach'] = $request->stories_review;
        $data['so_luong'] = $request->stories_amount;
        $data['gia_tien'] = $request->stories_price;

        DB::table('sach')->where('ma_sach',$ma_sach)->update($data);
        Session::put('message','Cập Nhập Thành Công');
        return Redirect::to('/all-stories');
    }
    public function delete_stories($ma_sach){
        DB::table('sach')->where('ma_sach',$ma_sach)->delete();
        Session::put('message','Xoá Thành Công');
        return Redirect::to('/all-stories');
    }

}
