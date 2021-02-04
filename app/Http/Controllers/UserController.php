<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return 'Invalid User Credentials!!!';
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        return view('register');
    }
    function create(Request $req)
    {
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->house=$req->house;
        $user->floor=$req->floor;
        $user->password=Hash::make($req->password);
        $user->save();
        return view('login');
    }
}
