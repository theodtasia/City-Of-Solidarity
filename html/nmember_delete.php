<?php
require('connection.php');
$id = (int) $_GET['id'];   
$sql = "DELETE FROM usertable WHERE id='$id' LIMIT 1";
$stmt = $conn->query($sql) or die($conn->error); 
header('Location: nwmember.php');
?>