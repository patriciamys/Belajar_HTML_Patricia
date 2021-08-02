<?php 
	require_once('db_connection.php');
	if(isset($_POST['submit'])){
		$Name = $_POST['name']; 
		$Quantity = $_POST['quantity'];
		$Price = $_POST['price'];
		$Description = $_POST['description'];
		
		$Sql = "INSERT INTO produk(name,quantity,price,description) VALUES('$Name','$Quantity','$Price','$Description')";
		
		if($stmt =mysqli_query($link, $Sql)){
			/*mysqli_stmt_bind_param($stmt, "siis", $param_Name, $param_Quantity, $param_Price, $param_Description);
            $param_Name = $Name;
            $param_Quantity = $Quantity;
			$param_Price = $Price;
            $param_Description = $Description;
            if(mysqli_stmt_execute($stmt)){
				echo "Berhasil";
            }*/
			echo "Berhasil";
		}
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add</title>
    </head>
    <body>
		<form action="add.php" method="post">
			<label for="name">Name:</label><br>
			<input type="text" id="name" name="name" value="Chessecake"><br><br>
			<label for="quantity">Quantity:</label><br>
			<input type="text" id="quantity" name="quantity" value="10"><br><br>
			<label for="price">Price:</label><br>
			<input type="text" id="price" name="price" value="25000"><br><br>
			<label for="description">Description:</label><br>
			<input type="text" id="description" name="description" value="Cheesecake is a sweet dessert consisting of one or more layers. The main, and thickest, layer consists of a mixture of a soft, fresh cheese eggs, and sugar."><br><br><br>
			<input type="submit" value="Submit" name="submit">
		</form>
	</body>
	
</html>