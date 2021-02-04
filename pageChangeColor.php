<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste déroulante de couleur</title>
</head>
<body style="background-color: <?= isset($_SESSION['color']) ? $_SESSION['color'] : 'white' ?>;">
    <div id="container">
        <?php
        if(isset($_SESSION['color'])){?>
            <p>Voici la couleur de l'arrière plan : <?= $_SESSION['color'] ?></p>
        <?php }else{ ?>
            <p>Il n'y a pas de session déclaré merci de vous rendre sur la page suivante pour en définir une.</p>
            <a href="./index.php" title="Page pour choisir une couleur">Choisir une couleur</a>
        <?php } ?>
    </div>
</body>
</html>