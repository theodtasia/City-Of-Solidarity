<?php
/*Αυτό το script υλοποιεί την αποστολή των περιεχομένων της φόρμας επικοινωνίας στον πίνακα emails  όπου και κρατούνται.
-Κανονικά θα έπρεπε να χρησιμοποιηθεί η μέθοδος mail της PHP αλλά δεν μπόρεσε να γίνει η ρύθμιση του server. 

*/

require('connection.php'); 

//ανάθεση μεταβλητών από το POST 

	
	if (isset($_POST['send'])){
		$name = $email = $message='';
		$name = $_POST['name'];
		$email = $_POST['email']; 
		$message = $_POST['message'];
		$date=date("Y/m/d");

	}
//έλεγχος για σφάλματα
    if ($name === ''){
        echo "Name cannot be empty.";
        die();
        }
    if ($email === ''){
        echo "Email cannot be empty.";
        die();
        } 
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email format invalid.";
        die();
        }
        }
    if ($message === ''){
        echo "Message cannot be empty.";
        die();
        }  
//αποστολή στη βάση
    $sql = "INSERT INTO emails (date, name, email, message)  VALUES ('$date','$name', '$email', '$message')";
    $res=mysqli_query($conn, $sql);
/*η μεταβλητή stat χρησιμοποιείται για την εμφάνιση επιτυχούς μηνύματος στην contactGR.php.*/

    if($res){
		$_SESSION['stat'] = 1;
		header('Location: ../html/contactEN.php');
	}
	else{ 
		$_SESSION['stat'] = 2;
     	header('Location: ../html/contactEN.php');
	}
?>