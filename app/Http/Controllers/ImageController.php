<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recom_detail;

class ImageController extends Controller
{
    public function exportImages(){
    	$images = Recom_detail::select('id','img_1','img_2','img_3','img_4','img_5')->get();
    	foreach($images as $image){
    		echo "[";
    		echo "<br>";
    		echo "'img' => '" .$image->img_1. "',";
    		echo "<br>";
    		echo "'recom_detail_id' => '" .$image->id. "',";
    		echo "<br>";
    		echo "],";
    		echo "<br>";
    		echo "[";
    		echo "<br>";
    		echo "'img' => '" .$image->img_2. "',";
    		echo "<br>";
    		echo "'recom_detail_id' => '" .$image->id. "',";
    		echo "<br>";
    		echo "],";
    		echo "<br>";
    		echo "[";
    		echo "<br>";
    		echo "'img' => '" .$image->img_3. "',";
    		echo "<br>";
    		echo "'recom_detail_id' => '" .$image->id. "',";
    		echo "<br>";
    		echo "],";
    		echo "<br>";
    		echo "[";
    		echo "<br>";
    		echo "'img' => '" .$image->img_4. "',";
    		echo "<br>";
    		echo "'recom_detail_id' => '" .$image->id. "',";
    		echo "<br>";
    		echo "],";
    		echo "<br>";
    		echo "[";
    		echo "<br>";
    		echo "'img' => '" .$image->img_5. "',";
    		echo "<br>";
    		echo "'recom_detail_id' => '" .$image->id. "',";
    		echo "<br>";
    		echo "],";
    		echo "<br>";
    	}
    }
}
