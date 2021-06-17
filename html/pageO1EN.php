<?php session_start();
if (isset($_SESSION['username']))
{
	$_SESSION["changeLang"] = 'pageO1GR.php';
	$_SESSION["pageTitle"] = 'Need';
	$_SESSION["lang"] = 'en';

	require('headerEN.php');?>


 <header>

	<section class=CARDS>
			 
	
	    <section class=section-1>
									 <?php  if (isset($_SESSION['stat'])) : ?>

			<?php if($_SESSION['stat']==1) : ?>
				  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x"></i></strong>  We have successfully received and registered your request! <?php $_SESSION['stat']=0 ?>

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
				<?php endif ?>


	<div class="container">
        
      <div class="container-c text-center">
      
   
       <div class="row">
		<div class="col-md-7 col-sm-4">
<h1>Choose one or more of the following categories of goods you are in need</h1>       
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
                    <form method="post" action="needs.php">
						<input type="hidden" name="kind" value="books">
						<input name="books"  type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="personal_hygiene">
						<input name="personal_hygiene" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
                    <form method="post" action="needs.php">
						<input type="hidden" name="kind" value="tools">
						 <input type="submit" name="submit" value="Need" class="btn btn-primary btn-lg btn-block">
					</form>
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
                   <form method="post" action="needs.php">
						<input type="hidden" name="kind" value="medications">
						 <input name="medications" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
                   <form method="post" action="needs.php">
						<input type="hidden" name="kind" value="cleaners">
						<input name="cleaners" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="toys">
						<input name="toys" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="clothes">
						<input name="clothes" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="school_supplies">
						  <input name="school_supplies" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
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
                   					<form method="post" action="needs.php">
						<input type="hidden" name="kind" value="food">
						<input name="food" type="submit" value="Need" class="btn btn-primary btn-lg btn-block">
					</form>
				
                </div>
            </div>
            
			</div>
	
		</div>
		
		</div>
		
			</div>
		</div>
	
		<section class="section-la">	 </section>
			</section>
<?php require('footerEN.php'); }
else{require('loginEN.php');
 }?>