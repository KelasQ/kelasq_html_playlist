<?php 
// error_reporting(0);

$apiKey = "AIzaSyCy716dFYGs5RKXvpuQ-3q8g9YmmFJYYP0";

if (isset($_POST['idVideo'])) {
	$id = $_POST['idVideo'];
	$videoApi = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PL1pbjrnSVAQDm5gDRf8TUEvwc7PO3VK_k&key=$apiKey&maxResults=20&videoId='".$id."'"), true);
}

$playlistApi = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId=PL1pbjrnSVAQDm5gDRf8TUEvwc7PO3VK_k&key=$apiKey&maxResults=20"), true);

$channelApi = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=UCATEZDqdVLcSYFtzTv-Mz-Q&key=$apiKey"), true);

$thumbnailChannel = $channelApi['items'][1]['snippet']['thumbnails']['high']['url'];
$titlePlaylist = $channelApi['items'][0]['snippet']['title'];
$titleChannel = $channelApi['items'][0]['snippet']['channelTitle'];