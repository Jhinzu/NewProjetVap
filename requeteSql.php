<?php
// se connecter a notres base de donées SQL
function connectionData()
{
    try {
        $user = "admin";
        $pass = "adminpwd";
        $pdo = new PDO('mysql:host=localhost;dbname=vapStore', $user, $pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo; /*retourne uniquement les 2 variable PDO dans d'autres fonction*/

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

// sélèctionne toute nos collone dans notre tableaux
function allColData() {
    $con = connectionData();
    $requete = 'SELECT * from tabChichaPomme'; /* notres requete va chercher toute les collonne dans notre table */
    $rows = $con->query($requete); /* prépare les données*/
    $recipe = $rows->fetchAll(); /* éxécute tout les éléments de notres requète */
    return $recipe; // on retourne cette variable pour l'utiliser ailleurs donc récupérer tout les élement de notre tableaux SQL
} 

//envoie a la base de donées 
function addData($ref,$nArticle,$dArticle,$aUnitaire,$vUnitaire,$qStock)
{
    try 
    {
        $con = connectionData();
        $insert = "INSERT INTO `tabChichaPomme`(`Référence`, `Nom de l'article`, `Description de l'article`, `Prix d'achat unitaire`, `Prix de vente unitaire`, `Quantité en stock`) 
        VALUES ('$ref','$nArticle','$dArticle','$aUnitaire','$vUnitaire','$qStock')" ;

        $con->exec($insert);
    }

     catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

 
//recupere un Items
function readItem($id) {
    $con = connectionData();
    $requete = "SELECT * from tabChichaPomme where ID = '$id' ";
    $stmt = $con->query($requete);
    $row = $stmt->fetchAll();
    if (!empty($row)) {
        return $row[0];
    }
}

//met à jour le user
function update($id,$ref,$nArticle,$dArticle,$aUnitaire,$vUnitaire,$qStock) {
    try {
        $con = connectionData();
        $requete = "UPDATE `tabChichaPomme` SET
         `Référence` = '$ref',
         `Nom de l'article` = '$nArticle',
          `Description de l'article` = '$dArticle',
           `Prix d'achat unitaire` = '$aUnitaire',
            `Prix de vente unitaire` = '$vUnitaire',
            `Quantité en stock` = '$qStock'
             WHERE `tabChichaPomme`.`ID` = $id ";
        $con->query($requete);
    }
    catch(PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function deleteUser($id) {
    try {
        $con = connectionData();
        $requete = "DELETE FROM `tabChichaPomme` WHERE `tabChichaPomme`.`id` = $id;";
        $con->query($requete);
    }
    catch(PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function increment($id)
{
    try {
        $con = connectionData();
        $requete = "UPDATE `tabChichaPomme` SET `Quantité en stock` = `Quantité en stock` + 1 WHERE `ID` = $id;";
        $con->query($requete);
    }
    catch(PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

function decrement($id)
{
    try {
        $con = connectionData();
        $requete = "UPDATE `tabChichaPomme` SET `Quantité en stock` = `Quantité en stock` - 1 WHERE `ID` = $id;";
        $con->query($requete);
    }
    catch(PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}


?>