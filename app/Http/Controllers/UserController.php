<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user($id)
    {
        $user = User::findOrFail($id);

        return view('profile.edit', ['user' => $user]);
    }

    public function password($id)
    {
        $user = User::findOrFail($id);

        return view('profile.password', ['user' => $user]);
    }
}
