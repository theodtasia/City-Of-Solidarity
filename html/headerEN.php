<?php session_start();
$_SESSION["lang"] = 'en'; ?>

<!DOCTYPE html>
<html lang="en">

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
	
</head>

<body>
<header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="../indexEN.php">
<img src="../img/site.png" alt="The White Tower and a tree with fruit-symbols of objects that are usually used by families and households in general." style="width:50px;height:50px; margin-right:1rem;">City of Solidarity</a>               
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right fa_custom"></i>
                </button>
                <div class="container-fluid p-0">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="mr-auto"></div>

                        <ul class="navbar-nav">

                        


                            <li class="nav-item active">
                                <a class="nav-link" href="../indexEN.php">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="infmenuEN.php">Informations</a>
                            </li>
                            <li class="nav-item dropdown">
				  <div class= "dropdown">
                       <a class="nav-link"  href="#">Our Network</a>
					   <div class= "dropdown-content">
						   	
                            <a href="networkEN.php">Who is participating</a>
						    <a href="infnetworkEN.php">How it works</a>
					  </div>
				  </div>
					  
		      </li> 
                            <?php  if (isset($_SESSION['username'])) : ?>
			  <li class="nav-item dropdown">
				  <div class= "dropdown">
                       <a class="nav-link"  href="#"> <?php echo $_SESSION['username'] ?> <i class="fas fa-costum fa-angle-down "></i></a>
					   <div class= "dropdown-content">
						   <?php if ($_SESSION['volun']==1) :  ?>
						   	<a href="pageV1EN.php">Goods <i class="fas fa-costum fa-gift mx-4"></i> </a>
						   <?php endif ?>
				            <?php if ($_SESSION['volun']==2) :  ?>
						   	<a href="pageO1EN.php">Goods <i class="fas fa-costum fa-gift mx-4"></i> </a>
						   <?php endif ?>
                            <a href="actionsEN.php">Actions <i class="fas fa-costum fa-hands-helping mx-2"></i></a>
						   <?php if ($_SESSION['volun']==1) :  ?>
						    <a href="profileVOLEN.php">Profile<i class="fas fa-costum fa-user mx-3"></i></a>
						    <?php endif ?>
						   <?php if ($_SESSION['volun']==2) :  ?>
						    <a href="profileEN.php">Profile<i class="fas fa-costum fa-user mx-3"></i></a>
						    <?php endif ?>
						   <a href="logoutEN.php">Logout <i class="fas fa-costum fa-sign-out-alt mx-3"></i></a>
					  </div>
				  </div>
					  
		          </li>
                  <?php endif ?>
			     <?php  if (!isset($_SESSION['username'])) : ?>
			      <li class="nav-item">
                    <a class="nav-link" href="loginEN.php">Login/Register</a>
                  </li><?php endif ?>
							<li class="nav-item">
                                <a class="nav-link" href="<?php if (isset($_SESSION['changeLang'])) {echo $_SESSION["changeLang"];} else {echo "../index.php";} ?> ">GR</a>
                            </li>

                                  
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>