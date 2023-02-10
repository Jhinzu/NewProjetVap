<?php
include("requeteSql.php");
$id = $_GET["id"] ?? null;

if (!empty($id))
{
    deleteUser($id);
}

header('Location: chichaPomme.php');
exit;
?>