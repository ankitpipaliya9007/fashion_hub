<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users234;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function main(){
        return view('login');
    }

    public function check(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);

        $credentials = Users234::where('email','=',$request->email)->first();  

        if (!$credentials) {
            return back()->with('fail','User Not Found, Register First!');
        }
        else{
            if (Hash::check($request->password, $credentials->password)) {
                $request->session()->put('LoggedIn', $credentials->user_id);
                return redirect('/');
            }
            else {
                return back()->with('fail','Incorrect Password!');
            }
        }
    }

    public function logout(){
        if (session()->has('LoggedIn')){
            session()->pull('LoggedIn');
            return redirect('/');
        }
    }
}