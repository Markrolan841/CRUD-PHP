<?php  
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Script</title>
</head>
<body>
	
<?php 
if(isset($_POST['submit'])){
	$author = mysqli_real_escape_string($mysqli, $_POST['author']);
	$quote = mysqli_real_escape_string($mysqli, $_POST['quote']);

	if( empty($author) || empty($quote) ){

		if(empty($author)){
			echo "<font color='red'> AUTHOR field is empty! </font><br/>";
		}

		if(empty($quote)){
			echo "<font color='red'> QUOTE field is empty! </font><br/>";
		}
		echo "<br/><a = href='javascript:self.history.back();'>Go Back</a>";
	} else {
		
		$result = mysqli_query($mysqli, "INSERT INTO fam_quotes(author, quote) VALUES ('$author', '$quote')");
		echo "<font color='green'> Data Added Successfully.";
		echo "<br/><a href='index.php'> View Result </a>";
	}
 }
 ?>

</body>
</html>