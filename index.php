<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Practica3</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <script src="main.js"></script>
</head>
<body>
    <header class="cabecalho">
       <h1 class="logo">
           <a href="index.html" title="Shop"></a>
       </h1> 

       <form method="post">
            <input type="text" placeholder="">
            <button><i class="fa fa-search fa-lg"></i> </button>
       </form>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="#"> Inicio </a></li>
        </ul>
        <div class="social-icons">
            <a href="#" class="btn-facebook"> <i class="fa fa-facebook fa-lg"></i> </a>
            <a href="#" class="btn-twitter"> <i class="fa fa-twitter fa-lg"></i> </a>
            <a href="#" class="btn-google"> <i class="fa fa-google fa-lg"></i> </a>
        </div>
    </nav>
    <main class="principal">
        <article class="sobre">
            <h2>Sobre nosotros</h2>
            <img src="img/loja.jpg" alt="NodeShop">
            <p>
                Esta página corresponde a la práctica 2 del Sem. de SO en Red
            </p>
        </article>
        <aside class="onde-estamos">
            <h2> Contacto </h2>
            <ul>
                <li><i class="fa fa-phone fa-lg"></i>3321567562/li>
                <li><i class="fa fa-whatsapp fa-lg"></i>3321567562</li>
                <li><i class="fa fa-envelope fa-lg"></i> gmanu109@gmail.com</li>
            </ul>
        </aside>
    </main>
    <section class="newsletter">
        <h3>Suscripción</h3>
        <p> Escribe tu email para obtener información </p>
        <form method="post">
            <input type="text" placeholder="Nombre">
            <input type="email" placeholder="Email">
            <button>Suscribir</button>
        </form>
    </section>
    <footer class="rodape">
        <p>Juan Manuel Banda Avalos - Practica 2</p>
    </footer>
</body>
</html>