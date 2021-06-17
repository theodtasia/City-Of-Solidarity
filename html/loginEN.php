<?php session_start();?>

     <?php 
	$_SESSION["changeLang"] = 'loginGR.php';
	$_SESSION["pageTitle"] = 'Login/Register';
    $_SESSION["lang"] = 'en';
	require('headerEN.php');?>

   <header>
   
     <section class="section-login">
	 <div class="container" >
   
        <div class="row">
                        
		     <div class="col-md-5 login-left" style=margin-top:30px >
			   
			     <h2>Login</h2>
			     <form action="validation.php" method="POST">
			  <div class="form-group">
			        <label>Username</label>
				   <input type="text"  name="usern" class="form-control" oninvalid="this.setCustomValidity('Please enter your username')" onchange="this.setCustomValidity('')" required>
				   <label>Password</label>
				   
				   <input type="password"  name="pass" class="form-control" oninvalid="this.setCustomValidity('Please enter your password')" onchange="this.setCustomValidity('')" required> 
				  
				  <button style=margin-top:20px type="submit" name="log_user" class="btn btn-secondary btn-lg btn-block">Login</button>
					</div>
				 </form>
				 <?php
	               $fullurl="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	                if(strpos($fullurl,"user_error"))
	                {
						echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Username and password dont match!</h6></center></span>';
						
	                }?>
				
		     </div> 
			 <div class="col-md-2"></div>
	         <div class="col-md-5  login-right" style=margin-top:30px>
		           <h2>Register</h2>
			  	  <form action="registration.php" method="POST">
			  	   <div class="form-group">
		           <label>Username</label>
				   <input type="text"  name="usern" class="form-control" oninvalid="this.setCustomValidity('Please enter a username')" onchange="this.setCustomValidity('')" required>
				   <label>Email</label>
				   <input type="email"  name="Email" class="form-control" oninvalid="this.setCustomValidity('Please enter a valid email address')" onchange="this.setCustomValidity('')" required>
				   <label>Password</label>
				   <input type="password"  name="pass" class="form-control" oninvalid="this.setCustomValidity('Please enter a password')" onchange="this.setCustomValidity('')" required>
				   <label>Verify Password</label>
				   <input type="password"  name="vpass" class="form-control" oninvalid="this.setCustomValidity('Put here the password you chose')" onchange="this.setCustomValidity('')" required>					
				   <div class="form-check">
                     <label class="form-check-label" style=margin-top:10px>
                      <input type="radio" class="form-check-input" name="optradio" value="1" >Volunteer
                     </label>
					   </div>
					 <div class="form-check">
                      <label class="form-check-label"style=margin-top:10px>
                       <input type="radio" class="form-check-input" name="optradio" value="2">Organisation
                      </label>
                   </div>
				</div>
					 <button type="submit" style=margin-top:20px name="reg_user" class="btn btn-secondary btn-lg btn-block">Register</button>
				</form>
				 <?php
	               $fullurl="https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	                if(strpos($fullurl,"username_taken"))
	                {
						echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Username is already used!</h6></center></span>';
	                }
				     if(strpos($fullurl,"passwords_dont_match"))
	                {
						
						 echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Passwords dont match!</h6></center></span>';
						 
						 
		            }
				    if(strpos($fullurl,"volunteer_or_organisation"))
	                {
						echo'<span style="color:#ae0000;"/> <center> <i class="fas fa-exclamation-circle  fa-2x"> </i> <h6> Choose if you are volunteer or organisation</h6></center></span>';
	                }
				   
	              ?>
		 </div>
	 </div>	
	</div>
	  <section class="section-la"></section>
   </section>
	<?php require('footerEN.php');?>

