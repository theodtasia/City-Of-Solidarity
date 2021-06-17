<?php session_start();
if (isset($_SESSION['username']))
{
$_SESSION["changeLang"] = 'needs_managementGR.php'; 
$_SESSION["pageTitle"] = 'Need management'; 
$_SESSION["lang"] = 'en';

require('headerEN.php');
require('connection.php');

//παίρνουμε την εγγραφή του οργανισμού από τον πίνακα usertable
$sql="SELECT * FROM usertable WHERE username='".$_SESSION['username']."' ";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);

//παίρνουμε τις ανάγκες για αυτόν τον οργανισμό
$sql2="SELECT * from needs WHERE organ_id='".$row['id']."' ";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($res2);
$num=mysqli_num_rows($res2);
?>  
<!-- Εδώ αρχίζει ο html κώδικας της σελίδας -->

<main class="article-content">
	<section class="section-1">
	      							 <?php  if (isset($_SESSION['stat'])) : ?>

		<?php if($_SESSION['stat']==1) : ?>
				  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x"></i></strong>We have successfully deleted your request!<?php $_SESSION['stat']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>

		<?php endif ?>	
      
			<?php if($_SESSION['stat']==2) : ?>
		   </div>	  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-warning alert-dismissible fade show">
        <strong><i class="fas fa-exclamation-circle  fa-2x"></i></strong>  Your request has not been registered, try again!	<?php $_SESSION['stat']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>

		<?php endif ?>
	</div>
			<?php endif ?>

		<div class="container fa_custom">
			<div class="text-center">                   
				<h1>Need management</h1>
			</div>
			 <div class="col-md-12" style="margin-top:50px;">				
					<h3>From this page you can see the needs you have stated as active and delete any you wish.</h3><hr>
			<p>Visit the <a href="pageO1EN.php">needs statement page</a>, to state your needs.</p></div>	
		</div>
						 	<section class=CARDS>

				<div class="container ">
			<div class="row">
					
	
					<?php
							  
	
					if($row2['books']==1) {
						echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
	
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/books.jpg" alt="books">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Books</h4>
                    <!--Text-->
                    <p class="card-text">Encyclopedias, literature,school books, etc.</p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="books">
						<input name="books"  type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>	
                </div>
            </div>
        
        </div>';} 
					
				if($row2['personal_hygiene']==1){
						echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/toothbrush.jpg" alt="Card image cap">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Personal Hygiene Items</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Soaps, toilet paper, baby wipes, etc.</p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="personal_hygiene">
						<input name="personal_hygiene" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
                     </div>
            </div>
        </div>';}
				    if($row2['tools']==1){
						echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/tools.jpg" alt="tools">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Tools</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Screws, hammers, pliers, batteries, etc.</p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="tools">
						 <input type="submit" name="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
	</div>';} 
					
					 if($row2['medications']==1){
					echo '  <div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/thermometer.jpg" alt="pharmacy">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="class-title  mb-auto">Medications </h4>
                    <!--Text-->
					<p class="card-text mt-auto pt-3">  Medicines, thermometers, masks, etc.  </p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="medications">
						 <input name="medications" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
					
				</div>
					
		   </div>		
        
        </div>';}
					
					if($row2['cleaners']==1){
					echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/cleana.jpg" alt="clean">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Cleaners</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Mops, buckets, bleach, etc.</p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="cleaners">
						<input name="cleaners" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
                    

                </div>
            </div>
			</div>';}
					 
					 if($row2['toys']==1){
						 echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/games.jpg" alt="games">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title card-title mb-auto">Toys</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Board games, teddy bears, dolls, etc.</p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="toys">
						<input name="toys" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
                   
                </div>
            </div>
			</div>';}
						
					 if($row2['clothes']==1){
						 echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/clothes.jpg" alt="clothes">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title mb-auto">Clothes</h4>
                    <!--Text-->
					<p class="card-text mt-auto pt-3">For men, women, children, babies, etc. </p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="clothes">
						<input name="clothes" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
                   

                </div>
				 </div>
			</div>';}
						
					  if($row2['school_supplies']==1){
						  echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img  class="img-fluid" src="../img/pencils.jpg" alt="pencils">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">School Supplies</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Graphic material, stationary, bags, etc.</p>
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="school_supplies">
						  <input name="school_supplies" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
                  

                </div>
            </div>
			</div>';}
						 
					 if($row2['food']==1){
						 echo '<div class="col-md-4 pt-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/food.jpg" alt="food">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Food</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Dry food, rice, canned food, oil, etc.</p>
                  
					<form method="post" action="del_needs.php">
						<input type="hidden" name="kind" value="food">
						<input name="food" type="submit" value="Delete" class="btn btn-primary btn-lg btn-block">
					</form>
				

				</div>
</div>
		
                </div>';}
		  
				
					?>  
				 </div>
		     </div>
														</section>


	
	</section>
</main>

<!-- Εδώ σταματάει ο html κώδικας της σελίδας -->
<?php require('footerEN.php'); }
else{require('loginEN.php');
 }?>