<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index()
    {
    	if (View::exists('pages.index')) {
    		//return view('pages.index', ['text' => '<b>Hello World!</b>']);
    		return view('pages.index')
    			->with('text','<b>Hello World!</b>')
    			->with(['country' => 'India', 'planet' => 'Earth']);
    	} else {
    		echo "No View";
    	}
    }

    public function profile()
    {
    	return view('pages.profile');
    }

    public function settings()
    {
    	return view('pages.settings');
    }

    public function blade()
    {
        $gender = "female";
        $text = "testing new content";
        return view('blade.bladetest', compact('gender', 'text'));
    }
}
