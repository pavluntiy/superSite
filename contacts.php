<!DOCTYPE html>
<html>
	<?php
		$currentPageID = "contacts";
	?>
	<head>
		<title>
			Contacts
		</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="reset.css"/>

		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
		      function initialize() {
		        var map_canvas = document.getElementById('map_canvas');
		        var map_options = {
		          center: new google.maps.LatLng(44.5403, -78.5463),
		          zoom: 8,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        }
		        var map = new google.maps.Map(map_canvas, map_options)
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
    	</script>



	</head>
	<body>
		<div id = "top">
			<div id = "logo">

				<img src = "logo.png"  />
			 </div>
			<div id = "head">
				<div id = "intro">
					Where to find us and useful links
				</div>
				<div id = "navbarTop">
					<ul id = "navList">
						<li class = "currentLink">
							<?php if($currentPageID != "index"){?><a href = "index.php" class = "navbarLink"><?php } ?> Home <?php if($currentPageID != "index"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "contacts"){?><a href = "contacts.php" class = "navbarLink"><?php } ?> Contacts <?php if($currentPageID != "contacts"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "research"){?><a href = "research.php" class = "navbarLink"><?php } ?> Research <?php if($currentPageID != "research"){?></a><?php } ?>
						</li>		
					</ul>
				</div>
			</div>
		</div>

		<div id = "mid">
			<div id = "navbarLeft"> 
					<ul id = "navList">
						<li class = "currentLink">
							<?php if($currentPageID != "index"){?><a href = "index.php" class = "navbarLink"><?php } ?> Home <?php if($currentPageID != "index"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "contacts"){?><a href = "contacts.php" class = "navbarLink"><?php } ?> Contacts <?php if($currentPageID != "contacts"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "research"){?><a href = "research.php" class = "navbarLink"><?php } ?> Research <?php if($currentPageID != "research"){?></a><?php } ?>
						</li>		
					</ul>
				

			</div>

			<div id = "main" class = "standartText">

			 	<div class = "linksDiv">
			 		<h6> You can get additional info here: </h6>
			 		<ul>
			 			<li> <a href = "https://wikipedia.org" target="_blank">Wikipedia </a></li>
			 			<li> <a href = "https://vk.com" target="_blank">Vkontakte </a></li>
			 			<li> <a href = "https://nuoc.com" target="_blank">Nuoc </a></li>
			 		</ul>

			 	</div>

			 	<div class = "contactsDiv">
			 		<h6> Where to find us: </h6>
			 		<div id="map_canvas"></div>
			 		<div> Kremenchugskaya, 11</div>
			 	</div>



			</div>
		</div>

		<div id = "bottom">
			<div  class = "standartText" id  = "bottomContent">
				Qarhyenhapp i saljimxony i nukkaymatil zcanat qorien ngo saqullim as, iqalvan saqullim arupenti.
			</div>
		</div>

	</body>

</html>