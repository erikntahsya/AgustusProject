<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
       $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        

        if (auth()->attempt($validate)) {
            $request->session()->regenerate();

            if (auth()->user()->level === 'admin') {
                return redirect('topups');
            }
            else {
                return redirect('home');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function createuser(){
        return view('register');
    }
    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_tlp,
            'level' => 'pelanggan'
        ]);
        return redirect('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
