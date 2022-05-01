<?php

session_start();

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

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$sql = "select * from userinfodata where email='$email' ";
$result = mysqli_query($con ,$sql);
$present=mysqli_num_rows($result);
if($present>0){
    $_SESSION['email_alert']='1';
     header("location:createAccount.php");

}else{

$query = " insert into userinfodata (fname, lname, email, password, address, city, state) 
values ('$firstname','$lastname','$email','$password','$address','$city','$state')";

header("refresh: 0; url = http://powerzoneofficialgym.epizy.com/");
//  echo "$query";
mysqli_query($con , $query);
exit;

}

?>