<?php session_start();
 require('connection.php'); 
$lang=$_SESSION["lang"];
if($lang == 'gr')   
{
//echo "CONNECTION OK </br>";
if(isset($_POST['log_user']));
{
//perasma se metablhtse apo to register
$username=$_POST['usern'];
$password=$_POST['pass'];


//elegxos gia to an perastikan auta poy egrapse o xrhsths stis metablhtes kanontas echo arxika
// an dhlwse ethelonths tote isvolun=1 an dhlwse organismow isvolun=0
//echo $username. PHP_EOL;
//echo $password. PHP_EOL;

// elegxos gia to an yparxei xrhsths me to idio username
 $admin=5;
 if ($result = $conn->query("SELECT * FROM usertable WHERE username='$username' && password='$password'")) 
   { 
    
    $num = $result->num_rows;
    $result->close();
   }
  
   
   if($num==0)
   {
	 array_push($errors, "The Username and Password dont match");
	  header('Location:loginGR.php?user_error');
 
   }
	
 
		
 if($num==1)// αν το αποτέλεσμα είναι οκ τότε ελέγχω  τι τύπου isvolun είναι
  {
   $sql = "SELECT isvolun FROM usertable WHERE username='$username'";
   $result = $conn->query($sql);
  
    
   if ($result->num_rows > 0) 
   {
     while($row = $result->fetch_assoc()) 
	{  
	   
	   

	  if($row["isvolun"]==4)//είναι admin
	 {
	  header('Location:adminGR.php');
	  $_SESSION['admin'] = $username;

	 }
	if($row["isvolun"]==2)//είναι οργανισμός
	 {
	  header('Location:../index.php');

	  $_SESSION['username'] = $username;
	  $_SESSION['volun'] =$row["isvolun"];
    	  
	 }
	if($row["isvolun"]==1)// είναι εθελοντής
	 {
	  header('Location:../index.php');
	  $_SESSION['username'] = $username;
	  $_SESSION['volun'] = $row["isvolun"];

	 }
	
	
   
	
   }
 }
$conn->close();
	
	 
 }
} 
}
else
{
	//echo "CONNECTION OK </br>";
if(isset($_POST['reg_user']));
{
//perasma se metablhtse apo to register
$username=$_POST['usern'];
$password=$_POST['pass'];


//elegxos gia to an perastikan auta poy egrapse o xrhsths stis metablhtes kanontas echo arxika
// an dhlwse ethelonths tote isvolun=1 an dhlwse organismow isvolun=0
//echo $username. PHP_EOL;
//echo $password. PHP_EOL;

// elegxos gia to an yparxei xrhsths me to idio username/mail

if ($result = $conn->query("SELECT * FROM usertable WHERE username='$username' && password='$password'")) 
 {

    /* determine number of rows result set */
    $num = $result->num_rows;

    //printf("Result set has %d rows.\n", $num);
    
    /* close result set */
    $result->close();
  }

 if($num==0)// αν δεν ταιρίάζει το αποτέλεσμα ερρορ
  {
	 array_push($errors, "The Username and Password dont match");
	 header('Location:loginEN.php?user_error');
	 

	
	 
  }
 if($num==1)//έλεγος τι isvolun είναι
  {
   $sql = "SELECT isvolun FROM usertable WHERE username='$username'";
   $result = $conn->query($sql);
	  

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{

	    
	  if($row["isvolun"]==4)//είναι admin
	 {
	  header('Location:../adminGR.php');
	   $_SESSION['admin'] = $username;

	 }
	if($row["isvolun"]==2)//είναι οργανισμός
	 {
	  header('Location:../indexEN.php');

	  $_SESSION['username'] = $username;
	  $_SESSION['volun'] =$row["isvolun"];
    	  
	 }
	if($row["isvolun"]==1)// είναι εθελοντής
	 {
	  header('Location:../indexEN.php');
	  $_SESSION['username'] = $username;
	  $_SESSION['volun'] = $row["isvolun"];
	  
	 }
   }}
$conn->close();
	
	 
 }
} 

}


?>