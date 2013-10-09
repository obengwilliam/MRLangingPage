<?php

// error config
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

//default return response
$success = 0;

if(!isset($_POST['early_bird_email']) && !isset($_POST['early_bird_name'])){
	echo json_encode(array("success"=>0));
}
else{
// Make a MySQL Connection
$name = trim($_POST['early_bird_name']);
$email = trim($_POST['early_bird_email']);

mysql_connect("localhost", "root","") or die(mysql_error());
mysql_select_db("mallriot") or die(mysql_error());

// Insert a row of information into the table "example"
if (mysql_query("INSERT INTO early_birds (`name`,`email`) VALUES ('$name','$email') ") ){
	$success = 1;
} 


return json_encode(array('success'=>$success));

}

?>

