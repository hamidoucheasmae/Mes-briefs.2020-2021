<?php
$id = $_POST["id"];
$dbh = new PDO("mysql:host=localhost;dbname=Offices","root","solicode123");
$sql = "UPDATE staffs SET Name = :Name,Fathername = :Fathername,Occupation = :Occupation,Gmail = :Gmail WHERE id = $id";

$addFormerQuery = $dbh->prepare($sql);
$addFormerQuery->bindParam(":Name",$_POST["Name"],PDO::PARAM_STR);
$addFormerQuery->bindParam(":Fathername",$_POST["Fathername"],PDO::PARAM_STR);
$addFormerQuery->bindParam(":Occupation",$_POST["Occupation"],PDO::PARAM_STR);
$addFormerQuery->bindParam(":Gmail",$_POST["Gmail"],PDO::PARAM_STR);

$addFormerQuery->execute();
?>