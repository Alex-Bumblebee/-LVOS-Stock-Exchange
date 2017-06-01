<?php

require_once("pass/database.php");

/* 
[FR] Configuration : 

volatilite = Valeur de volatilite plus cette valeur sera grande moins la volatilite sera important. Plus une valeur est volatile plus elle va bouge selon les ventes.
id_ressource = ID de la ressource dans la base de donnée, dans la table stock_exchange ou dans la table resource.


[EN] Configuration: 

volatility = Volatility value plus this value will be larger the greater the volatility. The more volatile a value is, the more it will move according to sales.
id_ressource = Resource ID in the database, in the stock_exchange table, or in the resource table.

*/

$volatilite_ressource1 = 225;
$volatilite_ressource2 = 225;
$id_ressource1 = 13;
$id_ressource2 = 6;

/* END Configuration */


$requete_ressource1 = $bdd->prepare("SELECT * FROM stock_exchange INNER JOIN resources ON stock_exchange.resource_id = resources.resources_id WHERE resource_id = ?");
$requete_ressource1->execute(array($id_ressource1));
$ressource1 = $requete_ressource1->fetch();

$requete_ressource2 = $bdd->prepare("SELECT * FROM stock_exchange INNER JOIN resources ON stock_exchange.resource_id = resources.resources_id WHERE resource_id = ?");
$requete_ressource2->execute(array($id_ressource2));
$ressource2 = $requete_ressource2->fetch();

$coeff_1_min = $ressource1['coef']/100;
$coeff_1_min = 1-$coeff_1_min;
$coeff_1_max = $ressource1['coef']/100;
$coeff_1_max = 1+$coeff_1_max;

$combo_1_ressource1 = $ressource1['sell']/$ressource2['sell'];
$combo_1_ressource2 = $ressource2['sell']/$ressource1['sell'];

if ($combo_1_ressource1 > 1) {
	$combo_1_ressource1 = $combo_1_ressource1 - 1;
} elseif ($combo_1_ressource1 < 1) {
	$combo_1_ressource1 = 1 - $combo_1_ressource1;
} elseif ($combo_1_ressource1 >= 2) {
	$combo_1_ressource1 = 1;
} elseif ($combo_1_ressource1 <= 0) {
	$combo_1_ressource1 = 0;
}

$combo_1_ressource1 = $combo_1_ressource1 / $volatilite_ressource1;
$combo_1_ressource1 = $combo_1_ressource1 * 100;

if ($combo_1_ressource2 > 1) {
	$combo_1_ressource2 = $combo_1_ressource2 - 1;
} elseif ($combo_1_ressource2 < 1) {
	$combo_1_ressource2 = 1 - $combo_1_ressource2;
} elseif ($combo_1_ressource2 >= 2) {
	$combo_1_ressource2 = 1;
} elseif ($combo_1_ressource2 <= 0) {
	$combo_1_ressource2 = 0;
}

$combo_1_ressource2 = $combo_1_ressource2 / $volatilite_ressource2;
$combo_1_ressource2 = $combo_1_ressource2 * 100;

if ($ressource2["sell"] > $ressource1["sell"]) {
	$combo_1_ressource2 = 1 - $combo_1_ressource2;
	$combo_1_ressource1 = 1 + $combo_1_ressource1;
} elseif ($ressource2["sell"] < $ressource1["sell"]) {
	$combo_1_ressource2 = 1 + $combo_1_ressource2;
	$combo_1_ressource1 = 1 - $combo_1_ressource1;
} elseif ($ressource2["sell"] == $ressource1["sell"]) {
	$combo_1_ressource2 = 1;
	$combo_1_ressource1 = 1;
}

if ($combo_1_ressource1 > $coeff_1_max) {
	$coeff_1_ressource1 = $coeff_1_max;
} elseif ($combo_1_ressource1 < $coeff_1_min) {
	$coeff_1_ressource1 = $coeff_1_min;
} else {
	$coeff_1_ressource1 = $combo_1_ressource1;
}
if ($combo_1_ressource2 > $coeff_1_max) {
	$coeff_1_ressource2 = $coeff_1_max;
} elseif ($combo_1_ressource2 < $coeff_1_min) {
	$coeff_1_ressource2 = $coeff_1_min;
} else {
	$coeff_1_ressource2 = $combo_1_ressource2;
}

$prix_ressource1 = $ressource1['price_base']*$coeff_1_ressource1;
$prix_ressource2 = $ressource2['price_base']*$coeff_1_ressource2;


echo $prix_ressource1;
echo "\n";


echo $prix_ressource2;
echo "\n";

$prix_ressource1_avant = $ressource1['price_current'];
$prix_ressource2_avant = $ressource2['price_current'];

$update_ressource1 = $bdd->prepare("UPDATE stock_exchange SET price_current = ?, price_previous = ? WHERE resource_id = ?");
$update_ressource1->execute(array($prix_ressource1,$prix_ressource1_avant,$id_ressource1));
$update_ressource2 = $bdd->prepare("UPDATE stock_exchange SET price_current = ?, price_previous = ? WHERE resource_id = ?");
$update_ressource2->execute(array($prix_ressource2,$prix_ressource2_avant,$id_ressource2));

?>