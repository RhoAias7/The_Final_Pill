<!DOCTYPE html>
<html>
    <head>
        <title>Have a good one!</title>
    </head>
    
    <?php
    session_start();
    ?>
    
    <body align="center" valign="middle">
        <form action="chatroom.php" method="POST">
            <h1>Please enter your prefered name below:</h1></br>
            <input type="text" name="username"/>
            <input type="submit" value="Enter"/>
        </form>
    </body>
</html>