<!-- Footer -->
<style>
	#footer
	{
		background-color: #303030;
		color: white;
		margin-top:0px;
	}
</style>
	<footer class="text-center" id="footer" >
		&copy; Copyright 2019 Mobile Shop
		<br>
		Contact: +923161623928
		
	</footer>

	<script src="js/jquery-1.12.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
	
		function detailsmodal(id) {
			var data = {"id" : id};
			// send data to detailsmodal.php
			jQuery.ajax({
				url		: '/Mobile Shopping/includes/detailsmodal.php',
				method	: "post",
				data	: data,
				success	: function(data){
					jQuery('body').append(data);
					jQuery('#details-modal').modal('toggle');
				},
				error	: function(){
					alert("Something went wrong!");
				}
			});
		}
	</script>
</body>
</html>
