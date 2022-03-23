<?php
$con = mysqli_connect('localhost','root');

// if($con){
//     echo "CONNECTION SUCCESSFULLY";
// }else{
//     echo "NO CONNECTION";
// }

mysqli_select_db($con, 'gymuserdata');

$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['message'];


$query = " insert into usermesinfo (name, email,message) 
values ('$name','$email','$message')";

header("refresh: 0; url = http://localhost:8080/PowerZone%20Gym%20websaite%20(Php)/");
//  echo "$query";
mysqli_query($con , $query);
exit;
?>