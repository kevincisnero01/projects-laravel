<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.users.index', [
            'users' => User::orderByDesc('status')->paginate(5)
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

    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|min:4|confirmed'
        ];
        $this->validate($request, $rules);

        User::create($request->all());

        return redirect()->route('users.index')->with('status','Usuario creado con exito');
    }

    public function update(User $user, Request $request)
    {
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email|max:50|unique:users',
        ];
        $this->validate($request, $rules);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('users.index')->with('status','Usuario actualizado con exito');
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('status','Usuario eliminado con exito');
    }
}
