<?php session_start();?>

<!doctype html>
<?php 
	$_SESSION["changeLang"] = 'infnetworkGR.php';
	$_SESSION["pageTitle"] = 'How it works';
	$_SESSION["lang"] = 'en';

	require('headerEN.php');?>
<body>


<div class="text-style">
    <article class="article-content">
		 <section class="section-1">
			 <div class="text-center">
				  <div class="container fa_custom">
<h1 class="move2">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters"> What is our network</span>
  </span>
</h1>	
Our network is an informal network of volunteers, organizations and institutions of Thessaloniki, in which the cooperation between them develops.
<div class = "con" style = "margin-top: 80px">
<h1 class="move2">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters"> What is our goal</span>
  </span>
</h1>	
On this site, volunteers and organizations from the city of Thessaloniki will have the opportunity to work together and help eradicate the problems of poverty and hunger. It is therefore our responsibility to facilitate our fellow citizens, who wish to offer to their fellow human beings, to find the needs of the institutions of our region and to cover as many of them as they can / want. At this point we want to make it known that this site is part of academic work and there is no financial benefit to us.
</div>
<div class = "con" style = "margin-top: 80px">

<h1 class="move2">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters"> Organisations</span>
  </span>
</h1>	
After registering on our website by selecting the appropriate field "Organisation", fill in the necessary fields on the page of your profile, in order to create the page of your organization on our website. Then, through the "Goods" page, you can declare the categories of goods you need. You can view your statements, as well as edit them on your profile page, at any time. In addition, on the "Actions" page, you have the opportunity to inform the volunteers about the actions you are organizing, as well as to see corresponding actions or services that the volunteers are organizing and offering.
</div>

<div class = "con" style = "margin-top: 80px">
<h1 class="move2">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters"> Volunteers</span>
  </span>
</h1>	

After registering on our website by selecting the appropriate field "Volunteer", fill in your information on the page of your profile. Then, through the "Goods" page you can see, depending on the category of goods you want, the organizations in need, as well as the necessary information to get in touch with them. In addition, on the "Actions" page, you have the opportunity to inform the organizations about the actions and services you organize and offer, as well as to see the respective actions and needs of the organizations.
</div>
				  
			 </div>
			 </div>
	</section>
	</article>

	</div>
<?php require('footerEN.php');?>

<script>
	// Wrap every letter in a span
var textWrapper2 = document.querySelector('.move2 .letters');
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
anime.timeline({loop: 1})
	.add({
    targets: '.move2 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeInOutExpo",
    duration: 900
  });

	</script>

</body>
