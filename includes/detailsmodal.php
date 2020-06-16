
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
   rel="stylesheet">
<?php
	require_once '../core/init.php'; 
	$id = $_POST['product_id'];
	$id = (int)$id;
	$result = $db->query("SELECT * FROM products WHERE product_id = '$id'");
	$product = mysqli_fetch_assoc($result);
	$brand_id = $product['brand'];
	$brand_query = $db->query("SELECT brand FROM brand WHERE id = '$brand_id'");
	$brand = mysqli_fetch_assoc($brand_query);
?>
<style>
button,span,p,h4,label{
	color: white;
}
.btn btn-default{
	color: white;
}

</style>

<!-- Details Modal -->
<?php ob_start(); ?>
<div class="modal fade details-1 " id="details-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg " role="document">
		<div class="modal-content bg-dark">
			<div class="modal-header">

				
				<h4 class="modal-title" id="myModalLabel" ><?php echo $product['title']; ?></h4>
				<button type="button" class="close" onclick="closeModal()" aria-label="Close" >
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6">
							<div class="center-block">
								<img style="width: 100%" src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>">
							</div>
						</div>

						<div class="col-lg-6">
							<h4>Details</h4>
							<p><?php echo nl2br($product['description']); ?></p>
							<hr>
							<p>Price: Rs<?php echo $product['price']; ?></p>
							<p>Brand: <?php echo $brand['brand']; ?></p>


							<hr>
							
							<form action="widgets/cart.php?id=<?php echo $product['product_id']; ?>" method="post">
								<div class="row">
									<div class="col-lg-3">
										<div class="form-group">
										
											<label for="quantity">Quantity:</label>
											<input class="form-control" id="quantity" type="text" name="quantity" required autofocus>
										</div>
									</div>

								</div>
								<div class="modal-footer">
				<button type="button" class="btn btn-default" onclick="closeModal()">Close</button>
				<button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart" ></span><i class="material-icons">add_shopping_cart</i></a></button>
			</div>
							</form>
													
						

						</div>
					</div>
				</div><!-- /.container-fluid -->
			</div><!-- /.modal-body -->

			
		</div>
	</div>
</div><!-- /.modal -->
<script>
	function closeModal() {
		jQuery('#details-modal').modal('hide');
		setTimeout(function(){
			jQuery('#details-modal').remove();
			jQuery('.modal-backdrop').remove();
		},500);
	}
</script>
<?php echo ob_get_clean();?>