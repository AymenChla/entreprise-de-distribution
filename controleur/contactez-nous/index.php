<?php 

	$erreur = NULL;
    $success= NULL;

    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['message']))
    {
        extract($_POST);
        if(preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$email))
        {
            $nom = htmlspecialchars(addslashes($_POST['nom']));
            $prenom = htmlspecialchars(addslashes($_POST['prenom']));
            $email = htmlspecialchars(addslashes($_POST['email']));
            $message = htmlspecialchars(addslashes($_POST['message']));
            $destinataire = "freenemya1@gmail.com";
            $sujet = "formulaire de contact";
            $entete = 'From :'.$email.'';
            $message = 'Nom : '.$nom.''."\n".'Prenom : '.$prenom."\n".'From: '.$email."\n".'Message : '.$message.'';

            mail($destinataire,$sujet,$message,$entete);

            $success = 'Message envoyer';

            unset($_POST,$nom,$prenom,$mail,$message);
        }
        else
        {
            $erreur = 'adresse email invalide';
        }

    }
    else
    {
        $erreur = 'Remplire tout les champs';
    }

	include_once("vue/contactez-nous/index.php");