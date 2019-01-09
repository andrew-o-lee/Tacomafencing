
<!DOCTYPE html>

<html lang='en-US'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link rel='stylesheet' href='styles/style.css'>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<?php $active_page = $_GET['page'] ? $_GET['page'] : 'home'; ?>

		<title>Metro Tacoma Fencing Club</title>
		<link rel='icon' href='images/favicon.png'>
	</head>

	<body>
		<nav class='navbar navbar-expand-lg navbar-light bg-light'>
			<button class='navbar-toggler border-0' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
				<span class='navbar-toggler-icon'></span>
			</button>
			<div class='collapse navbar-collapse justify-content-center' id='navbarNavDropdown'>
				<ul class='navbar-nav'>
					<?php
						$menu_items = array(
							array(
								'page' => 'home',
								'display_text' => "Home"
							),
							array(
								'dropdown_items' => array(
									array(
										'page' => 'aboutus',
										'display_text' => "About Us"
									),
									array(
										'page' => 'staff',
										'display_text' => "Coaches"
									),
									array(
										'page' => 'ourfencers',
										'display_text' => "Our Fencers"
									)
								),
								'display_text' => "About"
							),
							array(
								'dropdown_items' => array(
									array(
										'page' => 'overview',
										'display_text' => "Overview"
									),
									array(
										'page' => 'beginnerprograms',
										'display_text' => "Beginner Programs"
									),
									array(
										'page' => 'competitivefoil',
										'display_text' => "Intermediate and Advanced"
									)
								),
								'display_text' => "Programs"
							),
							array(
								'dropdown_items' => array(
									array(
										'page' => 'fees',
										'display_text' => "Fees"
									),
									array(
										'page' => 'schedule',
										'display_text' => "Schedule"
									)
								),
								'display_text'=> "Fees and Schedule"
							),
							array(
								'page' => 'gallery',
								'display_text' => "Gallery"
							),
							array(
								'page' => 'resources',
								'display_text' => "Resources"
							)
						);

						$dropdown_count = 0;

						foreach ($menu_items as $menu_item) {
							if ($menu_item['dropdown_items']) {
								echo "<li class='nav-item dropdown'>";
								echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink$dropdown_count' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$menu_item[display_text]</a>";
								echo "<div class='dropdown-menu border-0 rounded-0' aria-labelledby='navbarDropdownMenuLink$dropdown_count'>";
								foreach ($menu_item['dropdown_items'] as $dropdown_item) {
									echo "<a class='dropdown-item' href='?page=$dropdown_item[page]'>$dropdown_item[display_text]</a>";
								}
								echo "</div></li>";
								$dropdown_count++;
							} else {
								$active = ($active_page == $menu_item['page']) ? 'active' : '';
								echo "<li class='nav-item $active'>";
								echo "<a class='nav-link' href='?page=$menu_item[page]'>$menu_item[display_text]</a>";
								echo "</li>";
							}
						}
					?>
				</ul>
			</div>
		</nav>
		
		<header>
			<a href='?page=home'>
				<div id='background'></div>
				<div id='title'>
					<h1>Metro Tacoma Fencing Club</h1>
					<h2>The Home of Sport Fencing in the South Puget Sound</h2>
				</div>
			</a>
		</header>

		<script>
			$(function() {
				<?php
					$backgrounds = scandir('images/backgrounds/');
					$valid_extensions = array('.png', '.jpeg', '.jpg');

					echo "var background_images = [";
					for ($i = 0; $i < count($backgrounds); $i++) {
						if (in_array(strstr($backgrounds[$i], '.'), $valid_extensions)) {
							echo "'$backgrounds[$i]', ";
						}
					}
					echo "];";
				?>

				var index = Math.floor(Math.random() * background_images.length);

				function newBackground() {
					index++;
					if(index > background_images.length - 1) {
						index = 0;
					}
					$('#background').hide();
					$('#background').css('background-image', 'url(images/backgrounds/' + background_images[index] + ')');
					$('#background').fadeIn(700);
				}

				newBackground();

				setInterval(function() {
					$('#background').fadeOut(700, newBackground)
				}, 7000);
			});
		</script>

		<main id='main' class='container-fluid bg-light'>
			<div class='container'>
				<?php 
					require 'helpers.php';
					require "pages/$active_page.php"; 
				?>
			</div>
		</main>

		<footer class='container-fluid'>
			<div id='sns' class='row'>
				<div class='col'>
					<a class='float-right' href='https://www.facebook.com/Metro-Tacoma-Fencing-Club-179585682221/' target='_blank'>
						<img src='images/thumbnails/facebooklogo.png'>
					</a>
				</div>
				<div class='col'>
					<a class='float-left' href='https://www.instagram.com/metrotacomafencing/' target='_blank'>
						<img src='images/thumbnails/instagramlogo.png'>
					</a>
				</div>
			</div>
			<div id='footer-text'>
				<a href="mailto:info@tacomafencing.com">info@tacomafencing.com</a>
				<a target='_blank' href='https://www.google.com/maps/dir/?api=1&destination=Metro+Tacoma+Fencing+Club&destination_place_id=ChIJe-c1YlEAkVQR-WRb3aiVIWg&travelmode=driving'>8629 S Tacoma Way Lakewood, WA 98499</a>
				<a href="tel:253-584-1986">Phone 253 584 1986</a>
				<a href='?page=schedule'>Monday-Friday <time>4:00 PM</time> - <time>9:00 PM</time>, Saturday <time>8:30 AM</time> - <time>10:30 AM</time></a>
			</div>
		</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>