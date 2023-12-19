<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="../public/js/node_modules/lightbox2/src/css/lightbox.css" rel="stylesheet" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


</head>
<body>

        <?php include 'inc/banniere.php'; ?>  <!-- Banniere [Header Photo] -->
        <?php include 'inc/menu.php'; ?> <!-- Menu[Navbar] -->

        <div class="page-container">

        <h1 class=page-title>Galerie</h1>

        <div class="gallery">
    <table>
        <tr>
            <td>
                <figure>
                <a href="../public/img/1280px_Kursalon_Hübner_Stadtpark_Viena.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="../public/img/480px_Kursalon_Hübner_Stadtpark_Viena.jpg" alt="Image 1">
                </a>
                    <figcaption>Kursalon Hübner Stadtpark Viena</figcaption>
                </figure>
            </td>
            <td>
                <figure>
                <a href="../public/img/1280px_Opera-Vienna.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="../public/img/480px_Opera-Vienna.jpg" alt="Image 1">
                </a>
                    <figcaption>Opera Vienna</figcaption>
                </figure>
            </td>
        </tr>
        <tr>
            <td>
                <figure>
                <a href="../public/img/1280px_Syrenka_on_the_market.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="../public/img/480px_Syrenka_on_the_market.jpg" alt="Image 1">
                </a>
                    <figcaption>Syrenka on the market</figcaption>
                </figure>
            </td>
            <td>
                <figure>
                <a href="../public/img/1280px_Urania_am_Abend_am_Donaukanal.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="../public/img/480px_Urania_am_Abend_am_Donaukanal.jpg" alt="Image 1">
                </a>
                    <figcaption>Urania am Abend am Donaukanal</figcaption>
                </figure>
            </td>
        </tr>
        <tr>
            <td>
                <figure>
                <a href="../public/img/1280px_Wien_-_Peterskirche.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="../public/img/480px_Wien_-_Peterskirche.jpg" alt="Image 1">
                </a>
                    <figcaption>Wien Peterskirche</figcaption>
                </figure>
            </td>
            <td>
                <figure>
                <a href="../public/img/1280px_Wien_Hofburg_Nacht.jpg" data-lightbox="image-1" data-title="My caption">
                    <img src="../public/img/480px_Wien_Hofburg_Nacht.jpg" alt="Image 1">
                </a>
                    <figcaption>Wien Hofburg Nacht</figcaption>
                </figure>
            </td>
        </tr>
    </table>
</div>


        </div>

        <script src="../public/js/node_modules/lightbox2/src/js/lightbox.js"></script>
    
</body>

</html>