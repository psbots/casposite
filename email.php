<html>
<body>
​
<?php
echo $_POST['email'];
if (!empty($_POST)){
​
$servername = "127.5.71.130:24595";
$username = "adminuECylHY";
$password = "FuJ8MUiwGikn";
$dbname = "email";
​
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: ". $conn->connect_error);
echo "error connecting db";
}
​
$sql = "INSERT INTO email_id (email) VALUES ('".$_POST["email_name"]."')";
​
​
if ($conn->query($sql) === TRUE) {
echo '"New record created successfully"';
} else {
echo '"Error:"';
}
​
$conn->close();
}
?>
​
</body>
</html>
