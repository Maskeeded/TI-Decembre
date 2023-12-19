<?php  

$page = "accueil.php";
$title = "Accueil";

// var_dump($_GET);

if (!empty($_GET['p'])){
    switch($_GET['p']){
        case "geo":
            $page = "../templates/geographie.php";
            $title = "Géographie";
            break;
        case "hist":
            $page = "../templates/histoire.php";
            $title = "Histoire";
            break;
        case "link":
            $page = "../templates/liens.php";
            $title = "Liens";
            break;
        case "cult":
            $page = "../templates/culture.php";
            $title = "Culture";
            break;
        case "form":
            $page = "../templates/contact.php";
            $title = "Contact";
            break;
        case "gal":
            $page = "../templates/galerie.php";
            $title = "Galerie"; 
            break;
        default:
            $page = "../templates/page-404.php";
            $title = "404";
            break;
    }
}else{
    $page = "../templates/accueil.php";
    $title = "Accueil";
}

require("../templates/$page");
