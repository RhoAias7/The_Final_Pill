<?php
include 'redirect.php';
include 'keywords.php';


$authorization = "Authorization: Bearer $accessTok";
// $userImg = "http://www.davidbowie.com/sites/g/files/g2000002506/f/styles/large/public/201302/1973_sane_cvr_fix_800sq.jpg";
$url = "https://api.everypixel.com/v1/quality?url=$userImg?itok=h-TUpMU9";

$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, array($authorization));
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($curl);
curl_close($curl);

$json = json_decode($data);

    $how80s = round($json->quality->score*100)."%";
?>