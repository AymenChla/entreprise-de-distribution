<aside class="col-md-4">

	<form class="form-horizontal panel-group" role="form" action="?session=produits" method="post">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="">
					<h4>Rechercher un produit</h4>
				</div>
				<div class="input-group">
						<input type="search" name="search" class="form-control" placeholder="search something">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
				</div>
			</div>
		</div>
	</form>


	<?php 
		$sql = "SELECT * from produit ORDER BY DP LIMIT 0,3";
		$req = $bd->query($sql);
		$dernierProds = $req->fetchAll();

		foreach ($dernierProds as $key => $produit) {
			$dernierProds[$key]['LIB'] = htmlspecialchars($produit['LIB']);
			$dernierProds[$key]['PU'] = htmlspecialchars($produit['PU']);
			$dernierProds[$key]['INFOS'] = (substr($produit['INFOS'],0,30).'....');
		}
	?>

	<div class="list-group">
		<?php 
			$attr = "";
			foreach ($dernierProds as $key => $prod) {
					if(isset($_GET['id']) && $_GET['id'] == $prod['NOP'])
						$attr = "active";
					else 
						$attr  = "";
					echo "
					<a href='?session=produits&id=".$prod['NOP']."' class='list-group-item col-md-12 ".$attr."'>

						<img class='img-rounded col-md-4' style='diplay:inline-block;' width='70px' height='70px' src='".$prod['IMAGE']."'>
						<div class='col-md-8'>
							 <h4 style='diplay:inline-block;' class='list-group-item-heading'>".$prod['LIB']."</h4>
						    <p class='list-group-item-text'>".$prod['INFOS']."</p>							
						</div>
	 				</a>";
			}
		
	 	?>
	</div>
</aside>