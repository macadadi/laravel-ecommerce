<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
     function index(Request $request){
     
        return view('login.login');
     }
       
     function show(Request $request){
     $user = User::where(['email'=>$request->email])->first();
     if(!$user){
        return 'password or email is inaccurate';
     }
       $request ->session()->put('user',$user);
      return redirect('/products');
   }
    
}
