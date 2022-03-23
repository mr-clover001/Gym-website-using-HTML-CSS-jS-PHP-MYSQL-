<?php
$con = mysqli_connect('localhost','root');

// if($con){
//     echo "CONNECTION SUCCESSFULLY";
// }else{
//     echo "NO CONNECTION";
// }

mysqli_select_db($con, 'gymuserdata');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$query = " insert into userinfodata (fname, lname, email, password, address, city, state) 
values ('$firstname','$lastname','$email','$password','$address','$city','$state')";

header("refresh: 0; url = http://localhost:8080/PowerZone%20Gym%20websaite%20(Php)/");
//  echo "$query";
mysqli_query($con , $query);
exit;

?>