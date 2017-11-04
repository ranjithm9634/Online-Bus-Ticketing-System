<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bus;
use Auth;

class BusController extends Controller
{
    //
    public function index(){
    	$buses = Bus::all();
    	return view('display.buses')->with(compact('buses'));
    	//dd($buses);
    }

    public function search(){
    	$buses = Bus::where('source', 'like', '%'.request('search').'%')->where('destination', 'like', '%'.request('destination').'%')->get();
    	
    	return view('display.search')->with(compact('buses'));
    }

    public function view($id){
        $bus = Bus::where('id', $id)->get();
        $user = Auth::user();
        return view('display.view')->with(compact('bus', 'user'));
    }
}
