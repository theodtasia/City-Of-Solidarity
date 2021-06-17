<?php session_start() ;
if (isset($_SESSION['username']))
{
require('connection.php');

$_SESSION["changeLang"] = 'actprofilGR.php'; 
$name=$_SESSION['username'];
$_SESSION["pageTitle"] = 'Actions Profile';
require('headerEN.php');
$_SESSION["lang"] = 'en';
if ($_SESSION['volun']==2){

?>  
<main class="article-content"> 

  <section class="section-1"> 
    <div class="container fa_custom"> 
			  <div class="text-center" ><h1> Actions </h1></div>

	<div class="row">
  		<div class="col-sm-10"><h2> <?php echo $_SESSION['username'];?></h2></div>
    </div>
    <hr>
    <div class="ACT">
	<?php
	$name=$_SESSION['username'];
	//δείχνει πρώτα τα μηνυματα των οργανισμων και την ημερομηνια τους
    $sql1="SELECT * FROM org_action WHERE username='$name'";
    $res1=mysqli_query($conn,$sql1);  
	$rowcount=mysqli_num_rows($res1);
	if($rowcount==0){
		echo '<div class="col-sm-10"><p>You have not created any actions yet. If you want you can create one by selecting: <a href="actionsEN.php">Actions.</a></p></div>';
	}
	else{
	echo '<div class="col-sm-10"><p>Here you can edit your actions.</p></div>';
	}
		while($row=mysqli_fetch_assoc($res1))
		{
			if($row['message']!='')
			{
				$_SESSION['m']=$row['message'];

				echo'<form class="form" action="setactions.php" method="POST"> <div class="row">
					               

				<div class="col-md-8 style="margin-top:10px;"">
				  <h2><div class="text-right"> '.$row['date']. '</div></h2>
                <div class="form-group">
                                                    				<input type="hidden" name="aID" value='.$row['ID'].'>

                          <div class="col-xs-6">
                              <textarea class="form-control form-rounded" rows="3" name="message" id="message" >' 
					.$row['message']. ' </textarea>
				          </div>
                      </div>
		   
              </div>
			  </div>
			  <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-info" type="submit" name="save">Save</button>
								<button class="btn btn-lg btn-danger" type="submit" name="delete">Delete</button>
                            </div>
                      </div>
			  </form>';
			
		}}echo '</div>
	  </div>
	</section>
</main>';}
if ($_SESSION['volun']==1){

?>  

<main class="article-content"> 

  <section class="section-1"> 
    <div class="container fa_custom"> 
			  <div class="text-center" ><h1> Actions </h1></div>

	<div class="row">
  		<div class="col-sm-10"><h2> <?php echo $_SESSION['username'];?></h2></div>
    </div>
    <hr>
    <div class="ACT">
	<?php
	$name=$_SESSION['username'];
	//δείχνει πρώτα τα μηνυματα των οργανισμων και την ημερομηνια τους
     $sql1="SELECT * FROM vol_action WHERE username='$name'";
$res1=mysqli_query($conn,$sql1);  
$rowcount=mysqli_num_rows($res1);
	if($rowcount==0){
		echo '<div class="col-sm-10"><p>You have not created any actions yet.</a></p></div>';
	}
	else{
	echo '<div class="col-sm-10"><p>Here you can edit your actions.</p></div>';
	}
		while($row=mysqli_fetch_assoc($res1))
		{		
			if($row['message']!='')
			{
				$_SESSION['m']=$row['message'];

				echo'<form class="form" action="setactionsV.php" method="POST"> <div class="row">
					               

				<div class="col-md-8 style="margin-top:10px;"">
				  <h2><div class="text-right"> '.$row['date']. '</div></h2>
                <div class="form-group">
                                                    				<input type="hidden" name="aID" value='.$row['ID'].'>

                          <div class="col-xs-6">
                              <textarea class="form-control form-rounded" rows="3" name="message" id="message" >' 
					.$row['message']. ' </textarea>
				          </div>
                      </div>
		   
              </div>
			  </div>
			  <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-info" type="submit" name="save">Save</button>
								<button class="btn btn-lg btn-danger" type="submit" name="delete">Delete</button>
                            </div>
                      </div>
			  </form>';
			
		}}

	?>
      </div>
	  </div>
	</section>
</main>
<!-- Εδώ σταματάει ο html κώδικας της σελίδας --> 

<?php } require('footerEN.php'); }
else{require('loginEN.php');
 }?>