<?php session_start(); 

if (isset($_SESSION['username']))
{
	$_SESSION["changeLang"] = 'actionsEN.php';
	$_SESSION["pageTitle"] = 'Δράσεις';
    $_SESSION["lang"] = 'gr';

	require('headerGR.php');?>

<body>
	 
<main class="article-content">
	
					
		        <div class="text-style">

            <section class="section-1">
	    							 <?php  if (isset($_SESSION['action'])) : ?>

			<?php if($_SESSION['action']==1) : ?>
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x"></i></strong>  Λάβαμε και καταχωρήσαμε το αίτημα σας επιτυχώς! 

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
				</div>
						  <?php $_SESSION['action']= 0 ?>

		<?php endif ?>	
			
      <?php if($_SESSION['action']==2) : ?>
		  	  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-warning alert-dismissible fade show">
        <strong><i class="fas fa-exclamation-circle  fa-2x"></i></strong>  Το αίτημα σας δεν καταχωρήθηκε, προσπαθήστε ξανά!	<?php $_SESSION['action']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
				</div>
		   <?php endif ?>	
		   		<?php endif ?>	

					<div class="container fa_custom">
							<div class="text-center" style="margin-bottom:3rem">
							<h1 class="move">
  <span class="text-wrapper">
    <span class="letters">Βρες όλες μας τις Δράσεις εδώ!</span>
								</span></h1>
                    
						</div>

		 <?php // αν είναι οργανισμός δείχνει το δικό του modal και περνάει το μήνυμα στη βάση org_action

							  ?>
                        
 

				 
             <?php if ($_SESSION['volun']==2) :  ?>
				  


					   <div class="text-center" >
<div class="box">
  <div class="content1">
                    <h3>Ενημέρωσε μας για τις Δράσεις, που θα ήθελες να οργανώσεις!</h3>
					   
					   

					<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#e1f7d5">
      <div class="modal-header text-center">
		<div class="text-style">

        <h4 class="modal-title h6 ">
			<div class="text-right">
			<button type="button" class="btn btn-outline-info waves-effect" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
				</button> </div>
			<br>  
			<p text-justify>
			Συμπληρώνοντας την παρακάτω φόρμα τα στοιχεία και το μήνυμα σας σας θα εισαχθούν στην βάση δεδομένων μας, έτσι ώστε να δημοσιευτούν στη σελίδα μας και να βρεθούν εθελοντές που μπορούν να σας βοηθήσουν . <strong>Τα στοιχεία της δράσης σας θα είναι διαθέσιμα μόνο σε αυτούς τους εθελοντές και τους υπόλοιπους οργανισμούς που ανήκουν στο δίκτυο μας. </strong>
          <br>
Κάθε εθελοντής ευθύνεται για την αξιολόγηση της κατάστασης σας και την διασταύρωση των στοιχείων σας, γι' αυτό και ενδέχεται να ερωτηθείτε σχετικά κατά την πρώτη επαφή με αυτούς. Η ομάδα του Πόλη Αλληλεγγύης δεν επιβεβαιώνει ούτε πιστοποιεί με οποιονδήποτε τρόπο όσα αναφέρετε. Αρμοδιότητα μας είναι απλά να φέρουμε σε επαφή  ανθρώπους που προσφέρουν με  οργανισμούς που έχουν ανάγκη.
			</h4> </div>
          
      </div>
      <div class="modal-body mx-3">
        
       <form action="Orgaction.php"   onsubmit="return validateForm();" method="POST">
                                <label for="name" id="name_prompt" class="">Όνομα*</label>
                                <input type="text" id="name" value=<?php echo $_SESSION['username'] ?> name="name" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε όνομα')" onchange="this.setCustomValidity('')" required autofocus >

                                
                                <label for="message">Γράψτε το κείμενο εδώ*</label>
                                <textarea type="text" id="message" name="message" rows="7"
                                    class="form-control md-textarea" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε περιεχόμενο μηνύματος')" onchange="this.setCustomValidity('')" required></textarea>
								 <div class="text-center text-md-left " style="margin-top:1em;">
                                
									  <div class="modal-footer d-flex justify-content-center">

       <button  class="btn btn-info btn-block" name="send">Αποστολή</button>
			
		
		
									 </div>
								
                            </div>
                       </form>           
		</div>
    </div>
  </div>
</div>
  
	  	  <button class="btn btn-info mb-4" data-toggle="modal" data-target="#modalContactForm" style="margin-top:1.5rem">Ενημέρωσε!</button>

		  </div>						   
						     </div>
</div>
					
				  <?php endif ?>
				  

				  <?php if ($_SESSION['volun']==1) :  
							  // αν είναι εθελοντης δείχνει το δικό του modal και περνάει το μήνυμα στη βάση vol_action
?>
						   	
						 
                  <div class="col-md-12" style="margin-top:60px;">
<div class="text-center" >
<div class="box">
  <div class="content1">                   
	  <h3>Ενημέρωσε μας για τις Δράσεις, που εσύ θα ήθελες να οργανώσεις!</h3>
					   
					<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background:#e1f7d5">
      <div class="modal-header text-center">
		  			<div class="text-style">

        <h4 class="modal-title h6 ">
			<div class="text-right">
			<button type="button" class="btn btn-outline-info waves-effect" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fas fa-times"></i></span>
				</button> </div>
			<br>  
			<p text-justify>
				Συμπληρώνοντας την παρακάτω φόρμα τα στοιχεία και το μήνυμα σας σας θα εισαχθούν στην βάση δεδομένων μας, έτσι ώστε να δημοσιευτούν στη σελίδα μας και να βρεθούν οργανισμοί που χρειάζονται τη βοήθεια σας, αλλά και εθελοντές που μπορούν να συνεργαστούν μαζί σας.<strong> Τα στοιχεία σας θα είναι διαθέσιμα μόνο σε αυτούς τους οργανισμούς και εθελοντές που ανήκουν στο δίκτυο μας. </strong>Για παράδειγμα, αν είστε ιατρός και προσφέρετε δωρεάν υπηρεσίες σε απόρους ή άλλες ευαίσθητες κοινωνικές ομάδες, με χαρά θα συμπεριλάβουμε τη δράση σας στην σελίδα μας  ώστε να μπορούν οι ενδιαφερόμενοι οργανισμοί να βρουν βοήθεια. Αντίστοιχα, ένα παντοπωλείο, ένα μανάβικο στη γειτονιά ή μια ομάδα εθελοντών που μπορούν να αναλάβουν τη διανομή τροφίμων στα ιδρύματα της πόλης μας, είναι μερικοί από τους εθελοντές που θέλουμε να δηλώσουν συμμετοχή και να αναλάβουν υπεύθυνα δράση.
          <br>
Κάθε εθελοντής ευθύνεται για την αξιολόγηση της κατάστασης  και την διασταύρωση των στοιχείων των οργανισμών και των εθελοντών που θέλει να συνεργαστεί, γι' αυτό και ενδέχεται να ρωτήσετε σχετικά κατά την πρώτη επαφή μαζί τους. Η ομάδα του Πόλη Αλληλεγγύης δεν επιβεβαιώνει ούτε πιστοποιεί με οποιονδήποτε τρόπο όσα αναφέρετε. Αρμοδιότητα μας είναι απλά φέρουμε σε επαφή τους ανθρώπους που προσφέρουν με αυτούς τους οργανισμούς που έχουν ανάγκη.
			</h4> </div>
          
      </div>
      <div class="modal-body mx-3">
        
       <form action="Volunaction.php"   onsubmit="return validateForm();" method="POST">
                                <label for="name" id="name_prompt" class="">Όνομα*</label>
                                <input type="text" id="name" value=<?php echo $_SESSION['username'] ?> name="name" class="form-control" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε όνομα')" onchange="this.setCustomValidity('')" required autofocus >

                                
                                <label for="message">Γράψτε το κείμενο εδώ*</label>
                                <textarea type="text" id="message" name="message" rows="7"
                                    class="form-control md-textarea" oninvalid="this.setCustomValidity('Παρακαλούμε εισάγετε περιεχόμενο μηνύματος')" onchange="this.setCustomValidity('')" required></textarea>
								 <div class="text-center text-md-left " style="margin-top:1em;">
                                
									  <div class="modal-footer d-flex justify-content-center">

       <button  class="btn btn-info btn-block" name="send">Αποστολή</button>
			
		
		
									 </div>
								
                            </div>
                            </form>           

      </div>
    </div>
						</div>
	  
</div>
<button class="btn btn-info mb-4" data-toggle="modal" data-target="#modalContactForm" style="margin-top:1.5rem">Ενημέρωσε!</button>
			     </div> 
					 
                  </div>
					  </div>
						</div>
				  <?php endif ?>
						              <?php	require('showactions.php');?>

				  </div>
				  

        </section>
	</div>  
</main>
	<script>
		var textWrapper = document.querySelector('.move .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop:1})
  .add({
    targets: '.move .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration:  2500,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.move',
    opacity: 0,
    duration: infinity,
    delay: 1000
  });

	</script>

<?php require('footerEN.php'); }
else{require('loginGR.php');
 }?>

