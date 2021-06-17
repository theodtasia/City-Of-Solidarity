<?php
require('connection.php');
$id = (int) $_GET['id'];
$sql = "DELETE FROM org_action WHERE ID='$id' LIMIT 1";
$stmt = $conn->query($sql) or die($conn->error); 
header('Location: actions_edit.php');
?>