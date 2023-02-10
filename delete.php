<?php

$ID = $_GET["ID"] ?? null;


if (!empty($ID)) {
    $sql = "DELETE FROM `chiChaPomme` WHERE `chiChaPomme`.`ID` = $ID;";

    $chiChaPommeStatement = $pdo->prepare($sql);
    $chiChaPommeStatement->execute();
}





// Redirige vers chiChaPomme.php , attention à ne pas faire de boucle infinie avec un include
// header('Location: chiChaPomme.php'); 
// exit;


