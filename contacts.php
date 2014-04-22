<!DOCTYPE html>
<html>
	<?php
		$currentPageID = "contacts";
	?>
	<head>
		<title>
			Контакты
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="reset.css"/>
		<script src="jquery.js"></script> 
    	<script> 
		    $(function(){
		      $("#includedContent").load("contacts_content.php"); 
		    });
    	</script> 

    	 <script> 
		    $(function(){
		      $("#cellar").load("cellar.php"); 
		    });
    	</script> 


		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
		      function initialize() {
		        var map_canvas = document.getElementById('map_canvas');
		        var map_options = {
		          center: new google.maps.LatLng(55.696527,37.608451),
		          zoom: 16,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        }
		        var map = new google.maps.Map(map_canvas, map_options)
		      }
		      google.maps.event.addDomListener(window, 'load', initialize);
    	</script>

		<script type="text/javascript" src="//vk.com/js/api/openapi.js?111"></script>

		<script type="text/javascript">
		  VK.init({apiId: 4317614, onlyWidgets: true});
		</script>

		




	</head>
	<body>

		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>


		<div id = "top">
			<div id = "logo">
				<?php if($currentPageID != "index"){?> <a href = "index.php"><?php } ?>
					<img src = "logo.jpg"  />
				<?php if($currentPageID != "index"){?></a><?php } ?>
			 </div>
			<div id = "head">
				<div id = "intro">
					<h1>
						Как найти спасение?
					</h1>
				</div>
				<div id = "navbarTop">
					<ul id = "navList">
						<li class = "currentLink">
							<?php if($currentPageID != "index"){?><a href = "index.php" class = "navbarLink"><?php } ?> Главная <?php if($currentPageID != "index"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "contacts"){?><a href = "contacts.php" class = "navbarLink"><?php } ?> Контакты<?php if($currentPageID != "contacts"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "research"){?><a href = "research.php" class = "navbarLink"><?php } ?> Исследования <?php if($currentPageID != "research"){?></a><?php } ?>
						</li>	
						<li class = "currentLink">
							<?php if($currentPageID != "more"){?><a href = "more.php" class = "navbarLink"><?php } ?> Ещё <?php if($currentPageID != "more"){?></a><?php } ?>
						</li>		
					</ul>
				</div>
			</div>
		</div>

		<div id = "mid">
			<div id = "navbarLeft"> 
					<ul id = "navList">
						<li class = "currentLink">
							<?php if($currentPageID != "index"){?><a href = "index.php" class = "navbarLink"><?php } ?> Главная <?php if($currentPageID != "index"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "contacts"){?><a href = "contacts.php" class = "navbarLink"><?php } ?> Контакты<?php if($currentPageID != "contacts"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "research"){?><a href = "research.php" class = "navbarLink"><?php } ?> Исследования <?php if($currentPageID != "research"){?></a><?php } ?>
						</li>	
						<li class = "currentLink">
							<?php if($currentPageID != "more"){?><a href = "more.php" class = "navbarLink"><?php } ?> Ещё <?php if($currentPageID != "more"){?></a><?php } ?>
						</li>		
					</ul>
				

			</div>
			<div id = "main">
				<div id="includedContent"></div>
			</div>
		</div>

		<div id = "bottom">
			<div id = "cellar">
			</div>
		</div>

	</body>

</html>