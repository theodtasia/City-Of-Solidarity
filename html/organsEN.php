  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>

<?php session_start();
require('connection.php');
$sql1="SELECT a.*, b.* FROM usertable a ,user_info b WHERE b.name_organ='$organ_name' AND a.id=b.user_id;";
$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);

$organ_name=$_GET['organ'];
$sql1="SELECT a.*, b.* FROM usertable a ,user_info b WHERE b.name_organ='$organ_name' AND a.id=b.user_id;";

//βρισκω το id του οργανισμού

$sql2="SELECT user_id FROM user_info WHERE name_organ='$organ_name'";
$res2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_assoc($res2);
$id= $row2['user_id'];

//για το id που βρήκα βρίσκω το αγγλικό όνομα
$sql3="SELECT name_organ FROM user_info WHERE user_id='$id' AND lang='el'";
$res3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($res3);
$name= $row3['name_organ'];

//τα βάζω στα sessions
$_SESSION["pageTitle"] = $organ_name;
$_SESSION["changeLang"] = 'organsGR.php?organ='.$name.'';

$res1=mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($res1);
require('headerEN.php');

?>



<!--Section: Contact v.1-->
<section class="section pb-5">
	<div class="container-fluid p-5">
  <div class="text-center p-5">
	  <img src="./img/<?php echo $row['logo']?>" class="rounded-circle" width="150" height="150" alt="<?php echo $row['logo'];?>">
  </div>

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 mb-4">

      <!--Form with header-->
      <div class="card border-warning">

        <div class="card-body">
          <!--Header-->
         <div class="panel text-justify">
			  
			 <p class="text-style"><?php echo $row['info'];?></p>
		  </div>
        </div>

      </div>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-8">

      <!--Google map-->
       <div id="floating-panel">
      <input id="address" style="display:none;" type="textbox" value="<?php echo $row['address'];?>">
      <input id="submit" style="display:none;" type="button" value="Geocode">
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

        //document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
       // });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
	 
    </script>
    <script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYdyiIJfblsqOMP9UkaL1pwe4NB7T2-Zs&callback=initMap"> 
    </script>


      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-3">
          <i class="fas fa-map-marker-alt"></i>
          <p><?php echo $row['address'];?></p>
          
        </div>

        <div class="col-md-3">
          <i class="fas fa-phone"></i>
          <p><?php echo $row['phone'];?></p>
          
        </div>

        <div class="col-md-3">
          <i class="fas fa-link"></i>
			<p><a href="<?php echo $row['website'];?>" class="text-decoration-none"><?php echo $row['website'];?></a></p>
		</div>
	    <div class="col-md-3">
			<i class="fas fa-envelope"></i>
			<p><?php echo $row['organ_email'];?></p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>
	</div>

	</section>
			  <section class="section-space"></section>

<?php require('footerEN.php');?>