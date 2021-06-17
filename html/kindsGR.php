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

$_SESSION["changeLang"] = 'kindsEN.php';

$sql1="SELECT a.*,b.*,c.* FROM usertable a, needs b,user_info c WHERE b.".$k."=1 AND a.id=b.organ_id and b.organ_id=c.user_id AND c.lang='el'";
$res1=mysqli_query($conn,$sql1);
if($k=="books"){$_SESSION["pageTitle"] = "Βιβλία"; } if($k=="food"){$_SESSION["pageTitle"] =  "Τρόφιμα";} if($k=="cleaners"){$_SESSION["pageTitle"] = "Καθαριστικά";} if($k=="medications"){echo "Ιατροφαρμακευτικά"; $_SESSION["pageTitle"] = "Ιατροφαρμακευτικά";} if($k=="tools"){$_SESSION["pageTitle"] ="Εργαλεία";} if($k=="personal_hygiene"){$_SESSION["pageTitle"] = "Είδη Προσωπικής Υγιεινής";} if($k=="toys") {$_SESSION["pageTitle"] = "Παιχνίδια";} if($k=="clothes"){$_SESSION["pageTitle"] = "Ρούχα";}  if($k=="school_supplies"){$_SESSION["pageTitle"] = "Σχολικά Είδη";};
require('headerGR.php');

?>

<main class="article-content">

  <section class="section-1">

    <div class="container fa_custom">
      <div class="row">
          <div class="col-md-8 col-sm-12">
            <h1>Ανάγκες σε <?php if($k=="books"){echo
"Βιβλία"; $_SESSION["pageTitle"] = "Βιβλία"; } if($k=="food"){echo "Τρόφιμα"; $_SESSION["pageTitle"] =  "Τρόφιμα";} if($k=="cleaners"){echo "Καθαριστικά"; $_SESSION["pageTitle"] = "Καθαριστικά";} if($k=="medications"){echo "Ιατροφαρμακευτικά"; $_SESSION["pageTitle"] = "Ιατροφαρμακευτικά";} if($k=="tools"){echo "Εργαλεία"; $_SESSION["pageTitle"] ="Εργαλεία";} if($k=="personal_hygiene"){echo "Είδη Προσωπικής Υγιεινής"; $_SESSION["pageTitle"] = "Είδη Προσωπικής Υγιεινής";} if($k=="toys"){echo "Παιχνίδια";$_SESSION["pageTitle"] = "Παιχνίδια";} if($k=="clothes"){echo "Ρούχα"; $_SESSION["pageTitle"] = "Ρούχα";}  if($k=="school_supplies"){echo "Σχολικά Είδη";$_SESSION["pageTitle"] = "Σχολικά Είδη";};
?></h1> 
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
<?php require('footerGR.php');?>