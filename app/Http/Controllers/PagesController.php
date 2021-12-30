<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
	//about us page
    public function index(){
    	return view('pages.index');
    }


    //about us page
    public function about(){
    	return view('pages.about');
    }
}
