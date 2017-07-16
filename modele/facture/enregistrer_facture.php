<?php
function enregistrer_facture($mof)
{
	global $bd;

  $sql = 'insert into facture(MOF) values(:mof) ';
  $req = $bd->prepare($sql);
  $req->execute(array("mof" => $mof));
  $req->closeCursor();
  $sql='select NOF from facture order by DAF DESC limit 0,1';
  $reponse = $bd->query($sql);
  $donnee = $reponse->fetch();
  return $num = $donnee['NOF'];
}
 