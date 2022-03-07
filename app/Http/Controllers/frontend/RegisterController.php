<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\Users234;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function main(){
        return view('register');
    }

    public function insert(Request $request){
        // echo '<pre>';
        // print_r($request->all());
        $request->validate(
            [
                'username' => 'required|unique:users234,username',
                'phoneno' => 'required|numeric',
                'email' => 'required|email|unique:users234,email',
                'password' => 'required|confirmed|min:8',
                'password_confirmation' => 'required'
            ]
        );

        $users = new Users234();
        $users->username = $request['username'];
        $users->phoneno = $request['phoneno'];
        $users->email = $request['email'];
        $users->password = Hash::make($request['password']);
        $save = $users->save();

        if (!$save) {
            return back()->with('fail','Something Went Wrong, Try Again Later!');
        }
        else{
            return redirect('login')->with('success','Now You can Login!');
        }
    }
}
