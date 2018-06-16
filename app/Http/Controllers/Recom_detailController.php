<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recom_detail;

class Recom_detailController extends Controller
{
    public function index($id){
    	$recom_detail = Recom_detail::findOrfail($id);
    	$id_recom_1 = $id + 1;
    	if ($id_recom_1 > 30) {
    		$id_recom_1 = $id - 1;
    	}
    	$id_recom_2 = $id + 2;
    	if ($id_recom_2 > 30) {
    		$id_recom_2 = $id - 2;
    	}
    	$id_recom_3 = $id + 3;
    	if ($id_recom_3 > 30) {
    		$id_recom_3 = $id - 3;
    	}
    	$id_recom_4 = $id + 4;
    	if ($id_recom_4 > 30) {
    		$id_recom_4 = $id - 4;
    	}
    	$recom_detail_1 = Recom_detail::findOrFail($id_recom_1);
    	$recom_detail_2 = Recom_detail::findOrfail($id_recom_2);
    	$recom_detail_3 = Recom_detail::findOrfail($id_recom_3);
    	$recom_detail_4 = Recom_detail::findOrFail($id_recom_4);
    	$recom_detail_relatives = array('recom_detail_1' => $recom_detail_1,'recom_detail_2' => $recom_detail_2,'recom_detail_3' => $recom_detail_3,'recom_detail_4' => $recom_detail_4);
    	return view('test',compact('recom_detail','recom_detail_relatives'));
    }
}
