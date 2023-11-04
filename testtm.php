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


/*

#creation d'un objet projet
$object = new Project($db);


		// Create with status validated immediatly
		if (!empty($conf->global->PROJECT_CREATE_NO_DRAFT) && !$error) {
			$status = Project::STATUS_VALIDATED;
		}



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