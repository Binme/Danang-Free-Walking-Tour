<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RecomController extends Controller
{
    public function index(){
    	$recoms = DB::table('recoms')->paginate(10);
    	return view('admin/recom/index',compact('recoms'));
    }
}
