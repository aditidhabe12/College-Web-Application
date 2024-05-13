<?php

// class contact{
//     private $host = "localhost";
//     private $root = "root";
//     private $pass = "";
//     private $db = "contact";
//     public $mysqli;


//     public function __construct()
//     {
//         return $this->mysqli= new mysqli($this->host, $this->pass,$this->db);
//     }

//     public function contact_form($data){
//         $fname= $data['name'];
//         $Email = $data['email'];
//         $Number = $data['number'];
//         $Message = $data['message'];
//         $q = "insert into contact set name='$fname', email = '$Email', number = '$Number', message = '$Message'";
//         return $this->mysqli->query($q);
//     }
// }

    $host = "localhost";
    $root = "root";
    $pass = "";
    $db = "contact";

    $con = mysqli_connect($host,$root,$pass,$db);


    if(!$con){
        echo "Not Connected";
    }
   
    $fname= $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Message = $_POST['message'];

    $sql = "INSERT INTO `contact_form`(`name`, `email`, `number`, `message`) VALUES ('$fname','$Email','$Number','$Message')";

    $result = mysqli_query($con, $sql);

    if($result){
        echo "Data Submitted";
    }
    else{
        echo "Query failed..";
    }

    header("location:contact_us.php?note=success");

?>