<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class CategoryBook extends Controller
{
    public function add_category_book(){
        return view('admin.add_category_book');
    }
    public function all_category_book(){

        $all_category_book = DB::table('category_book')->get();
        $manager_category_book = view('admin.all_category_book')->with('all_category_book',$all_category_book);
        return view('admin.admin_layout')->with('admin.all_category_book',$manager_category_book);
    }
    public function save_category_book(Request $request){
        $data = array();
        $data['category_id']= $request->category_book_id;
        $data['category_name']= $request->category_book_name;
        DB::table('category_book')->insert($data);
        Session::put('message','Thêm danh mục thành công');
        return Redirect::to('/add-category-book');
    }
     public function edit_category_book($category_id){
        $edit_category_book = DB::table('category_book')->where('category_id',$category_id)->get();
        $manager_category_book = view('admin.edit_category_book')->with('edit_category_book',$edit_category_book);
        return view('admin.admin_layout')->with('admin.edit_category_book',$manager_category_book);
    }
    public function update_category_book(Request $request,$category_id){
        $data = array();
        $data['category_name']= $request->category_book_name;
        $data['category_id']= $request->category_book_DDC;
        DB::table('category_book')->where('category_id',$category_id)->update($data);
        Session::put('message','Cập nhật danh mục thành công');
        return Redirect::to('/all-category-book');
    }
    public function delete_category_book($category_id){
        DB::table('category_book')->where('category_id',$category_id)->delete();
        Session::put('message','Xóa danh mục thành công');
        return Redirect::to('/all-category-book');
    }

    //end function admin

    public function show_category($category_id){
        $cate_product = DB::table('category_book')->orderBy('category_name','desc') ->get();
        $cate_by_id = DB::table('sach')->join('category_book','sach.category_name','=','category_book.category_name')->where('sach.category_name',$category_id)->get();
        return view('category.show_category_book')-> with('cate_product',$cate_product)-> with('cate_by_id',$cate_by_id) ;
     }
}
