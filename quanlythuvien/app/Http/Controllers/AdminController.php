<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        return view ('admin_login');
    }
    public function show_dashboard(){
        return view ('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }
        else{
            Session::put('message','Mật khẩu hoặc Email sai làm ơn nhập lại');
            return Redirect::to('/admin');
        }
    }
     public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
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

    public static function gia_tien_theo_tac_gia($ten_tac_gia)
    {
      $all_stories_with_same_type = DB::table('sach')->where('ten_tac_gia', $ten_tac_gia)->get();
      if(count($all_stories_with_same_type) == 0) return "Không có bản ghi trong csdl";
      $tong_gia_tien = 0;
      foreach ($all_stories_with_same_type as $story) {
        $tong_gia_tien = $tong_gia_tien + $story->gia_tien;
      }
      return $tong_gia_tien;
    }

    public static function gia_tien_theo_nxb($nxb)
    {
      $all_stories_with_same_type = DB::table('sach')->where('nxb', $nxb)->get();
      if(count($all_stories_with_same_type) == 0) return "Không có bản ghi trong csdl";
      $tong_gia_tien = 0;
      foreach ($all_stories_with_same_type as $story) {
        $tong_gia_tien = $tong_gia_tien + $story->gia_tien;
      }
      return $tong_gia_tien;
    }

    public function getSearch(Request $req){
        $book = DB::table('sach')->where('ten_sach','like','%'.$req->key.'%')
                                ->orWhere('ten_tac_gia','like','%'.$req->key.'%')
                                ->orWhere('dich_gia','like','%'.$req->key.'%')
                                ->get();
        return view('admin.all_stories')->with('all_stories', $book);
    }
    public function getBorrower(Request $req){
        $borrower = DB::table('muon')->where('user_name','like','%'.$req->key.'%')
                                ->get();
        return view('admin.all_list')->with('all_list', $borrower);
    }
}
