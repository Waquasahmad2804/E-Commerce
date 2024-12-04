<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $req)
    {
       
    
       
        $user = User::where('email', $req->email)->first();
    
       
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password error";
        }
    
        else{
            $req->session()->put('user',$user); 
            return redirect('home');
        }
      
    }
    public function showUser(){
        if(session()->has('user')){
            $user=session('user');
             
            return view('userDetail',['user'=>$user]);
        }
    }
    public function UserRegistration(Request $request)
{
    $data = User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'phoneno' => $request->input('phoneno'),
        'Address' => $request->input('Address'),
    ]);

    if ($data) {
        // Use redirect to send the user back to the login page
        return view('login')->with('alert', 'User registration successful! You can now log in.');
    } else {
        return redirect()->back()->with('alert', 'There was an issue with registration.');
    }
}

}
