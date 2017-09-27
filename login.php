<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database="campaign";
$table="customer";

$conn = mysqli_connect($servername, $username, $password,$database);
/*
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "success";
}
 */
$myname = $_POST['username'];
$mypassword = $_POST['password'];
//echo $myname;
//echo $mypassword;
//$myusername=stripslashes($myusername);
//$mypassword=stripslashes($mypassword);
$sql = "SELECT * FROM $table WHERE brandname='$myname' and mypassword='$mypassword'";
$query = mysqli_query($conn,$sql);
/*
while($row=mysqli_fetch_array($query))
{
  $bname=$row['brandname'];
  $mname=$row['managername'];
  $email=$row['myemail'];
  $phone=$row['myphone'];
}
//echo $email;
//echo $phone;
//*/
$count = mysqli_num_rows($query);
while($row=mysqli_fetch_array($query))
{
  $uname=$row[1];
}
if($count==0)
{
  header('Location: sign.html');
}
else
{
  $_SESSION["username"]= $myname;
  header('Location:  customisebrand.php');
}
?> 
