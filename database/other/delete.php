<?php
include("../hbfd/database_connect.php");
$link = link_db();
$id = $_GET["id"];

// sql to delete a record
$sql = "DELETE FROM student_learn_hour WHERE id='$id'";

$link->query($sql);
$link->close();
header("Location: info.php");
