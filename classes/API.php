<?php 

/**
 * 
 */
class API
{

	private $key = "7e250c91bemshd4a55b4fe2b8ed5p12c340jsnf1ca0759b96f";
	
	function __construct()
	{
		
	}

	public function GetBooks()
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ajith-holy-bible.p.rapidapi.com/GetBooks",
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
			echo "cURL Error #:" . $err;
		} else {
			echo $response;
		}
	}

	public function GetChapter($book, $chapter)
	{
		$book = urlencode($book);
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ajith-holy-bible.p.rapidapi.com/GetChapter?Book=$book&chapter=$chapter&Output=th",
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

	public function GetVerses($book, $chapter, $VerseFrom, $VerseTo)
	{
		$book = urlencode($book);
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ajith-holy-bible.p.rapidapi.com/GetVerses?Book=$book&chapter=$chapter&VerseFrom=$VerseFrom&VerseTo=$VerseTo&Output=th",
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

	public function GetVerseOfaChapter($book, $chapter, $verse)
	{
		$book = urlencode($book);
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://ajith-holy-bible.p.rapidapi.com/GetVerseOfaChapter?Verse=$verse&Book=$book&chapter=$chapter&Output=th",
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
}