<?php
function afficherTab($header,$rows)
{
?>
    <table class="table table-dark">
        <tr>
            <?php foreach ($header as $headers) : ?>
                <th><?= $headers;?></th>
            <?php endforeach ?>
            <th colspan="2" class="text-center">option</th>
            <th colspan="2">ajout</th>
        </tr>
            <?php foreach ($rows as $row) : ?>
                <tr>
                <td><?=$row["ID"];?></td>
                    <td><?=$row["Référence"];?></td>
                    <td><?=$row["Nom de l'article"];?></td>
                    <td><?=$row["Description de l'article"];?></td>
                    <td><?=$row["Prix d'achat unitaire"];?></td>
                    <td><?=$row["Prix de vente unitaire"];?></td>
                    <td><?=$row["Quantité en stock"];?></td>
                    <td><a href="http://localhost/NewProjetVap/delete.php?id=<?=$row["ID"];?>">delete</a></td>
                    <td><a href="http://localhost/NewProjetVap/updateStock.php?id=<?=$row["ID"];?>">modif</a></td>
                    <td><a href="http://localhost/NewProjetVap/updateStock.php?id=<?=$row["ID"];?>&action=increment">+</a></td>
                    <td><a href="http://localhost/NewProjetVap/updateStock.php?id=<?=$row["ID"];?>&action=decrement">-</a></td>
                </tr>
            <?php endforeach ?>
        
    </table>
<?php
}

function getHeaderTable()
{
    $header = array();
    $header[] = "ID";
    $header[] = "Référence";
    $header[] = "Nom Article";
    $header[] = "Description";
    $header[] = "Prix de d'achat unitaire";
    $header[] = "Prix de vente unitaire";
    $header[] = "Quantité";
    return $header;
}
?>