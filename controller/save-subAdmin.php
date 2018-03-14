<?php


$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$country = $_POST['country'];
$nic = $_POST['nic'];
$email = $_POST['email'];
$companyName = $_POST['companyName'];

$connection = mysqli_connect("localhost", "root","1234","ecommerce","3306");

if(!$connection){

    echo "Something went wrong with the connection";
    die;

}else{

    $result = mysqli_query($connection, "insert into subAdmin VALUES ('$id','$name','$address','$country','$nic','$email','$companyName')");

    if (mysqli_affected_rows($connection) > 0) {

        echo " Sub Admin has been saved successfully";

       window.location.replace("../../pages/ui/addSubAdmin.php");
    }else{

        echo "Failed to save the Sub Admin";

    }

    mysqli_close($connection);

}