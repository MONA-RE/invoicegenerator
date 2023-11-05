<?php



// Load Dolibarr environment
require '../../main.inc.php';



require_once DOL_DOCUMENT_ROOT.'/user/class/user.class.php';

include DOL_DOCUMENT_ROOT.'/core/actions_sendmails.inc.php';



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


// formulaire de main : 
    // devdol18_1/htdocs/core/actions_sendmails.inc.php

    	// Create form object
			include_once DOL_DOCUMENT_ROOT.'/core/class/html.formmail.class.php';
			$formmail = new FormMail($db);
			$formmail->trackid = $trackid; // $trackid must be defined

			$attachedfiles = $formmail->get_attached_files();
			$filepath = $attachedfiles['paths'];
			$filename = $attachedfiles['names'];
			$mimetype = $attachedfiles['mimes'];



// fonction d'envoie de mail : 
	// Send mail (substitutionarray must be done just before this)
    if (empty($sendcontext)) {
        $sendcontext = 'standard';
    }
    $mailfile = new CMailFile($subject, $sendto, $from, $message, $filepath, $mimetype, $filename, $sendtocc, $sendtobcc, $deliveryreceipt, -1, '', '', $trackid, '', $sendcontext, '', $upload_dir_tmp);

    if (!empty($mailfile->error) || !empty($mailfile->errors)) {
        setEventMessages($mailfile->error, $mailfile->errors, 'errors');
        $action = 'presend';
    } else {
        $result = $mailfile->sendfile();



?>