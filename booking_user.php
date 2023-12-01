<?php
include('../config/constaints.php');
if (isset($_POST['submit'])) {
    echo 'yes data is submited';
    //get all the details from form

    $date = $_POST['Date'];
    $Time = $_POST['Time'];
    $pick_up = $_POST['pick_up'];
    $drop_off = $_POST['drop_off'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    
    

    $sql2 = "INSERT INTO tbl_order(date,time,pickup,dropoff,email,status) VALUES ('$date','$Time','$pick_up','$drop_off','$email','$status');";

    $res2 = mysqli_query($conn,$sql2) or die(mysqli_error($conn));

    
        if ($res2 == true) {
            $_SESSION['create'] = "Create Succesfully";
            header('location:' . SITEURL . 'after_order_detail.php');
        } else {
            $_SESSION['add'] = "Failed to Create";
            header('location:' . SITEURL . 'user/index.php');
            
        }
    }
?>