<?php 
include_once('../autoload.php');

$api = new API;

if (isset($_GET['chapter'])) {

	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$chapter = $GET['chapter'];
	$book = $GET['book'];

	$response = $api->GetChapter($book, $chapter);
	
	preg_match_all('/([\d]+)/', $response, $verses);
	$verses = count($verses[1]);
	
	for ($i=1; $i < $verses; $i++) { 
		echo "<option value='$i'>$i</option>";
	}
}