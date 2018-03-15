<?php


$itemCode= $_POST['itemCode'];
$itemName = $_POST['itemName'];
$category = $_POST['category'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$description = $_POST['description'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$filename = $_FILES['photo']['name'];
$imagetmp=addslashes (file_get_contents($_FILES['photo']['tmp_name']));
//$filetmp = $_FILES['photo']['tmp_name'];
//$filesize = $_FILES['photo']['size'];

$connection = mysqli_connect("localhost", "root","1234","ecommerce","3306");

if(!$connection){

    echo "Something went wrong with the connection";
    die;

}else{

//    $result = mysqli_query($connection, "insert into item VALUES ('$id','$name','$address','$country','$nic','$email','$companyName')");
//
//    if (mysqli_affected_rows($connection) > 0) {
//
//        echo " Sub Admin has been saved successfully";
//
//        //window.location.replace("../../pages/ui/addSubAdmin.php");
//    }else{
//
//        echo "Failed to save the Sub Admin";
//
//    }
//
//    mysqli_close($connection);

}