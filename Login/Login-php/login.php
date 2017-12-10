<?php
   include 'dbh.php';
    
    $uid = $_POST['username'];
    /*md5 for encryption*/
    $enc = $_POST['password'];
    $enc = md5($enc);
    $sql = "SELECT * FROM Users WHERE username = '$uid' AND password = '$enc'";
    $result = $conn->query($sql);//mysqli_query($conn, $sql);
    
    //check for error
    if(!$row = $result->fetch_assoc()){
        echo "Your username or password incorrect";
    } else {
        header("Location: ../Chat/index.php");
    }
?>