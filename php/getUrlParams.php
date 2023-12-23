<?php
$url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$url_components = parse_url($url);
if (isset($url_components['query'])) {
  parse_str($url_components['query'], $params);
}
