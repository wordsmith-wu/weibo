<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class TranslationsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'chinese'=>'required','english'=>'required'
    	]);

    	Auth::user()->translations()->create([
    		'chinese'=>$request['chinese'],'english'=>$request['english']]);
    	session()->flash('success','添加翻译成功！');
    	return redirect()->back();

    }
}
