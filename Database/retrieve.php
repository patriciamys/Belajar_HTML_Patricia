<?php
	include_once 'db_connection.php';
	$result = mysqli_query($link,"SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
	<head> 
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 80%;
			background-color: rgb(241, 211, 241);
			position: absolute;
			margin-left: 125px;
		}

		td, th {
			border: 1px solid rgb(245, 236, 245);
			text-align: center;
			padding: 8px;

		}

		tr:nth-child(even) {
			background-color: white;
		}

		.width1{
			width: 200px;
			
		}
		
		.width2{
			width: 500px;
		}
		
		.width3{
			width: 100px;
		}
		
		.center{
			text-align: center;
		}
	</style>
	<title>Retrive data</title> 
	</head>
	
	<body>
		<?php
		if (mysqli_num_rows($result) > 0) {
		?>
		<table> 
			<tr>
				<th class="width1">Name</th>
				<th class="width3">Quantity</th>
				<th class="width3">Price</th>
				<th class="width2">Description</th>
			</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $row["name"]; ?></td>
				<td class="center"><?php echo $row["quantity"]; ?></td>
				<td class="center"><?php echo $row["price"]; ?></td>
				<td><?php echo $row["description"]; ?></td>
			</tr>
			<?php
			$i++;
			}
			?>
		</table>
		<?php
		}
		else{
			echo "No result found";
		}
		?>
	</body>
</html>