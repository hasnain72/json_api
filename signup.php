<?php
 

include_once('connection.php');
 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
 
      	  $name=$_POST['name'];
      	  $email=$_POST['email'];
      	  $pwd=$_POST['pwd'];

        

         $sql = "INSERT INTO json_api.users (name, email, password)VALUES ('$name', '$email', '$pwd')";
       
         $qur = mysqli_query($conn,$sql);
 			if($qur){
 				$json = array("status" => 1, "msg" => "Done User added!");
 					}
 			else{
 				$json = array("status" => 0, "msg" => "Error adding user!");
 				}
                   
		   @mysqli_close($conn);
 
             
 				header('Content-type: application/json');
			    echo json_encode($json);
         
	}

 ?>

