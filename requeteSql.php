<?php
// se connecter a notres base de donées SQL
function connectionData()
{
    try {
        $user = "root";
        $pass = "";
        $pdo = new PDO('mysql:host=localhost;dbname=vapStore', $user, $pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "ca marche !";
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
        $insert = "INSERT INTO `tabchichapomme`(`Référence`, `Nom de l'article`, `Description de l'article`, `Prix d'achat unitaire`, `Prix de vente unitaire`, `Quantité en stock`) 
        VALUES ('$ref','$nArticle','$dArticle','$aUnitaire','$vUnitaire','$qStock')" ;

        $con->exec($insert);
    }

     catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}


?>