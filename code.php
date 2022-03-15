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


// executing the query
$query_run = mysqli_query($connection, $query);

// Redirecting the users

header('Location: index.php');
}



if (isset($_POST['nick']))
{
    $employee_id = $_POST['$users_id'];   
    $name = $_POST['joe'];
    $email = $_POST['Lily'];
    $phone = $_POST['John'];
    $dob = $_POST['sara'];
    $address = $_POST['james'];
    
    // updating query
    // $query = "UPDATE users SET name = $name, WHERE id =4";\
    $query= "UPDATE users SET name= '$name', email = '$email', phone = '$phone', WHERE id = $users_id";

    // executing the query

    $query_run = mysqli_query($connection, $query);

    header('Location: index.php');

}