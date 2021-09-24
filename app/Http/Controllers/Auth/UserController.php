<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(User $user)
    {
        return view('auth.users.index', [
            'users' => $user->all()
        ]);
    }
}
