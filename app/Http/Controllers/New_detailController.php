<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\New_detail;

class New_detailController extends Controller
{
    public function getNewsById($id){
    	$new_detail = New_detail::findOrFail($id);
    	$id_relative = $id - 1;
    	if ($id_relative<1) {
    		$id_relative = $id +1;
    	}

    	$new_detail_relative = New_detail::findOrFail($id_relative); 
    	return view('news',compact('new_detail','new_detail_relative'));
    }
}
