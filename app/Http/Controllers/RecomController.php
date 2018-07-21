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
    			$drinks = Recom::where('filter','=',$input)->take(4)->get();	
    			return view('catalog',compact('drinks'));
    			
    			break;
            case 'drink':
                $drinks = Recom::where('filter','=',$input)->take(4)->get();  
                return view('catalog',compact('drinks'));
                
                break;

            case 'relax':
                $drinks = Recom::where('filter','=',$input)->take(4)->get();  
                return view('catalog',compact('drinks'));
                
                break;

            case 'entertainment':
                $drinks = Recom::where('filter','=',$input)->take(4)->get();  
                return view('catalog',compact('drinks'));
                
                break;
                    
    		case 'buy':
                $drinks = Recom::where('filter','=',$input)->take(4)->get();  
                return view('catalog',compact('drinks'));
                
                break;

            case 'stay':
                $drinks = Recom::where('filter','=',$input)->take(4)->get();  
                return view('catalog',compact('drinks'));
                
                break;    

    		default:
    			# code...
    			break;
    	}
    }
}
