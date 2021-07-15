<?php
if(isset($_POST['submit'])){
 
    
$user_first_name=$_POST['first_name'];
$user_last_name=$_POST['last_name'];
$user_email=$_POST['email'];
$user_mobile=$_POST['mobile'];
$user_password=$_POST['pass'];
$user_password=md5($user_password);


$conn=mysqli_connect("localhost","root","","office") or die("Connection Failed!!");
$sql= "INSERT into user (first_name,last_name,email,mobile,pass) VALUES ('{$user_first_name}','{$user_last_name}','{$user_email}','{$user_mobile}','{$user_password}')";
$result=mysqli_query($conn,$sql) or die("Query Unsuccessful");

header("Location: http://localhost/crud_office/admin/login.php");

}

else{
    echo "error";
}


?>