<?php 
include ("requeteSql.php");
//variable
$id = $_GET["id"] ?? null ;
$addForm = $_POST ["addForm"] ?? null;
$ref = $_POST   ["reference"] ?? null;
$nArticle = $_POST  ["nArticle"] ?? null;
$dArticle = $_POST  ["dArticle"] ?? null;
$aUnitaire = $_POST ["aUnitaire"] ?? null;
$vUnitaire = $_POST ["vUnitaire"] ?? null;
$qStock = $_POST    ["qStock"] ?? null;
//crée une variable id pour avec la méthode get pour récupérer de l'url
$id = $_GET["id"] ?? null ;
// utilise la fonction séléction sur un seule élément et cible celon l'id
$focus = readItem($id);
// fonction update
//on joue update
if (!empty($ref) && !empty($nArticle) && !empty($dArticle) && !empty($aUnitaire) && !empty($vUnitaire) && !empty($qStock))
{
    update($id,$ref,$nArticle,$dArticle,$aUnitaire,$vUnitaire,$qStock);
}
echo '<pre>';
print_r($focus);
echo '</pre>';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modif</title>
</head>
<body>
<form method="POST">
        <div class="mb-3">
            <label for="reference" class="form-label">Référence</label>
            <input name="reference"  type="text" class="form-control" id="reference">
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="chichaPomme.php">retour</a>
    <script src="chichaPomme.js"></script>
</body>
</html>