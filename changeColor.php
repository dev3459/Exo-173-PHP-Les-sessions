<?php
session_start();
if(isset($_POST['choiceColor'], $_POST['submit'])){
    $_SESSION['color'] = $_POST['choiceColor'];
    header('Location: ./index.php');
}