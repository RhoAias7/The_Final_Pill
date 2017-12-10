<!DOCTYPE html>
<html>
    <head>
        
    </head>
</html>
<?php

   
    session_start();
    if(ISSET($_POST['message'])){
    $conn = mysqli_connect("127.0.0.1", "mctvltd", "", "IM");
        if(!$conn){
        die("Connection failed: ".mysqli_error());
        }
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $username = mysqli_real_escape_string($conn, $_SESSION['username']);
        
        $sql = "INSERT INTO messages (message, username) 
                VALUES ('$message', '$username')";
                
        $result = mysqli_query($conn, $sql);
                
        mysqli_close($conn);
    }    
   
  /*  echo '<html>';
    echo '<head></head><body>';
    */
    echo $_POST['message'];
    
    echo '<form action="newmessage.php" method="POST">';
    echo '<input type="text" name="message" />';
    echo '<input type="submit" name="send" />';
    echo '</form>';
   /*  echo '</body></html>';    */

         
?>