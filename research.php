<!DOCTYPE html>
<html>
	<?php
		$currentPageID = "research";
	?>
	<head>
		<title>
			Contacts
		</title>
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="reset.css"/>
	</head>
	<body>
		<div id = "top">
			<div id = "logo">
				<?php if($currentPageID != "index"){?> <a href = "index.php"><?php } ?>
					<img src = "logo.png"  />
				<?php if($currentPageID != "index"){?></a><?php } ?>
			 </div>
			<div id = "head">
				<div id = "intro">
					What we do
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
			 	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

			</div>
		</div>

		<div id = "bottom">
				<div  class = "otherText" id  = "bottomContent">
				<div> If you have problems, <a href = "mailto:master@yapay.esy.es">email</a> us!
					<i><a href = "mailto:master@yapay.esy.es">master@yapay.esy.es</a></i>
				</div>
			</div>
		</div>

	</body>

</html>