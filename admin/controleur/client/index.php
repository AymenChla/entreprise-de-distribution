<?php 


if ($_GET['statut']="supprimer") {
if (isset($_GET['id'])){
		include_once("admin/modele/client/delete_client.php");
		delete_client($_GET['id']);
		header("location:?session=admin&p=client");
	} 
					}
					
include_once("admin/modele/client/get_clients.php");
	$clients = get_clients();

	include_once("admin/vue/client/index.php");
	