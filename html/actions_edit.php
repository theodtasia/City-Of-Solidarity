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
		  </div>

		
    <div class="container text-center">

		   <div class="row" style="margin-top:2rem">
        <div class="col-md-12 col-sm-12">
          <h1>Διαχείριση Δράσεων Οργανισμών</h1> 
        </div> 
      </div>
	   <div class="row" style="margin-top:1rem">
        <div class="col-md-12 col-sm-12">
          <?php
			require('connection.php');
			$sql="SELECT * FROM `org_action` ORDER BY date";
			$result=mysqli_query($conn,$sql);
			echo '<table class="table table-striped">
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">ID Οργανισμού</th>
						  <th scope="col">Username Οργανισμού</th>
						  <th scope="col">Μήνυμα</th>
						  <th scope="col">Ημερομηνία</th>
						</tr>';
			  			$i=1;
			if($result->num_rows > 0){
				while($row=$result->fetch_assoc()){
					echo'</thead>
							  <tbody>
								<tr>
								  <th scope="row">'.$i.'</th>
								  <td>'.$row['orgID'].'</td>
								  <td>'.$row['username'].'</td>
								  <td>'.$row['message'].'</td>
								  <td>'.$row['date'].'</td>
								  <td><a href="action_delete.php?id='.$row['ID'].'" onclick="return confirm(\'Are you sure you want to delete this action?\');" title="delete"><i class="fas fa-user-minus"></i></a></td>
								</tr>';
								$i++;
				
				
				}
		echo '</tbody>
             </table>';
			}
			
	
			?>
        </div> 
      </div>
      <div class="row" style="margin-top:2rem">
        <div class="col-md-12 col-sm-12">
          <h1>Διαχείριση Δράσεων Εθελοντών</h1> 
        </div> 
      </div>
	   <div class="row" style="margin-top:1rem">
        <div class="col-md-12 col-sm-12">
          <?php
			require('connection.php');
			$sql="SELECT * FROM `vol_action` ORDER BY date";
			$result=mysqli_query($conn,$sql);
			echo '<table class="table table-striped">
					  <thead>
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">ID Έθελοντή</th>
						  <th scope="col">Username Έθελοντη</th>
						  <th scope="col">Μήνυμα</th>
						  <th scope="col">Ημερομηνία</th>
						</tr>';
			  			$i=1;
			if($result->num_rows > 0){
				while($row=$result->fetch_assoc()){
					echo'</thead>
							  <tbody>
								<tr>
								  <th scope="row">'.$i.'</th>
								  <td>'.$row['volID'].'</td>
								  <td>'.$row['username'].'</td>
								  <td>'.$row['message'].'</td>
								  <td>'.$row['date'].'</td>
								  <td><a href="actionV_delete.php?id='.$row['ID'].'" onclick="return confirm(\'Are you sure you want to delete this action?\');" title="delete"><i class="fas fa-user-minus"></i></a></td>
								</tr>';
								$i++;
				
				
				}
		echo '</tbody>
             </table>';
			}
			
	
			?>
        </div> 
		</div>
</div>
		</header>

</body>
	</html>
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