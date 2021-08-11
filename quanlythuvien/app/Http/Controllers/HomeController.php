<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    public function index(){
        return view('user_layout');
    }
    public function home(){

        return view('user.home');
    }
     public function all_catalog(){
        $cate_product = DB::table('category_book')->orderBy('category_id','desc') ->get();
        $manager_stories = view('show_category')->with('cate_product',$cate_product);
        return view('user_layout')->with('show_category',$manager_stories);
    }   
    public function ourteam(){
        return view('user.team');
    }
    public function contactus(){
        return view('user.contact');
    }
    public function getSearch(Request $req){
        $book = DB::table('sach')->where('ten_sach','like','%'.$req->key.'%')
                                ->orWhere('ten_tac_gia','like','%'.$req->key.'%')
                                ->orWhere('dich_gia','like','%'.$req->key.'%')
                                ->get();
        return view('user.catalog')->with('all_stories', $book);
    }
}