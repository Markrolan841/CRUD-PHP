<?php

  //initialize session
  session_start();

  if( !isset($_SESSION['email']) || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }
?>
<?

<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM fam_quotes");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <script src="https://use.fontawesome.com/1222e19a15.js"></script>

	<title>Home Page</title>

</head>
<body>
  <div class="container">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header clearfix">
	          <h2><?php echo "My CRUD php app"; ?></h2>
            <p><a href="logout.php" class="btn btn-success">Logout</a></p>
            <a href="add.html" class="btn btn-success pull-right">Add Quotes</a>
            </div>
	       <table class="table table-bordered table-striped">	
	          <thead class="thead-light">
               <tr bgcolor="#50dec6">
                <th scope="col">Actions</th>
                <th scope="col">ID</th>
       	        <th scope="col">Author</th>
                <th scope="col">Quotes</th>
                
               </tr>
            </thead> 
      <?php
      while( $res = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>";

      echo "<a href='edit.php?id=$res[id]' title='Edit Record' data-toogle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
      echo "<a href='delete.php?id=$res[id]' title='Delete Record' data-toogle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
      echo "<td>".$res['id']."</td>";
      echo "<td>".$res['author']."</td>";
      echo "<td>".$res['quote']."</td>";
      
      

      echo "</td>";
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