<?php


$firstname  = $_POST['name'];

$Email  = $_POST['email'];

$Subject  = $_POST['subject'];

$Msg  = $_POST['msg'];

$conn = new mysqli('localhost','root','','enquiry');

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into enquiry_form(name,email,subject,message)
    values(?,?,?,?) ");
    $stmt->bind_param("ssss",$firstname,$Email,$Subject,$Msg);
    $stmt->execute();
    // echo "Enquiry has been sent successfully..";
    $stmt->close();
    $conn->close();

   
}


?>