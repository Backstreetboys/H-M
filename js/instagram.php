<?php 

$tag = 'dog';
$client_id = '714957dd4a4e4a94af32175858c041d3';

$url = 'https://api.instagram.com/v1/tags/'.$tag.'/media/recent?client_id='.$client_id;

$photos = json_decode(file_get_contents($url));
echo "Found: " . count($photos->data) . "photos.<hr>";

foreach($photos->data as $photo){
	# generate tag list
	$tags = "";
	foreach($photo->tags as $tag){
		$tag.="#tag";
	}
	echo "<div insta-feed><a href'". $photo->link ."' target='_blank'><img src='". $photo->images->low_resolution->url ."'></a></div>";
}

 ?>