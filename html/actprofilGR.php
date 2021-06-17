<?php session_start() ;
if (isset($_SESSION['username']))
{
require('connection.php');

$_SESSION["changeLang"] = 'actprofilEN.php'; 
$name=$_SESSION['username'];
$_SESSION["pageTitle"] = 'Δράσεις Προφίλ';
require('headerGR.php');
$_SESSION["lang"] = 'gr';
if ($_SESSION['volun']==2){

?>  
<main class="article-content"> 

  <section class="section-1"> 
    <div class="container fa_custom"> 
			  <div class="text-center" ><h1> Δράσεις </h1></div>

	<div class="row">
  		<div class="col-sm-10"><h2> <?php echo $_SESSION['username'];?></h2></div>
    </div>
    <hr>
    <div class="ACT">
	<?php
	$name=$_SESSION['username'];
	//δείχνει πρώτα τα μηνυματα των οργανισμων και την ημερομηνια τους
    $sql1="SELECT * FROM org_action WHERE username='$name'";
    $res1=mysqli_query($conn,$sql1);  
	$rowcount=mysqli_num_rows($res1);
	if($rowcount==0){
		echo '<div class="col-sm-10"><p>Δεν έχετε δημιουργήσει ακόμα δράσεις. Αν θέλετε μπορείτε να δημιουργήσετε μία επιλέγοντας: <a href="actionsGR.php">Δράσεις.</a></p></div>';
	}
	 else{
	echo '<div class="col-sm-10"><p>Εδώ μπορείτε να επεξεργαστείτε τις δράσεις σας. </p></div>';
	 }
		while($row=mysqli_fetch_assoc($res1))
		{
			if($row['message']!='')
			{


				echo '<form class="form" action="setactions.php" method="POST"> 
				<div class="row">
				<div class="col-md-8 style="margin-top:10px;"">
				  <h2><div class="text-right"> '.$row['date']. '</div></h2>';
			

					echo'<div class="form-group">
                          				<input type="hidden" name="aID" value='.$row['ID'].'>

                          <div class="col-xs-6">
                              <textarea class="form-control form-rounded" rows="3"  name="message" id='.$_SESSION['id'].'>' 
					.$row['message'].' </textarea>
				          </div>
                      </div>
		   
              </div>
			  </div>
			  <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-info" type="submit" name="save">Αποθήκευση</button>
								<button class="btn btn-lg btn-danger" type="submit" name="delete">Διαγραφή</button>
                            </div>
                      </div>
			  </form>';
			
		}}echo '</div>
	  </div>
	</section>
</main>';}
if ($_SESSION['volun']==1){

?>  

<main class="article-content"> 

  <section class="section-1"> 
    <div class="container fa_custom"> 
			  <div class="text-center" ><h1> Δράσεις </h1></div>

	<div class="row">
  		<div class="col-sm-10"><h2> <?php echo $_SESSION['username'];?></h2></div>
    </div>
    <hr>
    <div class="ACT">
	<?php
	$name=$_SESSION['username'];
	//δείχνει πρώτα τα μηνυματα των οργανισμων και την ημερομηνια τους
     $sql1="SELECT * FROM vol_action WHERE username='$name'";
$res1=mysqli_query($conn,$sql1);  
$rowcount=mysqli_num_rows($res1);
	if($rowcount==0){
		echo '<div class="col-sm-10"><p>Δεν έχετε δημιουργήσει ακόμα δράσεις. Αν θέλετε μπορείτε να δηλώσετε μία επιλέγοντας: <a href="actionsGR.php">Δράσεις.</a></p></div>';
	}
	else{
	 echo '<div class="col-sm-10"><p>Εδώ μπορείτε να επεξεργαστείστε τις δράσεις σας.</p></div>';
	}
		while($row=mysqli_fetch_assoc($res1))
		{		
			if($row['message']!='')
			{
				$_SESSION['m']=$row['message'];

				echo'<form class="form" action="setactionsV.php" method="POST"> <div class="row">
					               

				<div class="col-md-8 style="margin-top:10px;"">
				  <h2><div class="text-right"> '.$row['date']. '</div></h2>
                <div class="form-group">
                          
                          <div class="col-xs-6">
						                            				<input type="hidden" name="aID" value='.$row['ID'].'>


                              <textarea class="form-control form-rounded" rows="3" name="message" id="message" >' 
					.$row['message']. ' </textarea>
				          </div>
                      </div>
		   
              </div>
			  </div>
			  <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-info" type="submit" name="save">Αποθήκευση</button>
								<button class="btn btn-lg btn-danger" type="submit" name="delete">Διαγραφή</button>
                            </div>
                      </div>
			  </form>';
			
		}}

	?>
      </div>
	  </div>
	</section>
</main>
<!-- Εδώ σταματάει ο html κώδικας της σελίδας --> 

<?php } require('footerGR.php'); }
else{require('loginGR.php');
 }?>