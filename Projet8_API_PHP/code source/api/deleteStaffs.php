<?php
$id = $_POST["id"];
$dbh = new PDO("mysql:host=localhost;dbname=offices", "root", "solicode123");
$sql = " DELETE FROM staffs WHERE id = $id ";
$getFormer = $dbh->prepare($sql);
$getFormer->execute();

?>
