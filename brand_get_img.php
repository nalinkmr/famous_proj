<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database="campaign";
$table="addcamp";

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo "success";
}
$who=$_POST['who'];
echo $who;
/*
$sql="select image from $table where who='$who'";

$query= mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($query));
{
if($query)
{
  $row=mysqli_fetch_array($query);
  $type="content-type: ".$row['imagetype'];
  header($type);
  echo $row['image'];
}
else
{
  echo "cannt print the images";
}
}
 */
?>
