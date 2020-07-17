<?php 
include_once('../autoload.php');

$db = new Database;
$con = $db->connect();

$bible = new Bible($con);

if (isset($_GET['book'])) {

	$GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);
	$book_type = $GET['book_type'];
	$book = $GET['book'];

	$b = $bible->getChapters($book, $book_type)->fetch(PDO::FETCH_OBJ);

	for ($i=1; $i <= $b->chapters; $i++) { 
		echo "<option value='$i'>$i</option>";
	}
}