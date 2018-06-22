<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Recom;

class RecomController extends Controller
{
    public function index(){
    	$recoms = DB::table('recoms')->paginate(10);
    	return view('admin/recom/index',compact('recoms'));
    }
    public function ajaxRecoms(Request $request){
    	$input = $request->filter;
    	switch ($input) {
    		case 'eat':
    			$drinks = Recom::where('filter','=',$input)->get();
    				$obj = json_decode($drinks);
    			// echo                "<img src='assets/images/ThingsToDo/".$drinks->img."' alt=''>";	
    			return response()->json($obj);
    			
    			break;
            case 'drink':
                $drinks = Recom::where('filter','=',$input)->get();
                    $obj = json_decode($drinks);
                // echo                "<img src='assets/images/ThingsToDo/".$drinks->img."' alt=''>";  
                return response()->json($obj);
                
                break;

            case 'relax':
                $drinks = Recom::where('filter','=',$input)->get();
                    $obj = json_decode($drinks);
                // echo                "<img src='assets/images/ThingsToDo/".$drinks->img."' alt=''>";  
                return response()->json($obj);
                
                break;

            case 'entertainment':
                $drinks = Recom::where('filter','=',$input)->get();
                    $obj = json_decode($drinks);
                // echo                "<img src='assets/images/ThingsToDo/".$drinks->img."' alt=''>";  
                return response()->json($obj);
                
                break;
                    
    		case 'buy':
                $drinks = Recom::where('filter','=',$input)->get();
                    $obj = json_decode($drinks);
                // echo                "<img src='assets/images/ThingsToDo/".$drinks->img."' alt=''>";  
                return response()->json($obj);
                
                break;

            case 'stay':
                $drinks = Recom::where('filter','=',$input)->get();
                    $obj = json_decode($drinks);
                // echo                "<img src='assets/images/ThingsToDo/".$drinks->img."' alt=''>";  
                return response()->json($obj);
                
                break;    

    		default:
    			# code...
    			break;
    	}
    }
}
