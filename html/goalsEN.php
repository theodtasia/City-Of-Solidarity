<?php session_start(); ?>



 <?php 
	$_SESSION["changeLang"] = 'goalsGR.php';
	$_SESSION["pageTitle"] = 'The Global Goals for Sustainable Development';
    $_SESSION["lang"] = 'en';

	require('headerEN.php');?>
<body>


	
  <div class="text-style">
    <article class="article-content">
		 <section class="section-1">
            <div class="container text-center fa_costum">
				<p class="text-justify">
                <h1 class="mt-4">The Global Goals for Sustainable Development...</h1>
				<p>
					<div class="CLOCK-container">
						 <div class="content text-center">
     
							 <p><strong>Remaining time for achieving the goals:</strong></p>
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
                <p class="text-justify">
                   To combat poverty, inequality and protect our planet, in 2015 the United States launched a plan to <strong> achieve a better world by 2030 </strong>. These goals address current global challenges, in one efforts to make all countries respond effectively to global problems. The 17 goals that have been achieved, lead us to a peaceful world, without economic and social inequalities, but also to a healthy planet. A planet without the threat of climate change, which will be protected by future generations.
                     <br><br>
					<div class="text-center" >
				 <img class="img-fluid" src="../img/SDGs.jpg"    alt="image with UN goals">
				</div>
				<p class="text-justify" style="margin-top: 50px">
                    To do this, we need to form Active Citizens, who will take action for the big change on our planet. We must all take part in this coordinated collective effort based on the right of all people to live with dignity.

                     <br><br>	
					
					
				        <p class="text-justify"> In order to participate in this collective effort, we have chosen the theme of our information system based on the first two goals, which are the elimination of poverty and hunger. More information on these goals can be found by clicking on the images below:
							<div class="text-center" style="margin-top: 50px">
								
								<a href="https://sustainabledevelopment.un.org/sdg1" target="_blank"> <img src="../img/poverty1.png" style=width:200px  alt="Sustainable Development Goal 1
End poverty in all its forms everywhere."></a>
								
								<a href="https://sustainabledevelopment.un.org/sdg2" target="_blank"><img src="../img/hunger1.png" style=width:200px   alt="Sustainable Development Goal 2
End hunger, achieve food security and improved nutrition and promote sustainable agriculture."></a>
				                
				            </div>
			              <p>
				        
				              
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
   
</body>

