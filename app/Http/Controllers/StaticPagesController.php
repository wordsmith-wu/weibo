<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class StaticPagesController extends Controller
{
    public function home()
	{
		$feed_items = [];
		if (Auth::check()){
			$feed_items = Auth::user()->feed()->paginate(5);
			$transfeed_items = Auth::user()->transfeed()->paginate(5);
		}
		return view('static_pages/home',compact('feed_items','transfeed_items'));
	}
	
	public function help()
	{
		return view('static_pages/help');
	}
	
	public function about()
	{
		return view('static_pages/about');
	}
}
