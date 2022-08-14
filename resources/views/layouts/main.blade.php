<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- css do Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
   
    <!-- Sommernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- css da aplicação -->
    <link href="/css/styles.css" rel="stylesheet"> 
    <script src="/js/btnscript.js"></script> 


</head>

<body>
    <header>
        <div>
                <h2>PedraNews</h2>
               
            </div>
            <div class="logo">
            
                <a href="/"><img  src="/image/pedranews.png" alt="logo do pedranews"></a>
            </div>
            <nav>
            
                    <a  href="/galeria">Redação-fotos</a>
                    
                    <a  href="/artigosTotal">Artigos</a>
                
                    <a  href="/podcasts">Podcasts</a>
                
                    <a href="/sobre">Sobre</a>
                
                    <a  href="/login">Editor-coordenação</a>
                    
                    <a  target="_blank" href="https://www.facebook.com/ejardimpedrabranca/?ref=page_internal">Facebook</a>
                
                    <button class="btn btn-success botao" id="blog" onclick="aside();">blog</button>
                    
                
                </nav>
            
            </header>
    <main>
                <div class="sidenav">
                    
             <h2>Blog</h2>
             <ul>
                 <li><a href="https://asfofoqueirasemdia.blogspot.com/">As fofoqueiras em dia</a></li>
                 <li><a href="https://casosdefamilia2.blogspot.com/">Vida dos famosos</a></li>
                 <li><a href="https://grupotechdatecnologia.blogspot.com/">Blog da tecnologia</a></li>
                 <li><a href="https://f0focal1zando.blogspot.com/">Fofocalizando</a></li>
                 <li><a href="https://animaiscomperigodeextincao.blogspot.com/">Animais em extinção</a></li>
                 <li><a href="https://asgarotasdobloggz.blogspot.com/">As garotas do blog</a></li>
                 <li><a href="https://blackknights22222.blogspot.com/">Black Knights</a></li>
                 <li><a href="https://jlbioggames.blogspot.com/">Jl blog games</a></li>
                 <li><a href="https://pedranaticoss.blogspot.com/">Pedra naticos</a></li>
                 <li><a href="https://puberdadefeminin.blogspot.com/">Puberdade</a></li>
                 <li><a href="https://grupodaleticia.blogspot.com/">Não é da sua conta</a></li>
                 <li><a href="https://tropadosbacanas.blogspot.com/">Tropa dos bacanas</a></li>
                 <li><a href="https://amigasbombahaa.blogspot.com/">Bombahaa</a></li>
                 <li><a href="https://lulusjames.blogspot.com/">Lulus</a></li>
                </ul>
            </div>
            <!-- Diretiva do laravel -->
            <!-- ADICIONAS O S INCLUDES PARA AS PÁGINAS -->
            @yield('content')
    </main>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        
        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/cdd0c2c5dc.js" crossorigin="anonymous"></script>
        
        <!-- Sommernote -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        
        <!--  <script src="/js/script.js"></script> -->
        
            
        <footer>
            <p>BENETHOWEN &copy; 2022</p>
        </footer>

</body>

</html>