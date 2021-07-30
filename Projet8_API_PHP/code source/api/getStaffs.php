<?php

$dbh = new PDO("mysql:host=localhost;dbname=offices","root","solicode123");

$sql = "SELECT * FROM staffs";
$getstaffsQuery = $dbh -> query($sql);
$getstaffs = $getstaffsQuery -> fetchAll(PDO::FETCH_ASSOC);

print_r(json_encode($getstaffs));

?>