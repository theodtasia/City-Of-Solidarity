<?php session_start();?>

 <?php 
	$_SESSION["changeLang"] = 'contactEN.php';
	$_SESSION["pageTitle"] = 'Επικοινωνία';
$_SESSION["lang"] = 'gr';

	require('headerGR.php');?>
                           
	<main class="article-content">
		
	
		
        <div class="text-style">
		
            <section class="section-1">
			  <?php  if (isset($_SESSION['stat'])) : ?>


	<?php if($_SESSION['stat']==1) : ?>
				  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x"></i></strong>  Λάβαμε και καταχωρήσαμε το μήνυμά σας επιτυχώς! <?php $_SESSION['stat']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>

		<?php endif ?>	
      
			<?php if($_SESSION['stat']==2) : ?>
		   </div>	  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-warning alert-dismissible fade show">
        <strong><i class="fas fa-exclamation-circle  fa-2x"></i></strong>  Το μήνυμά σας δεν καταχωρήθηκε, προσπαθήστε ξανά!	<?php $_SESSION['stat']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>

		<?php endif ?>
	</div>
				<?php endif ?>

			
                <div class="container fa_custom">
                    <h1>Επικοινωνήστε μαζί μας!</h1>
                    <hr>
					
                    <div class="row">

                        <div class="col-md-4">
                            <p fa_custom> Είμαστε μια ομάδα φοιτητών του τμήματος Πληροφορικής του Α.Π.Θ. και αναπτύσσουμε αυτόν
                                τον
                                ιστότοπο στο πλαίσιο ενός μαθήματος.
                                Θα χαρούμε να επικοινωνήσετε μαζί μας μέσω αυτής της φόρμας και να μας στείλετε τις
                                ιδέες
                                και
                                τις παρατηρήσεις σας! Επίσης μπορείτε να μας ακολουθήσετε στα κοινωνικά μας δίκτυα για
                                να
                                μαθαίνετε τα νέα μας! Αν επιθυμείτε ακόμη, μπορείτε να μας στείλετε ένα email στην διεύθυνση:  
							
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
                            <form action="mailGR.php"   onsubmit="return validateForm();" method="POST">
                                <label for="name" id="name_prompt" class="">Όνομα*</label>
                                <input type="text" id="name" name="name" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε όνομα')" onchange="this.setCustomValidity('')" required autofocus >

                                <label for="email" class="">Διεύθυνση email*</label>
                                <input type="email" id="email" name="email" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε έγκυρη διεύθυνση email')" onchange="this.setCustomValidity('')" required>

                                <label for="message">Γράψτε το μήνυμα εδώ*</label>
                                <textarea type="text" id="message" name="message" rows="7"
                                    class="form-control md-textarea" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε περιεχόμενο μηνύματος')" onchange="this.setCustomValidity('')" required></textarea>
								 <div class="text-center text-md-left " style="margin-top:1em;">
                                <button  class="btn btn-info btn-block" name="send">Αποστολή</button>
								
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

<?php require('footerGR.php');?>
   

   