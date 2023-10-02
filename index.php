<?php
include "classes/class_vehicule.php";
include "classes/class_camion.php";

echo "Mon joli véhicule<br/>";

$vehicule1 = new vehicule("verte", "figaro");
$vehicule2 = new vehicule("rouge", "monster");

echo "Sa couleur est : $vehicule1->couleur <br/>";
echo "Sa marque est : $vehicule1->marque";
echo "-" . $vehicule->roule() . "<br/>";
echo "type de la propriete vitesse =" . get_class($vehicule1) . "<br/>";

echo "Sa couleur est : $vehicule2->couleur <br/>";
echo "Sa marque est : $vehicule2->marque";
echo "-" . $camion->roule() . "<br/>";
echo "type de la propriete vitesse =" . get_class($vehicule2) . "<br/>";