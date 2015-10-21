<?php
$connection = mysql_connect("https://php-caspowebsite.rhcloud.com/phpmyadmin", "adminuECylHY", " FuJ8MUiwGikn");
$db = mysql_select_db("email", $connection);
if(isset($_GET['email'])){

$email = $_GET['email'];

if($email !=''){
//Insert Query of SQL
$query = mysql_query("insert into email_id(email) values ('$email')");
echo = "<p>Success</br></p>";
}
else{
echo "<p>Insertion Failed <br/></p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>
