<?php session_start();
require('connection.php'); 
$lang=$_SESSION["lang"];
$username=$email=$password=$isvolun='';

//ELLHNIKA
if($lang == 'gr')   

{

//echo "CONNECTION OK </br>";
if(isset($_POST['reg_user']));
{
//perasma se metablhtse apo to register
$username=$_POST['usern'];
$email=$_POST['Email'];
$password=$_POST['pass'];
$vpassword=$_POST['vpass'];
$isvolun=$_POST['optradio'];

//elegxos gia to an perastikan auta poy egrapse o xrhsths stis metablhtes kanontas echo arxika
// an dhlwse ethelonths tote isvolun=1 an dhlwse organismow isvolun=0
//echo $username. PHP_EOL;
//echo $email. PHP_EOL;
//echo $password. PHP_EOL;
//echo $vpassword. PHP_EOL;
//echo $isvolun. PHP_EOL;
$p=1;
//elegxos an ta 2 password tairiazoun
if ($password!= $vpassword) 
{
	array_push($errors, "The two passwords do not match");
	$p=0;
	
}

// elegxos gia to an yparxei xrhsths me to idio username

if ($result = $conn->query("SELECT * FROM usertable WHERE username='$username'")) 
 {

    /* arithmos grammwn apotelesma */
    $num = $result->num_rows;

    //printf("Result set has %d rows.\n", $num);
    
    /* kleinw result */
    $result->close();
  }
if($num==1)
  {
	 array_push($errors, "The Username already taken");
	 
  }
//elegxos gia to an einai ethelonths h organismos an einai ethelonths tote 1 organismos 2
if(empty($isvolun))
	
{
	array_push($errors, "please enter if you are volunteer or organisation");
	$v=3;
}

	echo $v;
//nea sessions analoga me to error pou egine
if(count($errors) != 0)

  {   
	if($num==1)
     {
	  header('Location:loginGR.php?username_taken');
		
	 
     }
	if($p==0)
     {
	 header('Location:loginGR.php?passwords_dont_match');
	 
     }
	if($v==3)
     {
	  header('Location:loginGR.php?volunteer_or_organisation');
		
	 
     }
    }
	else
		
	{
	
  	 	
  	 $insert = "INSERT INTO `usertable` (`username`, `email`, `password`, `isvolun`, `organ_email`, `phone`, `website`) VALUES ('$username','$email','$password','$isvolun','','','')";
	    $q = mysqli_query($conn, $insert);
		

	     $_SESSION['registered'] = 1;
	     $_SESSION['username'] = $username;
	     $_SESSION['volun'] = $isvolun;
		if($isvolun==2)
		 {
	     header('Location:profile.php');	
		 }
		if($isvolun==1)
		 {
	     header('Location:profileVOLGR.php');	
		 }	
			    
         
		
	}
    }  

   }

//agglika
else
{

//echo "CONNECTION OK </br>";
if(isset($_POST['reg_user']));
{
//perasma se metablhtse apo to register
$username=$_POST['usern'];
$email=$_POST['Email'];
$password=$_POST['pass'];
$vpassword=$_POST['vpass'];
$isvolun=$_POST['optradio'];

//elegxos gia to an perastikan auta poy egrapse o xrhsths stis metablhtes kanontas echo arxika
// an dhlwse ethelonths tote isvolun=1 an dhlwse organismow isvolun=0
//echo $username. PHP_EOL;
//echo $email. PHP_EOL;
//echo $password. PHP_EOL;
//echo $vpassword. PHP_EOL;
//echo $isvolun. PHP_EOL;
$p=1;
//elegxos an ta 2 password tairiazoun
if ($password!= $vpassword) 
{
	array_push($errors, "The two passwords do not match");
	$p=0;
	
}

// elegxos gia to an yparxei xrhsths me to idio username

if ($result = $conn->query("SELECT * FROM usertable WHERE username='$username'")) 
 {

    /* arithmos grammwn apotelesma */
    $num = $result->num_rows;

    //printf("Result set has %d rows.\n", $num);
    
    /* kleinw result */
    $result->close();
  }
if($num==1)
  {
	 array_push($errors, "The Username already taken");
	 
  }
//elegxos gia to an einai ethelonths h organismos an einai ethelonths tote 1 organismos 2
if(empty($isvolun))
	
{
	array_push($errors, "please enter if you are volunteer or organisation");
	$v=3;
}

	echo $v;
//nea sessions analoga me to error pou egine
if(count($errors) != 0)

  {   
	if($num==1)
     {
	  header('Location:loginEN.php?username_taken');
		
	 
     }
	if($p==0)
     {
	 header('Location:loginEN.php?passwords_dont_match');
	 
     }
	if($v==3)
     {
	  header('Location:loginEN.php?volunteer_or_organisation');
		
	 
     }
    }
	
	else
		
	{
	
  	  $insert = "INSERT INTO `usertable`(`username`, `email`, `password`, `isvolun`, `organ_email`, `phone`, `website`) VALUES ('$username','$email','$password','$isvolun','','','')";
	 $q = mysqli_query($conn, $insert);
	     $_SESSION['registered'] = 1;
	     $_SESSION['username'] = $username;
	     $_SESSION['volun'] = $isvolun;
         if($isvolun==2)
		 {
	     header('Location:profileEN.php');	
		 }
		if($isvolun==1)
		 {
	     header('Location:profileVOLEN.php');	
		 }
	}
    }  

   }
	




?>