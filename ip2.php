<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("https://ip2.app/info.php?ip=".$ip));
$code=$details->code;
$country=$details->country;
$region=$details->region;
$city=$details->city;
$asn=$details->asn;
?>
