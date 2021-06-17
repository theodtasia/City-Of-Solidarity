<?php session_start(); ?>



 <?php 
	$_SESSION["changeLang"] = 'goalsEN.php';
	$_SESSION["pageTitle"] = 'Στόχοι Βιώσιμης Ανάπτυξης ΟΗΕ';
    $_SESSION["lang"] = 'gr';

	require('headerGR.php');?>
<body>


	
  <div class="text-style">
    <article class="article-content">
		 <section class="section-1">
            <div class="container text-center fa_costum">
				<p class="text-justify">
                <h1 class="mt-4">Οι Στόχοι Βιώσιμης Ανάπτυξης του ΟΗΕ...</h1>
				<p>
					<div class="CLOCK-container">
						 <div class="content text-center">
     
							 <p><strong>Χρόνος που απομένει για την επίτευξη των στόχων:</strong></p>
        </div>
              <div class="row">
				     

              <div class="shadow-box-example">

				  <div class="text-center">
                  			  <h1 id="demo" ></h1>
					  </div>
				 </div>
					 </div>
			 </div>
            </div>
            <div class="container" style="margin-top: 100px">
                <!--General text-->
                <div class="container" style="margin-top: 100px">
                <!--General text-->
                <p class="text-justify">
                    Για την καταπολέμηση της φτώχειας, της ανισότητας αλλά και την προστασία του πλανήτη μας, το 2015 τα κράτη του ΟΗΕ έθεσαν σε λειτουργία ένα σχέδιο, που αποσκοπεί στην <strong>επίτευξη ενός καλύτερου κόσμου ως το 2030 </strong>. Οι στόχοι αυτοί εκφράζουν τις σύγχρονες παγκόσμιες προκλήσεις, σε μια προσπάθεια να ανταποκριθούν αποτελεσματικά όλες οι χώρες στα παγκόσμια προβλήματα. Οι 17 στόχοι που υοθετήθηκαν, μας οδηγούν σε ένα κόσμο ειρηνικό, χωρίς οικονομικές και κοινωνικές ανισότητες, αλλά και σε έναν υγιή πλανήτη. Εναν πλανήτη χωρίς την απειλή της κλιματικής αλλαγής, τον οποίο θα προστατεύουν και οι μελλοντικές γενεές.
                     <br><br>
					<div class="text-center" >
				 <img class="img-fluid" src="../img/SDGSgr.jpg"    alt="εικόνα με τους στόχους του ΟΗΕ">
				</div>
				<p class="text-justify" style="margin-top: 50px">
                    Για να γίνει αυτό, χρειάζεται να διαμορφωθούν Ενεργοί Πολίτες, οι οποίοι θα αναλάβουν δράση για τη μεγάλη αλλαγή στον πλανήτη μας. Όλοι πρέπει να λάβουμε μέρος σε αυτή τη συντονισμένη συλλογική προσπάθεια με γνώμονα το δικαίωμα όλων των ανθρώπων να ζήσουν με αξιοπρέπεια.
                     <br><br>	
					
					<p class="text-justify"> Θέλοντας να συμμετέχουμε και εμείς σε αυτή τη συλλογική προσπάθεια, επιλέξαμε τη θεματική του πληροφοριακού μας συστηματος με βάση τους δύο πρώτους στόχους, που αφορούν την εξάλειψη της φτώχειας και της πείνας. Περισσότερες πληροφορίες για τους συγκεκριμένους στόχους μπορείτε να βρείτε πατώντας πάνω στις παρακάτω εικόνες:
							<div class="text-center" style="margin-top: 50px">
								<a href="https://unric.org/el/%cf%83%cf%84%ce%bf%cf%87%ce%bf%cf%83-1-%ce%bc%ce%b7%ce%b4%ce%b5%ce%bd%ce%b9%ce%ba%ce%b7-%cf%86%cf%84%cf%89%cf%87%ce%b5%ce%b9%ce%b1/" target="_blank"> <img src="../img/povertygr.jpg"  style=width:200px; alt="Στόχος 1:μηδενική φτώχεια."></a>
				            
								<a href="https://unric.org/el/%cf%83%cf%84%ce%bf%cf%87%ce%bf%cf%83-2-%ce%bc%ce%b7%ce%b4%ce%b5%ce%bd%ce%b9%ce%ba%ce%b7-%cf%80%ce%b5%ce%b9%ce%bd%ce%b1/"  target="_blank"><img src="../img/hungergr.jpg" style=width:200px; alt="Στόχος 2: μηδενική πείνα"></a>
								
				</div>          
				</div>
			 </div>
        </section>
    </article>
	</div>
	<script>
		// ημερομηνια για αντιστροφη μετριση
var countDownDate = new Date("DEC 31, 2029 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // σημερινη ημερομηνια
  var now = new Date().getTime();

  // διαφορα της τωρινης ημερομηνιας με τo τελος των στοχων
  var distance = countDownDate - now;

  // υπολογισμοι
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // το αποτελεσμα με id=demo
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
	</script>
<?php require('footerEN.php');?>
   

