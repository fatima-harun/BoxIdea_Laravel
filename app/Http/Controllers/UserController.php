<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(){
        return view('personnels.inscription');
    }

    public function registerPost(Request $request){
        $user = new User();

        $user->nom = $request->nom;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Inscription réussie');
    }

    public function login(){
        return view('personnels.connexion');
    }

    public function loginPost(Request $request){
     $credetials = [
       'email' => $request->email,
       'password' => $request->password,
     ];

     if(Auth::attempt($credetials)){
        return redirect('/home');
     }
     return back()->with('erreur email ou mot de passe incorrect');
    }

    public function logout(){

        Auth::logout();
         return redirect()->route('login');
    }
}
