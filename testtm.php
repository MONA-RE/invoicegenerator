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




$nombrealeatoire = random_int(1, 1000000);

#creation d'un objet projet
		# pour chaque nouveau tiers création d'un projet
		# création d'un objet projet
		$projet = new Project($db);
		$projet->ref = $nombrealeatoire;
		$projet->title = 'Projet nouveau tiers :'.$object->name;   
		$projet->socid = $object->id;
		$projet->description = 'Description nouveau tiers :'.$object->name;
		$projet->public          = 0;
		$projet->opp_amount      = 0;
		$projet->budget_amount   = 0;
		$projet->date_c = dol_now();
		$projet->date_start      = dol_now();
		$projet->date_end        = dol_now();
		$projet->date_start_event = dol_now();
		$projet->date_end_event   = dol_now();
		$projet->location        = '';
		$projet->statut = Project::STATUS_VALIDATED;
		$projet->opp_status      = 0;
		$projet->opp_percent     = 0;
		$projet->usage_opportunity    = 0;
		$projet->usage_task           = 0;
		$projet->usage_bill_time      = 0;
		$projet->usage_organize_event = 0;	

$result = $projet->create($user);


echo $projet->id . ' ' . $projet->ref . ' ' . $projet->title . ' ' . $projet->socid . ' ' . $projet->description ;





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