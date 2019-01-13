<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="indah"; // Database name
$name	= htmlentities(mysql_real_escape_string($_POST['name']));
$email	= htmlentities(mysql_real_escape_string($_POST['email']));
$comment	= htmlentities(mysql_real_escape_string($_POST['comment']));
$datetime	= date("y-m-d h:i:s");//date time

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server ");
mysql_select_db("$db_name")or die("cannot select DB");

$result=mysql_query("INSERT INTO bukutamu VALUES(NULL , '$name', '$email', '$comment', '$datetime')");

//check if query successful
if($result){
echo "Successful";
echo "<BR>";}

else {
echo "ERROR";
}

mysql_close();
?>
