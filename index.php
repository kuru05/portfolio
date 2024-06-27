<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Core/Styles/style.css">
    <link rel="icon" type="image/png" href="Assets/Icons/icons.png" />
    <title>Merlin COUDOL, Étudiant en BTS SIO</title>

</head>

<body>
    
    
    <!-- LANDING PAGE -->
    
    <header>

        <section class="showcase">
            <div class="menu">
                <?php 
                require "Core/Logic/menu.php";
                $header = new GenerateContent();
                $header -> renderHeader();
                ?>
            <script>const menuToggle = document.querySelector('.toggle');
                const showcase = document.querySelector('.showcase');
                
                menuToggle.addEventListener('click', () => {
                menuToggle.classList.toggle('active');
                showcase.classList.toggle('active');
                })
                </script>
        </div>
    </header>
      </section>
        <div id="landing">
        <!-- Landing Page Background -->        
        <main class="title">
            <div class="container">
                <div class="name">
                    <h1 class="dark-blue">Merlin COUDOL</h1>
                    <h3 class="warm-sand">Étudiant en BTS SIO option SLAM | Développement web/mobile</h3>
                </div>
                <img class="logo" src="Assets/Profile-Pic/Photo.jpg" alt="Merlin COUDOL" height="500" width="500">
            </div>
        </main>

    </div>

 <!-- HIGHLIGHTS  -->
        
        <section id="highlights" class="warm-sand-back">

            <article class="wrapper"> 
                
                <h3 class="snow-white header dark-blue"><strong>Langages étudiés </strong> </h3>
            <ul class="skills">
                <li><img class="icon" src="Assets\Programming-Langages\html5-icon.png" alt="html5 icon">HTML5</li>
                <li><img class="icon" src="Assets\Programming-Langages\css3-icon.png" alt="css3 icon">CSS3</li>
                <li><img class="icon-construction icon" src="https://res.cloudinary.com/jimbocloud/image/upload/v1561811104/Portfolio/php-icon.png" alt="">PHP</li>
            </ul>
            <ul class="skills">
                <li><img class="icon-construction icon" src="Assets\Programming-Langages\js-icon.png" alt="javascript icon">Javascript</li>
                <li><img class="icon-construction icon" src="https://res.cloudinary.com/jimbocloud/image/upload/v1561811103/Portfolio/react-icon.png" alt="">React</li>
            </ul>

        </article>


    </section>


    <!-- CONTACT PAGE -->

    <section class="Contact">
        <div class="contact">
            <div id="contact">
            <h2>Contactez-moi</h2>
            <ul>
                <li><strong>Adresse : </strong></li>
                <li>4 Passage de la Vallée, 92140 CLAMART</li>
                <li><strong>Téléphone : </strong></li>
                <li> +33 7 50 68 28 13 </li>
                <li><strong>Email : </strong></li>
                <li>merlin.cdl@hotmail.com </li>
                <li><a href="https://kuru05.github.io/"><strong>Site Web </strong></a></li>
            </ul>
            </div>
        </div>

        <div class="pdf-container">
            <embed src="CV/CV 05-24.pdf" type="application/pdf" width="100%" height="100%">
        </div>
    
        <picture>
            <source srcset="Assets/Pictures/image.png" media="(min-width: 600px)" />
            <img src="Assets/Pictures/image.png" alt="Cameleon">
        </picture>
        
        <div class="video-container">
            <video width="640" height="360" controls autoplay muted>
                <source src="Assets\Videos\Fortnite The Conqueror.mp4" type="video/mp4" >

            </video>

        </div>
        <div class="Image">
            <?php
            $image = new GenererImage("Assets/Programming-Langages/js-icon.png");
            $image->render();
            ?>

        </div>



        <footer>
            <?php 
                $footer = new GenerateContent();
                $footer->renderFooter();
            ?>
        </footer>
    </div>

    </section>

</body>

</html>
