<?php
	const SERVER = 'localhost';
	const USER_NAME = 'root';
	const PASSWORD = 'root';
	const DATABASE = 'catalog';
	function select(){
		$link = mysqli_connect(SERVER, USER_NAME, PASSWORD, DATABASE);
		if(!$link)
			die("Ошибка подключения");
		if($query = mysqli_query($link, 'SELECT name, price from product')){
			if(mysqli_num_rows($query) > 0){
				while($row = mysqli_fetch_array($query)){
					echo '<div class="col-6 py-2 col-lg-3">
					<div class="item p-3 border border-dark rounded">
						<p class="font-weight-bold m-0 text-left text-wrap">'.$row["name"].'</p>
						<p class="m-0 text-right">'.$row["price"].' руб.</p>
					</div>
					</div>';
				}
			}
			else{
				echo 'Нет товаров';
			}
		mysqli_free_result($query);
		}
		else{
			mysqli_query($link, 'CREATE TABLE product(id INT(20) AUTO_INCREMENT PRIMARY KEY, name VARCHAR(2000) NOT NULL, price DOUBLE(20,2) NOT NULL)');
			echo 'Нет товаров';
		}
		mysqli_close($link);
	}
	function insert($name, $price){
		$link = mysqli_connect(SERVER, USER_NAME, PASSWORD, DATABASE);
		if(!$link)
			die("Ошибка подключения");
		if (($name != "") && ($price != "")) {
			$price = str_replace(',', '.', $price);
			if(!$query = mysqli_query($link, 'INSERT INTO product(name, price) VALUES ("'.$name.'", "'.$price.'")')){
				die("Неправильно заданы данные");
			}
			echo 'Добавлен товар '.$name.' со стоимостью '.$price.' руб.';
		}
		else{
			echo "Неправильно заданы данные";
		}
		mysqli_close($link);
	}
?>