<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view ('pages/index');
    }    
    public function contact(){
    	return view ('pages/contact');
    }

    public function test(){
    	return view ('pages/test');
    }
    
}
