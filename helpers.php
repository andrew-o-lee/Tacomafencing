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
			return time() - filemtime("cache/$key") < 3600;
		}
		return false;
	}

	function makeCards($cards) {
		foreach ($cards as $card) {
			echo "<div class='col-lg'><div class='card container'>";
			echo "<h3>$card[title]</h3>";
			echo "<a href='$card[url]'><div class='frame-container container'><div class='frame'></div><img src='images/thumbnails/$card[image]'></div></a>";
			echo "<p>$card[description]</p>";
			echo "<a href='$card[url]' class='btn btn-dark'>Learn More</a></div></div>";
		}
	}

	function makeProfiles($people) {
		$gordita = 0;
		foreach ($people as $person) {
			echo "<div class='profile clearfix'>";
			if ($person['quesadilla']) {
				echo 
					"<script>var chalupa$gordita = document.createElement('audio'); chalupa$gordita.src = 'images/portraits/taco/$person[burrito]'; enchilada$gordita = document.createElement('img'); enchilada$gordita.src = 'images/portraits/taco/$person[quesadilla]'; function tortilla$gordita(obj) {chalupa$gordita.play(); obj.src = enchilada$gordita.src; setTimeout(function() {obj.src = 'images/portraits/$person[image]';}, chalupa$gordita.duration * 1000);}</script>";
				echo "<img src='images/portraits/$person[image]' onclick='tortilla$gordita(this)'>";
				$gordita++;
			} else {
				echo "<img src='images/portraits/$person[image]'>";
			}
			echo "<article><p>$person[bio]</p></article>";
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
