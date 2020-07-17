<?php 
include_once('../autoload.php');

$api = new API;

if (isset($_GET['chapter'])) {

	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$chapter = $GET['chapter'];
	$book = $GET['book'];

	$response = $api->GetChapter($book, $chapter);
	
	echo $response;
}