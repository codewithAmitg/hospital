<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
class HomeController extends Controller
{
    public function redirect(){

    	if(Auth::id()){
    		if(Auth::user()->usertype=='0'){
    			return view('user.home');
    		}else{
    			return view('admin.home');
    		}

    	}else{
    		return redirect()->back();
    	}
    }

    public function index(){
    	if(Auth::id()){
    		return redirect('home');
    	}else{
    		$doctors = doctor::all();
    		return view('user.home',compact('doctors'));
    	}
    	
    }
}
