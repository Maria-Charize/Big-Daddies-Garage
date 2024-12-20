<?php

	include('config/db_connect.php');

	//write query for all pizzas

	$sql = 'SELECT id, email, title, ingredients FROM pizzas';

	//make query and get result

	$result = mysqli_query($conn, $sql);

	//fetch result

	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	//free memory

	mysqli_free_result($result);

	//close connection

	mysqli_close($conn);


	//print_r($pizzas);

	//print_r(explode(',', $pizzas[0]['ingredients']));



?>

<!DOCTYPE html>
<html>
	<?php include('templates/header.php');?>

	<h4 class="center yellow-text">Pizzas!</h4>
	<div class="container">
		<div class="row">
			<?php foreach($pizzas as $pizza) { ?>
				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']);?></h6>
							<ul>
								<?php foreach(explode(',', $pizza['ingredients']) as $ing){?>
									<li><?php echo htmlspecialchars($ing);?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a href="#" class="brand-text">More Info</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>



	
	<?php include('templates/footer.php');?>

</html>


