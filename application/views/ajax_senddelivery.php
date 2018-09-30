<?php
    $conn = mysqli_connect("localhost","root", "menufi@123", "menufi");
    $sql = "UPDATE orders SET Table_id='0' WHERE Order_id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    }else{
        echo "error";
    }
    

?>