<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class NewController extends Controller
{
    public function index(){
    	$news = DB::table('news')->paginate(10);
    	return view('admin/news/index',compact('news'));
    }
    public function createNews(){
    	return view('admin/news/create');
    }
}
