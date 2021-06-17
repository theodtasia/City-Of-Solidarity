<?php session_start() ;
if (isset($_SESSION['username']))
{
$_SESSION["changeLang"] = 'profile.php'; 

$_SESSION["pageTitle"] = 'Profile'; 
$_SESSION["langu"] = 'en';

require('headerEN.php');
require('connection.php');
$sql="SELECT * FROM usertable WHERE username='".$_SESSION['username']."' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$id=$row['id'];
$sql1="SELECT * FROM usertable WHERE username='".$_SESSION['username']."'";
$res=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($res);
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
	  <?php  if ($_SESSION['registered']) : ?>
		<div class="bs-example"> 
    <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x" style="margin-right:20px;"></i></strong> Successfull Register!
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
						
        <?php $_SESSION['registered']=0 ?>
			<?php endif ?>
    </div>
    <div class="container fa_custom">
	<div class="row">
  		<div class="col-md-10 mx-auto">
			<h1><?php echo $_SESSION['username'];?></h1>
		</div>
    </div>
    <hr>
<div class="container">
	<form class="form" action="setprofile.php" method="POST" enctype="multipart/form-data" id="registrationForm">            
    <div class="row">
  		<div class="col-sm-3">
			
      <div class="text-center">
        <img src="./img/<?php echo $row['logo']?>" class="avatar img-circle img-thumbnail" alt="Without photo">
		<label for="inputlogo">Logo οργανισμού | Organisation Logo</label>
        <input type="file" class="text-center center-block file-upload" name="logo" id="logo">
		  </div>
      </div>
		<div class="col-md-8" style="margin-top:1rem ; margin-left:5rem">

<h3> Here you can enter the details of your organization, in order to create its page on our network, in Greek and in English </h3>
       </div>

	<hr>
		<br>
      <!--/col-3-->
    	<div class="col-sm-10">
                <hr>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputOrganisationName_el">Όνομα Οργανισμού</label>
                         <input type="text" class="form-control" name="organ_name_el" id="organ_name_el"  placeholder="Όνομα Οργανισμού" value="<?php echo 								$row2['name_organ']?>"> 
                    </div>
                    <div class="col-sm-6">
                        <label for="inputOrganisationName_en">Organisation Name</label>
                        <input type="text" class="form-control" name="organ_name_en" id="organ_name_en"  placeholder="Organisation Name" value="<?php echo 								$row3['name_organ']?>"> 
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine_el">Διεύθυνση</label>
                   <input type="text" class="form-control" name="address_el" id="address_el" placeholder="Διεύθυνση" value="<?php echo $row2['address']?>">
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine_en">Address</label>
                       <input type="text" class="form-control" name="address_en" id="address_en" placeholder="Address" value="<?php echo $row3['address']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputPhone">Τηλέφωνο Επικοινωνίας | Contact Number</label>
                 <input type="text" class="form-control" name="phone" id="phone" placeholder="Τηλέφωνο" value="<?php echo $row['phone']?>">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputWebsite">Ιστοσελίδα | Website</label>
                        <input type="text" class="form-control" name="site" id="site" placeholder="Ιστοσελίδα" value="<?php echo $row['website']?>">
                    </div>
                    <div class="col-sm-3">
                        <label for="inputEmail">Email</label>
                       <input type="email" class="form-control" name="organ_email" id="organ_email" placeholder="you@email.com" value="<?php echo $row['organ_email']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="info_el"><h4>Πληροφορίες</h4></label>
                              <textarea class="form-control form-rounded" rows="3" name="info_el" id="info_el" ><?php echo $row2['info']?></textarea>
				          </div>
                    <div class="col-sm-6">
                        <label for="info_en"><h4>Info</h4></label>
                              <textarea class="form-control form-rounded" rows="3" name="info_en" id="info_en" ><?php echo $row3['info']?></textarea>
				          </div>
                    </div>
                  <button type="submit" class="btn btn-primary px-4 float-left" name="save" id="save" value="save">Save</button>
		</div>
			</form>
             </div>
		<div class="HOVER">
        <a href="actprofilEN.php"><h4><i class="fas fa-cogs"></i>
Actions Edit</h4></a>
			<a href="needs_managementEN.php"><h4><i class="fas fa-eraser"></i>
Need Management</h4></a>
		</div>
          </div>
		
  </section> 
</main> 

<!-- Εδώ σταματάει ο html κώδικας της σελίδας --> 
 <?php require('footerEN.php'); }
else{require('loginEN.php');
 }?>