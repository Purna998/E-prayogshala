<?php
include "db.php";
if(isset($_POST['submit'])){
    $title = $_POST['ttl'];
    $desc = $_POST['desc'];
    $status = 1;
    $insert = "INSERT INTO about (title, description, status) VALUES ('$title', '$desc', $status)";
    $query = mysqli_query($con, $insert);
    if($query){
        echo 'Successfully Inserted';
    }
}
?>