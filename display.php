<?php
 
                  include_once('connection.php');
                       
 			  if($_SERVER["REQUEST_METHOD"] == "GET"){

                       $uid =$_GET['uid'];

		               $getdata = "SELECT * FROM  json_api.users WHERE ID = $uid";
		               
						$qur = $conn->query($getdata);
						 $msg="";
						while($r = mysqli_fetch_assoc($qur)){
						 
						$msg[] = array("name" => $r['name'], "email" => $r['email']);
						}
						$json = $msg;
						 
						header('content-type: application/json');
						echo json_encode($json);
						 
						@mysqli_close($conn);

		 			}

 ?>