<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function registrationView()
    {
        return view('auth/registration');
    }

    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()) {
            return redirect(route('auth.registration.form'))->withErrors($validator)->withInput();
        }

        $body = $validator->safe()->only(['name', 'email', 'password']);

        return User::create([
            'name' => $body['name'],
            'email' => $body['email'],
            'password' => Hash::make($body['password'])
        ]);
    }

    public function loginView()
    {
        return view('auth/login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()) {
            return redirect(route('auth.login.form'))->withErrors($validator)->withInput();
        }

        // Retrieve the validated credentials...
        $credentials = $validator->safe()->only(['email', 'password']);

        if(Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        return redirect(route('auth.login.form'))->withErrors('Credential Incorrect.')->withInput();
    }
}
