<?php 
include_once("autoload.php");

$db = new Database;
$con = $db->connect();
$bible = new Bible($con);


$query = $bible->GetNewBooks();

$books = $query->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>OneBible</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #2e241a;">
	  <div class="container">
	  	<a class="navbar-brand" href="#" style="color: #fee588;">OneBible</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse right" id="navbarNav">
		
		  </div>
	  </div>
	</nav>

	<div class="container mt-2">
		<div class="row">
			<div class="col-md-12">
				<div class="card mb-3">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="img/bible.jpg" class="card-img" alt="...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">OneBible</h5>
				        <div class="row">
				        	<div class="col-md-6">
				        	<form>
								<div class="form-group">
									<label for="book_type"></label>
									<select name="book_type" id="book_type" class="form-control">
										<option value="new_testament">New Testament</option>
										<option value="old_testament">Old Testament</option>
									</select>
								</div>

								<div class="form-group">
									<label for="book">Book</label>
									<select name="book" id="book" class="form-control">
										<?php 
										foreach ($books as $book) 
										{ ?>

											<option value="<?= $book['n_book'] ?>"><?= $book['n_book'] ?></option>
											
										<?php } ?>
										?>
									</select>
								</div>

								<div class="form-group">
									<label for="chapter">Chapter</label>
									<select name="chapter" id="chapter" class="form-control">
										
									</select>
								</div>

								<div class="form-group">
									<label for="verse_from">Verse From</label>
									<select name="verse_from" id="verse_from" class="form-control">
										
									</select>
								</div>

								<div class="form-group">
									<label for="verse_to">Verse To</label>
									<select name="verse_to" id="verse_to" class="form-control">
										
									</select>
								</div>
							</form>
				        </div>

				        <div class="col-md-6">
				        	<div class="card " style="background-color: #2e241a; border: 1px solid #fee588">
							  <div class="card-header" id="head" style="background-color: #fee588; color: #2e241a;">Read</div>
							  <div class="card-body" style="color: #fee588">
							    <h5 class="card-title" id="title"></h5>
							    <p class="card-text" id="paragraph"></p>
							  </div>
							</div>
				        </div>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			
		</div>
	</div>

	<footer style="background-color: #2e241a; padding: 20px; color: #fee588;">
		<div class="container">
			<span class="" >Dev. by <strong><a href="https://wa.me/2348138775642" style="color: #fee588;">Wisdom Diala</a></strong> (MultiSkillz)</span>  <small class="float-right">Version 1.0.0</small>
		
		</div>
		
	</footer>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/w_script.js"></script>
</body>
</html>