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
$reason = $_POST['reason'];
$pnumber = $_POST['Pnumber'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$query = " insert into usermember (fname, lname, reason, pno, address, city, state) 
values ('$firstname','$lastname','$reason','$pnumber','$address','$city','$state')";

header("refresh: 0; url = http://localhost:8080/PowerZone%20Gym%20websaite%20(Php)/index.php");
//  echo "$query";
mysqli_query($con , $query);
exit;

?>