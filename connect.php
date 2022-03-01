<?php
 $Name = $_POST['name'];
 $Div = $_POST['div'];
 $Email = $_POST['email'];

 //Database Connection

 $conn = New mysqli('localhost','root','','msa');
 if($conn->connect_error){
   die('Connection Failed:'.$conn->connect_error);
 }else{
      $stmt=$conn->prepare("insert into login(Name,Division,Email)
          values(?,?,?)");
      $stmt->bind_param("sss",$Name,$Div,$Email);
      $stmt->execute();
      echo "contect Successfully...";
      $stmt->close();
      $conn->close();
}
?>
