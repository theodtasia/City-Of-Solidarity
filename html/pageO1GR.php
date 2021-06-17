<?php session_start();
if (isset($_SESSION['username']))
{
	$_SESSION["changeLang"] = 'pageO1EN.php';
	$_SESSION["pageTitle"] = 'Ανάγκη';
	$_SESSION["lang"] = 'gr';

	require('headerGR.php');
?>
         <header>

			 	<section class=CARDS>

	    <section class=section-1>
		
							 <?php  if (isset($_SESSION['stat'])) : ?>


	<?php if($_SESSION['stat']==1) : ?>
				  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x"></i></strong>  Λάβαμε και καταχωρήσαμε το αίτημα σας επιτυχώς! <?php $_SESSION['stat']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>

		<?php endif ?>	
      
			<?php if($_SESSION['stat']==2) : ?>
		   </div>	  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-warning alert-dismissible fade show">
        <strong><i class="fas fa-exclamation-circle  fa-2x"></i></strong>  Το αίτημα σας δεν καταχωρήθηκε, προσπαθήστε ξανά!	<?php $_SESSION['stat']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>

		<?php endif ?>
	</div>
				<?php endif ?>

	   	  	
		
	  <div class="container">
        
      <div class="container-c text-center">
      
   
       <div class="row">
		<div class="col-md-7 col-sm-4">
		  <h2>Eπιλέξτε μια ή περισσότερες από τις παρακάτω κατηγορίες αγαθών που έχετε ανάγκη</h2>
        </div>
        <div class="col-md-4 col-sm-4">
                <img src="../img/arrow.png" alt="arrow"  style="width:350px;height:390px">
            </div>  
        
       </div>
    
	   </div>

	
	
	<div class="container">

		<div class="row">
	   
        <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
	
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/books.jpg" alt="books">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Βιβλία</h4>
                    <!--Text-->
                    <p class="card-text">Εγκυκλοπαίδειες, λογοτεχνικά, σχολικά, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="books">
						<input name="books"  type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>	
                </div>
            </div>
        
        </div>
		<div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/toothbrush.jpg" alt="Card image cap">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Είδη Προσωπικής Υγιεινής</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Σαπούνια, χαρτί υγείας, μωρομάντιλα, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="personal_hygiene">
						<input name="personal_hygiene" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
                     </div>
            </div>
        </div>
		 <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/tools.jpg" alt="tools">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Εργαλεία</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Βίδες, σφυριά, πένσες, μπαταρίες, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="tools">
						 <input type="submit" name="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
	</div>
		
	
          
	
       <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/thermometer.jpg" alt="pharmacy">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="class-title  mb-auto">Ιατροφαρμακευτικά </h4>
                    <!--Text-->
					<p class="card-text mt-auto pt-3"> Φάρμακα, μάσκες, αντισηπτικά, κ.ά. </p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="medications">
						 <input name="medications" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
					
				</div>
					
		   </div>		
        
        </div>
			 <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/cleana.jpg" alt="clean">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Καθαριστικά</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Σφουγγαρίστρες, κουβάδες, χλωρίνες, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="cleaners">
						<input name="cleaners" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
                    

                </div>
            </div>
			</div>
				
				 <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/games.jpg" alt="games">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title card-title mb-auto">Παχνίδια</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Επιτραπέζια, λούτρινα, κούκλες, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="toys">
						<input name="toys" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
                   
                </div>
            </div>
			</div>
					 <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/clothes.jpg" alt="clothes">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title mb-auto">Ρούχα</h4>
                    <!--Text-->
					<p class="card-text mt-auto pt-3"> Αντρικά, γυναικία, παιδικά, βρεφικά, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="clothes">
						<input name="clothes" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
                   

                </div>
				 </div>
			</div>
			<div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img  class="img-fluid" src="../img/pencils.jpg" alt="pencils">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Σχολικά Είδη</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Γραφική ύλη, τσάντες, χαρτικά, κ.ά.</p>
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="school_supplies">
						  <input name="school_supplies" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
                  

                </div>
            </div>
			</div>
			 <div class="col-md-4  d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/food.jpg" alt="food">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Τρόφιμα</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Ξηρά τροφή, ρύζι, κονσέρβες, λάδι, κ.ά.</p>
                  
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="food">
						<input name="food" type="submit" value="Χρειαζόμαστε" class="btn btn-primary btn-lg btn-block">
					</form>
				

				</div>
</div>
		
                </div>
            </div>
            
			</div>
	
		</div>
		
	
		
			
		
		
		

		<section class="section-la"></section>
			 </section>
			</section>
  <?php require('footerGR.php'); }
else{require('loginGR.php');
 }?>