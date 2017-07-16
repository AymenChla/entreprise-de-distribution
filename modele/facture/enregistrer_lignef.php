<?php
function enregistrer_lignef($nop,$nof,$mop)
{
	global $bd;
	$qtf= get_qtc($nop);
  	$sql = 'insert into lignef (NOP,NOF,QTF,MOP) values(:nop,:nof,:qtf,:mop) ';
  	$req= $bd->prepare($sql);
  	$req->execute(array(
  						"nop" =>$nop,
  						"nof" =>$nof,
  						"qtf"=>$qtf,
  						"mop"=>$mop));
  	$req->closeCursor();
}
