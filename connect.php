<?php
   $name = $_POST['name'];
   $email = $_POST['email'];
   $Phoneno = $_POST['Phoneno']; 
   $project = $_POST['project'];
   $message = $_POST['message'];

   $conn = new mysqli('localhost', 'root', '', 'contact'); 
   if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into contact(name, email, Phoneno, project, message) values(?,?,?,?,?)"); 
    $stmt->bind_param("sssss", $name, $email, $Phoneno, $project, $message); 
    $stmt->execute();
    echo "contact successfully.....";
    $stmt->close();
    $conn->close();
     }
?>