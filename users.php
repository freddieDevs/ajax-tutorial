<?php
$conn = mysql_connect('localhost', 'root', <password>, <databasename>); 

$query = 'SELECT * FROM users';

//get result
$result = mysqli_query($conn, $query );

//fetch data
$users = mysqli_fetch_al($result, MYSQLI_ASSOC);
 
echo json_encode($users);