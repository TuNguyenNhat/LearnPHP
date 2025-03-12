<?php 
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "test";
    
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(!$conn)
    {
        die("Ket noi khong thanh cong: " . mysqli_connect_errno());
    }
?>