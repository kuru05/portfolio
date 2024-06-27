<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.9" />
<link rel="stylesheet" type="text/css" href="../Core/Styles/style.css" /> 
<link rel="icon" type="image/png" href="../Assets/Icon/icon.png" />

<title>Trente Ans et Plus | Bungie</title>

</head>
<body>

<header>
<nav>
<div>
    <ul>
        <section class="menu">
        <?php
            require '../Core/Logic/Menu.php';
            $navigation = new Menu();
            $navigation-> _header();
        ?>
        </section>
    </ul>
</div>
</nav>

</header>

<main class="container-about">
<li><a href="https://careers.bungie.com/about">Découvrez-nous</a></li>
<section class="container-content">
<h1>TRENTE ANS ET PLUS</h1>
<p>Fondé en 1991 dans un appartement d'une chambre à Chicago, Illinois, Bungie est le studio à l'origine de certains des plus grands succès de l'histoire du jeu vidéo, dont Destiny, Halo, et bien d'autres.</p>
<p>Avec son siège social mondial à Bellevue, Washington - où se trouve notre studio de plus de 100 000 pieds carrés sur le point d'être rénové - nous avons parcouru un long chemin, et nos objectifs restent les mêmes : créer les meilleurs jeux du monde et cultiver des communautés dynamiques autour d'eux.</p>
</section>
<section class="container-content">    
<h1>VALEURS FONDAMENTALES</h1>
<p>Nous valorisons une culture d'excellence. Nous encourageons la discussion et les retours constructifs.</p>
<p>Nous avons des convictions fortes et nous nous efforçons d'élargir continuellement nos perspectives.</p>
<p>Les valeurs fondamentales de Bungie alimentent notre façon de voir le monde et la manière dont nous donnons vie aux jeux que nous créons.</p>
</section>
</main>

</body>
</html>