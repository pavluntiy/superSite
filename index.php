<!DOCTYPE html>
<html>
	<?php
		$currentPageID = "index";
	?>
	<head>
		<title>
			Следы искусственного интеллекта
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link type="text/css" rel="stylesheet" href="stylesheet.css"/>
		<link type="text/css" rel="stylesheet" href="reset.css"/>

		<script src="jquery.js"></script> 
    	<script> 
		    $(function(){
		      $("#includedContent").load("index_content.php"); 
		    });
    	</script> 

			<!-- Put this script tag to the <head> of your page -->
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
					<img src = "logo.png"  />
				<?php if($currentPageID != "index"){?></a><?php } ?>
			 </div>
			<div id = "head">
				<div id = "intro">
					Возможно, вы ничего ещё не подозреваете...
				</div>
				<div id = "navbarTop">
					<ul id = "navList">
						<li class = "currentLink">
							<?php if($currentPageID != "index"){?><a href = "index.php" class = "navbarLink"><?php } ?> Главная <?php if($currentPageID != "index"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "contacts"){?><a href = "contacts.php" class = "navbarLink"><?php } ?> Контакты <?php if($currentPageID != "contacts"){?></a><?php } ?>
						</li>
						<li class = "currentLink">
							<?php if($currentPageID != "research"){?><a href = "research.php" class = "navbarLink"><?php } ?> Исследования <?php if($currentPageID != "research"){?></a><?php } ?>
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
					</ul>
				

			</div>
			<div id = "main">
				<div id="includedContent"></div>
			</div>
		</div>

		<div id = "bottom">
			<div  class = "otherText" id  = "bottomContent">
				<div> Проблемы? Тогда <a href = "mailto:master@yapay.esy.es">сообщи</a> нам!
					<i><a href = "mailto:master@yapay.esy.es">master@yapay.esy.es</a></i>
				</div>

					<div class = "shareList">
						<ul>
							<li>
								<div>
									<!-- Put this div tag to the place, where the Like block will be -->
									<div id="vk_like"></div>
									<script type="text/javascript">
									VK.Widgets.Like("vk_like", {type: "button"});
									</script>

								</div>
								</VK.Widgets.Like("vk_like",>
							</li>
							<li>
								<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true">
								</div>
							</li>
						</ul>
					</div>
		</div>

	</body>

</html>