<?php session_start(); 
require('connection.php');
$langu=$_SESSION["langu"];

$sql="SELECT * FROM usertable WHERE username='".$_SESSION['username']."'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$id1=$row['id'];

$sql1="SELECT * FROM user_info WHERE user_id='$id1'";
$res1=mysqli_query($conn,$sql1);
$rowcount=mysqli_num_rows($res1);

$name=$_SESSION['username'];

if(isset($_POST["save"])) {
	
	if (isset($_POST['organ_name_el'])){
	$organ_name_el=htmlspecialchars($_POST['organ_name_el'], ENT_QUOTES); 
	}
	
		 
	if (isset($_POST['organ_name_en'])){
	$organ_name_en=htmlspecialchars($_POST['organ_name_en'], ENT_QUOTES);
	}
	 
	if (isset($_POST['organ_email'])){
	$organ_email=$_POST['organ_email']; }
	
}
	

	 //update το email του εθελοντή
	  $sql2 = "UPDATE `usertable` SET `email`= '$organ_email' WHERE username='$name'"; 	  
	  mysqli_query($conn,$sql2);

	//δημιουργία ή update εγγραφών στον πίνακα user_info για τις πληροφορίες του εθελοντή
	if($rowcount==0){
	  $sql3= "INSERT INTO `user_info`(`id`,`user_id`, `name_organ`, `lang`) VALUES ('','$id1','$organ_name_el','el')";
	  mysqli_query($conn,$sql3);
	  $sql4= "INSERT INTO `user_info`(`id`,`user_id`, `name_organ`, `lang`) VALUES ('','$id1','$organ_name_en','en')";
	  mysqli_query($conn,$sql4);
	}
	elseif($rowcount==2){
	 $sql5="UPDATE `user_info` SET `name_organ`='$organ_name_el' WHERE `user_id`='$id1' AND lang='el'";
	 mysqli_query($conn,$sql5);
     $sql6="UPDATE `user_info` SET `name_organ`='$organ_name_en' WHERE `user_id`='$id1' AND lang='en'";
	 mysqli_query($conn,$sql6);
	}

		if($langu == 'gr') //αν είναι ελληνικά
        {
	     header('Location:profileVOLGR.php');
	   }
	else// αν είναι αγγλικά
	{
	     header('Location:profileVOLEN.php');
	}


	


?>