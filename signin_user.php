<?php

include('../config/constaints.php');
if (isset($_POST['submit'])) {
    echo 'yes data is submited';
    //get all the details from form

    $first_name = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $Tpno = $_POST['contact'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    if($password == $re_password)
    {
        $c_password=$password;
    }
    else
    {
        echo "wrong password";
    }

    $sql1 = "INSERT INTO tbl_user(f_name,l_name,gender,tp_no,address,email,password) VALUES ('$first_name','$lastname','$gender','$Tpno','$address','$email','$c_password');";

    $res1 = mysqli_query($conn,$sql1) or die(mysqli_error($conn));

    if ($res1 == true) {
        $_SESSION['create'] = "Create Succesfully";
        header('location:' . SITEURL . 'login.php');
    } else {
        $_SESSION['add'] = "Failed to Create";
        header('location:' . SITEURL . 'register.php');
    }
}
?>