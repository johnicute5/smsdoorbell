<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';


 $username = $_POST['username'];
 $password = $_POST['password'];
 $email = $_POST['email'];
 $Check_sql = "select * from users where username='$username'";
 $check = mysqli_fetch_array(mysqli_query($con,$Check_sql));
 
 if(isset($check)){

 echo 'username Already Exist';

 }
else{ 
$Sql_Query = "insert into users(username,password,email)values ('$username','$password','$email')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'Registration Successfully';
}
else
{
 echo 'Something went wrong';
 }}
}
?>