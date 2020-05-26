<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Nouveau Films</title>
</head>
<body>
    <?php require_once 'templates/header.php'?>
    <main>

        <h1>Veuillez saisir les informations ci-dessous</h1>

        <div>

            <form action="controllers/ajoutfilm.php" method="POST">

                <label for="nomfilm">Nom du nouveau film à ajouter :</label>
                <input type="text" name="nomfilm">

                <label for="genrefilm">Genre du film :</label>
                <input type="text" name="genrefilm">

                <label for="resumefilm">Résumé du film :</label>
                <input type="text" name="resumefilm">

                <input type="submit" value="Envoyer !">
        </div>


    </main>
    <?php require_once 'templates/footer.php' ?>

</body>
</html>
