<?php 

trait Render {
    function renderHeader() {
        ?>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#highlights">Projet</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        <?php
    }

    function renderFooter() {
        ?>
            <div class="social-icons">
                <a class="icon" href="https://www.linkedin.com/in/merlin-coudol-860705195/" target="_blank">
                    <img src="Assets/Icons/linkedin-icon.png" alt="">
                </a>
                <a class="icon" href="https://github.com/kuru05" target="_blank">
                    <img src="Assets/Icons/github-icon.png" alt="">
                </a>
            </div>
            <div>
                <p class="copyright white-coco">
                    © Merlin COUDOL, 2024 | Tous droits réservés
                </p>
            </div>
    
        <?php
    }

}
interface RenderMenu
{
    public function renderHeader();
public function renderFooter();
}
class GenerateContent implements RenderMenu
{
    
    use Render;
}



// BTS BLANC - M. AMAR ASSOULINE



abstract class Generer {
    protected $image;

}

interface Image {
    public function render();
}

class GenererImage extends Generer
{
    use GenererImages;
}

trait GenererImages {
    public function __construct($path)
    {
        $this->image = '<img src="' . $path . '" alt="Image">';
    }
    public function render()
    {
        echo $this->image;
    }
}