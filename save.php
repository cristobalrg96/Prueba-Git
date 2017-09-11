<?php include ('functions.php');
$name=$_GET['name'];


executeSQLCommand("INSERT INTO  `recipes` (name)
VALUES (
'$name' )

 ON DUPLICATE KEY UPDATE `name`= '$name';");

 ?>