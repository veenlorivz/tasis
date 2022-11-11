<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $req)
    {
        $name = $req->name;

        $data = User::where('name', $name)->first();
        if ($data) {
            $datauser = [
                'name' => $req->name,
                'password' => $req->password
            ];
            if (Auth::attempt($datauser)) {
                return redirect('/');
            }
        } else {
            return redirect('login')->with('alert', 'Incorret Password or Email, Please Check Again!');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('succes', 'you are logged out');
    }
}