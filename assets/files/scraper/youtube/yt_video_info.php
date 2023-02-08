<?php
function video_data($vid_link) {

$html = file_get_contents("https://10downloader.com/download?v=$vid_link");
$doc = new DOMDocument();
@$doc->loadHTML($html);

$xpath = new DOMXPath($doc);

$img_src = $xpath->evaluate("string(//div[@class='info col-md-4']/img/@src)");
$title = $xpath->evaluate("string(//div[@class='info col-md-4']/span[@class='title'])");
$duration = trim($xpath->evaluate("string(//div[@class='info col-md-4']/div[@class='duration'])"));

$duration = preg_replace('/^Duration:\s+/', '', $duration);

$data = array(
  'thumbnail' => $img_src,
  'title' => $title,
  'duration' => $duration,
);

  return $data;
}