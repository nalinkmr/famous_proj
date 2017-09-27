<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database="campaign";

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "success";
}
$id=$_GET['id'];
echo $id;
$sql="DELETE FROM addcamp
  WHERE ID=$id";
$result = mysqli_query($conn,$sql);
if($result)
{
  header("location:customisebrand.php");
}
else
{
  echo "error deleting record:";
}
?>
