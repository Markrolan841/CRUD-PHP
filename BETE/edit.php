<?php 
	include_once("config.php");

if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$author = mysqli_real_escape_string($mysqli, $_POST['author']);
			$quote = mysqli_real_escape_string($mysqli, $_POST['quote']);

			if(empty($author) || empty($quote)){

				if(empty($author)){
					echo "<font color='red'> Author field is empty. </font><br/>";
				}

				if(empty($quote)){
					echo "<font color='red'> Quote field is empty. </font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else {

				$result = mysqli_query($mysqli, "UPDATE fam_quotes set author='$author',quote='$quote' WHERE id=$id");
				header("Location: index.php");
				
   }

}
?>

<?php 

	$id = $_GET['id'];
	$result = mysqli_query($mysqli,"SELECT * from fam_quotes where id=$id");

	while($res = mysqli_fetch_array($result))
	{

		$author = $res['author'];
		$quote = $res['quote'];

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit data</title>
</head>
<body>

	<form name="form1" method="post" action="edit.php">

		<table widht="25%" border="0">
			<tr>
				<td>Author</td>
				<td><input type="text" name="author" value="<?php echo $author;?>"></td>
			</tr>
			<tr>
				<td>Quotes</td>
				<td><input type="text" name="quote" value="<?php echo $quote;?>" ></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>		
		
	</form>

</body>
</html>