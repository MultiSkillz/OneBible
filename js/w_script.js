
$(document).ready(function(){

	let book_type = $('#book_type').val();
	let book = $('#book').val();
	let chapter = $('#chapter').val();
	let verse = $('#verse_from').val();

	getVerseOfaChapter(book, chapter, verse);
	getChapters(book_type, book);
	getVersesFrom(book, chapter);

	$('#book_type').change(function(){
		let book_type = $('#book_type').val();
		let chapter = $('#chapter').val();

		$.get('queries/get_books.php?book_type='+book_type, function(data){
			$('#book').html(data);
			let book = $('#book').val();
			getChapters(book_type, book);
			
		});

	});

	$('#book').change(function(){
		let book_type = $('#book_type').val();
		let book = $('#book').val();
		let chapter = $('#chapter').val();
		getChapters(book_type, book);

	});

	$('#chapter').change(function(){
		let book = $('#book').val();
		let chapter = $('#chapter').val();
		getBookChapter(book, chapter);
		getVersesFrom(book, chapter);

	});

	$('#verse_from').change(function(){
		let book = $('#book').val();
		let chapter = $('#chapter').val();
		let verse = this.value;
		
		getVerseOfaChapter(book, chapter, verse);
		getVerseTo(book, chapter, verse);
	});

	$('#verse_to').change(function(){
		let book = $('#book').val();
		let chapter = $('#chapter').val();
		let verseFrom = $('#verse_from').val();
		let verseTo = this.value;

		getVerses(book, chapter, verseFrom, verseTo);
		
	});

	function getVersesFrom(book, chapter){
		if (chapter == null) {
			chapter = 1;
		}else{
			chapter = chapter;
		}
		$.get('queries/getVerseFrom.php?chapter='+chapter+'&book='+book, function(data){
			$('#verse_from').html(data);
		
		});
	}

	function getVerseTo(book, chapter, verseFrom){
		
		$.get('queries/getVerseTo.php?chapter='+chapter+'&book='+book+'&verseFrom='+verseFrom, function(data){
			$('#verse_to').html(data);
			
		});
	}

	function getChapters(book_type, book){

		$.get('queries/get_chapters.php?book_type='+book_type+'&book='+book, function(data){
			$('#chapter').html(data);
			let chapter = $('#chapter').val();
			getVerseOfaChapter(book, chapter, verse);
			
		});
	}

	function getBookChapter(book, chapter){
		if (chapter == null) {
			chapter = 1;
		}else{
			chapter = chapter;
		}
		$.get('queries/getBookChapter.php?chapter='+chapter+'&book='+book, function(data){
			let res = $.parseJSON(data);
			let head = 'Book of '+ res.Book;
			let title = 'Chapter: '+res.Chapter;
			$('#title').html(title);
			$('#head').html(head);

			$('#paragraph').html(res.Output);
			
		});
	}

	function getVerseOfaChapter(book, chapter, verse) {
		if (chapter == null) {
			chapter = 1;
		}else{
			chapter = chapter;
		}
		if (verse == null) {
			verse = 1;
		}else{
			verse = verse;
		}
		$.get('queries/getVerseOfaChapter.php?chapter='+chapter+'&book='+book+'&verse='+verse, function(data){
			let res = $.parseJSON(data);
			let head = 'Book of '+ res.Book;
			let title = 'Chapter: '+res.Chapter+' Verse: '+res.Verse;
			$('#title').html(title);
			$('#head').html(head);

			$('#paragraph').html(res.Output);
		
		});
	}

	function getVerses(book, chapter, verseFrom, verseTo){
		$.get('queries/getVerses.php?chapter='+chapter+'&book='+book+'&verseFrom='+verseFrom+'&verseTo='+verseTo, function(data){
			let res = $.parseJSON(data);
			let head = 'Book of '+ res.Book;
			let title = 'Chapter: '+res.Chapter+' Verse: '+res.VerseFrom+'-'+res.VerseTo;
			$('#title').html(title);
			$('#head').html(head);

			$('#paragraph').html(res.Output);
			
		});
	}

})