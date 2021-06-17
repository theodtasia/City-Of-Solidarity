<?php session_start();
?>
<?php 
	$_SESSION["changeLang"] = 'infmenuEN.php';
	$_SESSION["pageTitle"] = 'Menu Πληροφορίες';
     $_SESSION["lang"] = 'gr';

	require('headerGR.php');?>

    <body>
<div class="text-style">

 <section class="inf" style="background-color:  #fdca96;">
   		  <section class="section-laa"></section>

		  <div class="container">


  <!-- Card Start -->
  <div class="card1">
  <div class="row ">

       <div class="col-md-6 d-flex align-items-stretch">
    
              <img class="img-fluid" src="../img/statistics.jpg" alt="ένα λάπτοπ που εμφανίζει γραφήματα">
            
       </div>
       <div class="col-md-6 d-flex align-items-stretch">
          <div class="card-block">
			<h4 class="card-title"> <strong> Το πρόβλημα της φτώχειας στη χώρα μας </strong></h4>
          <p class="card-text">
            Στη συλλογική μας αυτή προσπάθεια, να μειώσουμε τα ποσοστά της φτώχειας στη χώρα μας, αλλά και τις σοβαρές επιπτώσεις της στην κοινωνία μας, κρίνεται αναγκαίο να έχουμε πλήρη επίγνωση της πραγματικής κατάστασης. 
          </p>
          <p class="card-text"> Στη συνέχεια ακολουθεί μια παρουσίαση των δεδομένων για την
                    κατάσταση της
                    φτώχειας στη χώρα μας, που έχουν καταγραφεί από την αρχή της οικονομικής κρίσης</p>
          <br>
          <a href="informationsGR.php" class="btn btn-info btn-lg btn-block">Διαβάστε Περισσότερα</a>
        </div>
      
	   </div>
	  </div>
	 </div>
		
  <!-- Card Start -->

  <div class="card2" style="margin-top:50px;">
  <div class="row ">
	  
    <div class="col-md-6 d-flex align-items-stretch">
        <div class="card-block">
			<h4 class="card-title"> <strong>Τα προβλήματα των ιδρυμάτων στη χώρα μας </strong></h4>
           <p class="card-text">
           Εξαιτίας της δύσκολης οικονομικής κατάστασης που επικρατεί στην Ελλάδα τα τελευταία χρόνια, τα περισσότερα φιλανθρωπικά ιδρύματα έρχονται καθημερινά αντιμέτωπα με πολλά διαφορετικά προβλήματα.  
          </p>
          <p class="card-text"> Τα προβλήματα αυτά, προκύπτουν κυρίως εξαιτίας της έλλειψης του αναγκαίου εξοπλισμού, αλλά και του κατάλληλου προσωπικού, για τη στελέχωσή τους.  </p>
          <br>
          <a href="problemsGR.php" class="btn btn-info btn-lg btn-block">Διαβάστε Περισσότερα</a>
        </div>
	  
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
    
              <img class="img-fluid" src="../img/help.jpg" alt="φωτογραφία του πλήκτρου F1 του υπολογιστή. Το πλήκτρο F1 χρησιμοποιείται από τον χρήστη ενός λογισμικού για να ζητήσει βοήθεια για καθοδήγηση">
            
      </div>

	  </div>
    </div>
		
  <!-- Card Start -->
  <div class="card3" style="margin-top:50px;">
  <div class="row ">

       <div class="col-md-6 d-flex align-items-stretch">
             
              <img class="img-fluid" src="../img/goalsGR.jpg" alt="φωτογραφία με τους 17 στόχους του ΟΗΕ">
            
     </div>
     <div class="col-md-6 d-flex align-items-stretch">
        <div class="card-block">
			<h4 class="card-title"> <strong> Στόχοι Βιώσιμης Ανάπτυξης ΟΗΕ </strong></h4>
          <p class="card-text">
            Για την καταπολέμηση της φτώχειας, της ανισότητας αλλά και την προστασία του πλανήτη μας, το 2015 τα κράτη του ΟΗΕ έθεσαν σε λειτουργία ένα σχέδιο, που αποσκοπεί στην επίτευξη ενός καλύτερου κόσμου ως το 2030.
          </p>
          <p class="card-text"> Οι στόχοι αυτοί εκφράζουν τις σύγχρονες παγκόσμιες προκλήσεις, σε μια προσπάθεια να ανταποκριθούν αποτελεσματικά όλες οι χώρες στα παγκόσμια προβλήματα.</p>
          <br>
          <a href="goalsGR.php" class="btn btn-info btn-lg btn-block">Διαβάστε Περισσότερα</a>
        </div>
      
	  </div>
	  </div>
	 </div>
	</div>
		
 <section class="section-laa"></section>

 </section>
</div>

	 <?php require('footerGR.php');?>
	
	
</body>

