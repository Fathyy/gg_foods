<?php
include('db_connect.php');

if (isset($_POST['King']))
{
$name = $_POST['joe'];
$email = $_POST['Lily'];
$phone = $_POST['John'];
$dob = $_POST['sara'];
$address = $_POST['james'];

echo "Passed data <br> $name,
 $email <br>, 
 $phone";


 // validation
// insertion query
$query = " INSERT INTO users(name, email, phone, dob, address)
VALUES ('$name', '$email', '$phone', '$dob', '$address')";
}

// executing the query
$query_run = mysqli_query($connection, $query);