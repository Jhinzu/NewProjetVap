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