<?php
$server = "sql102.epizy.com" ;
$username = "epiz_31634265";
$password= "ade0uq4rdci";
$dbname = "epiz_31634265_gymuserdata";

$con = mysqli_connect($server ,$username, $password, $dbname);

// $con = mysqli_connect('localhost','root');

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

header("refresh: 0; url = http://powerzoneofficialgym.epizy.com/");
//  echo "$query";
mysqli_query($con , $query);
exit;
?>