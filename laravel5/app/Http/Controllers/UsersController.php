<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index_old()
    {
    	$users = [
			'0' => [
			'first_name' => 'Parminder',
			'last_name' => 'Singh',
			'location' => 'Gurgaon'
			],
			'1' => [
			'first_name' => 'Inderjeet',
			'last_name' => 'Kaur',
			'location' => 'Bhopal'
			]
		];
		return view('admin.users.index', compact('users'));
    }

    public function index()
    {
        // To get all the users
        // $users = User::all();
        
        $users = User::paginate(10);

        //$users = User::simplePaginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
    	return view('admin/users/create');
    }

    public function store(Request $request)
    {
    	User::create($request->all());

    	return 'Success';
    }
}
