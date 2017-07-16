<!DOCTYPE html>
<html>
<head>
	<title>Votre panier</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vue/bootstrap/css/bootstrap.css">
	<script src="vue/js/jquery.min.js"></script>
	<script src="vue/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<?php include_once("vue/includes/header.php");?>
	<div class="container">
		<div class="row">
		<?php if(!isset($_SESSION['panier']) OR count($produits)==0) 
				{
					?>
							<div class="panel panel-default col-md-8">
							  <div class="panel-body">
							  	<h3>Panier vide: <strong><a href="?session=produits">Poursuivre achats</a></strong></h3>
							  </div>
							</div>
						<?php
				}
			  else{?>
					<div class="col-md-8">
					<table class="table table-hover">
						<thead>	
							<th>Article</th>
							<th>Libellé</th>
							<th>Quantité</th>
							<th>Prix</th>
							<th>Sous total</th>
							<th></th>
						</thead>	
						<tbody>
							
							<?php 
							
									for($i = 0 ; $i  < count($produits) ;$i++){
										
										echo "<tr>";
											echo "<td><img style='width:100px;' src='".$produits[$i]['IMAGE']."'></td>";
											echo "<td>".$produits[$i]['LIB']."</td>";
											echo "<td>";
												?>
												<form action="?session=panier&statut=modifier&nop=<?php echo $produits[$i]['NOP'];?>" method="post" class="qtdForm">
													<div class="form-group">
															<select name="qtc" class="qtc form-control">
																<option selected><?php echo get_qtc($produits[$i]['NOP']);?></option>
																<?php 
															
																	for($j = 1 ; $j <= $qtds_trier[$i]['QTD'] ; $j++)
																		echo "<option value=".$j.">".$j."</option>";
																?>
														
															</select>
													</div>
												</form>
											
												<?php
											echo "</td>";
											echo "<td>".$produits[$i]['PU']."</td>";
											echo "<td>".sous_total($produits[$i])."</td>";
											echo "<td><a href='?session=panier&statut=supprimer&nop=".$produits[$i][NOP]."'><i class='glyphicon glyphicon-trash'></i></a></td>";
										echo "</tr>";

									}
							?>
						</tbody>
				    </table>
						
				<div class="col-md-8 col-md-offset-2" style="text-align:center;">
					<table class="table table-striped">
						<tr>
							<td><strong>Total (HTC) = </strong><?php echo $htc; ?> Dhs</td>
						</tr>
						<tr>
							<td><strong>Total (TTC) = </strong><?php echo $ttc; ?> Dhs</td>
						</tr>
					</table>
					<form action="?session=panier&statut=valider" method="post">
						<input type="hidden" name ="ttc" value="<?php echo $ttc;?>">
						<button class="btn btn-success btn-block">Valider le panier</button>
					</form>
				</div>
			</div>
		

			  	<?php }?>
			
			<?php include_once("vue/includes/sidebar.php");?>
		</div>
	</div>
	
	<?php include_once("vue/includes/footer.php");?>

	<script type="text/javascript">
		$(document).ready(function()
		{
			/*$('.qtdForm select>option').on('click',function(e)
				{
					e.preventDefault(); 

					var $this = $(this); //objet jquery du formulaire
					$.ajax({
						url: $this.closest('form').attr('action'),
						type: 'POST',
						complete: function(html)
						{
							alert(html);

						}
					});
				});*/
				$('.qtc').change(function()
				{
					var $this = $(this);
					$this.closest('form').submit();
				});

				$('#panier').addClass("active");
		});
	</script>
</body>
</html>