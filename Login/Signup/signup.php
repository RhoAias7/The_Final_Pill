<?php
    include 'dbh.php';
    
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $uid = $_POST['username'];
    /*md5 for encryption*/
    $enc = $_POST['password'];
    $enc = md5($enc);
    $sql = "INSERT INTO Users (fname, lname, username, password) 
                VALUES ('$first', '$last', '$uid', '$enc')";
                
    $result = $conn->query($sql);//mysqli_query($conn, $sql);
    
    header("Location: ../index.php");
?>