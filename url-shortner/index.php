<?php
$url= $_POST["url"];
$url_components = parse_url($url);
error_reporting(E_ERROR|E_PARSE);
$encoding_path = '';
if ($url_components['path']) 
{
    $encoding_path .= $url_components['path'];
}
if ($url_components['query']) 
{
    $encoding_path .= '?' . $url_components['query'];
}
if ($url_components['fragment']) 
{
    $encoding_path .= $url_components['fragment'];
}
$encoded_path = base64_encode($encoding_path);
$encoded_url = $url_components['scheme'] . '://' . $url_components['host'] .'/'. $encoded_path;
//echo "$encoded_url";
echo "<a href='/url-shortner/redirect.php?url=$encoded_url'>$encoded_url</a>";
 ?>