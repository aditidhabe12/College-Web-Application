<?php
  
  if (isset($_POST['submit'])){
    
    $user_name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['message'];

    if(empty($user_name) || empty($Email) || empty($Message)){
      header('location:contact_us.php?error');
    }
    else{

      $to = "aditi.dhabe12@gmail.com";

      if(mail($to,$Message,$Email)){
        header("location:contact_us.php?success");
      }
    }

  }
  
?>