<?php session_start();?>

     <?php 
	$_SESSION["changeLang"] = 'contactGR.php';
	$_SESSION["pageTitle"] = 'Contact';
	$_SESSION["lang"] = 'en';

	require('headerEN.php');?>
   
    <main class="article-content">
		<div class="text-style">
			
        <section class="section-1">
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

            <div class="container fa_custom">
                <h1>Contact us!</h1>
                <hr>
                <div class="row">

                    <div class="col-md-4">
                        <p>We are a group of students of the Department of Informatics of Aristotle University of
                            Thessaloniki and we develop this site
                            as part of a course. We will be happy to contact you through this form and send us your
                            ideas and comments! You can also follow us on our social networks to learn our news! If you wish, you can send us an email at:
                        <a href="mailto:poliallileggiis@gmail.com">poliallileggiis@gmail.com</a>.<br> </p>
                        	<div class="column text-light">
                        <a href="https://www.facebook.com/%CE%98%CE%B5%CF%83%CF%83%CE%B1%CE%BB%CE%BF%CE%BD%CE%AF%CE%BA%CE%B7-%CE%A0%CF%8C%CE%BB%CE%B7-%CE%91%CE%BB%CE%BB%CE%B7%CE%BB%CE%B5%CE%B3%CE%B3%CF%8D%CE%B7%CF%82-106096707790797/" target="_blank"><i class="fab fa-facebook-f fa_custom fa-2x" style="margin-right: 15px;margin-bottom: 15px;"></i></a>
                        <a href="https://twitter.com/U5Iz2EZcFckXx3H" target="_blank">
                        <i class="fab fa-twitter fa_custom fa-2x" style="margin-right: 15px;margin-bottom: 15px;"></i></a>
                    </div>

                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-6">
                            <form action="mailEN.php"   onsubmit="return validateForm();" method="POST">
                                <label for="name" id="name_prompt" class="">Name*</label>
                                <input type="text" id="name" name="name" class="form-control" oninvalid="this.setCustomValidity('Please enter a name')" onchange="this.setCustomValidity('')" required autofocus >

                                <label for="email" class="">Email address*</label>
                                <input type="email" id="email" name="email" class="form-control" oninvalid="this.setCustomValidity('Please enter a valid email address')" onchange="this.setCustomValidity('')" required>

                                <label for="message">Write your message here*</label>
                                <textarea type="text" id="message" name="message" rows="7"
                                    class="form-control md-textarea" oninvalid="this.setCustomValidity('Please enter a message content')" onchange="this.setCustomValidity('')" required></textarea>
								 <div class="text-center text-md-left " style="margin-top:1em;">
                                <button  class="btn btn-info btn-block" name="send">Send</button>
								
                            </div>
                            </form>


                           

                           
						</div>
                        </div>


                    </div>

                </div>
            </div>
        </section>
		</div>
    </main>
  <?php require('footerEN.php');?>