<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class UserController extends Controller
{
    public function index (){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create (){
        return view('users.create');
    }

    public function store (Request $request){
        $validation =$request->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|max:255|unique:users',
            'birthdate'=>'required|string|date_format:Y-m-d,m/d/Y',
            'password'=>'required|string|min:8',
        ]);
        User::create([
            'name'=>$validation['name'],
            'email'=>$validation['email'],
            'birthdate'=>$validation[''],
            'password'=>$validation['password'],
        ]);
        return redirect()->route('users.index')->with("successful","user added!");
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index')->with("success","user deleted !");
    }
}
