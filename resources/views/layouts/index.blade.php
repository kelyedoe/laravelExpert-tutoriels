<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La vue de base</title>
    <style>
        header{
            
            background-color: #0D2E4B;    
        }
        .navigation__title{
            text-align: center;
            color: #fff;
            font-size: 2rem;
        }
        .navigation__description{
            font-size: 1rem;
            text-align: center;
            color: #fff;
        }


        .content{
            height: 300px;
            margin: 1.5rem;
            text-align: center;
        }

        .footer{
            text-align: center;
            background-color: #0D2E4B;
            color: #fff;
            font-size: 2rem;
            bottom: 0;
        }

    </style>
</head>
<body>
    <header class="navigation">
        <p class="navigation__title">HEADER</p> 
        <p class="navigation__description">L'entete est dans le fichier de base.</p>
    </header>

    <main class="content">
        @yield('content')      
    </main>


    <footer class="footer">
        <p class="navigation__title">FOOTER</p> 
        <p class="navigation__description">Le pied de page est contenu dans le fichier de base.</p>
    </footer>
</body>
</html>