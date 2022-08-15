<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Models\Artigo; //carregando o model de artigo
use App\Models\Noticia; //carregando a model de Videoaula
use App\Models\Foto; //carregando a model de fotos
use App\Models\Podcast; //carregando a model de podcasts

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
                return redirect('dashboard');
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
    public function dashboard(){

        $artigos = Artigo::All(); 
        $noticias = Noticia::All();
        $podcasts = Podcast::All();
        $titulo = "dashbord";
        return view("dashboard" , ['titulo'=>$titulo, 'artigos'=>$artigos, 'noticias'=>$noticias, 'podcasts'=>$podcasts]);
    }
    public function editar ($id= null){
        $artigos = Artigo::all()->where('id', $id);
        $noticias = Noticia::all()->where('id', $id);
        $podcasts = Podcast::all()->where('id', $id);
        $titulo = "Edição";
        return view ("editar", [ 'titulo'=>$titulo, 'artigos'=>$artigos,'noticias'=>$noticias, 'podcasts'=>$podcasts]);
    }
    public function edit_art (Request $request, $id){
        Artigo::where(['id'=>$id])->update([
            'id'=>$request->id,
            'autor'=> $request->autor,
            'title'=> $request->title,
            'resumo'=> $request->resumo,
            'description'=> $request->description,
            'data_post'=> $request->data_post
            
        ]);
        
    
        $msg = "Editado com sucesso";
    
        return redirect('dashboard');
    }
    

}
