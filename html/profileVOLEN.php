<?php session_start();
if (isset($_SESSION['username']))
{

$_SESSION["changeLang"] = 'profileVOLGR.php'; 

$_SESSION["pageTitle"] = 'Profile'; 
$_SESSION["langu"] = 'en';

require('headerEN.php');
require('connection.php');

$sql="SELECT * FROM usertable WHERE username='".$_SESSION['username']."' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$id=$row['id'];

$sql1="SELECT a.* FROM user_info a,usertable b WHERE a.user_id=$id and lang='el'";
$res1=mysqli_query($conn,$sql1);
$row2=mysqli_fetch_array($res1);

$sql2="SELECT a.* FROM user_info a, usertable b WHERE a.user_id=$id and lang='en'";
$res2=mysqli_query($conn,$sql2);
$row3=mysqli_fetch_array($res2);
?>  
<!--  Εδώ αρχίζει ο html κώδικας της σελίδας --> 

<main class="article-content"> 
  <section class="section-1"> 
	  <?php  if (isset($_SESSION['registered'])) : ?>

	  <?php  if ($_SESSION['registered']==1) : ?>
		<div class="bs-example"> 
    <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x" style="margin-right:20px;"></i></strong> You have successfully registered!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
						
        <?php $_SESSION['registered']=0 ?>
			<?php endif ?>
    </div>
    			<?php endif ?>
	  
    <div class="container fa_custom">
	<div class="row">
  		<div class="col-md-10 mx-auto">
			<h1><?php echo $_SESSION['username'];?></h1>
		</div>
    </div>
    <hr>
<div class="container">
	<form class="form" action="setprofileVOL.php" method="POST" enctype="multipart/form-data" id="registrationForm">            
    <div class="row">
  		
	<br>
    	<div class="col-sm-9">
                
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputOrganisationName_el">Όνομα εθελοντή</label>
                         <input type="text" class="form-control" name="organ_name_el" id="organ_name_el"  placeholder="Το όνομά σας " value="<?php echo 								$row2['name_organ']?>"> 
                    </div>
                    <div class="col-sm-6">
                        <label for="inputOrganisationName_en">Volunteer name</label>
                        <input type="text" class="form-control" name="organ_name_en" id="organ_name_en"  placeholder="Your name" value="<?php echo 								$row3['name_organ']?>"> 
                    </div>
                </div>
                
                <div class="form-group row">
                                       
                    <div class="col-sm-3">
                        <label for="inputEmail">Email</label>
                       <input type="email" class="form-control" name="organ_email" id="organ_email" placeholder="you@email.com" value="<?php echo $row['email']?>">
                    </div>
                </div>
               
			<button type="submit" class="btn btn-primary px-4 float-left" name="save" id="save" value="save">Save</button>
		</div>
		</div>
			</form>
             </div>
		<div class="HOVER">
        <a href="actprofilEN.php"><h4><i class="fas fa-cogs"></i>
Actions Edit</h4></a>
		</div>
          </div>
		
  </section> 
</main> 

<!-- Εδώ σταματάει ο html κώδικας της σελίδας --> 
 <?php require('footerEN.php'); }
else{require('loginEN.php');
 }?>