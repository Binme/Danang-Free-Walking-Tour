<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class New_detailController extends Controller
{
    public function getNewsById($id){
    	$new_detail = Post::findOrFail($id);
        $new_detail_relatives = Post::where('id','<>',$id)->paginate(4);
    	return view('news',compact('new_detail','new_detail_relatives'));
    }
    public function exportDatabase(){
        $posts = Post::get();
        foreach ($posts as $post) {
            echo "[";
            echo "<br>";
            echo "'img'=>'" .$post->img. "',";
            echo "<br>";
            echo "'title'=>'" .$post->title. "',";
            echo "<br>";
            echo "'author'=>'" .$post->author. "',";
            echo "<br>";
            echo "'heart'=>null,";
            echo "<br>";
            echo "'body'=>'" .$post->body. "',";
            echo "<br>";
            echo "],";
            echo "<br>";
        }    
    }
}
