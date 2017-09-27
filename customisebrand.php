<?php
session_start();
?>
<html lang="en"
   <head>
      <link href="stylee.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
{
   color:grey;
   font-size: 60;
}
      </style>

   </head>
   <body bgcolor="#E6E6FA" >
 <script>
function myFunction2() {
    alert("BrandDeleted!");
}
</script>

      <table class="logsin">
         <tr>
             <td>
            <div id="top-navigation">
                Welcome <a href="#"><font color="#943126"><?php echo $_SESSION["username"];?></font></a>
        <span>|</span>
        <a href="#">Help</a>
        <span>|</span>
        <a href="#">Profile Settings</a>
        <span>|</span>
        <a href="index.html" target="_top">Log out</a>
      </div>
         </td>
      </tr>
</table>
<div class="container">
 <h2><b><FONT COLOR="grey">BrandPage</FONT></b></h2><hr>
    <PRE><b>WELCOME BRAND  !</b><a href="index.html"><b><u>LOG OUT</u></b></a></PRE>
      <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">ADD CAMPAIGN</a></li>
      </ul>

  <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3 align="center"><b><u><font color="grey">management</font></u></b></h3>
          <p><table align="center" background="images\blacktrans.png">
                           <tr>  <td><form name="input" action="addcamp.php" method="POST">
                               <br><font color="darkgrey"><h4><b>ENTER THE BRAND NAME</b></h4></font></td>
                               <td><br><input type="submit" value="  ADD     "></form></td></tr>

                          <tr>  <td><form name="input" action="deleteuser.php" method="get" onsubmit="myFunction2()">
<br><font color="darkgrey"><h4>RemoveBrand  &nbsp;&nbsp;&nbsp;&nbsp;</font><input type="text" name="id" size="10" placeholder="remove by Id" style="background-color:LightGreen"></h4></td>
                                             <td><br>&nbsp;<input type="submit" value="DELETE "></form>
</td></tr>
     <tr><td><form name="input" action="display.php" method="get"><br><br><br><font color="darkgrey"><h4><b>VIEW BRANDS AADED </b></h4></font></td>

                                <td><br><br><br><input type="submit" value="VIEW ENTERED "></form></td>
                            </tr>      
                      </table></p>
</div>
</div>
</head>
</html>
