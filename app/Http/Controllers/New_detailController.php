<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class New_detailController extends Controller
{
    public function getNewsById($id){
    	$new_detail = Post::find($id);
    	$id_new_1 = $id + 1;
    	if ($id_new_1 > 10) {
    		$id_new_1 = $id - 1;
    	}
    	$id_new_2 = $id + 2;
    	if ($id_new_2 > 10) {
    		$id_new_2 = $id - 2;
    	}
    	$id_new_3 = $id + 3;
    	if ($id_new_3 > 10) {
    		$id_new_3 = $id - 3;
    	}
    	$id_new_4 = $id + 4;
    	if ($id_new_4 > 10) {
    		$id_new_4 = $id - 4;
    	}
    	$new_detail_1 = Post::findOrFail($id_new_1);
    	$new_detail_2 = Post::findOrfail($id_new_2);
    	$new_detail_3 = Post::findOrfail($id_new_3);
    	$new_detail_4 = Post::findOrFail($id_new_4);
    	$new_detail_relatives = array('new_detail_1' => $new_detail_1,'new_detail_2' => $new_detail_2,'new_detail_3' => $new_detail_3,'new_detail_4' => $new_detail_4);
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
