<?php

// gets the large version of a youtube image

function youtube_image($id) {
	$image = "http://img.youtube.com/vi/$id/0.jpg";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $image);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$str = curl_exec($ch);
	curl_close($ch);
	header("Content-type: image/jpeg");
	header("Content-Length: " . strlen($str));
	return $str;
}

	$video = $_GET['v'];
	echo youtube_image($video);

?>
