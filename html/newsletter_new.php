<!DOCTYPE html>
<?php session_start();
if (isset($_SESSION['admin']))
{
require('connection.php');?>
<html lang="gr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Πόλη Αλληλεγγύης</title>
   <link rel="icon" href="../img/site.png">

  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
  <link rel="stylesheet" href="../css/Style.css" charset="utf-8"/>
  <link rel="stylesheet" href="../css/mobile-style.css">
  <script src="https://cdn.tiny.cloud/1/pkxqh5y8a38dc2cksz4o61kqo75a0ofkp7vc9lqfvzfpg686/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
	<header>
    <div class="container-fluid p-0">
		   <nav class="navbar navbar-expand-lg">
		 
        <a class="navbar-brand" href="adminGR.php">
			<img src="../img/site.png" alt="Ο Λευκός Πύργος και ένα δένδρο με καρπούς-σύμβολα αντικειμένων που συνήθως χρησιμοποιούν οι οικογένειες και γενικότερα τα νοικοκυριά." style="width:50px;height:50px; margin-right:1rem;">Πόλη Αλληλεγγύης</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation" >
          <i class="fas fa-align-right fa_custom "></i>
        </button>
            <div class="container-fluid p-0" >
		
        <div class="collapse navbar-collapse" id="navbarNav" >
          <div class="mr-auto"></div>
	
          <ul class="navbar-nav">
              
			 
		
	
            <li class="nav-item">
              <a class="nav-link" href="nwmember.php">Μέλη Δικτύου</a>
            </li>
			  	<li class="nav-item dropdown">
				  <div class= "dropdown">
                       <a class="nav-link"  href="#">Διαχείριση Newsletter <i class="fas fa-costum fa-angle-down"></i></a>
					   <div class= "dropdown-content">
						   	<a href="newsmember.php">Συνδρομητές Newsletter</a>
						   <a href="newsletter_new.php">Νέο Newsletter</a>
						    <a href="newsletters_history.php">Αρχείο Newsletter</a>
					  </div>
				  </div>
					 
		      </li> 
            <li class="nav-item">
              <a class="nav-link" href="actions_edit.php">Διαχείριση Δράσεων</a>
            </li> 
			  <li class="nav-item dropdown">
				  <div class= "dropdown">
                       <a class="nav-link" href="logout.php">Έξοδος<i class="fas fa-costum fa-sign-out-alt mx-3"></i></a>
				  </div>
					  
		      </li>
         

			
          </ul>
				</div>
			
				</div>
			</nav>
		<main class="article-content"> 
			<section class="section-1"> 
				<div class="container fa_custom">
					

						<div id="form-container" class="container">
					<form class="form" action="newsletter_send.php" method="POST">
						
						<label for="start">Ημερομηνία:</label>
						<input type="date" id="date" name="date"
							   value=""
							   min="2020-01-01" max="2040-1-1">
						  <div class="form-group row">
							<label for="subject" class="col-sm-2 col-form-label">Θέμα</label>
							<div class="col-sm-10">
							  <input type="subject" class="form-control"  name="subject" id="subject">
							</div>
						  </div>
						<div class="row form-group">
							<label for="message" class="col-sm-2 col-form-label">Μήνυμα</label>
							<!--<textarea name="message">
								
							</textarea>-->
							<textarea id="mytextarea" name="message">
								Welcome to TinyMCE!
							</textarea>
						  
						</div>
						<br>
						  <div class="form-group row">
							<div class="col-sm-10">
							  <button type="submit" class="btn btn-primary">Αποστολή</button>
							</div>
						  </div>
					</form>
				</div>
				</div> 
			</section> 
		</main> 
</div>
</header>
</body>
</html>
<script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="../js/main.js"></script>
<?php }
else{require('loginGR.php');
 }?>
