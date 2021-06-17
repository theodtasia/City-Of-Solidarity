<?php 


require('connection.php');
$lang=$_SESSION["lang"];
if($lang == 'gr')   
	   {
	?>
<div class="ACT" style="margin-top:3rem">
	
	
	
<h2>Δράσεις Όργανισμών</h2>

	
	<hr>
<div class="ACT">
	<?php
	
	//δείχνει πρώτα τα μηνυματα των οργανισμων και την ημερομηνια τους
     $sql1="SELECT * FROM org_action";
     $res1=mysqli_query($conn,$sql1);  
	
		while($row=mysqli_fetch_assoc($res1))
		{
			
			$or=$row['orgID'];
			$sql2="SELECT logo  FROM usertable a WHERE a.id=$or";
            $res2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_assoc($res2);
			
			if($row['message']!='')
			{
			echo '<div class="row">';
					
				echo '<div class="col-md-8 style="margin-top:10px;"">
				  <h2><img src="./img/'.$row2['logo'].'" class="rounded-circle " width="100" height="100"> '.$row['name'].'
  <div class="text-right"> '.$row['date']. '</div></h2>

                       <div class="card border-warning">
                        


        <div class="card-body">
          <!--Header-->
         <div class="panel text-justify">
			  
					  
                      <p>'.$row['message'].'</p>
					  </div>
                </div>
				</div>
              </div>
			  </div> ';
			
		}}

	?>
</div>
</div>

<h2>Προτάσεις και Υπηρεσίες Εθελοντών</h2>

<hr>
<div class="ACT">
<?php
		//δείχνει τα μηνυματα των εθελοντών και την ημερομηνια τους

       $sql1="SELECT * FROM vol_action";
$res1=mysqli_query($conn,$sql1);  
	
		while($row=mysqli_fetch_assoc($res1)){
			
			
			echo '<div class="row">';
					
				echo '<div class="col-md-8">
				  <h2><i class="fas fa-user-circle fa_custom fa-3x"></i>   '.$row['name'].'
				  <div class="text-right"> '.$row['date']. '</div></h2>

                       <div class="card border-warning">
                        


        <div class="card-body">
          <!--Header-->
         <div class="panel text-justify">
			  
					  
                      <p>'.$row['message'].'</p>
					  </div>
                </div>
				</div>
              </div>
			  </div>';
			
		}

	?>
</div>
			
<?php		
}
else{


?>



<div class="ACT">
	<h2>Organisations Actions</h2>

	<hr>
<div class="ACT">

<?php
	
	//δείχνει πρώτα τα μηνυματα των οργανισμων και την ημερομηνια τους
     $sql1="SELECT * FROM org_action";
$res1=mysqli_query($conn,$sql1);  
	
		while($row=mysqli_fetch_assoc($res1)){
			
			
			$or=$row['orgID'];
			$sql2="SELECT logo  FROM usertable a WHERE a.id=$or";
            $res2=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_assoc($res2);
			
			if($row['message']!='')
			{
			echo '<div class="row">';
					
				echo '<div class="col-md-8 style="margin-top:10px;"">
				  <h2><img src="./img/'.$row2['logo'].'" class="rounded-circle " width="100" height="100"> '.$row['name'].'
  <div class="text-right"> '.$row['date']. '</div></h2>
                       <div class="card border-warning">
                        


        <div class="card-body">
          <!--Header-->
         <div class="panel text-justify">
			  
					  
                      <p>'.$row['message'].'</p>
					  </div>
                </div>
				</div>
              </div>
			  </div>';
			
		}}

	?>
</div>
</div>



<h2>Suggestions and services of Volunteers</h2>
<hr>
<div class="ACT">
<?php
		//δείχνει τα μηνυματα των εθελοντών και την ημερομηνια τους

  //δείχνει τα μηνυματα των εθελοντών και την ημερομηνια τους

       $sql1="SELECT * FROM vol_action";
$res1=mysqli_query($conn,$sql1);  
	
		while($row=mysqli_fetch_assoc($res1)){
			
			
			echo '<div class="row">';
					
				echo '<div class="col-md-8">
				  <h2><i class="fas fa-user-circle fa_custom fa-3x"></i>   '.$row['name'].'
				  <div class="text-right"> '.$row['date']. '</div></h2>

                       <div class="card border-warning">
                        


        <div class="card-body">
          <!--Header-->
         <div class="panel text-justify">
			  
					  
                      <p>'.$row['message'].'</p>
					  </div>
                </div>
				</div>
              </div>
			  </div>';
			
		}

	?>
</div>
<?php }?>
