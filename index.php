<?php
$text="嬉しい";

//$text= $_GET['text'];//日本語の文章を取得

$req =& new HTTP_Request("'http://ap.mextractr.net/ma9/emotion_analyzer?out=json&apikey=A0E60BB32E84432ACFAA90E3C10C9068CBE916BF&text=$text'.urlencode($text)");

$contents = file_get_contents($req, false);

$xml = simplexml_load_file($contents);

$likedislike= $xml->content->likedislike;
$joysad = $xml->content->joysad;
$angerfear = $xml->content->angerfear;

echo $likedislike;


?>
