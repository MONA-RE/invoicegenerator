<?php



// Load Dolibarr environment
require '../../main.inc.php';



require_once DOL_DOCUMENT_ROOT.'/user/class/user.class.php';
require_once DOL_DOCUMENT_ROOT.'/projet/class/project.class.php';



#gestion de l'utilisateur de création d'un projet

$user = new User($db);
$user->fetch(1); // Admin user

# affichage du nom de l'utilisateur
echo $user->lastname;

$nombrealeatoire = random_int(1, 1000000);

#creation d'un objet projet
$object = new Project($db);

$object->ref = 'TESTTM'.$nombrealeatoire;
$object->title = 'TESTTM title'.$nombrealeatoire;    
$object->socid = 1;
$object->description = 'TESTTM description';
$object->public          = GETPOST('public', 'alphanohtml');
$object->opp_amount      = 0;
$object->budget_amount   = 0;
$object->date_c = dol_now();
$object->date_start      = dol_now();
$object->date_end        = dol_now();
$object->date_start_event = dol_now();
$object->date_end_event   = dol_now();
$object->location        = '';
$object->statut = Project::STATUS_VALIDATED;
$object->opp_status      = 0;
$object->opp_percent     = 0;
$object->usage_opportunity    = 0;
$object->usage_task           = 0;
$object->usage_bill_time      = 0;
$object->usage_organize_event = 0;

$result = $object->create($user);


echo $object->id . ' ' . $object->ref . ' ' . $object->title . ' ' . $object->socid . ' ' . $object->description ;





/*
# redirection vers la page du projet créé
        if (!$error) {
            $db->commit();

            if (!empty($backtopage)) {
                $backtopage = preg_replace('/--IDFORBACKTOPAGE--|__ID__/', $object->id, $backtopage); // New method to autoselect project after a New on another form object creation
                $backtopage = $backtopage.'&projectid='.$object->id; // Old method
                header("Location: ".$backtopage);
                exit;
            } else {
                header("Location:card.php?id=".$object->id);
                exit;
            }
        }
*/        

?>