<?php
function afficherTab($header,$rows)
{
?>
    <table class="table table-dark">
        <tr>
            <?php foreach ($header as $headers) : ?>
                <th><?= $headers;?></th>
            <?php endforeach ?>
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
                    <td>delete</td>
                    <td><a href="http://localhost/NewProjetVap/modifForm.php?id=<?=$row["ID"];?>">modif</a></td>
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
    $header[] = "option";
    $header[] = "option";
    return $header;
}
?>