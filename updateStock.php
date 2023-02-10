<?php
include("requeteSql.php");
include ("tabItems.php");
$id = $_GET["id"] ?? null;

if (!empty($id))
{
    if($_GET["action"] == "increment")
    {
    increment($id);
    }
    else
    {
        decrement($id);
    }
}

header('Location: chichaPomme.php');
exit;

?>