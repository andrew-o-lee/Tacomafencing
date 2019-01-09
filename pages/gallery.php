
<h2>MTFC Instagram Photo Gallery</h2>

<hr>

<?php
	$access_token = '3277963626.e6edf2e.cc903f5bd8d34563a085daa6aec7ce9f';
	
	if (!isCached('instagram')) {
		writeCache('instagram', file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=$access_token"));
	}

	$instagram_data = json_decode(readCache('instagram'), true);
	
	echo "<div class='gallery'>";
	for ($i = 0; $i < 18; $i++) {
		if ($i % 3 == 0) {
			echo "<div class='row'>";
		}
		$photo = $instagram_data['data'][$i]['images']['standard_resolution']['url'];
		$link = $instagram_data['data'][$i]['link'];
		echo "<div class='col-md frame'><a href='$link' target='_blank'><div id='galleryPhoto$i' class='photo'></div><div class='label'>View on Instagram</div></a></div>";
		echo "<script>\$(function() {\$.ajax({url: '$photo'}).done(function() {\$('#galleryPhoto$i').hide(); \$('#galleryPhoto$i').css('background-image', 'url($photo)'); \$('#galleryPhoto$i').fadeIn(400);});});</script>";
		if ($i % 3 == 2) {
			echo "</div>";
		}
	}
	echo "</div>";
?>