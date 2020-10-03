<?php 

/**
 * 
 */
class API
{

	private $key = "YOUR RAPIDAPI KEY";
	
	function __construct()
	{
		
	}

	public function curlGetRequest($url)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"x-rapidapi-host: ajith-holy-bible.p.rapidapi.com",
				"x-rapidapi-key: $this->key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}

	public function GetBooks()
	{
		$url = "https://ajith-holy-bible.p.rapidapi.com/GetBooks";
		$this->curlGetRequest($url);
	}

	public function GetChapter($book, $chapter)
	{
		$book = urlencode($book);
		$url = "https://ajith-holy-bible.p.rapidapi.com/GetChapter?Book=$book&chapter=$chapter&Output=th";
		$this->curlGetRequest($url);
	}

	public function GetVerses($book, $chapter, $VerseFrom, $VerseTo)
	{
		$book = urlencode($book);
		$url = "https://ajith-holy-bible.p.rapidapi.com/GetVerses?Book=$book&chapter=$chapter&VerseFrom=$VerseFrom&VerseTo=$VerseTo&Output=th";
		$this->curlGetRequest($url);
	}

	public function GetVerseOfaChapter($book, $chapter, $verse)
	{
		$book = urlencode($book);
		$url = "https://ajith-holy-bible.p.rapidapi.com/GetVerseOfaChapter?Verse=$verse&Book=$book&chapter=$chapter&Output=th";
		$this->curlGetRequest($url);
		
	}
}