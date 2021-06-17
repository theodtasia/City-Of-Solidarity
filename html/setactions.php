<?php session_start();
$ID=$date=$orgID=$username=$name=$message='';
require('connection.php'); 
$lang=$_SESSION["lang"];
$name=$_SESSION['username'];

if($lang == 'gr')   
{
  
	if (isset($_POST['save']))
	{
    		 $id=$_POST['aID'];

	 
	if (isset($_POST['message']))
	{ 
		if($_POST['message']!='')
		{
       $message=$_POST['message'];
	  $sql = "UPDATE `org_action` SET `date`='$date', `message`='$message' WHERE username='$name' and ID='$id';"; 
	  mysqli_query($conn,$sql);
			  header('Location:actprofilGR.php');

		}
		
		if($_POST['message']=='')
		{
	  $sql = "DELETE FROM `org_action` WHERE username='$name' and ID='$id';"; 
	  mysqli_query($conn,$sql);
	  header('Location:actprofilGR.php');
		}
 
	}
		
 }
	if (isset($_POST['delete']))
	{  
	    $id=$_POST['aID'];
	  $sql = "DELETE FROM `org_action` WHERE username='$name' and ID='$id';"; 
	  mysqli_query($conn,$sql);
	  header('Location:actprofilGR.php');
	}
	}
if($lang == 'en')
{
	if (isset($_POST['save']))
	{
    		 $id=$_POST['aID'];

	 
	if (isset($_POST['message']))
	{ 
		if($_POST['message']!='')
		{
       $message=$_POST['message'];
	  $sql = "UPDATE `org_action` SET `date`='$date', `message`='$message' WHERE username='$name' and ID='$id';"; 
	  mysqli_query($conn,$sql);
	  header('Location:actprofilEN.php');

		}
		
		if($_POST['message']=='')
		{
	  $sql = "DELETE FROM `org_action` WHERE username='$name' and ID='$id';"; 
	  mysqli_query($conn,$sql);
	  header('Location:actprofilEN.php');
		}
 
	}
		
 }
	if (isset($_POST['delete']))
	{  
	    $id=$_POST['aID'];
	  $sql = "DELETE FROM `org_action` WHERE username='$name' and ID='$id';"; 
	  mysqli_query($conn,$sql);
	  header('Location:actprofilEN.php');
	}
}

