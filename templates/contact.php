

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <?php include 'inc/banniere.php'; ?>  <!-- Banniere [Header Photo] -->
        <?php include 'inc/menu.php'; ?> <!-- Menu[Navbar] -->

        <div class="page-container">

        <h1 class=page-title>Bienvenue sur notre site consacre a Vienne.</h1>
            <img src="img/contacts.jpg" class="page-image" alt="Photo de armoiries Vienes">

            <p class=page-text> 

                Pour nous laisser un commentaire ou pour obtenir un renseignemenent complementaire, veuillez remplir le formulaire ci-dessous.
                
            </p>

            <form action="" method="GET" class="form-group">

    <div><label for="nom">NOM: </label><input type="text" name="nom" id="nom"></div>
    <div><label for="prenom">PRENOM: </label><input type="text" name="prenom" id="prenom"></div>
    <div><label for="ville">VILLE: </label><input type="text" name="ville" id="ville"></div>
    <div><label for="email">E-MAIL: </label><input type="text" name="email" id="email"></div>
    <div><label for="comments">COMMENTAIRES: </label><input type="text" name="comments" id="comments"></div>

    </form>

    <button class="sent-button">Envoyer votre message</button>

        </div>
    
</body>
</html>