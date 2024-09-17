<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function logIn(Request $req){
        $req->session()->put('user', $req->input('username'));
        $req->session()->put('allData', $req->input());
        // echo session('user');
       return redirect('profile');
    }
    function logOut(){
        session()->pull('user');
        return redirect('profile');
    }

   function addUser(Request $response){
        $response->session()->flash('massage','User has been added sucessfully !');
        $response->session()->flash('name','lovepreet');
        // return redirect('user', ['userkey'=>$data]);
       return redirect('user');
   }
}
