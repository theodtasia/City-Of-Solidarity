<?php
require('connection.php');
//var_dump($_POST);
$date=$_POST['date'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO `newsletters`(`id`, `date`, `subject`, `message`) VALUES ('','$date','$subject','$message')";
mysqli_query($conn, $sql);
header('Location: newsletter_new.php');
//$message= wordwrap($message,70);

//mail("tsprodromos@gmail.com",$subject,$message);
?>