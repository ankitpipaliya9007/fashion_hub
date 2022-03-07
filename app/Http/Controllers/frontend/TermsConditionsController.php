<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users234;

class TermsConditionsController extends Controller
{
    public function main(){
        $data = ['LoggedUserInfo'=>Users234::where('user_id','=',session('LoggedIn'))->first()];
        return view('terms_conditions',$data);
    }
}
