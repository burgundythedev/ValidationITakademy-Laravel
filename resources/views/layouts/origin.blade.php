<!DOCTYPE html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" href="/css/style.css"> {{-- lien speciale entre le css generale dans la page des elements --}}
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
@yield('style') {{--lien entre le css de chaque page specifique et la page en question--}}
</head>
<html>
    <body>
        <header>
            <nav>
                <li><a href ="/home">Home</a></li>
                <li><a href ="/character">Les Héros de Comics</a></li>
                <li><a href ="/draftsman">Les Dessinateurs</a></li>
                @yield('add')
            </nav>
        </header>
         @yield('content') {{--afficher dans la page des elements --}}
        <main>
            <img class="home-pics" src="https://pbs.twimg.com/profile_images/1214180130362290177/fMcumfOv.jpg" alt="librabry">
        </main>
        <footer>github:burgundythedev:Validation-Laravel/IT-Nocommercialpurpose</footer>
    </body>
</html>
