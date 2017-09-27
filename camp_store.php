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
  echo "yes";
}
$session=$_SESSION["username"];
$name=$_POST['pname'];
$description=$_POST['des'];
echo $name;
echo $description;
$photo= addslashes(file_get_contents($_FILES['pphoto']['tmp_name']));
$image =getimagesize($_FILES['pphoto']['tmp_name']);
$imagetype= $image['mime'];
$sql="INSERT INTO $table (name,description,image,imagetype,who) VALUES('$name','$description','$image','$imagetype','$session')";

$query=mysqli_query($conn,$sql);
if($query)
{
  header("location:customisebrand.php");
}
else
{
  echo mysql_error();
}
?>
