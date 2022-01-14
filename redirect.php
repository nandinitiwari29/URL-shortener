<?php
$url = $_GET['url'];
$decode_url = explode('/', $url);
$lastElement = count($decode_url) - 1;
$decoded_uri = base64_decode($decode_url[$lastElement]);
$decode_url[$lastElement] = $decoded_uri;
$redirect_url = implode('/', $decode_url);
header ( 'Location: ' . $redirect_url);

 ?>