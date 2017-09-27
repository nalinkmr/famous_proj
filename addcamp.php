<html>
    <head>
    <title>Create Campaign</title>
    <style> 
body {
   background:url("images/idea.jpeg"); 
     background-size: 1300px 1080px;
}
    </style>
    </head>
<body>
 <script>
function myFunction() {
    alert("Thankyou for adding brand");
}
</script>
<form method="post"  action="camp_store.php" enctype="multipart/form-data" onsubmit="myFunction()">
   <font size="10" color="white"> Select brand to upload</font>
    <hr>
    <br/>
  <b> Name <input type="text" name="pname"/></b> 
    </br>
    </br>
        <b> Description <input type="text" size="44"  width="10" style="background-color:LightGreen" placeholder="enter description" name="des"/></b> 
<br>
<br>
<br>
<br> <font color="white"> <b> upload_product:<input type="file" name="pphoto"/></b> </font> 

    </br>
    </br>

  <b>  <input type="submit" value="Upload" name="submit"/></b> 
</form>
</body>
</html>
