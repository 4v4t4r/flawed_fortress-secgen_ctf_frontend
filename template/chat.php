<?php
  
  if(isset($_POST['team']) && isset($_POST['chat']) && isset($_POST['user'])){
	 $team = $_POST['team'];
	 $chat = $_POST['chat'];	
	 $user = $_POST['user'];
	 include 'connection.php';	
	 $date = new DateTime('now', new DateTimeZone('Europe/London'));
	 $fdate = $date->format('Y-m-d H:i:s');
	 $log_sql = "INSERT INTO chat (DATE, USERNAME, TEAM, CHAT) VALUES ('$fdate','$user','$team','$chat')";
	 if(mysqli_query($connection, $log_sql)){
	 	echo 1;
	 }else{
	 	echo 0;
	 }
  }	 
	 
?>