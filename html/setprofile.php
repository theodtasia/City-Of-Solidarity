<?php session_start();

 require('connection.php');
$langu=$_SESSION["langu"];
$logo="";
$target_dir = "./img/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["save"])) 
{
   if( isset($_FILES['file']))
   {
  $check = getimagesize($_FILES["logo"]["tmp_name"]);
   

  if(move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file))
    {
	$logo=basename($_FILES["logo"]["name"]);
        
    }
}
}

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
	 
	if (isset($_POST['address_el'])){
	$address_el=$_POST['address_el'];
	}
	
	if (isset($_POST['address_en'])){
	$address_en=htmlspecialchars($_POST['address_en'], ENT_QUOTES);
	}
	
	if (isset($_POST['phone'])){
	$phone=$_POST['phone']; }
	 
	if (isset($_POST['site'])){
	$site=$_POST['site'];}
	 
	if (isset($_POST['organ_email'])){
	$organ_email=$_POST['organ_email']; }
	 
	if (isset($_POST['info_en'])){
	$info_en=htmlspecialchars($_POST['info_en'], ENT_QUOTES);}
	
	if (isset($_POST['info_el'])){
	$info_el=htmlspecialchars($_POST['info_el'], ENT_QUOTES);}
		
	if (isset($_POST['logo']) && $logo==""){
	$logo=$_POST['logo']; 
	}
}
	if ($logo!=""){
	  $sql2 = "UPDATE `usertable` SET `phone`='$phone',`website`='$site',`organ_email`= '$organ_email',`logo`='$logo' WHERE username='$name'";
	  }else{
	  $sql2 = "UPDATE `usertable` SET `phone`='$phone',`website`='$site',`organ_email`= '$organ_email' WHERE username='$name'";
 	  }
	  mysqli_query($conn,$sql2);

	
	if($rowcount==0){
	  $sql3= "INSERT INTO `user_info`(`id`,`user_id`, `name_organ`, `address`, `info`, `lang`) VALUES ('','$id1','$organ_name_el','$address_el','$info_el','el')";
	  mysqli_query($conn,$sql3);
	  $sql4= "INSERT INTO `user_info`(`id`,`user_id`, `name_organ`, `address`, `info`, `lang`) VALUES ('','$id1','$organ_name_en','$address_en','$info_en','en')";
	  mysqli_query($conn,$sql4);
	}
	elseif($rowcount==2){
	 $sql5="UPDATE `user_info` SET `name_organ`='$organ_name_el',`address`='$address_el',`info`='$info_el' WHERE `user_id`='$id1' AND `lang`='el'";
	 mysqli_query($conn,$sql5);
     $sql6="UPDATE `user_info` SET `name_organ`='$organ_name_en',`address`='$address_en',`info`='$info_en' WHERE `user_id`='$id1' AND `lang`='en'";
	 mysqli_query($conn,$sql6);
	}

		if($langu == 'gr') //αν είναι ελληνικά
        {
	     header('Location:profile.php');
	   }
	else// αν είναι αγγλικά
	{
	     header('Location:profileEN.php');
	}
    

	?>