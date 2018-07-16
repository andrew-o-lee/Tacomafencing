
<h2>MTFC Photo Gallery</h2>

<hr>

<?php
	$access_token = '';
	
	if (!isCached('instagram')) {
		writeCache('instagram', file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=$access_token"));
	}

	$instagram_data = json_decode(readCache('instagram'), true);
	
	echo "<div class='gallery'>";
	for ($i = 0; $i < 20; $i++) {
		if ($i % 3 == 0) {
			echo "<div class='row'>";
		}
		$photo = $instagram_data['data'][$i]['images']['standard_resolution']['url'];
		$link = $instagram_data['data'][$i]['link'];
		echo "<div class='col-md'><a href='$link' target='_blank'><div class='image' style='width: 100%; padding-top: 100%; background: black url($photo) center no-repeat; background-size: cover;'></div></a></div>";

		if ($i % 3 == 2) {
			echo "</div>";
		}
	}
	echo "</div>";
?>