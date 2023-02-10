<?php
//mes includes
include("requeteSql.php");
include("tabItems.php");
include("delete.php");

//lier notre formulaire a des variable  ??null = si la varibale n'existe pas alors elle est considérer comme null permets de ne pas afficher d'érreurs
$id = $_GET["id"] ?? null ;
$addForm = $_POST ["addForm"] ?? null;
$ref = $_POST   ["reference"] ?? null;
$nArticle = $_POST  ["nArticle"] ?? null;
$dArticle = $_POST  ["dArticle"] ?? null;
$aUnitaire = $_POST ["aUnitaire"] ?? null;
$vUnitaire = $_POST ["vUnitaire"] ?? null;
$qStock = $_POST    ["qStock"] ?? null;

// connection a la base de donées
$coData = connectionData();

//récupérer une donnée précis
$selectDataItem = readItem("1");
echo '<pre>';
print_r($id);
echo '</pre>';

// si les variable contiens des valeurs via le formulaire alors au moment de l'envoie il l'envoie a notre base de donées les saisie 
if (!empty($ref) && !empty($nArticle) && !empty($dArticle) && !empty($aUnitaire) && !empty($vUnitaire) && !empty($qStock)) {
    addData($ref, $nArticle, $dArticle, $aUnitaire, $vUnitaire, $qStock);
}

// recupère toute les données dans un tableaux
$recupAllTab = allColData();


?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <!-- TABLEAUX HTML -->
        <?php
            $ref = getHeaderTable();
            afficherTab($ref,$recupAllTab);
        ?>


    <!-- NOTRE FORMULAIRE -->
    <form method="POST">
        <div class="mb-3">
            <label for="reference" class="form-label">Référence</label>
            <input name="reference" type="text" class="form-control" id="reference">
        </div>
        <div class="mb-3">
            <label for="nArticle" class="form-label">Nom de l'article</label>
            <input name="nArticle" type="text" class="form-control" id="nArticle">
        </div>
        <div class="mb-3">
            <label for="dArticle" class="form-label">Description de l'article</label>
            <input name="dArticle" type="text" class="form-control" id="dArticle">
        </div>
        <div class="mb-3">
            <label for="aUnitaire" class="form-label">Prix d'achat unitaire</label>
            <input name="aUnitaire" type="text" class="form-control" id="aUnitaire">
        </div>
        <div class="mb-3">
            <label for="vUnitaire" class="form-label">Prix de vente unitaire</label>
            <input name="vUnitaire" type="text" class="form-control" id="vUnitaire">
        </div>
        <div class="mb-3">
            <label for="qStock" class="form-label">Quantité en stock</label>
            <input name="qStock" type="text" class="form-control" id="qStock">
        </div>
        <!-- NOTRE INPUT -->
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <!--<button type="submit" class="btn btn-primary">Update</button>-->
        <button type="submit" class="btn btn-primary">Supprimer</button>
    </form>

    <script src="chichaPomme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>