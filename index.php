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
    <form action="changeColor.php" method="POST">
        <select name="choiceColor" id="choiceColor">
            <option value="blue">blue</option>
            <option value="orange">orange</option>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="gray">gray</option>
        </select>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>