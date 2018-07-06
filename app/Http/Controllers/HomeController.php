<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Recom;

class HomeController extends Controller
{
    public function index(){
    	$news = Post::take(4)->get();
    	$recoms = Recom::take(10)->get();
    	return view('index',compact('news','recoms'));
    }
    public function admin(){
    	return view('admin/index');
    }
}
