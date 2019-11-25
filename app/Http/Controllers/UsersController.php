<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
	public function create()
	{
		return view('Users.create');
	}

	public function show(User $user)
	{
		return view('Users.show',compact('user'));
	}
}
