<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artigo; //carregando o model de artigo
use App\Models\Noticia; //carregando a model de Videoaula
use App\Models\Foto; //carregando a model de fotos
use App\Models\Podcast; //carregando a model de podcasts
class PaginasController extends Controller

{
    public function index() {

        $arts = Artigo:: latest()->simplePaginate(2);
        $noticias = Noticia::latest()->simplePaginate(12); // trazendo os últimos dados da TABELA Artigo;
        $manchetes = Noticia::first()->simplePaginate(1);
        $titulo = "Pedra News";
        return view('home', ['titulo'=>$titulo, 'noticias'=>$noticias, 'manchetes'=>$manchetes, 'arts'=>$arts]);


    }
    public function sobre(){
        $nome = "João Carlos";
        $idade = 34;
        $titulo = "Sobre mim";

        $array = [10, 123, 45, 58];
        $pessoas = ["Pamela", "Beatriz", "Ronaldo", "Isaura"];
        return view('sobre',
            [
                'titulo'=>$titulo,
                'nome'=>$nome,
                'idade'=>$idade,
                'array'=>$array,
                'pessoas'=>$pessoas
            ]);

    }
    public function postagem(){
        $titulo = "Páginas das postagens";
        $busca = request('search');
        return view('postagem', ['titulo'=>$titulo, 'busca'=>$busca]);
    }
    public function podcasts(){
       
        $audio = Podcast:: latest()->simplePaginate(2);
        $titulo = "Podcasts";
        return view('podcasts', ['titulo'=>$titulo, 'audio'=>$audio]);
    
    } 
    public function galeria(){
        $slides = Foto::latest()->simplePaginate(12);
        
        $titulo = "Postagem de videos";
        return view('galeria', ['titulo'=>$titulo, 'slides'=>$slides]);
    
    }
    public function manchete(){
        
      
        $titulo = "Postagem de videos";
        return view('manchete', ['titulo'=>$titulo]);
    
    }
  public function postagens($id=null){
    $noticias = Noticia::all()->where('id', $id);// trazendo os últimos dados da TABELA Artigo;
       
      $titulo = "Página das Postagens";
      return view('postagens', ['titulo'=>$titulo, 'noticias' => $noticias]);
 
  }
  public function artigosId($id=null){
    $artigos = Artigo::all()->where('id', $id);// trazendo os últimos dados da TABELA Artigo;
   // $artigos = Artigo:: latest()->simplePaginate(1); 
      $titulo = "Página do Artigo";
      return view('artigos', ['titulo'=>$titulo, 'artigos'=>$artigos]);
 
  }
  public function artigosTotal(){
    
    $artigos = Artigo::latest()->simplePaginate(2); 
      $titulo = "Artigos";
      return view('artigosTotal', ['titulo'=>$titulo, 'artigos'=>$artigos]);
 
  } 
  public function store(Request $request){
      $post = new Noticia;

      $post->title = $request->title;
      $post->subtitle = $request->subtitle;
      $post->body = $request->body;

     // $image = $request->image;
      //uplod da foto(imagem)
      if($request->hasFile('image')&& $request->file('image')->isValid()){

         $imagePath = $request->image->store('fotos', 'public');

          $post->image = $imagePath; 
      }
      
      $post->foto_desc = $request->foto_desc;
      $post->data_post = $request->data_post;


      $post->save();

      return redirect('/');
  }
  public function store_artigo(Request $request){
    $post = new Artigo;

    $post->autor = $request->autor;
    $post->title = $request->title;
    $post->resumo = $request->resumo;
    $post->description = $request->description;
    $post->data_post = $request->data_post;

    $post->save();

    return redirect('artigos');
}
public function store_foto(Request $request){
    $post = new Foto;

    $post->title = $request->title;
    if($request->hasFile('image')&& $request->file('image')->isValid()){

       $imagePath = $request->image->store('galeria', 'public');

       $post->image = $imagePath; 
    }
    $post->description = $request->description;
    $post->data_post = $request->data_post;
    
      


         $post->save();

    return redirect('/');
}
public function store_podcasts(Request $request){
$post = new Podcast;

$post->title = $request->title;
$post->autor = $request->autor;
if($request->hasFile('audio')&& $request->file('audio')->isValid()){

   $imagePath = $request->audio->store('audio', 'public');

   $post->audio = $imagePath; 
}
$post->description = $request->description;
$post->data_post = $request->data_post;

  


     $post->save();

return redirect('podcasts');
}


}
