<?php session_start();
?>
<?php 
	$_SESSION["changeLang"] = 'infmenuGR.php';
	$_SESSION["pageTitle"] = ' Informations Menu';
	require('headerEN.php');?>


    <body>
	  	  
<div class="text-style">

    <section class="inf" style="background-color:  #fdca96;">
   		  <section class="section-laa"></section>

		
    <div class="container">

  <!-- Card Start -->
  <div class="card1">
  <div class="row ">
	  
       <div class="col-md-6 d-flex align-items-stretch">
    
              <img class="img-fluid" src="../img/statistics.jpg" alt="graphs for computer data representation">
            
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card-block">
			<h4 class="card-title"> <strong> The problem of poverty in our country</strong></h4>
          <p class="card-text">
            In this team effort, to reduce the rates of poverty in our country, as well as its serious effects on our society, it is necessary to be fully aware of the real situation.
          </p> 
          <p class="card-text"> Following, there is a presentation of data on the state of poverty in our country, which have been recorded since the beginning of the economic crisis. </p>
          <br>
          <a href="informationsEN.php" class="btn btn-info btn-lg btn-block">Read More</a>
        </div>
      
	  </div>
     </div>
	</div>
		
		
  <!-- Card Start -->

  <div class="card2" style="margin-top:50px;">
  <div class="row ">
	  
  <div class="col-md-6 d-flex align-items-stretch">
        <div class="card-block">
			<h4 class="card-title"> <strong>The problems of institutions in our country</strong></h4>
           <p class="card-text">
           Due to the difficult economic situation in Greece in recent years, most charities face many different problems on a daily basis.
           </p>
           <p class = "card-text"> These problems arise mainly due to the lack of the necessary equipment, but also the appropriate staff, for their staffing. </p> <br>
          <a href="problemsEN.php" class="btn btn-info btn-lg btn-block">Read More</a>
        </div>
	  
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
    
              <img class="img-fluid"  src="../img/help.jpg" alt="a photo of F1 key (the key wich is used from user to ask help from software) of the computer's keyboard  ">
            
  </div>

	  </div>
		   </div>
		
  <!-- Card Start -->
  <div class="card3" style="margin-top:50px;">
  <div class="row ">

       <div class="col-md-6 d-flex align-items-stretch">
             
             <img class="img-fluid"  src="../img/goals.jpg" alt=" a photo with 17 global goals of UN states ">
            
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card-block">
			<h4 class="card-title"> <strong> The Global Goals for Sustainable Development</strong></h4>
          <p class="card-text">
            In order to fight poverty, inequality and protect our planet, in 2015 the UN states launched a plan to achieve a better world by 2030.

          </p>
			<p>These goals address current global challenges in an effort to effectively address all global issues. </p>
          <br>
          <a href="goalsEN.php" class="btn btn-info btn-lg btn-block">Read More</a>
        </div>
      
	  </div>
	  </div>
		   </div>
		</div>
		
	   		  <section class="section-laa"></section>

	   </section>
	   </div>

	   <?php require('footerEN.php');?>

</body>

	

