
<?php

include 'redirect.php';


    //if($_GET['img']) {
    $authorization = "Authorization: Bearer $accessTok";
    $userImg = $_POST['img'];
    // $userImg = "http://www.davidbowie.com/sites/g/files/g2000002506/f/styles/large/public/201302/1973_sane_cvr_fix_800sq.jpg";
    $url = "https://api.everypixel.com/v1/keywords?url=$userImg?itok=h-TUpMU9&num_keywords=10";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array($authorization));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($curl);
    curl_close($curl);
    
    $json = json_decode($data);

    // echos the first indexes
    $valueNo1 = $json->keywords[0]->keyword."</br>";
    $valueNo1Score = round($json->keywords[0]->score*100)."%";

    $valueNo2 = $json->keywords[1]->keyword."</br>";
    $valueNo2Score = round($json->keywords[1]->score*100)."%";
    
    $valueNo3 = $json->keywords[2]->keyword."</br>";
    $valueNo3Score = round($json->keywords[2]->score*100)."%";

    $valueNo4 = $json->keywords[3]->keyword."</br>";
    $valueNo4Score = round($json->keywords[3]->score*100)."%";
    
    $valueNo5 = $json->keywords[4]->keyword."</br>";
    $valueNo5Score = round($json->keywords[4]->score*100)."%";

    $valueNo6 = $json->keywords[5]->keyword."</br>";
    $valueNo6Score = round($json->keywords[5]->score*100)."%";
    
    $valueNo7 = $json->keywords[6]->keyword."</br>";
    $valueNo7Score = round($json->keywords[6]->score*100)."%";

    $valueNo8 = $json->keywords[7]->keyword."</br>";
    $valueNo8Score = round($json->keywords[7]->score*100)."%";
    
    $valueNo9 = $json->keywords[8]->keyword."</br>";
    $valueNo9Score = round($json->keywords[8]->score*100)."%";

    $valueNo10 = $json->keywords[9]->keyword."</br>";
    $valueNo10Score = round($json->keywords[9]->score*100)."%";




    ?>