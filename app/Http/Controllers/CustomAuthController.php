<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class CustomAuthController extends Controller
{
    public function login(){
        return view("auth/login");

    }
    public function registration(){
        return view("auth/registration");

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required | min:5 | max:12'
        ]); 
        $user = new User();
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('postagem');
            }else{
                return back()->with('fail', 'Senha não corresponde');  
            }

        }else{
            return back()->with('fail', 'Este email não está registrado');

        }

    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | email |unique:users',
            'password'=>'required | min:5 | max:12'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $res = $user->save();
        if($res){
            return back()->with('success', "Registro realizado!");

        }else{
            return back()->with('fail', 'Algo deu errado!');

        }

    }
    

}
