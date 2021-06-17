<?php session_start();
$_SESSION["lang"] = 'gr'; ?>

<!DOCTYPE html>
<html lang="gr">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?php echo $_SESSION["pageTitle"] ?></title>
  <link rel="icon" href="../img/site.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/Style.css" charset="utf-8" />
    <link rel="stylesheet" href="../css/mobile-style.css">
    <!--cdn for charts-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Πόλη Αλληλεγγύης</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	
</head>

<body>	
<header>
	
	
	<div class="container-fluid p-0">
		
      <nav class="navbar navbar-expand-lg">
		 <a class="navbar-brand" href="../index.php">
			   <img src="../img/site.png" alt="Ο Λευκός Πύργος και ένα δένδρο με καρπούς-σύμβολα αντικειμένων που συνήθως χρησιμοποιούν οι οικογένειες και γενικότερα τα νοικοκυριά." style="width:50px;height:50px; margin-right:1rem;">Πόλη Αλληλεγγύης</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation" >
          <i class="fas fa-align-right fa_custom "></i>
        </button>
            <div class="container-fluid p-0" >
		
        <div class="collapse navbar-collapse" id="navbarNav" >
          <div class="mr-auto"></div>
	
          <ul class="navbar-nav">
              
		
              <li class="nav-item active">
              <a class="nav-link" href="../index.php">Αρχική

                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="infmenuGR.php">Πληροφορίες</a>
            </li>
            <li class="nav-item dropdown">
				  <div class= "dropdown">
                       <a class="nav-link"  href="#">Το δίκτυό μας</a>
					   <div class= "dropdown-content">
						   	
                            <a href="networkGR.php">Ποιοί συμμετέχουν</a>
						    <a href="infnetworkGR.php">Πως λειτουργεί</a>
					  </div>
				  </div>
					  
		      </li> 
		    
            <?php  if (isset($_SESSION['username'])) : ?>
			  <li class="nav-item dropdown">
				  <div class= "dropdown">
                       <a class="nav-link"  href="#"> <?php echo $_SESSION['username'] ?>  <i class="fas fa-costum fa-angle-down"></i></a>
					   <div class= "dropdown-content">
						   
						    <?php if ($_SESSION['volun']==1) :  ?>
						   	<a href="pageV1GR.php">Αγαθά <i class="fas fa-costum fa-gift mx-4"></i> </a>
						   <?php endif ?>
				            <?php if ($_SESSION['volun']==2) :  ?>
						   	<a href="pageO1GR.php">Αγαθά <i class="fas fa-costum fa-gift mx-4"></i> </a>
						   <?php endif ?>
                            <a href="actionsGR.php">Δράσεις <i class="fas fa-costum fa-hands-helping mx-2"></i></a>
						   <?php if ($_SESSION['volun']==1) :  ?>
						    <a href="profileVOLGR.php">Προφίλ<i class="fas fa-costum fa-user mx-3"></i></a>
						    <?php endif ?>
						   <?php if ($_SESSION['volun']==2) :  ?>
						    <a href="profile.php">Προφίλ<i class="fas fa-costum fa-user mx-3"></i></a>
						    <?php endif ?>
						   <a href="logout.php">Έξοδος <i class="fas fa-costum fa-sign-out-alt mx-3"></i></a>
					  </div>
				  </div>
					  
		      </li>
           <?php endif ?>
			<?php  if (!isset($_SESSION['username'])) : ?>
			  <li class="nav-item">
               <a class="nav-link" href="loginGR.php">Είσοδος/Εγγραφή</a>
              </li><?php endif ?>                                   
								
								 <li class="nav-item">
                                <a class="nav-link" href="<?php if (isset($_SESSION['changeLang'])) {echo $_SESSION["changeLang"];} else {echo "../indexEN.php";} ?> ">EN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
		   
	</div>
 </header>