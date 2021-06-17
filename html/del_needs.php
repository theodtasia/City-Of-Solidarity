<?php

/*Αυτό το script υλοποιεί την δήλωση αναγκών των οργανισμών αλλάζοντας το περιεχόμενο της βάσης "needs".
-Μάϊος 2020
*/

require('connection.php'); 

//παίρνουμε το username του οργανισμού
session_start();
$name=$_SESSION['username'];
//έλεγχος για το αν υπάρχει ήδη στη βάση needs εγγραφή για αυτόν τον οργανισμό
$sql="SELECT a.* FROM needs a, usertable b  WHERE b.username='$name' and a.organ_id=b.id";
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);

//παιρνουμε τη γλωσσα
$lang=$_SESSION["lang"];



$row=mysqli_fetch_array($res);
$id=$row['id'];



//υπάρχει στη βάση, αλλάζουμε το περιεχόμενό του, δηλώνουμε τις ανάγκες
$sql="UPDATE needs SET ".$_POST['kind']."=0 WHERE id=$id";


//αποστολή στη βάση 
    $res=mysqli_query($conn, $sql);
/*η μεταβλητή stat χρησιμοποιείται για την εμφάνιση επιτυχούς μηνύματος στην pageO1GR.php.*/
if($res){//μήνυμα επιτυχίας
		
	if($lang == 'gr') //αν είναι ελληνικά
        {
	     $_SESSION['stat'] = 1;
	     header('Location:../html/needs_managementGR.php');
	   }
	else// αν είναι αγγλικά
	{
		$_SESSION['stat'] = 1;
	     header('Location:../html/needs_managementEN.php');
	}
}
else{//μηνυμα αποτυχίας
	
	if($lang == 'gr') //αν είναι ελληνικά
        {
	     $_SESSION['stat'] = 2;
	     header('Location:../html/needs_managementGR.php');
	   }
	else// αν είναι αγγλικά
	{
		$_SESSION['stat'] = 2;
	     header('Location:../html/needs_managementEN.php');
	}
}
	 
?>