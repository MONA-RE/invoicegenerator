<?php



// Load Dolibarr environment
require '../../main.inc.php';



require_once DOL_DOCUMENT_ROOT.'/user/class/user.class.php';
require_once DOL_DOCUMENT_ROOT.'/projet/class/project.class.php';



#gestion de l'utilisateur de création d'un projet

$user = new User($db);
$user->fetch(1); // Admin user
# affichage du nom de l'utilisateur
echo $user->lastname .'<br>';

#chargement de l'objet tiers
$object = new Societe($db);
$object->fetch(8);  //chargement du tiers

echo $object->name .'<br>';




$nombrealeatoire = random_int(1, 1000000);

#test envoie mail


?>