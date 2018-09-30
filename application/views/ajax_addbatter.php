<?php
    $conn = mysqli_connect("localhost","root", "menufi@123", "menufi");
    $sql = "INSERT INTO batter (name) VALUES ('$name')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    }else{
        echo "error";
    }
    

?>