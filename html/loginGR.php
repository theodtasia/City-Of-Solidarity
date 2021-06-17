<?php session_start();?>

 <?php 
	$_SESSION["changeLang"] = 'loginEN.php';
	$_SESSION["pageTitle"] = 'Είσοδος/Εγγραφή';
	require('headerGR.php');
    $_SESSION["lang"] = 'gr';

?>
		 

       <header>

     <section class="section-login" >
	 <div class="container" >
        
      <div class="row">
              
		     <div class="col-md-5 login-left" style=margin-top:30px>
			   
			  <h2>Είσοδος</h2>
				<form action="validation.php" method="POST">
			  <div class="form-group">
			        <label>Όνομα Χρήστη</label>
				   <input type="text"  name="usern" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε το όνομα χρήστη σας')" onchange="this.setCustomValidity('')" required>
				   <label>Κωδικός</label>
				   
				   <input type="password"  name="pass" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε το συνθηματικό σας')" onchange="this.setCustomValidity('')" required> 
				  
				  <button style=margin-top:20px type="submit" name="log_user" class="btn btn-secondary btn-lg btn-block">Σύνδεση</button>                               

					</div>
				 </form>
				 <?php
	               $fullurl="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	                if(strpos($fullurl,"user_error"))
	                {
						echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Το Όνομα Χρήστη και ο Κωδικός δε ταιριάζουν!</h6></center></span>';
	                }?>
				
		       </div> 
		     	 
			  <div class="col-md-2"></div>
	          <div class="col-md-5  login-right" style=margin-top:30px>
				  
                <h2>Εγγραφή</h2>
				  
                 <form action="registration.php" method="POST">
			  	   <div class="form-group">
		           <label>Όνομα Χρήστη</label>
					 
	                <input type="text"  name="usern" class="form-control"  oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε ένα όνομα χρήστη')" onchange="this.setCustomValidity('')" required>  
					
				   <label>Email</label>
				   <input type="email"  name="Email" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε μια έγκυρη διεύθυνση email')" onchange="this.setCustomValidity('')" required>
				   <label>Κωδικός</label>
				   <input type="password"  name="pass" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε ένα συνθηματικό')" onchange="this.setCustomValidity('')" required>
				   <label>Επαλήθευση Κωδικού</label>
				   <input type="password"  name="vpass" class="form-control" oninvalid="this.setCustomValidity('Βάλτε εδώ το συνθηματικό που επιλέξατε')" onchange="this.setCustomValidity('')" required>	
					   <div class="form-check">
                     <label class="form-check-label" style=margin-top:10px>
                      <input type="radio" class="form-check-input" name="optradio" value="1" >Εθελοντής
                     </label>
					   </div>
					 <div class="form-check">
                      <label class="form-check-label"style=margin-top:10px>
                       <input type="radio" class="form-check-input" name="optradio" value="2">Οργανισμός
                      </label>
                   </div>
				</div>
					 <button type="submit" style=margin-top:20px name="reg_user" class="btn btn-secondary btn-lg btn-block">Εγγραφή</button>
				</form>
				<?php
	               $fullurl="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	                if(strpos($fullurl,"username_taken"))
	                {
						echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Το Όνομα Χρήστη χρησιμοποιείται!</h6></center></span>';
	                }
				     if(strpos($fullurl,"passwords_dont_match"))
	                {
						
						 echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Οι κωδικοί δε ταιριάζουν!</h6></center></span>';
						 
						 
		            }
				    if(strpos($fullurl,"volunteer_or_organisation"))
	                {
						echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Επίλεξε αν είσαι εθελοντής ή οργανισμός</h6></center></span>';
	                }
				   
				    
	              ?> 
			 </div>
							   
	    </div>	
			
	</div>
		
		  <section class="section-la"></section>
	
   </section>
	
	   
<?php require('footerGR.php');?>