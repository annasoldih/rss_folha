
<?php

require('config/format_functions.php');
require('config/url.php');

$feed = new DOMDocument();
$feed->load($RSS_URL);
$items = $feed->getElementsByTagName('channel')->item(0)->getElementsByTagName('item');

$json['news'] = array();
$i = 0;

foreach ($items as $item) {
  $all = $item->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
  $title = $item->getElementsByTagName('title')->item(0)->nodeValue;
  $description = $item->getElementsByTagName('description')->item(0)->firstChild->nodeValue;
  $description = formatDescription(replaceRedir(formatTextXML(formatDescription($description))));
  $pubDate = $item->getElementsByTagName('pubDate')->item(0)->firstChild->nodeValue;

  preg_match_all("~[a-z]+://\S+~", formatDescription(formatTextXML($all)), $links, PREG_PATTERN_ORDER);

  foreach ($links as $oneLink) {
    $description = str_replace($oneLink, "", $description);
  }

  $json['news'][$i]['published'] = $pubDate;
  $json['news'][$i]['title'] = $title;
  $json['news'][$i]['description'] = $description;
  $json['news'][$i]['links'] = $links[0];
  $i++;
}

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");

http_response_code(200);
echo json_encode($json);

?>