<?php session_start();
require('connection.php'); 
//παιρνουμε τη γλωσσα
$lang=$_SESSION["lang"];


      if (isset($_POST['subscribe'])){
		  
	
       
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `subscribers`(`name`, `email`) VALUES ('$name', '$email')";

        $res=mysqli_query($conn,$sql);

      
	  

    if($res)
    {//μήνυμα επιτυχίας
		if($lang == 'gr') //αν είναι ελληνικά
        {
	     $_SESSION['newsletter']= 1;
	     	header('Location:../index.php');
		}
		else
		{
		$_SESSION['newsletter']= 1;
	     header('Location:../indexEN.php');	
		}
	}

	else{ //μήνυμα αποτυχίας
     	
		if($lang == 'gr') //αν είναι ελληνικά
        {
	     $_SESSION['newsletter']= 2;
	     header('Location:../index.php');
		}
		else
		{
		$_SESSION['newsletter']= 2;
	     header('Location:../indexEN.php');	
		}
	}
}?>