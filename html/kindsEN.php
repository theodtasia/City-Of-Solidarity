<?php session_start();
require('connection.php');
if(isset($_POST['kind']))
{
$_SESSION["KIND"] = $_POST['kind'];
$k=$_POST['kind'];
}
else
{
$k=$_SESSION["KIND"];
}
$sql1="SELECT a.*,b.*,c.* FROM usertable a, needs b,user_info c WHERE b.".$k."=1 AND a.id=b.organ_id and b.organ_id=c.user_id AND c.lang='en'";

$res1=mysqli_query($conn,$sql1);
$_SESSION["changeLang"] = 'kindsGR.php';

$_SESSION["pageTitle"] = $k;

require('headerEN.php');?>

<main class="article-content">

  <section class="section-1">

    <div class="container fa_custom">
      <div class="row">
          <div class="col-md-7 col-sm-12">

            <h1>Needs in <?php if($k=="books"){echo "Books";} if($k=="food"){echo "Food";} if($k=="cleaners"){echo "Cleaners";} if($k=="medications"){echo "Medications";} if($k=="tools"){echo "Tools";} if($k=="personal_hygiene"){echo "Personal Hygiene";} if($k=="toys"){echo "Toys";} if($k=="clothes"){echo "Clothes";}  if($k=="school_supplies"){echo "School Supplies";}  ?> </h1>
          </div>
      </div>
			  <?php
		$col=0;
		while($row=mysqli_fetch_assoc($res1)){
			if($col==3){
		
		
				$col=0;
				echo "</div>";
				
	       }
			if($col==0)echo '<div class="row text style">';
					
				echo '<div class="col-md-4 p-5">
                  <div class="organ-style">
                      <img src="./img/'.$row['logo'].'" class="rounded-circle " width="150" height="150">
                     <h2>'.$row['name_organ'].'</h2>
                   <p> <i class="fas fa-phone"></i> ' .$row['phone'].'</p>
                   <p> <i class="fas fa-envelope"></i> ' .$row['organ_email'].'</p>
                   <p> <i class="fas fa-map-marker-alt"></i> '.$row['address'].'</p>
                </div>
              </div> ';
			$col++;
		}
	echo "</div>";	
		
	?>
    </div>
  </section>
</main>
<?php require('footerEN.php');?>
	 