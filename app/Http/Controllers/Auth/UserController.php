<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(User $users)
    {
        return view('auth.users.index', [
            'users' => $users->all()
        ]);
    }

    public function show(User $user)
    {
        return view('auth.users.show', [
            'user' => $user
        ]);
    }

    public function profile()
    {   
        return view('auth.users.profile');
    }

}
