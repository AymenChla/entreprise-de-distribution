<?php 
	function delete_client($id)
	{
		global $bd;

		$sql = 'delete from client 
				where NOCLI=:id';
		$req = $bd->prepare($sql);
		$req->execute(array('id'=>$id
					         ));
		$req->closeCursor();

	}