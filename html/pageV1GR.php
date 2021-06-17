<?php session_start();
if (isset($_SESSION['username']))
{
	$_SESSION["changeLang"] = 'pageV1EN.php';
	$_SESSION["pageTitle"] = 'Δωρεά';
	$_SESSION["lang"] = 'gr';

	require('headerGR.php');?>
	
   		 <header>

	<section class=CARDS>
			 
	    <section class=section-1>
		
					

	<div class="container">
        
      <div class="container-c text-center">
      
   
       <div class="row">
		<div class="col-md-7 col-sm-4">
		  <h2>Eπίλεξε μια ή περισσότερες από τις παρακάτω κατηγορίες αγαθών που θέλεις να δωρίσεις</h2>
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
					<form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="books">
						<input type="hidden" name="Είδος" value="Βιβλία">
						 <input name="books" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
					<form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="personal_hygiene">
						<input type="hidden" name="Είδος" value="Είδη Προσωπικής Υγιεινής">
						 <input name="personal_hygiene" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                    <form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="tools">
						<input type="hidden" name="Είδος" value="Εργαλεία">
						 <input name="tools" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                	<form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="medications">
						<input type="hidden" name="Είδος" value="Ιατροφαρμακευτικά">
						 <input name="medications" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                    <form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="cleaners">
						<input type="hidden" name="Είδος" value="Καθαριστικά">
						<input name="cleaners" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                   <form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="toys">
					   <input type="hidden" name="Είδος" value="Παιχνίδια">
						<input name="toys" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                   <form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="clothes">
					   <input type="hidden" name="Είδος" value="Ρούχα">
						<input name="clothes" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                    <form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="school_supplies">
						<input type="hidden" name="Είδος" value="Σχολικά Είδη">
						<input name="school_supplies" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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
                   <form method="post" action="kindsGR.php">
						<input type="hidden" name="kind" value="food">
					   <input type="hidden" name="Είδος" value="Tρόφιμα">
						<input name="food" type="submit" value="Δώρισε" class="btn btn-primary btn-lg btn-block">
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