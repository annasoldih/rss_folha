<?php

function formatTextXML($fileContents)
{
  $fileContents = str_replace(array("\n", "\r", "\t", '"\"\"', "</a> "), '', $fileContents);
  $fileContents = trim(str_replace('"', "'", $fileContents));
  $fileContents = trim(str_replace('&quot;', "'", $fileContents));
  return $fileContents;
}

function formatDescription($descr) {
  $descr = str_replace(array(" rel='' target=''", "rel='nofollow' ", "<a href=''>", "<a href='", ">", "'Leia mais", "</a"), '', $descr);
  $descr = str_replace(".shtml", ".shtml ", $descr);
  $descr = str_replace(">", " > ", $descr);
  $descr = replaceRedir($descr);
  return $descr;
}

function replaceRedir($url) {
  $url = str_replace('https://redir.folha.com.br/redir/online/mundo/rss091/*', '', $url);
  return $url;
}

?>