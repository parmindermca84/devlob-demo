<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function index($username)
    {
    	$User = User::whereusername($username)->first();
    	//$User = User::Where('username', $username)->first();

    	return view("user.profile", compact("User"));
    }
}
