<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Recom;

class HomeController extends Controller
{
    public function index(){
    	$news = DB::table('news')->get();
    	$recoms = Recom::get();
    	return view('index',compact('news','recoms'));
    }
    public function admin(){
    	return view('admin/index');
    }
}
