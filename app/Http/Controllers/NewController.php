<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\New_detail;

class NewController extends Controller
{
    public function index(){
    	$news = DB::table('news')->paginate(10);
    	return view('admin/news/index',compact('news'));
    }
	public function xuLyUpLoad(Request $request) 
	{
       	$file = $request->img_1;
       	$request->file('img_1')->move('/var/www/html/hello/public/assets/image',$file->getClientOriginalName());
       	return redirect()->back();
	}
}
