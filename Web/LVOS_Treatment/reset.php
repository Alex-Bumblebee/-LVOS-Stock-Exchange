<?php
require_once("pass/database.php");

$reset = $bdd->prepare("UPDATE stock_exchange SET sell = ?");
$reset->execute(array(100));

?>