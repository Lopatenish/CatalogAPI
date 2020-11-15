<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Добавить товар</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<?php
		require('php/db.php');
	?>
</head>
<body>
	<div class="container">
		<div class="row py-3 justify-content-center">
			<form method="POST" class="col-md-9 col-lg-7 p-3 border border-dark rounded">
				<div class="row">
					<h3 class="col-12 text-center">Добавление товара</h3>
				</div>
				<div class="row py-2 justify-content-center">
					<div class="col-sm-3">Наименование:</div>
					<input type="text" name="name" class="col-sm-4 mx-3 mx-sm-0">
				</div>
				<div class="row py-2 justify-content-center">
					<div class="col-sm-3">Стоимость:</div>
					<input type="text" name="price" class="col-sm-4 mx-3 mx-sm-0">
				</div>
				<div class="row py-2 justify-content-center">
					<input type="submit" name="add" value="Добавить" class="col-3 mx-2 py-1 bg-success text-white border-0">
					<input type="button" name="back" value="Назад" onclick="location.href = 'index.php'" 
					class="col-3 mx-2 py-1 bg-success text-white border-0">
				</div>
			</form>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-9 col-lg-7 text-wrap">
				<?php
					if(!empty($_POST)){
						insert($_POST['name'], $_POST['price']);
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>