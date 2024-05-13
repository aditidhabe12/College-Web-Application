<?php

$name  = $_POST['name'];
$new_name = $_POST['new_name'];
$Email  = $_POST['email'];
$address  = $_POST['address'];
$mob_number  = $_POST['number'];
$wh_number  = $_POST['wh_number'];
$year  = $_POST['year'];
$org_name  = $_POST['org_name'];
$profile  = $_POST['profile'];
$message  = $_POST['message'];


$conn = new mysqli('localhost','root','','alumni');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into alumni_form(name,new_name,email,address,mob_number,wh_number,year,org_name,profile,message)
    values(?,?,?,?,?,?,?,?,?,?) ");
    $stmt->bind_param("ssssiiisss",$name,$new_name,$Email,$address ,$mob_number ,$wh_number,$year ,$org_name ,$profile,$message  );
    $stmt->execute();
    echo "Registration has been successfully..";
    $stmt->close();
    $conn->close();
}
?>