<?php session_start();

/*Αυτό το script υλοποιεί την δήλωση αναγκών των οργανισμών αλλάζοντας το περιεχόμενο της βάσης "needs".
-Μάϊος 2020
*/

require('connection.php'); 

//παίρνουμε το username του οργανισμού

$name=$_SESSION['username'];
//έλεγχος για το αν υπάρχει ήδη στη βάση needs εγγραφή για αυτόν τον οργανισμό
$sql="SELECT a.* FROM needs a, usertable b  WHERE b.username='$name' and a.organ_id=b.id";
$res=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($res);

//παιρνουμε τη γλωσσα
$lang=$_SESSION["lang"];


//αν δεν υπάρχει ο οργανισμός στη βάση needs τον προσθέτουμε

if($rowcount==0){
	$sql1="SELECT * FROM usertable WHERE username='$name';";
	$res1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_array($res1);
	$id1=$row1['id'];
	$sql="INSERT INTO needs (organ_id)  VALUES ('$id1')";
	$res=mysqli_query($conn,$sql);
	$id=LAST_INSERT_ID();
	
}else{
	$row=mysqli_fetch_array($res);
	$id=$row['id'];
}


//υπάρχει στη βάση, αλλάζουμε το περιεχόμενό του, δηλώνουμε τις ανάγκες
$sql="UPDATE needs SET ".$_POST['kind']."=1 WHERE id=$id";


//αποστολή στη βάση 
    $res=mysqli_query($conn, $sql);
/*η μεταβλητή stat χρησιμοποιείται για την εμφάνιση επιτυχούς μηνύματος στην pageO1GR.php.*/
if($res){//μήνυμα επιτυχίας
		
	if($lang == 'gr') //αν είναι ελληνικά
        {
	     $_SESSION['stat'] = 1;
	     header('Location:../html/pageO1GR.php');
	   }
	else// αν είναι αγγλικά
	{
		$_SESSION['stat'] = 1;
	     header('Location:../html/pageO1EN.php');
	}
}
else{//μηνυμα αποτυχίας
	
	if($lang == 'gr') //αν είναι ελληνικά
        {
	     $_SESSION['stat'] = 2;
	     header('Location:../html/pageO1GR.php');
	   }
	else// αν είναι αγγλικά
	{
		$_SESSION['stat'] = 2;
	     header('Location:../html/pageO1EN.php');
	}
}
	 
?>