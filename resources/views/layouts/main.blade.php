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


    <!-- css da aplicação -->
    <link href="/css/styles.css" rel="stylesheet">

</head>

<body>
    <div class="container-fluid ">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark  justify-content-center">
                <a class="navbar-brand" href="/">PedraNews</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
    <div class="container col-lg-10 col-sm-4">
                <div class="col-lg-2 py-5 logo">  <a href="/"><h1>PedraNews</h1></a></div>
                <ul class="nav justify-content-center ">
                    <li class="nav-item">
                
                <a class="nav-link active" href="/galeria">Redação-fotos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/artigosTotal">Artigos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/podcasts">Podcasts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sobre">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" target="blank" href="https://www.facebook.com/ejardimpedrabranca/?ref=page_internal">Facebook</a>
            </li>
            </ul>
            
        </header>
        <!-- Diretiva do laravel -->
        <!-- ADICIONAS O S INCLUDES PARA AS PÁGINAS -->
        @yield('content')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <footer class="footer">
            <p class="text-center">BENETHOWEN &copy; 2022</p>
        </footer>

    </div>
</body>

</html>