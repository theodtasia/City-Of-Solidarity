<?php
session_start();
$servername   = "webpagesdb.it.auth.gr:3306";
$db = "userregistration";
$userd = "theodtasia";
$passw = "pspi2020";
$date=date("y/m/d");

$errors = array();//array για να βρίσκει errors
//σύνδεση με τη βάση, αν αλλάξει κάτι στην είσοδο των μεταβλητών βγάζει error και δεν μπαίνει στη βάση
$conn = new mysqli($servername, $userd, $passw, $db);
mysqli_set_charset($conn,'utf8mb4');//απαραίτητη εντολή για να αποθηκεύονται ελληνικά στη βάση!
// έλεγχος για το αν συνδέθηκε,αν όχι βγάζει το error που έγινε
if ($conn->connect_error) 
{
   die("Connection failed: " . $conn->connect_error);
	 echo "<script> alert ('Σφάλμα σύνδεσης'); </script>";
    exit();
}
?>