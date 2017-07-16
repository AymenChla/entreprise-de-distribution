<?php 
	function get_qtds($nops)
	{
		if(!empty($nops))
		{
			global $bd;
			$chaine = "";
			for($i = 0 ; $i < count($nops) ; $i++)
			{
				if($chaine != "") $chaine .= " OR ";
				$chaine .= "NOP=?";
			}

			$sql = "SELECT NOP , sum(QTD) AS QTD FROM stockage where ".$chaine." GROUP BY NOP";
			$req = $bd->prepare($sql);	
			$req->execute($nops);
			if($qtd = $req->fetchAll())
				return $qtd;
			
		}
		return null;
	}