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
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'username' => 'required|min:5|max:12',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()) {
            return redirect(route('auth.registration.view'))->withErrors($validator)->withInput();
        }

        $body = $validator->safe()->only(['name', 'username', 'email', 'password']);

        $user = User::create([
            'name' => $body['name'],
            'email' => $body['email'],
            'username' => $body['username'],
            'password' => Hash::make($body['password'])
        ]);

        if($user){
            return redirect(route('auth.login.view'))->with('global-success','You are register. Now you can login!');
        }else{
            App::abort(500, 'Server Error');
        }
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()) {
            return redirect(route('auth.login.view'))->withErrors($validator)->withInput();
        }

        // Retrieve the validated credentials...
        $credentials = $validator->safe()->only(['email', 'password']);
        $remember_me = $request->has('remember') ? true : false;

        if(Auth::attempt($credentials, $remember_me)) {
            return redirect()->intended('/')->with('global-success', 'Login success.');
        }
        return redirect(route('auth.login.view'))->withErrors('Credential Incorrect.')->withInput();
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('auth.login.view'))->with('global-info', 'You are logout.');
    }
}
