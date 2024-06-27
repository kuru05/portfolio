

<?php
//Classe pour faire le header
class Menu{
private $index;
private $_index;
private $seasons;
private $_seasons;
private $about;
private $_about;


//Fonction constructeur
public function __construct(){
    $this->index= "index.php";
    $this->_index="../index.php";
    $this->seasons="fr/seasons.php";
    $this->_seasons="seasons.php";
    $this->about="fr/about.php";
    $this->_about="about.php";
}
//Fonction pour faire le header (index)
public function header(){
    echo "<li><a href=" . $this->index . "> Home</a></li>\n";
    echo "<li><a href=" . $this->seasons . "> Seasons</a></li>\n";
    echo "<li><a href=" . $this->about . "> About</a></li>";
}
//Fonction pour faire le header (autres pages)
public function _header(){
    echo "<li><a href=" . $this->_index . "> Home</a></li>\n";
    echo "<li><a href=" . $this->_seasons . "> Seasons</a></li>\n";
    echo "<li><a href=" . $this->_about . "> About</a></li>";
}

//Closing bracket for the class
}


/*Creating a Cookie
$CookieName = "Zavala";
$CookieValue = "Destiny Game Character";
setCookie($CookieName, $CookieValue, time() + (86400 * 30), "/");

//Reading a Cookie
if (!isset($_COOKIE[$CookieName])) {
echo "Cookie named '". $CookieName. "' is not set!";
} else {
echo "Cookie '". $CookieName. "' is set!<br>";
echo "Value is: ". $_COOKIE[$CookieName];
}

//Stockage du cookie dans un fichier .txt
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $file = "cookies.txt"; // Nom du fichier où vous souhaitez stocker les e-mails

    // Écriture de l'e-mail dans le fichier
    $current = file_get_contents($file);
    $current .= $email . "\n";
    file_put_contents($file, $current);

    echo "E-mail enregistré avec succès!";

}*/



/* Création de classes et interfaces 

Une image, un titre H2 et un paragraphe */

/*class Character{
}

interface GenerateCode
{
public function generateHTML();
}
class GameCharacter extends Character{
//Propriétés ( /Attributs)
public $Name;
public $Picture;
public $Description;

//Méthodes ( /Fonctions)
public function __construct($Name, $Picture, $Description)
{
    $this -> Name = $Name;
    $this -> Picture = $Picture;
    $this -> Description = $Description;

    echo "<h2>". $this -> Name. "</h2>";
}

public function _destruct()
{
    
}
public function generateHTML()
{

}
*/