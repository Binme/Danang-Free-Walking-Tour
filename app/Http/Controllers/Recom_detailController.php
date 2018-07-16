<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recom_detail;
use App\Image;
use App\Recom;

class Recom_detailController extends Controller
{
    public function index($id){
    	$recom_detail = Recom_detail::findOrfail($id);
        $recom_detail_relatives = Recom_detail::where('id','<>',$id)->paginate(4);
    	$images = Image::where('recom_detail_id','=',$id)->get();
        return view('test',compact('recom_detail','recom_detail_relatives','images'));
    }
    public function demo(){
        $recom_details = Recom_detail::findOrfail(4);
        $image = Image::where('recom_detail_id','=',4)->get();
        $recom_relatives = Recom::where('id','<>',4)->paginate(8);
        return view('thingstodo',compact('recom_details','image','recom_relatives'));
    }
}
