<?php

	//connect to mysql server
	$dbhost = 'localhost';
	$dbname = 'activity7';
	$dbuser = 'root';
	$dbpass = '';
	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	$result = mysqli_query($conn, "SELECT * FROM country");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<h1><?php echo "My Crud php app"; ?></h1>

	<table class="table table-striped">
		<thead class="thead-light">
		<tr bgcolor="#cccccc">
			<td>ID </td>
			<td>Iso </td>
			<td>Name </td>
			<td>Nicename</td>
			<td>Iso3</td>
			<td>No. Code</td>
			<td>Phone Code</td>
			<td>created</td>
		</tr>
		</thead>
		<?php

		while ( $res= mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$res['id']. "</td>";
			echo "<td>".$res['iso']. "</td>";
			echo "<td>".$res['name']. "</td>";
			echo "<td>".$res['nicename']. "</td>";
			echo "<td>".$res['iso3']. "</td>";
			echo "<td>".$res['numcode']. "</td>";
			echo "<td>".$res['phonecode']. "</td>";
			echo "<td>".$res['created_at']. "</td>";
			echo "</tr>";
		}

		?>
	</table>	

</body>

</html>