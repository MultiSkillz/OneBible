<?php 
include_once('../autoload.php');

$db = new Database;
$con = $db->connect();

$bible = new Bible($con);

if (isset($_GET['book_type'])) {
	$book = filter_var($_GET['book_type'], FILTER_SANITIZE_STRING);

	if ($book == 'old_testament') {
		$books = $bible->GetOldBooks()->fetchAll();

		foreach ($books as $b) {
			$book = $b['books'];
			echo "<option value='$book'>$book</option>";
		}
	}elseif($book == 'new_testament'){
		$books = $bible->GetNewBooks()->fetchAll();

		foreach ($books as $b) {
			$book = $b['n_book'];
			echo "<option value='$book'>$book</option>";
		}
	}else{
		//remain silent
	}
}

if (isset($_GET['book'])) {
	# code...
}