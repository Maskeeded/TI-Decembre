<?php  

$content = "accueil.php";
$title = "Accueil";

// var_dump($_GET);

if (!empty($_GET['p'])){
    switch($_GET['p']){
        case "geo":
            $content = "../templates/geographie.php";
            $title = "Géographie";
            break;
        case "hist":
            $content = "../templates/histoire.php";
            $title = "Histoire";
            break;
        case "link":
            $content = "../templates/liens.php";
            $title = "Liens";
            break;
        case "cult":
            $content = "../templates/culture.php";
            $title = "Culture";
            break;
        case "form":
            $content = "../templates/contact.php";
            $title = "Contact";
            break;
        case "gal":
            $content = "../templates/galerie.php";
            $title = "Galerie"; 
            break;
        default:
            $content = "../templates/page-404.php";
            $title = "404";
            break;
    }
}

require("../templates/$content");
