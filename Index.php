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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">

        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
	</style>
</head>
<body>
	<div class="container">
		<div class="container-fluid">
		    <div class="row">
		        <div class="col-md-12">
					<div class="page-header clearfix">
						<h2 class="pull-left">My CRUD App</h2>
						<a href="add.php" class="btn btn-primary pull-right">Add Another Country</a>
					</div>
						<table class="table table-bordered table-striped">
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
								<td>Action</td>
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
					</div>
				</div>
			</div>
		</div>

	</body>

</html>