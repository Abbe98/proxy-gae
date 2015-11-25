<?php
$endpoint = '';

$url = $endpoint . $_SERVER['REQUEST_URI'];

$content = file_get_contents($url, false, $context);

foreach ($http_response_header as $header) {
  header($header);
}

header('Access-Control-Allow-Origin: *');

echo $content;