<?php
$dbh = new PDO("mysql:host=localhost;dbname=to-do-list","root","solicode123");
$sql = " INSERT INTO tasks(taskname) VALUES (:taskname)";
$addTaskQuery = $dbh->prepare($sql);
$addTaskQuery->bindParam(":taskname",$_POST["taskname"],PDO::PARAM_STR);
$addTaskQuery->execute();
?>