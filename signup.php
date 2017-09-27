<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database="campaign";
$table="customer";

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}   
$brandname=$_POST['name'];
$managername=$_POST['managername'];
$myemail=$_POST['myemail'];
$myphone=$_POST['myphone'];
$mypassword=$_POST['mypassword'];
/*
echo $brandname;
echo $managername;
echo $myemail;
echo $myphone;
echo $mypassword;
 */
$insert="INSERT INTO $table (brandname,managername,myemail,myphone, mypassword) VALUES ('$brandname','$managername','$myemail','$myphone','$mypassword')";
$query=mysqli_query($conn,$insert);
if($query)
{
    header("location:index.html");
}
else
{
    echo mysql_error();
}


?> 
