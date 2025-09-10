<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:6|confirmed',
            'name'     => 'nullable|string|max:100'
        ]);

        Admin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name'     => $request->name,
        ]);

        return redirect()->route('login')->with('success','Admin registered successfully. Please login.');
    }

    public function showLogin(){
        return view('auth.login');
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $admin = Admin::where('username',$request->username)->first();

        if($admin && Hash::check($request->password,$admin->password)) {
            Session::put('admin_id',$admin->id);
            Session::put('admin_name',$admin->name ?? $admin->username);
            return redirect()->route('articles.index');
        }

        return back()->withErrors(['username'=>'Invalid credentials'])->withInput();
    }

    public function logout(){
        Session::forget(['admin_id','admin_name']);
        return redirect()->route('login');
    }
}
