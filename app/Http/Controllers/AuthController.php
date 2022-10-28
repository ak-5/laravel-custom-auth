<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\User;

class AuthController extends Controller
{
    public function show_dashboard() {
        // return \Auth::user();
        return view('home');
    }

    public function logout() {
        \Session::flush();
        \Auth::logout();

        return redirect('/');
    }

    public function index() {
        return view('auth.login');
    }

    public function login(Request $req) {
        
    
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(\Auth::attempt($req->only('email', 'password'))) {
            return redirect('home');
        }

        return redirect('login')->withError('Login credentials don\'t match');
    }

    public function register_frm() {
        return view('auth.register');
    }

    public function register_data(Request $req) {
        // *** VALIDATION AND SHOW ERRORS IN BLADE
        // *** METHOD 1
        $test = $req->validate([
            'name' => 'required|min:4|string',
            'email'=>'required|unique:users',
            'password'=>'required',
        ], [
            'password.required'=>'Password filed is most required'
        ]);


        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => \Hash::make($req->password)
        ]);

        if(\Auth::attempt($req->only('email', 'password'))) {
            return redirect('home');
        }

        return 1;
        


        // *** METHOD 2
        // $test = $req->validate([
        //     'email1'=>'required',
        // ]);
        // return redirect('register')->withErrors($test);

        // *** METHOD 3
        // $test = Validator::make($req->all(), [
        //     'name' => 'required|min:3|max:5|numeric',
        // ]);
        // if ($test->fails())
            // return view('auth.register')->withErrors('error');
        // else
           //     return view('view_name');
    }
}
