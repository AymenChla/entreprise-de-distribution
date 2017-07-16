<?php
function enregistrer_lignec($nocom,$nop)
{
	global $bd;
	$qtc= get_qtc($nop);
  
  	$sql = 'insert into lignec (NOCOM,NOP,QTC,DEL) values(:nocom,:nop,:qtc,DATE_ADD(now(), INTERVAL 20 DAY)) ';
  	$req= $bd->prepare($sql);
  	$req->execute(array(
  						"nocom" =>$nocom,
  						"nop" =>$nop,
  						"qtc"=>$qtc));
  	$req->closeCursor();
}
