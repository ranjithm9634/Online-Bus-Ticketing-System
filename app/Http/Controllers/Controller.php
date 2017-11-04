<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;
use App\Suggestion;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function edit(){
    	return view('profile.edit');
    }

    public function saved(){
    	$user = Auth::User();
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->address = request('address');
    	$user->phone = request('phone');
    	$user->save();

    	return view('profile.saved');
    }

    public function suggest(){
        if (Auth::user()) {
            return view('suggest');
        }
    }

    public function suggested(){
        $feedback = new Suggestion;
        $feedback->userID = Auth::user()->id;
        $feedback->suggestion = request('feedback');
        $feedback->save();

        return view('suggested');
    }

    
}
