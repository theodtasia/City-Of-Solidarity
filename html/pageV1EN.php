<?php session_start();
if (isset($_SESSION['username']))
{
	$_SESSION["changeLang"] = 'pageV1GR.php';
	$_SESSION["pageTitle"] = 'Donation';
	require('headerEN.php');?>
	<header>
	<section class=CARDS>
			 
	    <section class=section-1>
		
					

	<div class="container">
        
      <div class="container-c text-center">
      
   
       <div class="row">
		<div class="col-md-7 col-sm-4">
		  <h1>Choose one or more of the following categories of goods you want to donate</h1>
        </div>
        <div class="col-md-4 col-sm-4">
                <img src="../img/arrow.png" alt="arrow"  style="width:350px;height:390px">
            </div>  
        
       </div>
    
	   </div>	
	   	  	
	
	
	<div class="container">
	  <div class="row">
	   
        <div class="col-md-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/books.jpg" alt="books">
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Books</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Encyclopedias, literature,school books, etc.</p>
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="books">
						<input type="hidden" name="Κind" value="Βooks">
						 <input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
        </div>
		 <div class="col-md-4 d-flex align-items-stretch">
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
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="cleaners">
						<input type="hidden" name="Κind" value="Cleaners">
						<input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
			</div>
		  <div class="col-md-4 d-flex align-items-stretch">
		    <!--Card-->
            <div class="card text-center ">
                <!--Card image-->
                <img class="img-fluid" src="../img/clothes.jpg" alt="clothes">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Clothes</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Men's, women's, children's, baby's, etc.</p>
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="clothes">
						<input type="hidden" name="Κind" value="Clothes">
						<input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
				 </div>
			</div>
		    <div class="col-md-4 d-flex align-items-stretch">
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
                   <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="food">
						<input type="hidden" name="Κind" value="Food">
						<input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
                </div>
            </div>
		  </div>
		<div class="col-md-4 d-flex align-items-stretch">
		<!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/thermometer.jpg" alt="pharmacy">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="class-title  mb-auto">Medications </h4>
                    <!--Text-->
					<p class="card-text mt-auto pt-3"> Medicines, thermometers, masks, etc. </p>
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="medications">
						<input type="hidden" name="Κind" value="Medications">
						 <input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
        
        </div>	
		<div class="col-md-4 d-flex align-items-stretch">
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
                   <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="personal_hygiene">
						<input type="hidden" name="Κind" value="Personal Hygiene Items">
						 <input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
         </div>
		  <div class="col-md-4 d-flex align-items-stretch">
		    <!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/pencils.jpg" alt="pencils">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">School Supplies</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Graphic material, stationary, bags, etc.</p>
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="school_supplies">
						<input type="hidden" name="Κind" value="School Supplies">
						<input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
		 </div>
		 <div class="col-md-4 d-flex align-items-stretch">
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
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="tools">
						<input type="hidden" name="Κind" value="Tools">
						 <input type="submit"name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
					</form>
                </div>
            </div>
	    </div>				
		<div class="col-md-4 d-flex align-items-stretch">
		    <!--Card-->
            <div class="card text-center">
                <!--Card image-->
                <img class="img-fluid" src="../img/games.jpg" alt="games">
            
                <!--Card content-->
                <div class="card-body d-flex flex-column">
                    <!--Title-->
                    <h4 class="card-title  mb-auto">Toys</h4>
                    <!--Text-->
                    <p class="card-text mt-auto pt-3">Board games, teddy bears, dolls, etc.</p>
                    <form method="post" action="kindsEN.php">
						<input type="hidden" name="kind" value="toys">
						<input type="hidden" name="Κind" value="Toys">
						<input type="submit" name="Donate" value="Donate" class="btn btn-primary btn-lg btn-block">
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
<?php require('footerEN.php'); }
else{require('loginEN.php');
 }?>