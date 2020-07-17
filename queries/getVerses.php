<?php 
include_once('../autoload.php');

$api = new API;

if (isset($_GET['verseFrom'])) {

	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$chapter = $GET['chapter'];
	$book = $GET['book'];
	$VerseFrom = $GET['verseFrom'];
	$VerseTo = $GET['verseTo'];

	$response = $api->GetVerses($book, $chapter, $VerseFrom, $VerseTo);

	
	echo $response;
}