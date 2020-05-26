<?php require 'controllers/affichagefilm.php';?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Films</title>
</head>
<body>
    <?php require_once 'templates/header.php'?>
    <main>
        <h1>Liste des films</h1>
            <table>
                <tr>
                    <th>Numéro du film </th>
                    <th>Nom du film </th>
                    <th>Genre du film </th>
                    <th>Résumé du film </th>
                </tr>
                <?php foreach ($films as $film):?>
                <tr>
                     <td><?php echo($film['idfilm'])?></td>
                     <td><?php echo($film['nomfilm'])?></td>
                     <td><?php echo($film['genrefilm'])?></td>
                     <td><?php echo($film['resumefilm'])?></td>
                </tr>
                <?php endforeach ?>
            </table>

            <h1 class="supr">Pour supprimer un film</h1>

            <div>
                <form action="controllers/supprimerfilm.php" method="POST">
                    <p class="num">Saisir le numéro du film pour le supprimer</p>
                    <input name="idfilm" value="<?php echo($film['idfilm'])?>">
                    <input type="submit" value="Supprimer le film">
            </div>

    </main>
    <?php require_once 'templates/footer.php' ?>

</body>
</html>
