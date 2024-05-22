

<?php
//change mysqli_connect(host_name,username, password); 
$connection = new mysqli('localhost','root','','database',3306);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


?>
