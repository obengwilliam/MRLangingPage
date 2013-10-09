<?php

// error config
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

//default return response
$success = 0;

if(!isset($_POST['feedback_name']) && !isset($_POST['feedback_email']) && !isset($_POST['feedback_message'])){
	echo json_encode(array("success"=>0));
}
else{
// Make a MySQL Connection
$name = trim($_POST['feedback_name']);
$email = trim($_POST['feedback_email']);
$message = trim($_POST['feedback_message']);

mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("mallriot") or die(mysql_error());

// Insert a row of information into the table "example"
if (mysql_query("INSERT INTO feedback (`name`,`email`, `message`) VALUES ('$name','$email', '$message') ") ){
	$success = 1;
} 


return json_encode(array('success'=>$success));

}

?>

