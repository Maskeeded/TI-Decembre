<?php  

$page = "accueil.php";
$title = "Accueil";

// var_dump($_GET);

if (!empty($_GET['p'])){
    switch($_GET['p']){
        case "accueil":
            $page = "../templates/accueil.php";
            $title = "Accueil";
            break;
        case "geographie":
            $page = "../templates/geographie.php";
            $title = "Géographie";
            break;
        case "histoire":
            $page = "../templates/histoire.php";
            $title = "Histoire";
            break;
        case "liens":
            $page = "../templates/liens.php";
            $title = "Liens";
            break;
        case "culture":
            $page = "../templates/culture.php";
            $title = "Culture";
            break;
        case "contact":
            $page = "../templates/contact.php";
            $title = "Contact";
            break;
        case "galerie":
            $page = "../templates/galerie.php";
            $title = "Galerie"; 
            break;
        default:
            $page = "../templates/page-404.php";
            $title = "404";
            break;
    }
}

require("../templates/$page");
