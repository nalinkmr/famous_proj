<html>
<head>
    <title>RESULTS</title>
    </head>
    <body bgcolor="grey">
        <font color="white">
            <a href="customisebrand.php"><font color="yellow">home</font></a>
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
  //echo "success";
}
$curr=$_SESSION["username"];
//echo $who;
$sql="select * from $table where who='$curr'";

$query= mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{

  echo "<br>";
  echo "<br>";
  echo '<span style="color:#AFA;text-align:center;">ID :</span>';
  echo $row['ID'];
  echo "<br>";
echo '<span style="color:#AFA;text-align:center;">BrandName :</span>';
  echo $row['name'];
  echo "<br>";
echo '<span style="color:#AFA;text-align:center;">Brand Descrip :</span>';
  echo $row['description'];
  echo "<br>";
  echo '<span style="color:#AFA;text-align:center;">Prod looks like :</span>';
  echo "<br>";
  echo "
  <img src='brand_get_img.php?who=".$row['who']."' width='250' height='250'/>
    ";
}
?>
        </font>
    </body>
</html> 
