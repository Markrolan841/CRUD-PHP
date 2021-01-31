<?php

$id = $_GET['id'];

include("config.php");
$result = mysqli_query($mysqli, "DELETE FROM fam_quotes where id=$id");

header("Location:index.php");

?>