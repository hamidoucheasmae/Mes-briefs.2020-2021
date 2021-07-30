<?php

$dbh = new PDO("mysql:host=localhost;dbname=Offices","root","solicode123");
$sql = "INSERT INTO staffs(Name,Fathername,Occupation,Gmail) VALUE (:Name,:Fathername,:Occupation,:Gmail)";

$addstaffsQuery = $dbh ->prepare($sql);

$addstaffsQuery -> bindParam(":Name",$_POST["Name"],PDO::PARAM_STR);
$addstaffsQuery -> bindParam(":Fathername",$_POST["Fathername"],PDO::PARAM_STR);
$addstaffsQuery -> bindParam(":Occupation",$_POST["Occupation"],PDO::PARAM_STR);
$addstaffsQuery -> bindParam(":Gmail",$_POST["Gmail"],PDO::PARAM_STR);

$addstaffsQuery -> execute();

?>