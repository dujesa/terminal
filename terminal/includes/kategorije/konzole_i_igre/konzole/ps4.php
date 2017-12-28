
<div class="contentCat">
<div class="filter">

</div>
<div class="category">
	<?php
	include('includes/baza/dbh.inc.php');

	$query = $conn->query("SELECT file_path,product_name,price FROM product inner join image on product.product_id = image.product_id inner join category on product.category_id = category.category_id
		WHERE category.category_name = 'sony' ");

	if($query->num_rows > 0)
	{
		while($row = $query->fetch_assoc())
		{
			?>
				<div class="konzola">
					<div class="picture"><img src=<?php echo $row["file_path"] ?>height=256 width=256></div>
					<div><?php echo $row["product_name"] ?></div>
					<div><?php echo $row["price"] ?></div>
					<div><a href="#" class="btn btn-primary">Dodaj u košaricu</a></div>
				</div>
		<?php }
	}
	else{
		echo 'Produkt ne postoji!';
	}
?>
</div>
</div>