<?php 
include_once('../autoload.php');

$api = new API;

if (isset($_GET['verse'])) {

	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$chapter = $GET['chapter'];
	$book = $GET['book'];
	$verse = $GET['verse'];

	$response = $api->GetVerseOfaChapter($book, $chapter, $verse);

	
	echo $response;
}