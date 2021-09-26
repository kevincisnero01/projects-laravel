<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function profile_update(Request $request)
    {   

        $user = User::find($request->id);

        if(!empty($request->name) && $user->name != $request->name){
            $user->name = $request->name;
        }
        
        if(!empty($request->email) && $user->email != $request->email){
            $user->email = $request->email;
        }

        if(!empty($request->password) && $request->password == $request->password_confirmation){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.profile')->with('status','Informacion actualizada...');
    }

}
