
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            $client_id = "AKULvSszVhYOGHtLFfr6rLrGbt5kenomxCH3iVgb";
            $secret = "FwCkIoouR4vHiy7AshSIu6fwOjepa91dXbdvVSLavZg0Oev0UY";
            $url = "https://api.everypixel.com/oauth/token?client_id=$client_id&client_secret=$secret&grant_type=client_credentials";
            
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $data = curl_exec($curl);
            curl_close($curl);
            
            $json = json_decode($data);
            $accessTok = $json->access_token;
            

            
            
        ?>
        
    </body>
</html>