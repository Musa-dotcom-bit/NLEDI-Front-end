<?php
include "config.php";
$password = password_hash("123456789", PASSWORD_DEFAULT);
$email = "example@example.com";
$username = secure($_POST['name']); 
$type=1;
$status =1;
$sql = "INSERT INTO users (userName, Email, Password, type, status)
		VALUES('".$username."', '".$email."', '".$password."', '".$type."', '".$status."' )";
		if(!mysqli_query($db, $sql)){
			echo mysqli_error($db);
		}else{
			echo "successfully Inserted";
		}

function secure($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}	
?>