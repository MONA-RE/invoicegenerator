<?php



// Load Dolibarr environment
require '../../main.inc.php';



require_once DOL_DOCUMENT_ROOT.'/user/class/user.class.php';

include DOL_DOCUMENT_ROOT.'/core/actions_sendmails.inc.php';

include DOL_DOCUMENT_ROOT.'core/class/CMailFile.class.php';



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


$subject = 'Test envoie mail';
$sendto = 'teddy.morel@gmail.com';
$from = 'contact@mona.re';
$message = 'Test envoie mail depuis testtm2.php';



// fonction d'envoie de mail : 

    $mailfile = new CMailFile($subject, $sendto, $from, $message);

    if (!empty($mailfile->error) || !empty($mailfile->errors)) {
        echo $mailfile->error;
       
    } else {
        $result = $mailfile->sendfile();
    }
        
    

        ?>