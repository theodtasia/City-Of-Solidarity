<?php session_start(); 

if (isset($_SESSION['username']))
{
	$_SESSION["changeLang"] = 'actionsGR.php';
	$_SESSION["pageTitle"] = 'Actions';
    $_SESSION["lang"] = 'en';

	require('headerEN.php');?>

<body>
	 

	
<main class="article-content">
	
							
		        <div class="text-style">

            <section class="section-1">
                	    							 <?php  if (isset($_SESSION['action'])) : ?>


			<?php if($_SESSION['action']==1) : ?>
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-success alert-dismissible fade show">
        <strong><i class="fas fa-check-circle fa-2x"></i></strong> We have successfully received and registered your request!

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
				</div>
						  <?php $_SESSION['action']= 0 ?>

		<?php endif ?>	
			
      <?php if($_SESSION['action']==2) : ?>
		  	  
	    <div class="bs-example"> 
      <div id="myAlert" class="alert alert-warning alert-dismissible fade show">
        <strong><i class="fas fa-exclamation-circle  fa-2x"></i></strong>Your request has not been registered, try again!<?php $_SESSION['action']=0 ?>

        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
				</div>
		   <?php endif ?>	
		   		   <?php endif ?>	

					<div class="container fa_custom">
						<div class="text-center" style="margin-bottom:3rem">
							<h1 class="move">
  <span class="text-wrapper">
    <span class="letters">Find all Actions here!</span>
								</span></h1>
                    
						</div>
				  
		 <?php // αν είναι οργανισμός δείχνει το δικό του modal και περνάει το μήνυμα στη βάση org_action

							  ?>
                        
 

				 
             <?php if ($_SESSION['volun']==2) :  ?>
				  
				 <div class="text-center" >
<div class="box">
  <div class="content1">
                    <h3>Inform us about the actions you would like to create!</h3>
					   
					   

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
				By filling out the form below, your details and message will be entered into our database, so that they can be published on our page and volunteers can be found to help you. <strong> Your action details will only be available to these volunteers and other organizations belonging to our network. </strong>
          <br>
Each volunteer is responsible for assessing your condition and cross-referencing your data, so you may be asked about this when contacting them first. The City of Solidarity team does not confirm or certify in any way what you mention. It is our responsibility to simply bring together people who offer to organizations in need.
</h4> </div>
          
      </div>
      <div class="modal-body mx-3">
        
       <form action="Orgaction.php"   onsubmit="return validateForm();" method="POST">
                                <label for="name" id="name_prompt" class="">Name*</label>
                                <input type="text" id="name" value=<?php echo $_SESSION['username'] ?> name="name" class="form-control" oninvalid="this.setCustomValidity('Please enter a name')" onchange="this.setCustomValidity('')" required autofocus >

                                
                                <label for="message">Write your text here*</label>
                                <textarea type="text" id="message" name="message" rows="7"
                                    class="form-control md-textarea" oninvalid="this.setCustomValidity('Please enter text content')" onchange="this.setCustomValidity('')" required></textarea>
								 <div class="text-center text-md-left " style="margin-top:1em;">
                                
									  <div class="modal-footer d-flex justify-content-center">

       <button  class="btn btn-info btn-block" name="send">Send</button>
			
		
		
									 </div>
								
                            </div>
                       </form>           

      </div>
    </div>
  </div>
</div>
  
<button class="btn btn-info mb-4" data-toggle="modal" data-target="#modalContactForm" style="margin-top:1.5rem">Inform!</button>                  </div>
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
                    <h3>Inform us about the actions you would like to create!</h3>
					   
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
				By filling out the form below, your details and message will be entered into our database, so that they can be published on our page and find organizations that need your help, as well as volunteers who can work with you. <strong> The data You will only be available to those organizations and volunteers who belong to our network. </strong> For example, if you are a doctor and offer free services to needy or other sensitive social groups, we will be happy to include your activity on our page so that interested organizations can find help. Respectively, a grocery store, a grocery store in the neighborhood or a group of volunteers who can undertake the distribution of food in the institutions of our city, are some of the volunteers that we want to register and take responsible action.
          <br>
Each volunteer is responsible for assessing the situation and cross-referencing the data of the organizations and volunteers he or she wants to work with, so you may want to ask about this when you first contact them. The City of Solidarity team does not confirm or certify in any way what you mention. It is our responsibility to simply bring people in contact with those organizations in need.
			</h4> </div>
          
      </div>
      <div class="modal-body mx-3">
        
       <form action="Volunaction.php"   onsubmit="return validateForm();" method="POST">
                                <label for="name" id="name_prompt" class="">Name*</label>
                                <input type="text" id="name" value=<?php echo $_SESSION['username'] ?> name="name" class="form-control" oninvalid="this.setCustomValidity('Please enter a name')" onchange="this.setCustomValidity('')" required autofocus >

                                
                                <label for="message">Write your text here*</label>
                                <textarea type="text" id="message" name="message" rows="7"
                                    class="form-control md-textarea" oninvalid="this.setCustomValidity('Please enter text content')" onchange="this.setCustomValidity('')" required></textarea>
								 <div class="text-center text-md-left " style="margin-top:1em;">
                                
									  <div class="modal-footer d-flex justify-content-center">

       <button  class="btn btn-info btn-block" name="send">Send</button>
			
		
		
									 </div>
								
                            </div>
                            </form>           

      </div>
    </div>
  </div>
</div>
  
<button class="btn btn-info mb-4" data-toggle="modal" data-target="#modalContactForm" style="margin-top:1.5rem">Inform!</button>			     </div> 
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
else{require('loginEN.php');
 }?>

