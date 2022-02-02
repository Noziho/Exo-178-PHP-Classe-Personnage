<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->getNom();


$perso->walkRight();
$perso->walkRight();
$perso->walkRight();
$perso->walkRight();

$perso->walkLeft();

$perso->walkTop();
$perso->walkTop();
$perso->walkTop();
$perso->walkTop();

$perso->walkDown();


echo "<br>Position X: ".$perso->getX();
echo "<br>Position Y: ".$perso->getY();
echo "<br><br>";
$perso2 = new personnage();
$perso2->setNom("Custom name");
echo $perso2->getNom();


$perso2->walkRight();
$perso2->walkRight();


$perso2->walkLeft();

$perso2->walkTop();
$perso2->walkTop();
$perso2->walkTop();

$perso2->walkDown();

echo "<br>Position X: ".$perso2->getX();
echo "<br>Position Y: ".$perso2->getY();


