<?php
function afficherTab($header,$row)
{
?>
    <table class="table table-dark">
        <tr>
            <?php foreach ($header as $headers) : ?>
                <th><?= $headers;?></th>
            <?php endforeach ?>
        </tr>
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