<?php
	function writeCache($key, $data) {
		$f = fopen("cache/$key", 'w');
		fwrite($f, $data);
		fclose($f);
	}

	function readCache($key) {
		return file_get_contents("cache/$key");
	}

	function isCached($key) {
		if (file_exists("cache/$key")) {
			return time() - filemtime("cache/$key") < 86400;
		}
		return false;
	}

	function makeCards($cards) {
		foreach ($cards as $card) {
			$target = in_array('_blank', $card) ? '_blank' : '';
			echo "<div class='col-lg'><div class='card container'>";
			echo "<h3>$card[title]</h3>";
			echo "<a target='$target' href='$card[url]'><div class='frame-container container'><div class='frame'></div><img src='images/thumbnails/$card[image]'></div></a>";
			echo "<p>$card[description]</p>";
			echo "<a target='$target' href='$card[url]' class='btn btn-dark'>Learn More</a></div></div>";
		}
	}

	$k = 0;
	function makeProfiles($people, $profiles_per_row) {
		global $k;
		$i = 0;
		foreach ($people as $person) {
			if ($i % $profiles_per_row == 0) {
				echo "<div class='row'>";
			}
			echo "<div class='profile clearfix col-lg'>";
			if ($person['quesadilla']) {
				if ($person['burrito']) {
					
				}
				echo 
					"<script>var chalupa$k = document.createElement('audio'); chalupa$k.src = 'images/portraits/taco/$person[burrito]'; enchilada$k = document.createElement('img'); enchilada$k.src = 'images/portraits/taco/$person[quesadilla]'; function tortilla$k(obj) {chalupa$k.play(); obj.src = enchilada$k.src; setTimeout(function() {obj.src = 'images/portraits/$person[image]';}, chalupa$k.duration * 1000);}</script>";
				echo "<img id='profilePhoto$k' src='images/loading.gif' onclick='tortilla$k(this)'>";
			} else {
				echo "<img id='profilePhoto$k' src='images/loading.gif'>";
			}
			echo "<article><p>$person[bio]</p></article>";
			echo "</div>";
			echo "<script>\$(function() {\$.ajax({url: 'images/portraits/$person[image]'}).done(function() {\$('#profilePhoto$k').hide(); \$('#profilePhoto$k').attr('src', 'images/portraits/$person[image]'); \$('#profilePhoto$k').fadeIn(400);});});</script>";
			$i++;
			$k++;
			if ($i % $profiles_per_row == 0) {
				echo "</div>";
			}
		}
		if ($i % $profiles_per_row != 0) {
			echo "</div>";
		}
	}

	function makeTable($table_data) {
		foreach ($table_data as $row) {
			echo "<tr>";
			for ($i = 0; $i < count($row); $i++) {
				if ($i == 0) {
					echo "<th scope='row'>$row[0]</th>";
				} else {
					echo "<td>$row[$i]</th>";
				}
			}
			echo "</tr>";
		}
	}

	function jackrabbit() {
		echo "<h3>Enroll in Classes Online</h3>";
		echo "<div class='container'><div class='row jackrabbit'><div class='col-sm'><a href='https://app3.jackrabbitclass.com/regv2.asp?id=530458' class='btn-dark' target='_blank'>Register</a></div><div class='col-sm'><a href='https://app3.jackrabbitclass.com/portal/ppLogin.asp?id=530458' class='btn-dark' target='_blank'>Member Login</a></div></div></div>";
	}
?>
