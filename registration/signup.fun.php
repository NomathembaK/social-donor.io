<?php

 include_once "connection.php";


 if(isset($_POST["submit"])){
     
    $profile = $_POST["profile"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];    
    $psw = $_POST["psw"];
    $psw_repeat = $_POST["psw_repeat"];
    $gender = $_POST["gender"];  
    
    
    $sql  = "INSERT INTO `donors`(`name`,`mobile`,`email`,`password`,`repeat password`,`gender`,`profile`) VALUES 
     ('$profile','$name','$mobile','$email','$psw','$psw_repeat','$gender')";


    $results = mysqli_query($conn,$sql);


    if($results > 0){
       echo "infortion is in";
    }else{
      echo "infortion is not inserted";
    }
 }