<?php 

/**
 * 
 */
class Bible
{

	private $con;
	private $new_test = 'new_books';
	private $old_test = 'old_books';
	
	function __construct($con)
	{
		$this->con = $con;
	}

	public function GetNewBooks()
	{
		$query = $this->con->prepare("SELECT * FROM $this->new_test");
		$query->execute();
		if ($query) {
			return $query;
		}
	}

	public function GetOldBooks()
	{
		$query = $this->con->prepare("SELECT * FROM $this->old_test");
		$query->execute();
		if ($query) {
			return $query;
		}
	}

	public function getChapters($book, $book_type)
	{
		if ($book_type == 'old_testament') {
			$query = $this->con->prepare("SELECT * FROM $this->old_test WHERE books = '$book'");
			$query->execute();
			if ($query) {
				return $query;
			}
		}elseif($book_type == 'new_testament'){
			$query = $this->con->prepare("SELECT * FROM $this->new_test WHERE n_book = '$book'");
			$query->execute();
			if ($query) {
				return $query;
			}
		}else{
			//remain silent
		}
	}

}