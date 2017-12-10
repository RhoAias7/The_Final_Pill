<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="refresh" content="2">
        
    </head>
    <body>
        <?php 
        //this is where the message from the server will go!
        //connect to the database
        $conn = mysqli_connect("127.0.0.1", "mctvltd", "", "IM");
        //or die
        if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
        } 
        
        //query the database
        $query = "SELECT * FROM messages";
        
        if($result = mysqli_query($conn, $query)){
            
            while ($row = mysqli_fetch_row($result)){
                echo '</br>'.$row['3'].": ".$row['1'].'</br>';
            }
            mysqli_free_result($result);
        }
        
        ?>
    </body>
</html>